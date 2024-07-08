<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'User Details Updated');
    }
}
