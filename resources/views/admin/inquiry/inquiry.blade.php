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
@endsection

{{-- CONTENT --}}
@section('content')
    {{-- FORM --}}
    @include('admin/inquiry/inquiry_modal')

    {{-- FORM --}}
    @include('admin/inquiry/inquiry_form')

    {{-- DATATABLE --}}
    @include('admin/inquiry/inquiry_datatable')
@endsection

{{-- FOOTER --}}
@section('footer')
    @include('layouts.general.admin_footer')
@endsection


@section('script')
    @include('admin/inquiry/inquiry_script')
@endsection