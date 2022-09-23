@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 bg-white p-4">
            <form method="POST" action="{{ $category->id ? route('admin.categories.update', $category->id) : route('admin.catgories.store') }}">

                @if ($category->id)
                    @method('PUT')
                @endif

                @csrf

                <h5> Category Details</h5>

                <hr>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="title" name="title" label="Title" type="text" value="{{ $category->title }}" help="Category Title"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="url" name="url" label="URL" type="text" value="{{ $category->url }}" help="Category URL"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-form-input  id="summary" name="summary" label="Summary" type="text" value="{{ $category->summary }}" help="Category Summary"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <x-form-input  id="content" name="content" label="Content" type="textarea" value="{{ $category->content }}" help="Category Content"  />
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
    </div>
</div>
@endsection
