@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-9">

            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        @if($post->thumbnail)
                            <img src="{{$post->thumbnail_path()}}" alt="thumbnail" class="rounded-circle" 
                            style="float:left; margin-right:15px;" width="50">
                        @endif
                        <a href="posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                    </div>

                    <div class="card-body">
                       {{$post->body}}
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
