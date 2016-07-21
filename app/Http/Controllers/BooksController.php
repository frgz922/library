<?php
/**
 * Created by PhpStorm.
 * User: FR-PC
 * Date: 21/7/2016
 * Time: 2:33 AM
 */

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Categories;
use App\Models\Publishers;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function listOfBooks()
    {

        $books = Books::with('authors', 'categories', 'publishers')->get();
        $array = array();

        foreach($books as $book){
            $array[] = array(
                'title' => $book->title,
                'description' => $book->description,
                'publish_date' => $book->publish_date,
                'author' => $book->authors->name,
                'category' => $book->categories->name,
                'publisher' => $book->publishers->name
            );
        }


        return response()->json($array);
    }
}