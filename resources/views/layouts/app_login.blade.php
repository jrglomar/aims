<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- MAIN CSS LINKS --}}
    @include('layouts.login_css_includes')

</head>

<body class="hold-transition login-page login-bg">

    <section class="section">
        <div class="custom-content">
            @yield('content')

        </div>
    </section>

    {{-- MAIN SCRIPTS --}}
    @include('layouts.scripts_includes')
    {{-- GLOBAL SCRIPTS --}}
    @include('layouts.global_scripts')
    <!-- PAGE SCRIPTS -->
    @yield('script')
</body>

</html>
