@extends('layouts.app')

 <!-- Style -->
<link href="{{ asset('style/assets/css/style.css')}}" rel="stylesheet">
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
                    <h3>{{ __('Hello, ') }}
                        {{ Auth::user()->name,}}
                    </h3>
                    
                    
            </div>
        </div>
    </div>
</div>
@endsection
