<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookDetailsController extends Controller
{
    public function __invoke()
    {
        $id = session()->get('id') ;
        $books = DB:: select('select * from book');
        return view('bookDetails', compact("books"));
    }
}