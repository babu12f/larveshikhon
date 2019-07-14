@extends('layout.master')

@section('title', 'contact page')

@section('contant')

    <h1>Contact Page</h1>

   @include('partials.contactform', [ 'name' => "iqbal hossain" ])

   @component('components.alert')
        <span> Something error </span>
    @endcomponent
   
@endsection