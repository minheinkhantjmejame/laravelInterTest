@extends('layouts.intern.internLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
        body{
            background-color:#fff;
        }
    </style>
@endsection

@section('content')
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container d-flex justify-content-start align-items-center">
            <!-- INTERNPLUS -->
            <a class="navbar-brand fw-bold me-3" href="{{url('intern')}}" style="font-size:40px;">INTERNPLUS</a>
            
            <!-- Dropdown -->
            <div class="dropdown">
                <button class="btn btn-white p-0" style="border:none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('en')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('th')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('my')">MYAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Success Message Card -->
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body text-center">
                <img src="../assets/img/application_success.png" alt="Success Image" class="mb-3">
                <h1 class="card-title" style="font-size:32px;" data-translate="SUBMIT SUCCESSFULLY">SUBMIT SUCCESSFULLY</h1>
                <p class="card-text"><span data-translate="We have received your answer!">We have received your answer!</span> <br/><span data-translate="Please wait for the evaluation and review your answer.">Please wait for the evaluation and review your answer.</span></p>
                <a href="{{url('pending_request_internship_application')}}" class="btn btn-dark" style="background-color:#474bc2;color:white; border:0; border-radius:4px;" data-translate="Close">Close</a>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
