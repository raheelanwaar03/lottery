<?php

namespace App\Http\Controllers;

use App\Models\admin\featuredLotteries;
use App\Models\admin\Lottery;
use App\Models\user\UserCoins;

class LandingPageController extends Controller
{

    public function welcome()
    {
        // check if user login then sum coins
        $lotteries = Lottery::get();
        $items = featuredLotteries::get();
        if (!auth()->user()) {
            return view('landingpage.welcome', compact('lotteries', 'items'));
        }
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        return view('landingpage.welcome', compact('lotteries', 'items', 'user_coins'));
    }

    public function cart()
    {
        return view('landingpage.cart');
    }

    public function details()
    {
        if (!auth()->user()) {
            return view('landingpage.details');
        }
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        return view('landingpage.details', compact('user_coins'));
    }

    public function aboutUs()
    {
        return view('landingpage.aboutUs');
    }

    public function detail($id)
    {
        $lottery = Lottery::find($id);
        if (!auth()->user()) {
            return view('landingpage.details', compact('lottery'));
        }
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        return view('landingpage.details', compact('lottery', 'user_coins'));
    }
}
