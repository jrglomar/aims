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
    @include('admin/condition/condition_modal')

    {{-- FORM --}}
    @include('admin/condition/condition_form')

    {{-- DATATABLE --}}
    @include('admin/condition/condition_datatable')
@endsection

{{-- FOOTER --}}
@section('footer')
    @include('layouts.general.admin_footer')
@endsection


@section('script')
    @include('admin/condition/condition_script')
@endsection
