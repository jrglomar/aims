<script>
    $(document).ready(function() {
        // GLOBAL VARIABLE
        var APP_URL = "{{ env('APP_URL') }}"
        var API_URL = "{{ env('API_URL') }}"
        var API_TOKEN = localStorage.getItem("API_TOKEN")
        var USER_DATA = JSON.parse(localStorage.getItem("USER_DATA"))
        var BASE_API = API_URL + '/inquiry'

        console.log(USER_DATA)


        $('#submitButton').on('click', function(e) {

            // VARIABLES
            var form_url = API_URL + '/inquiry'

            // FORM DATA
            let form_data = {
                "title": $('#title').val(),
                "description": $('#description').val(),
                "user_id": USER_DATA.id
            }

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
                    notification('success', 'Inquiry')
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
            // END OF CREATE FUNCTION
        });
    });
</script>
