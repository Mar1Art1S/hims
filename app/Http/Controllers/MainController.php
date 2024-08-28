<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogs()
    {
        return view('blogs');
    }
}
