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

// pending status Page
Route::get('/pending_status', function () {
    return view('intern.pending_status');
});


// request internship application Page
Route::get('/request_internship_application', function () {
    return view('intern.request_internship_application');
});

// skill test form Page
Route::get('/skill_test_form', function () {
    return view('intern.skill_test_form');
});

// powerpoint presentation form page
Route::get('/presentation_form', function () {
    return view('intern.presentation_form');
});

// intruduce yourself form page
Route::get('/introduction_video', function () {
    return view('intern.introduction_video');
});

// document checklist
Route::get('/document_checklist', function () {
    return view('intern.document_checklist');
});

// internship registration form page
Route::get('/internship_registration_form', function () {
    return view('intern.internship_registration_form');
});

// request internship application success page
Route::get('/request_internship_application_success', function () {
    return view('intern.request_internship_application_success');
});

// pending_request_internship_application page
Route::get('/pending_request_internship_application', function () {
    return view('intern.pending_request_internship_application');
});

// request internship document pending 
Route::get('/request_internship_document_pending', function () {
    return view('intern.request_internship_document_pending');
});

// request_internship_document_submission page
Route::get('/request_internship_document_submission', function () {
    return view('intern.request_internship_document_submission');
});

// document form university page
Route::get('/document_from_university', function () {
    return view('intern.document_from_university');
});

// request_internship_document_submission success
Route::get('/request_internship_document_submission_success', function () {
    return view('intern.request_internship_document_submission_success');
});

// pending acceptance terms 
Route::get('/pending_acceptance_terms', function () {
    return view('intern.pending_acceptance_terms');
});

// acceptance terms form
Route::get('/acceptance_terms_form', function () {
    return view('intern.acceptance_terms_form');
});

// acceptance terms form success
Route::get('/acceptance_terms_form_fill', function () {
    return view('intern.acceptance_terms_form_fill');
});

// acceptance terms form success
Route::get('/acceptance_terms_form_success', function () {
    return view('intern.acceptance_terms_form_success');
});

// pending success
Route::get('/pending_success', function () {
    return view('intern.pending_success');
});

// success login register after application success

Route::get('/success_login_register', function () {
    return view('intern.success_login_register');
});

// intern pages

//hr pages
Route::get('hr', function () {
    return view('hr.index');  // This is the Blade view for HR page
})->name('hr');  // Named route "hr"
//hr pages