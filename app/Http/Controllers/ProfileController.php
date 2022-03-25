<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.users.view_profile', compact('user'));
    }

    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.users.edit_profile', compact('user'));
    }

    public function ProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;


        //if(Auth::user()->role == 'Joiner')
        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('upload/user_profile/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_profile'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('profile.view')->with($notification);
    }

    public function PasswordView()
    {
        return view('backend.users.edit_password');
    }

    public function PasswordUpdate(Request $request)
    {
        $hashPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
