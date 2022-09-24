@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 bg-white p-4">
            <form method="POST" action="{{ $page->id ? route('admin.pages.update', $page->id) : route('admin.pages.store') }}" enctype="multipart/form-data">

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                @if ($page->id)
                    @method('PUT')
                @endif

                @csrf

                <h5> Page Content</h5>

                <hr>
                <br>

                <div class="row">
                    <div class="col-md-8">
                        <x-form-input  id="title" name="title" label="Title" type="text" value="{{ $page->title }}" help="Page Title"  />
                    </div>
                    <div class="col-md-4">
                        <x-form-input  id="url" name="url" label="URL" type="text" value="{{ $page->url }}" help="URL"  />
                    </div>
                </div>

                <div class="row col-12">
                    <x-form-textarea  id="summary" name="summary" label="Summary" type="text" value="{{ $page->summary }}" help="Page Summary" />
                </div>

                <div class="row col-12">
                    <x-form-textarea  id="content" name="content" label="Content" type="text" value="{!! $page->content !!}" help="Page Content" ckeditor="true"/>
                </div>

                {{-- {{ dd($page->getFirstMediaUrl('images')) }} --}}

                <div class="row">
                    <div class="col-12">
                        <x-form-input  id="image" name="image" label="Page Image" type="file" help="Page Image"
                        value="{{ $page->getFirstMediaUrl('images','thumb') }}" />
                    </div>
                </div>



                {{-- id and title as key value pairs --}}
                <div class="row">
                    <div class="col-12">
                        <x-form-select id="category_id" name="category_id" label="Category" type="text" value="{{ $page->category_id }}" help="Page Category" placeholder="Select Category"
                            :options="$categories->pluck('title','id')" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                                <x-form-input  id="sort_order" name="sort_order" label="Sort Order" type="number" help="Sort order"
                                    value="{{ $page->sort_order }}" />
                        </div>
                        <div class="col-2">

                            <input type="checkbox" class="form-check-input"
                                id="status" name="status"
                                value="1" {{ old('status', $page->status) ? 'checked' : '' }}
                                aria-describedby="statusHelp"/>

                            <label for="status" class="form-label ms-2">Status</label>

                        </div>

                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Save</button>

              </form>
        </div>
    </div>
</div>
@endsection
