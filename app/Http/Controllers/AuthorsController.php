<?php
/**
 * Created by PhpStorm.
 * User: FR-PC
 * Date: 21/7/2016
 * Time: 2:43 AM
 */

namespace App\Http\Controllers;
use App\Models\Authors;
use App\Http\Controllers\Controller;


class AuthorsController extends Controller
{
    public function listOfAuthors()
    {
        $authors = Authors::all();

        return response()->json($authors);
    }
}