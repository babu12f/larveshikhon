@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Post List</div>

                <div class="card-body">
                    @foreach ($posts as $post)
                        <h3>{{$post->title}}</h3>
                    @endforeach
                </div>
            </div>
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
