<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('index');
});

// intern pages
Route::get('intern', function () {
    return view('intern.index'); 
})->name('intern');  

// Program Page
Route::get('/program', function () {
    // Define your job categories here (or fetch from the database)
    $categories = [
        'IT' => [
            ['title' => 'Software Developer Intern', 'description' => 'Work on development projects...', 'positions' => 3],
            ['title' => 'Web Developer Intern', 'description' => 'Design and develop websites...', 'positions' => 2],
        ],
        'Marketing' => [
            ['title' => 'Marketing Intern', 'description' => 'Assist in marketing campaigns...', 'positions' => 1],
            ['title' => 'Social Media Intern', 'description' => 'Manage social media accounts...', 'positions' => 2],
        ]
    ];

    // Set the default category or retrieve it from request
    $currentCategory = 'IT'; // Or fetch from request, e.g., $currentCategory = request('category');

    // Pass the categories and currentCategory to the view
    return view('intern.program', compact('categories', 'currentCategory'));
});




// Application Page
Route::get('/application_search', function () {
    return view('intern.application_search');
});

// Register Page
Route::get('/register', function () {
    return view('intern.register'); 
});

// Login Page
Route::get('/login', function () {
    return view('intern.login');
});

// Internship Page 
Route::get('/internship', function () {
    $title = request('title');
    $category = request('category');
    $positions = request('positions');

    // Set the current category, or fallback if not passed
    $currentCategory = $category ?: 'IT';  // Default to 'IT' if category is not passed

    return view('intern.internship', compact('title', 'category', 'positions', 'currentCategory'));
})->name('internship');

// Application Success Page
Route::get('/application_success', function () {
    return view('intern.application_success');
});

// Application Success Page
Route::get('/pending_status', function () {
    return view('intern.pending_status');
});


// intern pages

//hr pages
Route::get('hr', function () {
    return view('hr.index');  // This is the Blade view for HR page
})->name('hr');  // Named route "hr"
//hr pages