<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Lottery;
use App\Models\admin\Store;
use App\Models\AdminCoins;
use App\Models\user\PurchasedCoins;
use App\Models\user\UserCoins;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
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

    public function store()
    {
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        $products = Store::get();
        return view('user.store', compact('products','user_coins'));
    }

    public function coins()
    {
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        $coins = AdminCoins::get();
        return view('user.coins', compact('coins', 'user_coins'));
    }

    public function buyCoins($id)
    {
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        $coin = AdminCoins::find($id);
        return view('user.buyCoin', compact('coin', 'user_coins'));
    }

    public function coinData(Request $request, $id)
    {
        $coin = AdminCoins::find($id);

        $request->validate([
            'tid' => 'required',
            'image' => 'required',
        ]);
        // save image in different variable
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('screen_shot'), $imageName);

        $data = new PurchasedCoins();
        $data->user_id = auth()->user()->id;
        $data->qty = $coin->qty;
        $data->price = $coin->price;
        $data->tid = $request->tid;
        $data->image = $imageName;
        $data->save();
        return redirect()->route('User.Purchased.Coins')->with('success', 'Your request submit Successfully');
    }

    public function purchasedCoins()
    {
        $user_coins = UserCoins::where('user_id', auth()->user()->id)->get();
        $user_coins = $user_coins->sum('coins');
        $coins = PurchasedCoins::where('user_id', auth()->user()->id)->get();
        return view('user.coinPayments', compact('coins', 'user_coins'));
    }
}
