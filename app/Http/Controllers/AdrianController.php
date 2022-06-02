<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdrianController extends Controller
{
    public function index()
    {
        return view("adrian.index");
    }
}
