<?php

namespace Blog\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('blog::home.index');
    }

    public function practice()
    {
        return view('blog::home.practice');
    }
}
