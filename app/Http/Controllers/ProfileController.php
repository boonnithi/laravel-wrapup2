<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ProfileController extends Controller
{
    public function showChangeProfileForm(){
        return view('changeprofile');
    }
    public function change()
    {
        $avatar = request()->file('avatar');//can add 'Request $request' at method's arguments, I use that becuase to try helper function but it's put same results.
        $ext = $avatar->guessClientExtension();//can use $file->extension(); for same results. 
        $avatar->storeAs('avatar/' . Auth::user()->id, 'avatar.' . $ext, 'avatar');

        return redirect('/home');
    }
}
