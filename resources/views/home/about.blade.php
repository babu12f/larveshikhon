@extends('layout.master')

@section('content')
	<div class="container">

        <h2>About Us</h2>

        <div class="row registerbox">
            <div class="col-md-12">
                <p class="text_about">At mea expetendis percipitur, error doctus argumentum ex qui, officiis adipiscing signiferumque te eam. At quodsi civibus vis, his ad dicat minim appetere, omnes principes ex mel. Ex liber audire maiestatis mel, no nam mandamus omittantur. Ad vim illud utroque. Ex vim inani volumus, everti admodum appareat an usu, propriae vivendum et sea.</p>
            </div>
        </div>
        
        <div class="row registerbox">
            <div class="col-md-4">
                <img src="{{ asset('image/banner1.jpg') }}" alt="banner" class="img-polaroid">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/banner2.jpg') }}" alt="banner1" class="img-polaroid">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/banner3.jpg') }}" alt="banner2" class="img-polaroid">
            </div>
        </div>
        
        <div class="row registerbox">
            <div class="col-md-4">
                <div class="description">
                    <h4>Aenean imperdiet</h4>
                    <p>Aenean imperdiet.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="description">
                    <h4>Donec quam felis</h4>
                    <p>Id mper.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="description">
                    <h4>In enim justo</h4>
                    <p>In  tellus.</p>
                </div>
            </div>		    
        
        </div>
		
   </div>
@endsection