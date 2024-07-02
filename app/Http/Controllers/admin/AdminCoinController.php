<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCoins;
use Illuminate\Http\Request;

class AdminCoinController extends Controller
{
    public function add()
    {
        return view('admin.coin.add');
    }

    public function store(Request $request)
    {
        // validating request data
        $request->validate([
            'price' => 'required',
            'qty' => 'required',
        ]);

        // storing data in database
        $coin = new AdminCoins();
        $coin->price = $request->price;
        $coin->qty = $request->qty;
        $coin->save();
        return redirect()->route('Admin.All.Coins')->with('success', 'Coin added successfully');
    }

    public function all()
    {
        $coins = AdminCoins::all();
        return view('admin.coin.all', compact('coins'));
    }
}
