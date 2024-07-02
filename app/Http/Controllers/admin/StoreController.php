<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function add()
    {
        return view('admin.store.add');
    }

    public function storeProduct(Request $request)
    {
        return $request;
    }
}
