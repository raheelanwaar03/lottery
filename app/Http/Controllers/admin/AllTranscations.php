<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\PurchasedCoins;
use App\Models\user\UserCoins;
use Illuminate\Http\Request;

class AllTranscations extends Controller
{
    public function coinTranscations()
    {
        $transcation = PurchasedCoins::where('status', 'pending')->get();
        return view('admin.coin.pendingTranscations', compact('transcation'));
    }

    public function makeTranscationApproved($id)
    {
        $transcation = PurchasedCoins::find($id);
        $transcation->status = 'approved';
        $transcation->save();
        $user = UserCoins::find($transcation->user_id);
        if ($user == null) {
            $user = new UserCoins();
            $user->user_id = $transcation->user_id;
            $user->coins = $transcation->qty;
            $user->save();
        }
        $user->coins += $transcation->qty;
        $user->save();
        // add to user coin wallet

        return redirect()->back()->with('success', 'Transcation Approved');
    }
    public function editTranscation($id)
    {
        $transcation = PurchasedCoins::find($id);
        return view('admin.coin.editTranscation', compact('transcation'));
    }

    public function update_coin_qty(Request $request, $id)
    {
        $transcation = PurchasedCoins::find($id);
        $transcation->qty = $request->qty;
        $transcation->status = 'approved';
        $transcation->save();

        // add coins on user coin wallet
        $user = UserCoins::find($transcation->user_id);
        if ($user == null) {
            $user = new UserCoins();
            $user->user_id = $transcation->user_id;
            $user->coins = $transcation->qty;
            $user->save();
        }
        $user->coins += $transcation->qty;
        $user->save();
        return redirect()->route('Admin.Pending.Coin.Transcations')->with('success', 'Transcation Updated');
    }
}
