@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))

@extends('layouts.error')

@section('title')
    419 - Page Expired
@endsection

@section('error_title')
    419 Page Expired
@endsection

@section('message')
    Page Expired. <br> Please try again later.
@endsection
