<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function welcome()
    {
        return view('landingpage.welcome');
    }

    public function contest()
    {
        return view('landingpage.contest');
    }

    public function winner()
    {
        return view('landingpage.winner');
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
