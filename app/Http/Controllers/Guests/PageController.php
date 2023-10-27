<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Book;

class PageController extends Controller
{
    public function index()
    {

        return view('welcome', ['books' => Book::all(), 'heading' => 'Our Books']);
    }


    public function about()
    {

        return view('about', ['heading' => 'Our amazing library']);
    }

    public function contacts()
    {

        return view('contacts', ['heading' => 'Get in touch with us!']);
    }
}
