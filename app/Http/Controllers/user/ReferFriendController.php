<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\UserCoins;
use Illuminate\Http\Request;

class ReferFriendController extends Controller
{
    public function index()
    {
        if (!auth()->user()) {
            return view('landingpage.welcome', compact('lotteries'));
        }
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        return view('user.refer', compact('user_coins'));
    }
}
