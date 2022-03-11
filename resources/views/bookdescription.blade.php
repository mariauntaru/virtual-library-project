@extends('layouts.master')
@section('content')
    <div class="frontpage">
        <h3 id="booktitle"> <span class="align">{{ $book->title }}</span></h3>
            @if ($book->user_id == Auth::user()->id)
                <span class="align">
                    <form method="POST" action="{{ route('return', ['id' => $book->id]) }}">@csrf
                        <button class="button" name="borrow" type="submit">Return</button>
                    </form>
                </span>
            @else
            @if($book->user_id!=NULL and $book->user_id!=Auth::user()->id)
                <div>This book is unavailable at the moment.</div>
            @else
                <span class="align">
                    <form method="POST" action="{{ route('borrow', ['id' => $book->id]) }}">@csrf
                        <button class="button" name="borrow" type="submit">Borrow</button>
                    </form>
                </span>
            @endif
            @endif
        <h4>
            <div>{{ $book->author }}</div>
        </h4>
        <p>{{ $book->description }}</p>
    </div>
@endsection
