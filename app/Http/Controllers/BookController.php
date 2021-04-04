<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Show()
    {
        $books=Book::with('phone')->get();
         echo "<ul>";
        foreach ($books as $book) {
             
            echo "<li>".$book->phone->phone." ".$book->description."</li>";
        }
        echo "</ul>";
    }
}
