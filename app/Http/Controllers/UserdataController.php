<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserdataController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('user.data', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // return $request->all();

        $request->validate([
            'name' => 'required|max:255',
            // 'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'city' => 'max:255',
        ]);

        $user->update([
            'name' => $request->name,
            // 'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'city' => $request->city,
        ]);

        return back();
    }
    
    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'stara_lozinka' => 'required|max:255',
            'nova_lozinka' => 'required|min:6|max:255',
            'ponovi_lozinku' => 'required|min:6|max:255',
        ]);

        // Check if user enter correct password
        if(Hash::check( $request->stara_lozinka , auth()->user()->password )) {
            // If 2 passwords matched
            if( $request->nova_lozinka === $request->ponovi_lozinku ) {
                
                $user = User::find(auth()->user()->id);
                $user->password = bcrypt($request->nova_lozinka);
                $user->save();

                return back()->with('success', 'Uspešno ste promenili lozinku');
            }
            else {
                // If passwords not matches
                return back()->with('error', 'Niste dobro ponovili lozinku');
            }
            
        }
        else {
            // If wrong old password
            return back()->with('error', 'Uneli ste pogrešnu lozinku');
        }
    }
    
}
