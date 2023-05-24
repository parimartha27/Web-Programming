<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class BooksController extends Controller
{
    public function index(){
        //menggunakan eloquent
        $data = Book::all();
        //menggunakan db
        //$data = DB::table('books')->get();

        return view('home', ['data' => $data]);
    }

    public function detailbook($id){
        // $detail = Book::find($id);
        
        $detail = Book::join('publishers', 'books.publisher_id', '=', 'publishers.id')
            ->where('books.id', $id)
            ->select('books.*', 'publishers.*')
            ->first();   

        return view('detailbook', ['details' => $detail]);
    }
}
