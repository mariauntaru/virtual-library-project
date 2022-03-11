@extends('layouts.master')

@section('content')
    <div class="frontpage">
        @if(Session::has('fail'))
        <div class="alert">{{ Session::get('fail') }}</div>
        @endif
        @foreach ($books as $book)
          @if (Auth::user()->id !=NULL)  
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
                 
             @else
                 <div class="card-header">You should authenticate in order to borrow books.</div>
            
             @endif
        @endforeach
    </div>
@endsection