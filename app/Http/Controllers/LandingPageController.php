<?php

namespace App\Http\Controllers;

use App\Models\admin\Lottery;
use App\Models\User;
use App\Models\user\UserCoins;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function welcome()
    {
        // check if user login then sum coins
        $lotteries = Lottery::get();
        if (!auth()->user()) {
            return view('landingpage.welcome', compact('lotteries'));
        }
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        return view('landingpage.welcome', compact('lotteries', 'user_coins'));
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
