<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profiles.profile');
    }

    public function addProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'profile_picture' => 'required'
            ]);
            $profiles = new Profile;
            $profiles->user_id = Auth::user()->id;
            $profiles->name = $request->input('name');
            $profiles->designation = $request->input('designation');
            if($request->hasFile('profile_picture'))
            {
                $file = $request->file('profile_picture');
                $file->move(public_path().'/uploads/', $file->getClientOriginalName());
                $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();
            }
            $profiles->profile_picture = $url;
            $profiles->save();
            return redirect('/home')->with('response', '¡Perfil Añadido Correctamente!');
    }
}
