<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.layouts.layout');
    }

    public function allTutorials()
    {
        //
    }

    public function allBooks()
    {
        //
    }

    public function allSmartDevice()
    {
        //
    }
}
