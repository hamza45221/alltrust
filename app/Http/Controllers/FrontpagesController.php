<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpagesController extends Controller
{
    public function index()
    {
        return view('frontpages.index');
    }
}
