<?php
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Define a GET route for the root URL ('/')
// When accessed, this route will return the 'welcome' view
Route::get('/', function () {
    return view('home');
})->name('home');

// Define a GET route for the '/about' URL
// When accessed, this route will return the 'about' view
Route::get('/about', function () {
    return view('about');
})->name('about');

// Define a GET route for the '/contactus' URL
// When accessed, this route will return the 'contactus' view
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/course', function () {
    $courses = course::all();
    return view('course', compact('courses'));
})->name('course');

// Define a GET route for the '/niraj/{p}' URL
// The {p} parameter is a placeholder for a dynamic value
Route::get('/niraj/{p}', function ($p) {
    // The function receives the {p} parameter from the URL
    // Example: If the URL is '/niraj/123', then $p will be '123'

    // Return the value of $p
    // In the example, the return value would be '123'
    return $p;
})->name('niraj.show'); // Changed to 'niraj.show' for clarity


// Define a GET route for the '/admin/{p}/{a}/{b}' URL
// The {p}, {a}, and {b} parameters are placeholders for dynamic values
Route::get('/admin/{p}/{a}/{b}', function ($p, $a, $b) {
    // The function receives the {p}, {a}, and {b} parameters from the URL
    // Example: If the URL is '/admin/1/2/3', then $p will be '1', $a will be '2', and $b will be '3'

    // Concatenate the values of $p, $a, and $b and return the result
    // In the example, the return value would be '123'
    return $p . $a . $b;

    // Note: The values are treated as strings and concatenated
    // Ensure that the URL segments are appropriate for concatenation
})->name('admin.show');

// Define a GET route for the '/dynamic/{a}/{b}' URL
// The {a} and {b} parameters are placeholders for dynamic values
Route::get('/dynamic/{a}/{b}', function($a, $b) {
    // The function receives the {a} and {b} parameters from the URL
    // Example: If the URL is '/dynamic/John/Doe', then $a will be 'John' and $b will be 'Doe'

    // Return the 'dynamic' view, passing the variables $a and $b to it
    // The view will have access to $a and $b as variables
    return view('dynamic', compact('a', 'b'));

    // Note: Ensure that the 'dynamic' view exists in the resources/views directory
})->name('dynamic.show'); // Changed to 'niraj.show' for clarity


Route::post('/post_courses',function(Request $request){
{

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

})->name('post_course');
