<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showHome(){
        return view('linkpages.home');
    }
    public function showAbout(){
        return view('linkpages.about');
    }
    public function showContact(){
        return view('linkpages.contact');
    }
    public function editProfile(){
        // $user=User::find($id);
        return view('linkpages.myprofile');
    }
    public function updateProfile(Request $request, $id){
         $request->validate([
            'name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'phoneno'=>'required',
            'state'=>'required',
            'city'=>'required',
            'image'=>'required',
        ]);
        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'phoneno'=>$request->phoneno,
            'state'=>$request->state,
            'city'=>$request->city,
            'image'=>$request->image,
        ]);
        Auth::user()->update([
            'profile_update' => 1,
        ]);

        return view('dashboard.dashboard');
    }
}
