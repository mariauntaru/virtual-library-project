@extends('layouts.master')
@section('content')

<div class="frontpage">
  
  <p>Here is a list of all of our beloved authors.</p>
  <p> If you want to see the books of a specific author, tap one of the buttons below:</p>
  @foreach ($authors as $author)
       <div>
            <div>
                 <a href={{ route('authorbook',['id'=>$author->id]) }}>
                <h3 class="button" id="author">{{ $author->name }}</h3>
                 </a>
            </div>
       </div> 
  @endforeach
</div>
@endsection

