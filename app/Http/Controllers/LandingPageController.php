<?php

namespace App\Http\Controllers;

use App\Models\admin\Lottery;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function welcome()
    {
        $lotteries = Lottery::get();
        return view('landingpage.welcome', compact('lotteries'));
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

    public function detail($id)
    {
        $lottery = Lottery::find($id);
        return view('landingpage.details', compact('lottery'));
    }
}
