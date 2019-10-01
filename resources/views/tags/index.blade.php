@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tag List</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>

                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->description}}</td>
                                <td>
                                    <a href="/tags/{{$tag->id}}/edit" class="btn btn-warning btn-sm">Edit</a> |
                                    <a href="/tags/{{$tag->id}}/detete" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
