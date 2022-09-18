@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped tablestrp">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <th scope="row">{{ $admin->id }}</th>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->created_at }}</td>
                            <td>
                                <a href="{{  route('admin.admins.show',$admin->id) }}" class="btn btn-success">View</a>
                                <a href="{{  route('admin.admins.edit',$admin->id) }}" class="btn btn-primary">Edit</a>
                                {{-- <a href="{{  route('admins.destroy',$admin->id) }}" class="btn btn-danger">Delete</a> --}}
                                <form id="model-delete-{{ $admin->id }}" action="{{ route('admin.admins.destroy',$admin->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            onclick=" confirm('Are you sure?') ? document.getElementById('model-delete-{{ $admin->id }}').submit() : ''"
                                            class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $admins->links() }}
        </div>
    </div>
</div>
@endsection
