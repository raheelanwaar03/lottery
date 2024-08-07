<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function addProduct()
    {
        return view('admin.store.add');
    }

    public function storeProduct(Request $request)
    {
        // applying condition on form data
        $request->validate([
            'title' => 'required',
            'coins' => 'required',
            'image' => 'required',
        ]);
        // saving image in a variable with its original extension
        $image = $request->file('image');
        $imageName = rand(1111111, 9999999) . $image->getClientOriginalName();
        $image->move(public_path('product'), $imageName);
        // storing data in database
        $store = new Store();
        $store->title = $request->title;
        $store->coins = $request->coins;
        $store->image = $imageName;
        $store->save();
        return redirect()->route('Admin.All.Products')->with('success', 'Product Added Successfully');
    }

    public function allProduct()
    {
        $stores = Store::all();
        return view('admin.store.all', compact('stores'));
    }

    public function editProduct($id)
    {
        $product = Store::find($id);
        return view('admin.store.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        // checking if admin want to edit image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = rand(1111111, 9999999) . $image->getClientOriginalName();
            $image->move(public_path('product'), $imageName);
            // updating data in database
            $store = Store::find($id);
            $store->title = $request->title;
            $store->coins = $request->coins;
            $store->image = $imageName;
            $store->save();
            return redirect()->back()->with('success', 'Product Updated Successfully');
        } else {
            // updating data in database
            $store = Store::find($id);
            $store->title = $request->title;
            $store->coins = $request->coins;
            $store->save();
            return redirect()->back()->with('success', 'Product Updated Successfully');
        }
    }

    public function deleteProduct($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

}
