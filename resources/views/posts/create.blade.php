@extends('layouts.app')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create New post</div>

                <div class="card-body">
                    <form action="/posts" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                name="title" 
                                placeholder="Post Title">
                            
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Post Category</label>
                            <select id="category" type="text" 
                                class="form-control @error('category') is-invalid @enderror" 
                                name="category_id" 
                                placeholder="Post category">

                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="tag_id">Post Tags</label>
                            <select id="tag_id" type="text" 
                                class="form-control @error('tag_id') is-invalid @enderror" 
                                name="tag_id[]" 
                                placeholder="Post category"
                                multiple>

                                <option>Select Tags</option>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('tag_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Thumbnail</label>
                            <input id="thumbnail" 
                                class="form-control @error('thumbnail') is-invalid @enderror" 
                                name="thumbnail" 
                                type="file">
                        
                            @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="body" 
                                id="body"
                                class="form-control @error('body') is-invalid @enderror" 
                                name="body" 
                                placeholder="body" rows="7"></textarea>
                        
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
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script>
        $(function() {
            $('#tag_id').select2();
        });
    </script>

    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
