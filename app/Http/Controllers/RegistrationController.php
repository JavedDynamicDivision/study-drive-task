<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Course;
use Auth;
use DB;
use Monolog\Registry;
use Tests\Feature\RegistrationTest;

class RegistrationController extends Controller
{
    public function ViewReg()
    {
        $user = Auth::user();
        $register_students = Registration::where('user_id', $user->id)->get();
        return view('backend.register_student.view_all', compact('register_students'));
    }

    //Method to show create page for Student
    public function CreateReg()
    {
        $courses = Course::all();        
        return view('backend.register_student.create', compact('courses'));
    }

    //Method to store specific student course
    public function StoreReg(Request $request)
    {
        $request->validate([
            'course_id' => 'required'
        ]);

        //find current user or students (Logi)
        $user = Auth::user();

        //Find Current Course Reg_student 
        $reg_student = DB::table('courses')->where('id', $request->get('course_id'))->pluck('reg_student')->first();
        $updated_reg_student = $reg_student + 1;

        //Update Course Reg-Student

        DB::table('courses')
                    ->where('id', $request->get('course_id'))
                    ->update(['reg_student' => $updated_reg_student]);


       
        $data = new Registration([
            'user_id' => $user->id,
            'course_id' => $request->get('course_id')             
        ]);

        $data->save();

        $notification = array(
            'message' => 'Applied Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('view.reg')->with($notification);
    }

    //Method to show Edit Page with this Registration
    public function EditReg($id)
    {
        $registration = Registration::findOrFail($id);
        $courses = Course::all();
        return view('backend.register_student.edit', compact('registration', 'courses'));
    }

    //Method to Update Registration Data 
    public function UpdateReg(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required'
        ]);

        Registration::where('id', $id)->Update([
            'course_id' => $request->get('course_id')
        ]);

        $notification = array(
            'message' => 'Registration Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('view.reg')->with($notification);
    }

    //Delete Registration 
    public function DeleteReg($id)
    {
        $id = Registration::findOrFail($id);

        $reg_student = DB::table('courses')->where('id', $id->course_id)->pluck('reg_student')->first();
        $updated_reg_student = $reg_student - 1;

        //Update Course Reg-Student

        DB::table('courses')
                    ->where('id', $id->course_id)
                    ->update(['reg_student' => $updated_reg_student]);



        $id->delete();

        $notification = array(
            'message' => 'Registration Deleted Successfully!',
            'alert-type' => 'error'
        );
        return Redirect()->route('view.reg')->with($notification);
    }
}
