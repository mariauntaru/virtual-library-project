
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href = "{{ URL::to("css/app.css" )}}">
        <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Fleur+De+Leah&display=swap" rel="stylesheet">
        <title>Your virtual library</title>
    </head>
   <body>
    <h1 class="title">Your virtual library</h1>
        <div class="align">
        <div class="vertical-menu">
            <a href="{{ route('home') }}" class="active">Home</a>
            <a href="{{ route('books') }}">Book-List</a>
            <a href="{{ route('authors') }}">Authors</a>
            <a href="{{ route('mybooks') }}">My books</a>
            <a href="{{ route('about') }}">About us</a>
            <a href="{{ route('contact') }}">Contact</a>
            @if(!Auth::check())
            <a href="{{ url('/login')}}">Login</a>
            <a href="{{ url('/register')}}">Register</a>
            @else
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </a>
             @endif
        </div> 
        </div>
        <div class="align">
        @yield('content')
        </div>
    </body>
</html>
