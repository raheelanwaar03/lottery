<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\PurchasedCoins;
use Illuminate\Http\Request;

class AllTranscations extends Controller
{
    public function coinTranscations()
    {
        $transcation = PurchasedCoins::where('status','pending')->get();
        return view('admin.coin.pendingTranscations', compact('transcation'));
    }
}
