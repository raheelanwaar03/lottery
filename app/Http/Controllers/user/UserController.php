<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use App\Models\AdminCoins;
use App\Models\user\PurchasedCoins;
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

    public function buyCoins($id)
    {
        $coin = AdminCoins::find($id);
        return view('user.buyCoin', compact('coin'));
    }

    public function coinData(Request $request, $id)
    {
        $coin = AdminCoins::find($id);

        $request->validate([
            'tid' => 'required',
            'image' => 'required',
        ]);
        // save image in different variable
        $image = $request->file('image');
        $imageName = rand(111111, 999999) . $image->getClientOriginalName();
        $image->move(public_path('screen_shots'), $imageName);
        $data = new PurchasedCoins();
        $data->user_id = auth()->user()->id;
        $data->qty = $coin->qty;
        $data->price = $coin->price;
        $data->tid = $request->tid;
        $data->image = $imageName;
        $data->save();
        return redirect()->route('User.Coins')->with('success', 'Your request submit Successfully');
    }

    public function purchasedCoins()
    {
        $coins = PurchasedCoins::where('user_id', auth()->user()->id)->get();
        return view('user.coinPayments', compact('coins'));
    }
}
