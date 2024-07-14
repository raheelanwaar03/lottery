<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Lottery;
use App\Models\user\PurchasaeLottery;
use App\Models\user\UserCoins;
use Illuminate\Http\Request;

class PurchaseLottery extends Controller
{
    public function purchaseLottery(Request $request, $id)
    {
        // checking if user have enough coins
        $user = UserCoins::where('user_id', auth()->user()->id)->first();
        return $user;


        // storing user data and deducting amount from user coin wallet
        $lottery = Lottery::find($id);

        $totalPrice = $lottery->price * $request->ticket_qty;
        // storing data
        $lottery_owner = new PurchasaeLottery();
        $lottery_owner->user_id = auth()->user()->id;
        $lottery_owner->user_name = auth()->user()->name;
        $lottery_owner->lottery_id = $id;
        $lottery_owner->ticket_qty = $request->ticket_qty;
        $lottery_owner->price = $lottery->price;
        $lottery_owner->total_price = $totalPrice;
        $lottery_owner->save();
        return redirect()->route('Welcome')->with('success', 'Lottery Purchased Successfully');
    }
}
