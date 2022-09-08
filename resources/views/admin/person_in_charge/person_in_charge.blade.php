@extends('layouts.app')

{{-- NAVBAR --}}
@section('navbar')
    @include('layouts.general.admin_navbar')
@endsection

{{-- SIDEBAR --}}
@section('sidebar')
    @include('layouts.general.admin_sidebar')
@endsection

@section('section_header')
    <h1>{{ $page_title }}</h1>
    <div id="tableActions"></div>
@endsection

{{-- CONTENT --}}
@section('content')
    {{-- FORM --}}
    @include('admin/person_in_charge/person_in_charge_modal')

    {{-- FORM --}}
    @include('admin/person_in_charge/person_in_charge_form')

    {{-- DATATABLE --}}
    @include('admin/person_in_charge/person_in_charge_datatable')
@endsection

{{-- FOOTER --}}
@section('footer')
    @include('layouts.general.admin_footer')
@endsection


@section('script')
    @include('admin/person_in_charge/person_in_charge_script')
@endsection
