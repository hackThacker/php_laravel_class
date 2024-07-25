<?php
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendLayout::class('home')])->name('home');

Route::get('/', [FrontendLayout::class('about')])->name('about');

Route::get('/contactus', [FrontendLayout::class('contactus')])->name('contactus');

Route::get('/course', [FrontendLayout::class('course')])->name('course');

Route::get('/niraj/{p}', [FrontendLayout::class('niraj')])->name('niraj.show');

Route::get('/admin/{p}/{a}/{b}', [FrontendLayout::class('admin')])->name('admin.show');

Route::get('/dynamic/{a}/{b}', [FrontendLayout::class('dynamic')])->name('dynamic.show');

Route::post('/post_courses', [FrontendLayout::class('post_courses')])->name('post_course');
