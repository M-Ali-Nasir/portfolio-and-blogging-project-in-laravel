<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutmeController extends Controller
{
    public function index()
    {
        $user = User::select(
         'id',
         'name',
         'email',
         'phone',
         'address',
         'job',
         'degree',
         'birth_day',
         'profile_pic',
         'experience')->where('id',2)->first();
            //  dd($user);
        // $user = User::first();
        $auth_user = Auth::user();
        return view('admin.aboutme.index', compact('user','auth_user'));
    }

    public function update(Request $request,User $user){
      //  $validated = $request->validate(['name'=> ['required','min:3']]);
      $user = User::first();
      $validated = $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'degree' => 'required',
        'experience' => 'required',
        'birth_day' => 'required|date',
        'job' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if($request->hasfile('image')){
        if($user->profile_pic != null){
            Storage::delete('public/'.$user->profile_pic);
        }
        $get_new_file = $request->file('image')->store('images/profile-pic','public');
        $user->profile_pic = $get_new_file;
    }

    $user->update($validated);


    return to_route('admin.aboutme.index')->with('message','Data Updated');
    }
}

