@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bg-white shadow-lg">

        <div class="col-12 mb-3 mt-3">
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary"> Add Pages </a>
        </div>

        <div class="col-md-12 bg-white">

            <x-model-list :columns="[
                'title',
                'url',
                'created_at',
                'status',
            ]" :models="$pages" />

        </div>
    </div>
</div>
@endsection
