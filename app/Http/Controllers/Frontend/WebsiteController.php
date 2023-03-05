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
        return view('frontend.pages.tutorials');
    }

    public function allBooks()
    {
        return view('frontend.pages.books');
    }

    public function allNews()
    {
        return view('frontend.pages.news');
    }

    public function allSmartPhone()
    {
        return view('frontend.pages.smartdevice');
    }

    public function allSmartBand()
    {
        return view('frontend.pages.smartdevice');
    }

    public function allSmartwatch()
    {
        return view('frontend.pages.smartdevice');
    }

    public function allFeatureDevice()
    {
        return view('frontend.pages.smartdevice');
    }

    public function allSmartTablet()
    {
        return view('frontend.pages.smartdevice');
    }

    public function allUpcomingDevice()
    {
        return view('frontend.pages.smartdevice');
    }

}
