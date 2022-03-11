@extends('layouts.master')
@section('content')
    <div class="frontpage">
        <p>Welcome to the library that makes renting books a lot easier! </p>
        
        <p>For everyone who has a passion for reading a good book, you've come to the right place. With just a couple clicks, you can find the books best suited to your style, and have them delivered right to your doorstep.</p>
    </div>
    <a href={{ route('books') }}>
    <img id="pic" src = "{{ URL::to("images/purplebooklogo.png") }}">
    </a>
@endsection