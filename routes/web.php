<?php
use App\Http\Controllers\FrontendLayout;
use App\Models\course;
use App\Models\admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendLayout::class, 'home'])->name('home');

Route::get('/contactus', [FrontendLayout::class, 'contactus'])->name('contactus');

Route::get('/course', [FrontendLayout::class, 'course'])->name('course');

Route::get('/niraj/{p}', [FrontendLayout::class, 'niraj'])->name('niraj.show');

Route::get('/admin/{p}/{a}/{b}', [FrontendLayout::class, 'admin'])->name('admin.show');

Route::get('/dynamic/{a}/{b}', [FrontendLayout::class, 'dynamic'])->name('dynamic.show');

Route::post('/post_courses', [FrontendLayout::class, 'post_courses'])->name('post_course');

Route::get('/admission', [FrontendLayout::class, 'admission'])->name('admission');

Route::get('/about', [FrontendLayout::class, 'about'])->name('about'); // Add this line for the 'about' route

Route::post('/post_admission', [FrontendLayout::class, 'post_admission'])->name('post_admission');



