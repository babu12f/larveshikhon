@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Post List</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Posted By</th>
                            <th></th>
                        </tr>

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>JOhn doe</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit</a> |
                                    <a href="/posts/{{$post->id}}/detete" class="btn btn-danger btn-sm">Delete</a> |
                                    <a href="/posts/{{$post->id}}/approve" 
                                        class="btn {{ ($post->status == 1)? 'btn-danger' : 'btn-success' }}  btn-sm">
                                        {{ ($post->status == 1)? 'Unapprove' : 'Approve' }}
                                    </a>
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
