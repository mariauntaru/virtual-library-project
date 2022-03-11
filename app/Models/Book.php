<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['user_id']; 
    use HasFactory;
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
