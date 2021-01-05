<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('role', 'ASC')->paginate(20);

        return view('admin.users.index', compact('users'));
    }

    public function changeRole(Request $request, User $user)
    {   
        if($user->role != 'admin')
        {
            $user->role = $request->role;
            $user->save();
        }
        return back();
    }

}
