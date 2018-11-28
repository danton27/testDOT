<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function edit(){
        $header = 'Edit Profile';
        return view('admin.pages.editProfile',compact('header'));
    }
    public function show(){
        $header = 'Detail Profile';
        return view('admin.pages.showProfile',compact('header'));
    }
    public function update(Request $request){
        if($request->user()->avatar !== null){
            Storage::delete($request->user()->avatar);
        }

        $avatar = $request->file('avatar')->store('avatars');
        $request->user()->update([
           'avatar' => $avatar
        ]);
        return redirect()->back();
    }
}
