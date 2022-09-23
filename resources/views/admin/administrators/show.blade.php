@extends('layouts.app')

@section('content')
    <div class="container p-5 bg-white shadow-lg">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $administrator->name }}</h3>
                    </div>
                    <div class="panel-body mt-5">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <img class="w-100 img-circle img-responsive" src="/storage/{{ $administrator->avatar }}"
                                    alt="{{ $administrator->name }}">
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{ $administrator->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $administrator->email }}</td>
                                        </tr>
                                        <td>Created At:</td>
                                        <td>{{ $administrator->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Updated At:</td>
                                            <td>{{ $administrator->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('admin.administrators.edit',$administrator->id) }}" class="btn btn-primary w-25">Edit</a>
                                <a href="{{ route('admin.administrators.destroy',$administrator->id) }}" class="btn btn-danger w-25">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
