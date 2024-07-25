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
        $admission = Admission::all();
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
        return view('admission', compact('courses')); // Pass courses to the view
    }
    public function post_admission(Request $request)
{
    // Create new admission record
    $admission = new Admission();
    $admission->course_name = $request->course_name;
    $admission->course_price = $request->course_price;
    $admission->full_name = $request->full_name;
    $admission->email = $request->email;
    $admission->mobile_number = $request->mobile_number;
    $admission->birthdate = $request->birthdate;
    $admission->age = $request->age;
    $admission->father_number = $request->father_number;
    $admission->mother_number = $request->mother_number;
    $admission->citizenship_id = $request->citizenship_id;
    $admission->location = $request->location;

    // Handle file upload if present
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newName = time() . '_' . $image->getClientOriginalName();
        $image->move('images', $newName); // Move the file to 'images' directory with the new name
        $admission->image = 'images/' . $newName; // Set the file path for the Course object
    }
    $admission->save();
    return redirect()->back();
}
}
