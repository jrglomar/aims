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
    @include('layouts.css_includes')
</head>

<body class="sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader"
            style="position: relative; justify-content: center; align-items:center; transition: height .2s linear;">
            <img src="{{ asset('/vendors/adminlte/dist/img/laravel-svg.png') }}" alt="LaravelLogo" height="120"
                width="120">
        </div>

        {{-- NAVBAR --}}
        @yield('navbar')

        {{-- SIDEBAR --}}
        @yield('sidebar')

        <div class="content-wrapper" style="padding:20px">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="section-header">
                        @yield('section_header')
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="section-body">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            @yield('footer')
        </footer>
    </div>

    {{-- MAIN SCRIPTS --}}
    @include('layouts.scripts_includes')
    {{-- GLOBAL SCRIPTS --}}
    @include('layouts.global_scripts')
    <!-- PAGE SCRIPTS -->
    @yield('script')
</body>

</html>
