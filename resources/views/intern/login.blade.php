@extends('layouts.intern.internLayout')
@section('styles')
    <style type="text/css" rel="stylesheet">
        body{
            background-color:#fff;
        }
    </style>
@endsection

@section('content')
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

    <div class="container mt-5">
        <div class="card registration-card" style="background-color:#f3f5fc;">
        <div class="card login-card"  style="background-color:#f3f5fc;border:0; box-shadow: 0 0 0 0;">
            <div class="row g-0">
                <div class="col-md-6 login-image" style="display:flex;">
                    <img src="../assets/img/login.png" alt="Login Visual" class="img-fluid" style="width:350px; margin:auto; ">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title" style="font-size:48px;" data-translate="LOG IN">LOG IN</h2>
                        <form>
                            <p style="margin:0;" data-translate="Email Address">Email Address</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" style=" border:0;">
                            </div>
                            <p style="margin:0;" data-translate="Password">Password</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" style="border:0;" id="password" >
                                <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;"  onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye-slash"  style="border:0;" id="toggleIcon"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe" style="font-size:16px;"  data-translate="Remember me">Remember me</label>
                                </div>
                                <a href="./forgot_pw.html" class="forgot-password" style="text-decoration: none; font-size:16px;color:#000;" data-translate="LOG IN">Forgot Password?</a>
                            </div>
                            <button  class="btn btn-black w-100" style="background-color:#474bc2; color:white; border-radius:4px;" data-translate="Log In"><a href="./home_page_dashboard_before_approve.html" style="text-decoration: none; color:#fff;">Login</a></button>
                            <div class="social-login mt-3 text-center d-flex justify-content-center">
                                <button type="button" class="btn social-btn me-2" id="facebook-btn"><i class="bi bi-facebook"></i> Facebook</button>
                                <button type="button" class="btn social-btn" id="google-btn"><i class="bi bi-google"></i> Google</button>
                            </div> 
                            <p class="text-center mt-3" ><span data-translate="Don't have an account?">Don't have an account?</span> <a href="{{url('register')}}" style="text-decoration: none;color:#000;" data-translate="Register">Register</a></p>
                        </form>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript">
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById('password');
                var toggleIcon = document.getElementById('toggleIcon');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
                }
            }
    </script>
@endsection

