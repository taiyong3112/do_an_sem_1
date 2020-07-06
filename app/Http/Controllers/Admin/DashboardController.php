<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register',compact('users'));
    }

    public function edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->role = $request->input('role');
        $users->update();

        return redirect()->route('admin.role-register')->with('status-success','Your Data is Updated');
    }

    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('admin.role-register')->with('status-success','Your Data is Deleted');
    }
}
