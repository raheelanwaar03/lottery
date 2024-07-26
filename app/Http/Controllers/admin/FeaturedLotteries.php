<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\featuredLotteries as AdminFeaturedLotteries;
use Illuminate\Http\Request;

class FeaturedLotteries extends Controller
{
    public function addFeatured()
    {
        return view('admin.featured.add');
    }

    public function storeFeatured(Request $request)
    {
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('featured'), $imageName);

        $lottery = new AdminFeaturedLotteries();
        $lottery->title = $request->title;
        $lottery->price = $request->price;
        $lottery->time = $request->time;
        $lottery->cate = $request->cate;
        $lottery->picture = $imageName;
        $lottery->save();
        return redirect()->route('Admin.All.Featured.Lotteries')->with('success', 'New Lottery Added');
    }

    public function allFeatured()
    {
        $featured = AdminFeaturedLotteries::get();
        return view('admin.featured.all',compact('featured'));
    }

}
