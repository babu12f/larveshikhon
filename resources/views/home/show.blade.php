@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-header">
                    @if($post->thumbnail)
                        <img src="{{$post->thumbnail_path()}}" alt="thumbnail" class="rounded" 
                        style="float:left; margin-right:15px;" width="200">
                    @endif
                    <a href="posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                </div>

                <div class="card-body">
                    {!! $post->body !!}
                </div>

                <div class="card-footer ">
                    {{$post->likes->count()}} People Like This Post

                    <a href="/posts/{{$post->id}}/liked" 
                        class="btn btn-sm {{ $post->likeByCurrentUser() ?  "btn-danger" :  "btn-success" }}">
                        {{ $post->likeByCurrentUser() ?  "Dislike" :  "Like" }}</a>
                    
                    <div class="pull-right">
                        @foreach ($post->tags as $tag)
                            @if ($loop->last)
                                <a href="{{ route('search.tag', ['tag' => $tag->id]) }}">{{$tag->name}}</a>
                            @else
                                <a href="{{ route('search.tag', ['tag' => $tag->id]) }}">{{$tag->name}}</a>,
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <h2>Comments</h2>
            <hr>
            <div class="card mb-4">

                <div class="card-body">
                    <form action="/posts/{{$post->id}}/comments" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="body">Comment</label>
                            <textarea id="body" 
                                class="form-control @error('body') is-invalid @enderror" 
                                name="body"
                                placeholder="Tell somthing about the psot."></textarea>
                        
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            
            @foreach ($post->comments as $comment)
                <div class="card mb-2">
                    <div class="card-header">{{$comment->owner->name}} said  
                        <a href="/comments/{{$comment->id}}/liked" 
                            class="btn btn-sm btn-success pull-right {{ $comment->likeByCurrentUser() ?  "btn-danger" :  "btn-success" }} "> 
                            {{$comment->likes()->count()}} <i class="fa fa-heart"></i> 
                        </a> 
                    </div>
                    <div class="card-body">
                            {{ $comment->body }}
                    </div>
                </div>
            @endforeach

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
