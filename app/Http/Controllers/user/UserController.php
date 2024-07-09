<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\AdminCoins;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function store()
    {
        $products = Store::all();
        return view('user.store', compact('products'));
    }

    public function coins()
    {
        $coins = AdminCoins::get();
        return view('user.coins', compact('coins'));
    }
}
