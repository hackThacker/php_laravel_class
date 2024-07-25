<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class FrontendLayout extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contactus(){
        return view('contactus');
    }
    public function course() {
        $courses = Course::all();
        return view('course', compact('courses'));
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
    public function admission(){
        return view('admission');
    }

}
