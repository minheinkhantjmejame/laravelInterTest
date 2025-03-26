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
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('EN')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('THAI')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('MYAN')">MYAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
    <!-- Success Message Card -->
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body text-center">
                <img src="../assets/img/application_success.png" alt="Success Image" class="mb-3">
                <h1 class="card-title" style="font-size:32px;">SUBMIT SUCCESSFULLY</h1>
                <p class="card-text">We have received your document! <br/>Please wait to proceed to the next step in a few days</p>
                <a href="{{url('pending_success')}}" class="btn btn-dark" style="background-color:#474bc2;color:white; border:0; border-radius:4px;">Close</a>
            </div>
        </div>
    </div>
@endsection 


@section('script')

@endsection