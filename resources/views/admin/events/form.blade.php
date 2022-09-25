@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 bg-white p-4">

                <form method="POST" action="{{ $event->id ? route('admin.events.update', $event->id) : route('admin.events.store') }}" enctype="multipart/form-data" x-data="hotelForm">

                    @if ($event->id)
                        @method('PUT')
                    @endif

                    @csrf

                    <h5> Event Content</h5>

                    <hr>
                    <br>


                    <div class="row">
                        <div class="col-12">
                            <x-form-input id="image" name="image" label="Event Image" type="file" help="Event Image"
                                value="{{ $event->getFirstMediaUrl('images', 'thumb') }}" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <x-form-input id="name" name="name" label="Event Name" type="text" help="Event Name"
                                value="{{ old('name', $event->name) }}" />
                        </div>
                        <div class="col-4">
                            <x-form-input id="url" name="url" label="Event URL" type="text" help="Event URL"
                                value="{{ old('url', $event->url) }}" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="row col-12">
                            <x-form-textarea id="description" name="description" label="Description" type="text"
                                value="{!! $event->description !!}" help="Page Description" ckeditor="true" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <x-form-input id="date" name="date" label="Event Date" type="date" help="Event Date"
                                value="{{ old('date', $event->date) }}" />
                        </div>
                        <div class="col-6">
                            <x-form-input id="time" name="time" label="Event Time" type="time" help="Event Time"
                                value="{{ old('time', $event->time) }}" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <x-form-input id="location" name="location" label="Event Location" type="text"
                                help="Event Location" value="{{ old('location', $event->location) }}" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <x-form-input id="email" name="email" label="Event Email" type="email"
                                help="Event Email" value="{{ old('email', $event->email) }}" />
                        </div>
                        <div class="col-6">
                            <x-form-input id="contact" name="contact" label="Event Contact" type="text"
                                help="Event Contact" value="{{ old('contact', $event->contact) }}" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <x-form-input  id="link" name="link" label="Event Link" type="text" help="Event Link"
                            value="{{ old('link', $event->link) }}" />
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12">
                            <x-form-select id="category_id" name="category_id" label="Event Category"
                                value="{{ $event->category_id }}" help="Please select the primary category of the hotel"
                                placeholder="Select Category" :options="$categories->pluck('title', 'id')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="categories" class="form-label">Categories</label>
                                <select class="form-control @error('categories') is-invalid @enderror" id="categories"
                                    x-ref="categories" name="categories[]" aria-describedby="categoriesHelp" multiple>
                                    @foreach ($categories->pluck('title', 'id') as $option_key => $option_value)
                                        <option value="{{ $option_key }}"
                                            {{ in_array($option_key, $event->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                            {{ $option_value }}
                                        </option>
                                    @endforeach
                                </select>
                                <div id="categoriesHelp" class="form-text">
                                    Please select the secondary categories of the hotel (It can be the same as the primary
                                    category)
                                </div>
                                @error('categories')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    {{-- id and title as key value pairs --}}
                    <div class="row">
                        <div class="col-12">
                            <x-form-select id="category_id" name="category_id" label="Category" type="text"
                                value="{{ $event->category_id }}" help="Event Category" placeholder="Select Category"
                                :options="$categories->pluck('title', 'id')" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-10">
                                <x-form-input id="sort_order" name="sort_order" label="Sort Order" type="number"
                                    help="Sort order" value="{{ $event->sort_order }}" />
                            </div>
                            <div class="col-2">

                                <input type="checkbox" class="form-check-input" id="status" name="status"
                                    value="1" {{ old('status', $event->status) ? 'checked' : '' }}
                                    aria-describedby="statusHelp" />

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

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // DO NOT DO THIS IN PRODUCTION !!!!
        // DON'T !!!!!!
        // $(document).ready(function() {
        //     $('#categories').select2({
        //         placeholder: "Select Categories",
        //         allowClear: true
        //     });
        // });
        document.addEventListener('alpine:init', () => {
            Alpine.data('hotelForm', () => ({
                init() {
                    console.log('hotelForm component initialized');
                    // get the select box element using the x-ref and initialize select2
                    $(this.$refs.categories).select2({
                        placeholder: "Select Categories",
                        allowClear: true
                    });
                },
            }))
        })
    </script>
@endpush
