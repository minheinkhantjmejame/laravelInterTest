@extends('layouts.intern.internLayout')


@section('styles')
    <style type="text/css" rel="stlyesheet">
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
            
            <!-- Language Dropdown -->
            <div class="dropdown" style="display: inline-block;">
                <button class="btn btn-white" style="border:none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="container ">
        <div class="card mx-auto" style="max-width: 600px; background-color:#f8f8f8;border: 1px solid #B1BBE7;">
            <div class="card-body text-center">
                <img src="../assets/img/application_success.png" alt="Success Image">
                <h1 class="card-title" style="font-size:32px;" data-translate="APPLICATION SUCCESSFUL">APPLICATION SUCCESSFUL</h1>
                <p class="card-text" style="font-size:16px;"><span data-translate="We have received your application! ">We have received your application! </span><br/><span data-translate="Please wait to proceed to the next step in a few days">Please wait to proceed to the next step in a few days </span><br/><span data-translate="and your application ID is">and your application ID is</span></p>
                <h1 class="mb-4" id="applicationId" style="font-weight: bold; font-size:48px;">112987630</h1>
                
                <a href="{{url('application_search')}}" class="btn btn-dark" style="background-color:#474bc2;color:white; border:0; border-radius:4px; font-size:16px;" data-translate="Go to your internship">Go to your internship</a>
            </div>
        </div> 
    </div>

@endsection


@section('script')

@endsection
