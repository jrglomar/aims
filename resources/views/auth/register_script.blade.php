<script>
    $(document).ready(function() {
        // GLOBAL VARIABLE
        var APP_URL = "{{ env('APP_URL') }}"
        var API_URL = "{{ env('API_URL') }}"
        var API_TOKEN = localStorage.getItem("API_TOKEN")
        var IS_LOGGED_IN = "{{ Auth::check() }}"

        // Register function
        $('#registerForm').on('submit', function(e) {
            e.preventDefault()

            // VARIABLES
            var form_url = API_URL + '/register'

            // FORM DATA
            var form = $("#registerForm").serializeArray();
            var form_data = {}
            $.each(form, function() {
                form_data[[this.name]] = this.value;
            })

            // ajax opening tag
            $.ajax({
                url: form_url,
                method: "POST",
                data: JSON.stringify(form_data),
                dataType: "JSON",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    Swal.fire({
                        text: "Register Successfully! You can login now.",
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = APP_URL + "/login"
                        } else {
                            window.location.href = APP_URL + "/login"
                        }
                    })
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
        // Register closing tag

        $("#loading_cover").fadeOut();
    });
</script>
