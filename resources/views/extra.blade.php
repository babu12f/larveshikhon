@extends('layout.master')

@section('contant')
    <h1>extra page</h1>


    {{-- @component('components.alert')
        <span> Something error </span>
    @endcomponent --}}

    @abc
        <span> Something error </span>
    @endabc

@endsection

@section('extrafield')
    @parent

    <p>new text</p>



@endsection