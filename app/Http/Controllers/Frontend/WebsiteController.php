<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function allTutorials()
    {
        return view('frontend.tutorials');
    }

    public function allBooks()
    {
        return view('frontend.books');
    }

    public function allNews()
    {
        return view('frontend.news');
    }

    public function allSmartPhone()
    {
        return view('frontend.smartdevice');
    }

    public function allSmartBand()
    {
        return view('frontend.smartdevice');
    }

    public function allSmartwatch()
    {
        return view('frontend.smartdevice');
    }

    public function allFeatureDevice()
    {
        return view('frontend.smartdevice');
    }

    public function allSmartTablet()
    {
        return view('frontend.smartdevice');
    }

    public function allUpcomingDevice()
    {
        return view('frontend.smartdevice');
    }

}
