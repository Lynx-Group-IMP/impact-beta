<!DOCTYPE html>
<html lang="en">

@extends('layouts.components.header')

<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-impact shadow">
        <div class="container">
           <a class="navbar-brand" href="{{ url('/') }}">
           <img src="/impact-w.png" alt="Italian Trulli" style="width: 200px;"><br>
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
              <li class="nav-item px-2">
                    <a class="nav-link" href="/dashboard" style="color:#fff;"><i class="far fa-home" style="margin-right:5px;"></i> {{ __('Dashboard') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="color:#fff;"><i class="far fa-calendar-alt" style="margin-right:5px;"></i> {{ __('Events') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="color:#fff;"><i class="far fa-motorcycle" style="margin-right:5px;"></i> {{ __('Teams') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="color:#fff;"><i class="far fa-globe-americas" style="margin-right:5px;"></i> {{ __('Impact Network') }}</a>
                 </li>
              </ul>
              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                 <!-- Authentication Links -->
                 @guest
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="color:#fff;"> <i class="far fa-sign-in-alt" style="margin-right:5px;"></i> {{ __('Login') }}</a>
                 </li>
                 @if (Route::has('register'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" style="color:#fff;"> <i class="far fa-pencil" style="margin-right:5px;"></i>{{ __('Register') }}</a>
                 </li>
                 @endif
                 @else
                 <style>
                    .dropdown-menu::before,
                    .dropdown-menu::after {
                    border: none;
                    content: none;
                    }
                 </style>
                 <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <img src="https://media.discordapp.net/attachments/756086069275131945/764507706127548466/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:30px;height:30px;margin-top:-1px;">
                       <!--{{ Auth::user()->name }}-->
                       <h4 style="font-size:16px;margin-top:7px;display:inline;color:#fff !important;">{{Auth::user()->name}}</h4>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="min-width: 257px;">
                       <center>
                          <!-- https://ui-avatars.com/api/?name=Tek Xylo&color=0d6efd&background=2d2d2d -->
                          <img src="https://media.discordapp.net/attachments/756086069275131945/764507706127548466/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:50px;height:50px;">
                          <br>
                          <h4 class="text-primary" style="margin-bottom:0px;padding-bottom:0px;font-size:18px;margin-top:7px;">{{Auth::user()->name}}</h4>
                          <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray;font-size:14px;"><strong>{{'@' . Auth::user()->tag}}</strong></p>
                       </center>
                       <hr>
                       <a class="dropdown-item" href="/dashboard"/>
                       <i class="far fa-user" aria-hidden="true"></i> Profile
                       </a>
                       <!--<a class="dropdown-item disabled" href="/teams/unleashed"/>
                       <i class="fas fa-flag-checkered" aria-hidden="true"></i> Teams
                       </a>-->
                       <a class="dropdown-item" href="/account/settings"/>
                       <i class="far fa-cog" aria-hidden="true"></i>  Account Settings
                       </a>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                       <i class="far fa-sign-out-alt
                          " aria-hidden="true"></i>  {{ __('Logout') }}
                       </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                       </form>
                    </div>
                 </li>
                 @endguest
              </ul>
           </div>
        </div>
    </nav>

    {{ $slot }}
</div>


@extends('layouts.components.scripts')
</body>
</html>
