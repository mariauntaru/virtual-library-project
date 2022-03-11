@extends('layouts.master')

@section('content')
    <div class="frontpage">
        @foreach ($books as $book)
             <div class="row">
                <div class="column">
                  <div class="content">
                    <a href={{ route('bookdescription',['id'=>$book->id]) }} class="nodecor">
                    <img src = "{{ URL::to("images/booklogo.jpg") }}" style="width:100%">
                    <h4> <div>{{ $book->title }}</div></h4>
                    <p> <div>{{ $book->author }}</div></p>
                    </a>
                  </div>
                </div>
             </div> 
        @endforeach
    </div>
@endsection