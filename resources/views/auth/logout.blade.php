@extends('layouts.app_login')

@section('content')
    {{-- FORM --}}
    {{-- @include('auth/login_form') --}}
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // GLOBAL VARIABLE
            var APP_URL = "{{ env('APP_URL') }}"
            var API_URL = "{{ env('API_URL') }}"
            var API_TOKEN = localStorage.getItem("API_TOKEN")
            var IS_LOGGED_IN = "{{ Auth::check() }}"

            // END OF GLOBAL VARIABLE

            function logout() {
                var form_url = API_URL + '/logout'

                // ajax opening tag
                $.ajax({
                    url: form_url,
                    method: "POST",
                    headers: {
                        "Accept": "application/json",
                        "Authorization": API_TOKEN,
                        "Content-Type": "application/json",
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        localStorage.removeItem('API_TOKEN');
                        localStorage.removeItem('USER_DATA');
                        notification('custom', 'Logout Success')
                        setInterval(function() {
                            window.location.href = APP_URL + '/login';
                        }, 1500)
                    },
                    error: function(error) {
                        console.log(error)
                        notification('custom', 'Logout Success')
                        setInterval(function() {
                            window.location.href = APP_URL + '/login';
                        }, 1500)
                    }
                    // ajax closing tag
                })
            }

            logout()
            $('#loading_cover').fadeOut()
        });
    </script>
@endsection
