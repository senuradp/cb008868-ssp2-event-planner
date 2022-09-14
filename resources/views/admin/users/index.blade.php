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
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{  route('admin.users.show',$user->id) }}" class="btn btn-success">View</a>
                                <a href="{{  route('admin.users.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                                {{-- <a href="{{  route('users.destroy',$user->id) }}" class="btn btn-danger">Delete</a> --}}
                                <form id="model-delete-{{ $user->id }}" action="{{ route('admin.users.destroy',$user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            onclick=" confirm('Are you sure?') ? document.getElementById('model-delete-{{ $user->id }}').submit() : ''"
                                            class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
