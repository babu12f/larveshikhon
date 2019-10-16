@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.success_message')

    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card mb-4">
                <div class="card-header">
                    Profile of : {{$user->name}}
                </div>

                <div class="card-body">
                    <p>Email : {{$user->email}}</p>
                    <p>Last Login : 
                        @if($user->last_login)
                            {{ $user->last_login->format('d-m-Y') }}
                        @else
                            {{ "No History Found"}}
                        @endif
                    </p>
                    <p>Date of Birth :
                        @if($user->date_of_birth)
                            {{$user->date_of_birth->format('Y-m-d')}}
                        @else
                            {{ "Not Set Date of Birth"}}
                        @endif
                    </p>
                    <p>Signup Date: {{$user->created_at->format('Y-m-d')}}</p>
                </div>
            </div>

            @forelse ($user->posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/posts/{{$post->id}}"> {{$post->title}} </a>
                    </div>
                </div>
            @empty
                <p>No Activity Found</p>
            @endforelse

        </div>
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Profile Picture</div>

                <div class="card-body">
                    <img 
                        src='{{ asset("uploads/profile_pic/$user->profile_pic") }}' 
                        alt="user profile picture" class="img-responsive mb-4" width="100%">
                    
                    <a href="/profile/edit" class="btn btn-success btn-sm">Edit Profile</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
