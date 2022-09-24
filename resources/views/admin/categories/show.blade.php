@extends('layouts.app')

@section('content')
    <div class="container p-5 bg-white shadow-lg">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $category->title }}</div>

                    <div class="card-body">
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tr>
                                    <td>Title : </td>
                                    <td>{{ $category->title }}</td>
                                </tr>
                                <tr>
                                    <td>URL : </td>
                                    <td>/{{ $category->url }}</td>
                                </tr>
                                <tr>
                                    <td>Summary</td>
                                    <td>{{ $category->summary }}</td>
                                </tr>
                                <tr>
                                    <td>Content : </td>
                                    <td>{{ $category->content }}</td>
                                </tr>
                                <tr>
                                    <td>Status : </td>
                                    <td>{{ $category->status }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
