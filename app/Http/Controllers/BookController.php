<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use Auth;
class BookController extends Controller
{
    public function BookList(){
        $books=Book::all();
        return view('books')->with('books',$books);
    }
    public function Authors(){
        $authors=Author::all();
        return view('authors')->with('authors',$authors);
    }
    public function BookDescription($id){
        return view('bookdescription', [
            'book' => Book::findOrFail($id)
        ]);
    }
    public function AuthorBook($id){
        $author=Author::where('id',$id)->first();
        return view('books')->with('books',$author->books);
    }
    public function Borrow($id){
        $user=Auth::user();
        if(!$user){
            return redirect()->back();
        }
        $book=Book::where('id',$id)->first();
        if($book->user_id != NULL)
        {
            return redirect()->back();
        }
        $book->user_id=$user->id;
        $book->save();
        return redirect()->route('mybooks');
    }
    public function MyBooks(){
        $user=Auth::user();
        if(!$user){
            return redirect()->back();
        }
        if($user->books->count() > 2)
            return redirect()->back()->with('fail','You reached the maximum amount of books!');
        return view('mybooks')->with('books',$user->books);
    }
    public function Return($id){
        $user=Auth::user();
        $book=Book::where('id',$id)->first();
        $book->user_id=NULL;
        $book->save();
        return redirect()->back();
    }
}
