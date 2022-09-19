@extends('layouts.app')

{{-- NAVBAR --}}
@section('navbar')
    @include('layouts.general.admin_navbar')
@endsection

{{-- SIDEBAR --}}
@section('sidebar')
    @include('layouts.general.user_sidebar')
@endsection

@section('section_header')
    <h1>{{ $page_title }}</h1>
    <div id="tableActions"></div>
@endsection

{{-- CONTENT --}}
@section('content')
    {{-- FORM --}}
    @include('user/equipment/equipment_modal')

    {{-- FORM --}}
    @include('user/equipment/equipment_form')

    {{-- DATATABLE --}}
    @include('user/equipment/equipment_datatable')
@endsection

{{-- FOOTER --}}
@section('footer')
    @include('layouts.general.admin_footer')
@endsection


@section('script')
    @include('user/equipment/equipment_script')
@endsection
