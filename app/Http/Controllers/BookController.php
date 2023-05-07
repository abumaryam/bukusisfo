<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class BookController extends Controller
{
    public function index()
    {
        $model = new Book();

        try {
            $book_data = $model->full();
        } catch (Exception $e) {
            $message = $e->getMessage();
            echo "Terjadi kesalahan";
            exit;
        }


        return view('book/index',['buku'=>$book_data]);
        
    }
    
    public function show($id,$status)
    {
        return "Anda mengambil buku no {$id} yang berstatus {$status}";
    }
}
