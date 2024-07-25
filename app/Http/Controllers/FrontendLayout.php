<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Admission;


class FrontendLayout extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contactus(){
        return view('contactus');
    }
    public function course() {
        $courses = Course::all();
        return view('course', compact('courses','admission'));
    }

    public function niraj(){
        // $p contains the value captured from the URL
        return view('niraj');
    }
    public function admin(){
        return view('admin');
    }
    public function dynamic(){
        return view('dynamic', compact('a', 'b'));
    }
    public function post_courses(Request $request){
       // Create new course instance
$Course = new Course();
$Course->name = $request->name;
$Course->price = $request->price;

// Handle file upload
if ($request->hasFile('file')) {
    $file = $request->file('file');
    $newName = time() . '_' . $file->getClientOriginalName();
    $file->move('images', $newName); // Move the file to 'images' directory with the new name
    $Course->file = 'images/' . $newName; // Set the file path for the Course object
}

$Course->save();
return redirect()->back();
}

    public function admission()
    {
        $courses = Course::all(); // Fetch all courses
         // Pass courses to the view
        $admissions = Admission::all();
        return view('admission', compact('admissions','courses'));
    }
    public function post_admission(Request $request)
{


    // Create new admission record
    $Admission = new Admission();
    $Admission->course_name = $request->course_name;
    $Admission->course_price = $request->course_price;
    $Admission->full_name = $request->full_name;
    $Admission->email = $request->email;
    $Admission->mobile_number = $request->mobile_number;
    $Admission->birthdate = $request->birthdate;
    $Admission->age = $request->age;
    $Admission->father_number = $request->father_number;
    $Admission->mother_number = $request->mother_number;
    $Admission->citizenship_id = $request->citizenship_id;
    $Admission->location = $request->location;
    // Handle file upload if present
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newName = time() . '_' . $image->getClientOriginalName();
        $image->move('images', $newName); // Move the file to 'images' directory with the new name
        $admission->image = 'images/' . $newName; // Set the file path for the Course object
    }
    $Admission->save();
    return redirect()->back();
}
}
