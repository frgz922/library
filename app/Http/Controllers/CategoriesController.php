<?php
/**
 * Created by PhpStorm.
 * User: FR-PC
 * Date: 21/7/2016
 * Time: 2:46 AM
 */

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function listOfCategories()
    {
        $categories = Categories::all();

        return response()->json($categories);
    }
}