<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Publisher;

class PublishersController extends Controller
{
    public function index(){
        //menggunakan eloquent
        $data = Publisher::all();
        //menggunakan db
        //$data = DB::table('books')->get();

        return view('publisher', ['publisher' => $data]);
    }


    public function detailpublisher($id){
        // $detail = publisher::find($id);
        
        $detail = Publisher::join('books', 'publishers.id', '=', 'books.publisher_id')
            ->where('publishers.id', $id)
            ->select('publishers.*', 'books.*')
            ->first();  
            
        $buku = Publisher::join('books', 'publishers.id', '=', 'books.publisher_id')
            ->where('publishers.id', $id)
            ->select('publishers.*', 'books.*')
            ->get();

        return view('detailpublisher', ['detailpublisher' => $detail, 'buku' => $buku]);
    }
}
