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
    <style>
        #loading_cover {
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgb(255, 255, 255);
            z-index: 9999;
        }
    </style>
</head>

<body class="hold-transition login-page login-bg" style="height: 100vh !important">

    <div id="loading_cover">
        <div style="position: fixed; height:100%; width:100%; top:50%; left:50%">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div style="position: fixed; height:100%; width:100%; top:55%; left:48%">
            Please Wait.....
        </div>
    </div>

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
