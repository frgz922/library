<?php
/**
 * Created by PhpStorm.
 * User: FR-PC
 * Date: 21/7/2016
 * Time: 2:48 AM
 */

namespace App\Http\Controllers;
use App\Models\Publishers;
use App\Http\Controllers\Controller;

class PublishersController extends Controller
{
    public function listOfPublishers()
    {
        $publishers = Publishers::all();

        return response()->json($publishers);
    }
}