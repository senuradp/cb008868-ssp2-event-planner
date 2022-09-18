<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>

                @foreach ($columns as $column)
                    <th scope="col">{{ ucwords(str_replace('_', ' ', $column)) }}</th>
                @endforeach

                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($models as $model)
                <tr>
                    <th scope="row">{{ $model->id }}</th>
                    @foreach ($columns as $column)
                        {{-- dynamically access internal varibales in the column in the { }--}}
                        <td>{{ $model->{$column} }}</td>
                    @endforeach
                    <td>

                        @php
                            $route = strtolower(Str::plural(class_basename($model)));
                        @endphp

                        <a href="{{  route('admin.'.$route.'.show',$model->id) }}" class="btn btn-success">View</a>
                        <a href="{{  route('admin.'.$route.'.edit',$model->id) }}" class="btn btn-primary">Edit</a>
                        <form id="model-delete-{{ $model->id }}" action="{{ route('admin.'.$route.'.destroy',$model->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                    onclick=" confirm('Are you sure?') ? document.getElementById('model-delete-{{ $model->id }}').submit() : ''"
                                    class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $models->links() }}
</div>
