<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
  return view('about');
})->name('AboutPage');

Route::get('academic_council', function () {
    return view('academic_council');
})->name('academic_council');


Route::get('admissions', function () {
    return view('admissions');
})->name('admissions');

Route::get('bog', function () {
    return view('bog');
})->name('bog');

Route::get('btech_admission', function () {
    return view('btech_admission');
})->name('btech_admission');

Route::get('btech_cse', function () {
    return view('btech_cse');
})->name('btech_cse');

Route::get('btech_it', function () {
    return view('btech_it');
})->name('btech_it');

Route::get('career', function () {
    return view('career');
})->name('career');

Route::get('directors_message', function () {
    return view('directors_message');
})->name('directors_message');

Route::get('faculty', function () {
    return view('faculty');
})->name('faculty');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('finance_committee', function () {
    return view('finance_committee');
})->name('finance_committee');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('invited_talks', function () {
    return view('invited_talks');
})->name('invited_talks');

Route::get('library', function () {
    return view('library');
})->name('library');

Route::get('mtech_admission', function () {
    return view('mtech_admission');
})->name('mtech_admission');

Route::get('mtech_cse', function () {
    return view('mtech_cse');
})->name('mtech_cse');

Route::get('phd', function () {
    return view('phd');
})->name('phd');

Route::get('phd_admission', function () {
    return view('phd_admission');
})->name('phd_admission');

Route::get('society_members', function () {
    return view('society_members');
})->name('society_members');

Route::get('rti', function () {
    return view('rti');
})->name('rti');

Route::get('staff', function () {
    return view('staff');
})->name('staff');

Route::get('student_corner', function () {
    return view('student_corner');
})->name('student_corner');

Route::get('visiting_faculty', function () {
    return view('visiting_faculty');
})->name('visiting_faculty');

Route::get('Students_login',function(){
  return view('Students_login');
})->name('Students_login');

Route::get('coming_soon',function(){
  return view('coming_soon');
})->name('coming_soon');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::group('myviews', function () {
//   Route::get('about', function () {return view('about');});
//   // Route::get('login', function () {});
//   //   Route::get('/', function () {});
//   //   Route::get('/', function () {});
//   //   Route::get('/', function () {});
//   //   Route::get('/', function () {});
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
