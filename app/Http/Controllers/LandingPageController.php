<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function welcome()
    {
        return view('landingpage.welcome');
    }

    public function cart()
    {
        return view('landingpage.cart');
    }

    public function details()
    {
        return view('landingpage.details');
    }

    public function aboutUs()
    {
        return view('landingpage.aboutUs');
    }

    public function detail()
    {
        return view('landingpage.details');
    }



}
