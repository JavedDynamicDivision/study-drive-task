<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    //Method for Showing All Courses
    public function ViewCourses()
    {
        $courses = Course::all();
        return view('backend.course.view_courses', compact('courses'));
    }

    //Method to show create view for adding new cousrse
    public function CreateCourses()
    {
        return view('backend.course.create_course');
    }

    //Method to store course 
    public function StoreCourse(Request $request)
    {
        //Validate for course_name and Capacity column
        $request->validate([
            'course_name' => 'required'
        ], 
        [
            'course_name.required' => 'Course Name is required!'
        ]);

        $data = new Course([
            'course_name' => strtolower($request->get('course_name')), 
            'capacity' => random_int(3,8),
        ]);
        
        $data->save();

        $notification = array(
            'message' => 'Course Inserted Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('view.courses')->with($notification);
    }

    // Method for Edit view
    public function EditCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.course.edit_course', compact('course'));
    }

    //Method to Update course
    public function UpdateCourse(Request $request, $id)
    {
         //Validate for course_name and Capacity column
         $request->validate([
            'course_name' => 'required', 
            'capacity' => 'required'
        ], 
        [
            'course_name.required' => 'Course Name is required!', 
            'capacity.required' => 'Course Capacity is required!'
        ]);
        
       Course::where('id', $id)->Update([
           'course_name' => $request->get('course_name'),
           'capacity' => $request->get('capacity')
       ]);

        $notification = array(
            'message' => 'Course Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('view.courses')->with($notification);
    }

    //Method to delete Course
    public function DeleteCourse($id)
    {
        $id = Course::findOrFail($id);
        $id->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully!',
            'alert-type' => 'error'
        );
        return Redirect()->route('view.courses')->with($notification);
    }
}
