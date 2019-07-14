@extends('layout.master')

@section('title', 'about page')

@section('contant')

    <h1>About Us Page</h1>

    <p>paragraph </p>

    @include('partials.contactform', [ 'name' => "iqbal hossain" ])

@endsection



@section('style')
    
<style>
    body{
        background: #f6f6f6;
    }
    </style>
@endsection