@extends('layouts.app_login')

@section('content')
            {{-- FORM --}}
            @include('auth/register_form')
@endsection

@section('script')
    @include('auth/register_script')
@endsection
