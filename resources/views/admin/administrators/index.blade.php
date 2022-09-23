@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center bg-white shadow-lg">

        <div class="col-12 mb-3 mt-3">
            <a href="{{ route('admin.administrators.create') }}" class="btn btn-primary"> Add Admin </a>
        </div>

        <div class="col-md-12 bg-white">

            <x-model-list :columns="[
                'name',
                'email',
                'created_at',
            ]" :models="$admins" />

        </div>

    </div>
</div>
@endsection
