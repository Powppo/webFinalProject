@extends('layouts.app')

 <!-- Style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">

 <!-- Content -->
<section id="hero">
    <div class="hero-container">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Hello, {{ Auth::user()->name,}}</h3>
                    <h2>Welcome <span class="typed" data-typed-items="to Final Project!, to our web application! " ></span></h2>       
            </div>
        </div>
    </div>
</div>

@endsection
