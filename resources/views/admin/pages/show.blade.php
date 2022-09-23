@extends('layouts.app')

@section('content')
    <div class="container p-5 bg-white shadow-lg">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    </div>
                    <div class="panel-body mt-5">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <img class="w-100 img-circle img-responsive" src="/storage/{{ $user->avatar }}"
                                    alt="{{ $user->name }}">
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>First Name:</td>
                                            <td>{{ $user->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td>{{ $user->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIC:</td>
                                            <td>{{ $user->nic }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>City:</td>
                                            <td>{{ $user->city }}</td>
                                        </tr>
                                        <tr>
                                            <td>State:</td>
                                            <td>{{ $user->state }}</td>
                                        </tr>
                                        <tr>
                                            <td>Zip:</td>
                                            <td>{{ $user->zip }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country:</td>
                                            <td>{{ $user->country }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created At:</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Updated At:</td>
                                            <td>{{ $user->updated_at }}</td>
                                        </tr>
                                </table>

                                <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary w-25">Edit</a>
                                <a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger w-25">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
