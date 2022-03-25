<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView()
    {        
        $users = User::all();
        
        return view('backend.users.index', compact('users'));        
    }

    public function UserAdd()
    {
        return view('backend.users.create');
    }

    public function UserStore(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);

      
        $data = new User();
        $data->role = 'Student';
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);        
        $data->save();


        $notification = array(
            'message' => 'Student Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }


    public function UserEdit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    public function UserUpdate(Request $request, $id)
    {
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;

        $data->save();


        $notification = array(
            'message' => 'User Updated Successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);        
    }

    public function UserDelete($id)
    {        
        $user = User::findOrFail($id);
        $user->delete();
        $notification = array(
            'message' => 'User Deleted Successfully!',
            'alert-type' => 'warning'
        );

        return redirect()->route('user.view')->with($notification); 
    }
}
