<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

// Define a GET route in Laravel that matches the URL pattern '/niraj/{p}'
// When a user navigates to this URL, the function provided will be executed
Route::get('/niraj/{p}', function ($p) {

    // The function takes one parameter: $p
    // This parameter is extracted from the URL segment
    // For example, if the URL is '/niraj/123', then $p = 123

    // The function will return the value of $p
    // In this example, the return value would be 123
    return $p;

    // Note: This function assumes that the URL segment is a single value
    // If additional segments are added, they will not be handled by this route
});


// Define a GET route in Laravel that matches the URL pattern '/admin/{p}/{a}/{b}'
// When a user navigates to this URL, the function provided will be executed
Route::get('/admin/{p}/{a}/{b}', function ($p, $a, $b) {

    // The function takes three parameters: $p, $a, and $b
    // These parameters are extracted from the URL segments
    // For example, if the URL is '/admin/1/2/3', then $p = 1, $a = 2, and $b = 3

    // The function will return the sum of these three parameters
    // In this example, the return value would be 6 (1 + 2 + 3)
    // In this example, the return value return + to add . to join
    return $p . $a . $b;

    // Note: This function assumes that the URL segments are numeric
    // If non-numeric values are passed, the behavior may not be as expected
});

// Define a GET route in Laravel that matches the URL pattern '/contact/{a}/{b}'
// When a user navigates to this URL, the function provided will be executed
Route::get('/dynamic/{a}/{b}', function($a, $b) {

    // The function takes two parameters: $a and $b
    // These parameters are extracted from the URL segments
    // For example, if the URL is '/contact/John/Doe', then $a = 'John' and $b = 'Doe'

    // The function will return a view called 'contactus'
    // The compact function is used to pass the variables $a and $b to the view
    // This means the 'contactus' view will have access to $a and $b as variables
    return view('dynamic', compact('a', 'b'));

    // Note: Ensure that the 'contactus' view exists in the resources/views directory
    // The view will use the values of $a and $b as needed
});
