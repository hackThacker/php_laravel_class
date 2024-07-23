<?php

use Illuminate\Support\Facades\Route;

// Define a GET route for the root URL ('/')
// When accessed, this route will return the 'welcome' view
Route::get('/', function () {
    return view('home');
});

// Define a GET route for the '/about' URL
// When accessed, this route will return the 'about' view
Route::get('/about', function () {
    return view('about');
});

// Define a GET route for the '/contactus' URL
// When accessed, this route will return the 'contactus' view
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/welcome', function(){
    return view('welcome');
});

// Define a GET route for the '/niraj/{p}' URL
// The {p} parameter is a placeholder for a dynamic value
Route::get('/niraj/{p}', function ($p) {
    // The function receives the {p} parameter from the URL
    // Example: If the URL is '/niraj/123', then $p will be '123'

    // Return the value of $p
    // In the example, the return value would be '123'
    return $p;
});

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
});

// Define a GET route for the '/dynamic/{a}/{b}' URL
// The {a} and {b} parameters are placeholders for dynamic values
Route::get('/dynamic/{a}/{b}', function($a, $b) {
    // The function receives the {a} and {b} parameters from the URL
    // Example: If the URL is '/dynamic/John/Doe', then $a will be 'John' and $b will be 'Doe'

    // Return the 'dynamic' view, passing the variables $a and $b to it
    // The view will have access to $a and $b as variables
    return view('dynamic', compact('a', 'b'));

    // Note: Ensure that the 'dynamic' view exists in the resources/views directory
});
