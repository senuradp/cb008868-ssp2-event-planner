@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 bg-white p-4">
                <form method="POST" action="{{ $category->id ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}">

                    @if ($category->id)
                        @method('PUT')
                    @endif

                    @csrf

                    <h5> Category Details</h5>

                    <hr>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <x-form-input id="title" name="title" label="Title" type="text"
                                value="{{ $category->title }}" help="Category Title" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input id="url" name="url" label="URL" type="text"
                                value="{{ $category->url }}" help="Category URL" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <x-form-input id="summary" name="summary" label="Summary" type="text"
                                value="{{ $category->summary }}" help="Category Summary" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <x-form-input id="content" name="content" label="Content" type="textarea"
                                value="{{ $category->content }}" help="Category Content" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-10">
                                <x-form-input id="sort_order" name="sort_order" label="Sort Order" type="number"
                                    help="Sort order" value="{{ $category->sort_order }}" />
                            </div>
                            <div class="col-2">

                                <input type="checkbox" class="form-check-input" id="status" name="status" value="1"
                                    {{ old('status', $category->status) ? 'checked' : '' }} aria-describedby="statusHelp" />

                                <label for="status" class="form-label ms-2">Status</label>

                            </div>

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
