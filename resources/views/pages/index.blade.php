@extends('layouts.app')

@section('content')
  <div style="margin-left:-250px;">
  <a class="navbar-brand" href="{{ url('/') }}">
          <img src="../images/planer-logo.png" width="200px">
  </a>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    General Constructions
                    <p style="font-size:22px;text-shadow:none;text-align:right;">Craftsmanship</p>
                </div>

                <div class="links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="/about"><i class="fa fa-address-card"></i> About</a>
                    <a href="/service"><i class="fa fa-wrench"></i> Services</a>
                    <a href="/contact"><i class="fa fa-phone"></i> Contact</a>
                    <a href=""><i class="fa fa-car"></i> Other</a>
                </div>
            </div>
        </div>
    </div>
@endsection
