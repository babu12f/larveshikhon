@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-9">

            @forelse ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        @if($post->thumbnail)
                            <img src="{{$post->thumbnail_path()}}" alt="thumbnail" class="rounded-circle" 
                            style="float:left; margin-right:15px;" width="50">
                        @endif
                        <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                    </div>

                    <div class="card-body">
                       {{$post->body}}
                    </div>
                </div>
            @empty
                <h2>No Post on This Tag</h2>
            @endforelse
        </div>
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="/posts/{{$category->id}}/category">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
