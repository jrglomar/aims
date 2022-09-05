<script>
    $(document).ready(function() {

        // GLOBAL VARIABLE
        var APP_URL = "{{ env('APP_URL') }}"
        var API_URL = "{{ env('API_URL') }}"
        var API_TOKEN = localStorage.getItem("API_TOKEN")
        var USER_DATA = JSON.parse(localStorage.getItem("USER_DATA"))
        var BASE_API = API_URL + '/inquiry'


        // DATA TABLES FUNCTION
        function dataTable() {
            dataTable = $('#dataTable').DataTable({
                "ajax": {
                    url: BASE_API + "/show_user/" + USER_DATA.id,
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
                        data: "title"
                    },
                    {
                        data: "description"
                    },
                    {
                        data: "remarks"
                    },
                    {
                        data: "status",
                        render: function(data, type, row) {
                            if (data == 'Pending') {
                                return `<span class="badge badge-secondary">${data}</span>`
                            } else {
                                return `<span class="badge badge-success">${data}</span>`
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
                    "aTargets": [0, 1]
                }],
                "order": [
                    [1, "desc"]
                ]
            })
        }
        // END OF DATATABLE FUNCTION

        // REFRESH DATATABLE FUNCTION
        function refresh() {
            let url = BASE_API;

            dataTable.ajax.url(url).load()
        }
        // REFRESH DATATABLE FUNCTION




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
                    $('#title_edit').val(data.title)
                    $('#remarks_edit').val(data.remarks)
                    $('#message_edit').val(data.description)
                    let sender =
                        `${data.user.first_name} ${data.user.last_name} - ${data.user.email}`
                    $('#sender_edit').val(sender)
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
                "remarks": $('#remarks_edit').val(),
                "admin_id": USER_DATA.id,
                "status": 'Remarked',
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
        dataTable();
    });
</script>
