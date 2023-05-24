<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Publisher;

class DetailsController extends Controller
{
    public function getData($id){
        $kategori= Detail::join('categories', 'details.category_id', '=', 'categories.id')
        ->join('books', 'details.book_id', '=', 'books.id')
        ->where('categories.id', $id)
        ->get();

        $category_title = $kategori->first();

        
        return view('category', ['kategori' => $kategori,'bookCategory'=>$category_title]);
    }
}
