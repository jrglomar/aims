<script>
    $(document).ready(function() {

        // GLOBAL VARIABLE
        var APP_URL = "{{ env('APP_URL') }}"
        var API_URL = "{{ env('API_URL') }}"
        var API_TOKEN = localStorage.getItem("API_TOKEN")
        var BASE_API = API_URL + '/user'

        // DATA TABLES FUNCTION
        function dataTable() {


            // FOR FOOTER GENERATE OF INPUT
            $('#dataTable tfoot th').each(function(i) {
                var title = $('#dataTable thead th').eq($(this).index()).text();
                $(this).html(
                    '<input size="15" class="form-control" type="text" placeholder="' +
                    title +
                    '" data-index="' + i + '" />');
            });

            dataTable = $('#dataTable').DataTable({
                "ajax": {
                    url: BASE_API,
                    dataSrc: ''
                },
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "Authorization": API_TOKEN,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "columns": [{
                        data: "id"
                    },
                    {
                        data: "created_at"
                    },
                    {
                        data: "created_at",
                        render: function(data, type, row) {
                            return moment(data).format('llll')
                        }
                    },
                    {
                        data: "email"
                    },
                    {
                        data: "first_name",
                        render: function(data, type, row) {
                            return `${row.first_name} ${row.last_name}`
                        }
                    },
                    {
                        data: "role"
                    },
                    {
                        data: "status",
                        render: function(data, type, row) {
                            if (data == 'Active') {
                                return `<span class="badge badge-success">${data}</span>`
                            } else {
                                return `<span class="badge badge-secondary">${data}</span>`
                            }
                        }
                    },
                    {
                        data: "deleted_at",
                        render: function(data, type, row) {
                            if (data == null) {
                                return `<div class="text-center dropdown">
                                                <div class="btn btn-sm btn-default" data-toggle="dropdown" role="button">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-item d-flex btnEdit" id="${row.id}" role="button">
                                                        <div style="width: 2rem">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div> Edit</div>
                                                    </div>
                                                    <div class="dropdown-divider"</div>
                                                </div>
                                                <div class="dropdown-item d-flex btnDeactivate" id="${row.id}" role="button">
                                                    <div style="width: 2rem">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </div>
                                                    <div style="color: red"> Deactivate</div>
                                                </div>
                                            </div>
                                        </div>`;
                            } else {
                                return '<button class="btn btn-danger btn-sm">Activate</button>';
                            }
                        }
                    }
                ],
                "aoColumnDefs": [{
                    "bVisible": false,
                    "aTargets": [0, 1, 2]
                }],
                "order": [
                    [1, "desc"]
                ],

                // EXPORTING AS PDF
                'dom': 'Bfrtip',
                'buttons': {
                    dom: {
                        button: {
                            tag: 'button',
                            className: ''
                        }
                    },
                    buttons: [{
                        extend: 'pdfHtml5',
                        text: 'Export as PDF',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            // columns: ':visible',
                            columns: ":not(.not-export-column)",
                            modifier: {
                                order: 'current'
                            }
                        },
                        className: 'btn btn-dark mx-2',
                        titleAttr: 'PDF export.',
                        extension: '.pdf',
                        download: 'open', // FOR NOT DOWNLOADING THE FILE AND OPEN IN NEW TAB
                        title: function() {
                            return "List of {{ $page_title }}"
                        },
                        filename: function() {
                            return "List of {{ $page_title }}"
                        },
                        customize: function(doc) {
                            doc.styles.tableHeader.alignment = 'left';
                        }
                    }, ]
                },
            })
            // FOOTER FILTER
            $(dataTable.table().container()).on('keyup', 'tfoot input', function() {
                console.log(this.value)
                console.log(dataTable)
                dataTable
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });

            // DATE RANGE FILTER
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var min = $('#date_from').val();
                    var max = $('#date_to').val();
                    var dateOfObs = data[1] // Our date column in the table

                    if (
                        (min == "" || max == "") ||
                        (moment(dateOfObs).isSameOrAfter(moment(min).format('YYYY-MM-DD' +
                                ' 00:00:00')) &&
                            moment(dateOfObs).isSameOrBefore(moment(max).format('YYYY-MM-DD' +
                                ' 23:59:59'))
                        )
                    ) {
                        return true;
                    }
                    return false;
                }
            );

            // Re-draw the table when the a date range filter changes
            $('.date-range-filter').change(function() {
                dataTable.draw();
            });

            // TO ADD BUTTON TO DIV TABLE ACTION
            dataTable.buttons().container().appendTo('#tableActions');

        }
        // END OF DATATABLE FUNCTION

        // REFRESH DATATABLE FUNCTION
        function refresh() {
            let url = BASE_API;

            dataTable.ajax.url(url).load()
        }
        // REFRESH DATATABLE FUNCTION


        // CREATE FUNCTION
        $('#registerForm').on('submit', function(e) {
            e.preventDefault()

            // VARIABLES
            var form_url = API_URL + '/register'

            // FORM DATA
            var form = $("#registerForm").serializeArray();
            console.log(form)
            var form_data = {}
            $.each(form, function() {
                form_data[[this.name]] = this.value;
            })
            console.log(form_data)

            // ajax opening tag
            $.ajax({
                url: form_url,
                method: "POST",
                data: JSON.stringify(form_data),
                dataType: "JSON",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "Authorization": API_TOKEN,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    notification('success', 'User')
                    $("#createForm").trigger("reset")
                    $("#create_card").collapse("hide")
                    refresh();
                },
                error: function(error) {
                    console.log(error)
                    if (error.responseJSON.errors == null) {
                        swalAlert('warning', error.responseJSON.message)
                    } else {
                        $.each(error.responseJSON.errors, function(key, value) {
                            swalAlert('warning', value)
                        });
                    }
                }
                // ajax closing tag
            })
        });
        // END OF CREATE FUNCTION

        // EDIT FUNCTION
        $(document).on('click', '.btnEdit', function() {
            var id = this.id;
            var form_url = BASE_API + '/' + id;

            $.ajax({
                url: form_url,
                method: "GET",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "Authorization": API_TOKEN,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data)
                    $('.btnUpdate').attr('id', data.id)
                    $('#email_edit').val(data.email)
                    $('#role_edit').val(data.role)
                    $('#status').val(data.status)
                    $('#first_name_edit').val(data.first_name)
                    $('#middle_name_edit').val(data.middle_name)
                    $('#last_name_edit').val(data.last_name)
                    $('#editModal').modal('show');
                },
                error: function(error) {
                    console.log(error)
                    if (error.responseJSON.errors == null) {
                        swalAlert('warning', error.responseJSON.message)
                    } else {
                        $.each(error.responseJSON.errors, function(key, value) {
                            swalAlert('warning', value)
                        });
                    }
                }
                // ajax closing tag
            })

        })
        // END OF EDIT FUNCTION

        // UPDATE FUNCTION
        $(document).on('click', '.btnUpdate', function() {
            var id = this.id;
            console.log(id)
            var form_url = BASE_API + '/' + id;

            // FORM DATA
            var form = $("#editForm").serializeArray();
            var form_data = {
                "email": $('#email_edit').val(),
                "role": $('#role_edit').val(),
                "status": $('#status_edit').val(),
                "first_name": $('#first_name_edit').val(),
                "middle_name": $('#middle_name_edit').val(),
                "last_name": $('#last_name_edit').val(),
            }


            // ajax opening tag
            $.ajax({
                url: form_url,
                method: "PUT",
                data: JSON.stringify(form_data),
                dataType: "JSON",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "Authorization": API_TOKEN,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    notification('info', 'User')
                    refresh();
                    $('#editModal').modal('hide');
                    console.log(data)
                },
                error: function(error) {
                    console.log(error)
                    if (error.responseJSON.errors == null) {
                        swalAlert('warning', error.responseJSON.message)
                    } else {
                        $.each(error.responseJSON.errors, function(key, value) {
                            swalAlert('warning', value)
                        });
                    }
                }
                // ajax closing tag
            })
        })
        // END OF UPDATE FUNCTION

        // DEACTIVATE FUNCTION
        $(document).on("click", ".btnDeactivate", function() {
            var id = this.id;
            let form_url = BASE_API + '/' + id

            $.ajax({
                url: form_url,
                method: "GET",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "Authorization": API_TOKEN,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data) {
                    console.log(data)
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't able to revert this.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "red",
                        confirmButtonText: "Yes, remove it!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: BASE_API + '/destroy/' + data.id,
                                method: "DELETE",
                                headers: {
                                    "Accept": "application/json",
                                    "Authorization": API_TOKEN,
                                    "Content-Type": "application/json",
                                    'X-CSRF-TOKEN': $(
                                        'meta[name="csrf-token"]').attr(
                                        'content')
                                },

                                success: function(data) {
                                    notification('error', 'User')
                                    refresh();
                                },
                                error: function(error) {
                                    $.each(error.responseJSON.errors,
                                        function(key, value) {
                                            swalAlert('warning',
                                                value)
                                        });
                                    console.log(error)
                                    console.log(
                                        `message: ${error.responseJSON.message}`
                                    )
                                    console.log(
                                        `status: ${error.status}`)
                                }
                                // ajax closing tag
                            })
                        }
                    });
                },
                error: function(error) {
                    $.each(error.responseJSON.errors, function(key, value) {
                        swalAlert('warning', value)
                    });
                    console.log(error)
                    console.log(`message: ${error.responseJSON.message}`)
                    console.log(`status: ${error.status}`)
                }
                // ajax closing tag
            })
        });
        // END OF DEACTIVATE FUNCTION


        // FUNCTION CALLING
        async function removeLoader() {
            const result = await dataTable()
            $("#loading_cover").fadeOut();
        }

        removeLoader()
    });
</script>
