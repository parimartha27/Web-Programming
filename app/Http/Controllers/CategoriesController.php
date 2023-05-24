<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class CategoriesController extends Controller
{
    public function index(){

    $category = Category::all();

        return $category;
    }

}
