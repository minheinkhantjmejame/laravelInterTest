<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('index');
});

// intern page
Route::get('/intern', function () {
    return view('intern.index');  // This is the Blade view for Intern page
})->name('intern');  // Named route "intern"

// intern page

//hr page
Route::get('/hr', function () {
    return view('hr.index');  // This is the Blade view for HR page
})->name('hr');  // Named route "hr"
//hr page