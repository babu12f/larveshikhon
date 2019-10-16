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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Signup Date</th>
                            <th>User Type</th>
                            <th></th>
                        </tr>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->format('d-M-Y')}}</td>
                                <td>
                                    @if ($user->user_type == "admin")
                                        {{"Admin"}}
                                    @elseif($user->user_type == "modarator")
                                        {{"Modarator"}}
                                    @elseif($user->user_type == "user")
                                        {{"User"}}
                                    @endif
                                </td>
                                <td>
                                    
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
