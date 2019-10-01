@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tag Update</div>

                <div class="card-body">
                    <form action="/tags/{{$tag->id}}/edit" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="name">Tag Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{$tag->name}}"
                            name="name" placeholder="Tag Name">
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description"
                            >{{$tag->description}}</textarea>
                        
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
