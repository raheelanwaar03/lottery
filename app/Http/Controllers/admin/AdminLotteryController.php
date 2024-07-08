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
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('lottery'), $imageName);

        $lottery = new Lottery();
        $lottery->title = $request->title;
        $lottery->price = $request->price;
        $lottery->time = $request->time;
        $lottery->picture = $imageName;
        $lottery->save();
        return redirect()->route('Admin.All.Lottery')->with('success', 'New Lottery Added');
    }

    public function all()
    {
        $lotteries = Lottery::get();
        return view('admin.lottery.all', compact('lotteries'));
    }

    public function edit($id)
    {
        $lottery = Lottery::find($id);
        return view('admin.lottery.edit', compact('lottery'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasfile('picture')) {
            $image = $request->picture;
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lottery'), $imageName);
            $lottery = Lottery::find($id);
            $lottery->title = $request->title;
            $lottery->price = $request->price;
            $lottery->time = $request->time;
            $lottery->picture = $imageName;
            $lottery->save();
            return redirect()->back()->with('success', 'Lottery Updated');
        } else {
            $lottery = Lottery::find($id);
            $lottery->title = $request->title;
            $lottery->price = $request->price;
            $lottery->time = $request->time;
            $lottery->save();
            return redirect()->back()->with('success', 'Lottery Updated');
        }
    }

    public function delete($id)
    {
        $lottery = Lottery::find($id);
        $lottery->delete();
        return redirect()->back()->with('success', 'Lottery Deleted');
    }
}
