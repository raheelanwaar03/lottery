<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Lottery;
use Illuminate\Http\Request;

class AdminLotteryController extends Controller
{
    public function add()
    {
        return view('admin.lottery.add');
    }

    public function store(Request $request)
    {
        $image = $request->picture;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('lottery'), $imageName);

        $lottery = new Lottery();
        $lottery->title = $request->title;
        $lottery->price = $request->price;
        $lottery->time = $request->time;
        $lottery->picture = $imageName;
        $lottery->save();
        return redirect()->back()->with('success','New Lottery Added');

    }


}
