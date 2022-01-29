@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::check())
                           <h1>Welcome back, {{ Auth::user()->name }}</h1> 
                        @else
                            Hello, stranger!
                            <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
