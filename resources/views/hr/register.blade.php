
@extends('layouts.hr.hrLayout')


@section('styles')
    <style type="text/css" rel="stylesheet">
        body {
            background-color: #f8f9fc;
            height: 100vh;

            position:relative;

        }

        .card-body {
            background: #fff;
            padding: 40px;
            width: 100%;
            height:100%;
            position:absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card-body #registrationForm{
            width:400px;
            height:500px;
        }

        h2 {
            text-align: center;
            font-size: 70px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .input-group-text {
            border: none;
            background-color: #fff;
        }

        .form-control {
            border: none;
            box-shadow: none;
        }

        .form-control:focus {
            box-shadow: none;
            border: 1px solid #ccc;
        }

        .btn-black {
            background-color: #474bc2;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 6px;
        }

        .btn-black:hover {
            background-color: #474BC2;
        }

        .social-login .btn {
            border: 1px solid #474BC2;
            border-radius:4px;
            color: #474BC2;
            width: 48%;
            padding: 10px;
            font-size:20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login .btn i {
            margin-right: 8px;
        }

        .social-login .btn:hover {
            background-color: #f8f9fc;
        }

    </style>
@endsection



    
@section('content')
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container d-flex justify-content-start align-items-center">
                <!-- INTERNPLUS -->
                <a class="navbar-brand fw-bold me-3" href="{{route('hr')}}" style="font-size:40px;">INTERNPLUS</a>
                
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

    <div class="card-body" style="margin:auto;">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form id="registrationForm"  action="{{route('hr.register')}}" method="POST">
                @csrf
                <h2>Register</h2>
                <p style="margin:0;">First Name</p>
                <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-person" ></i></span>
                    <input type="text" class="form-control" id="firstName" name="first_name" style="border:0;"  required>
                </div>
                <p style="margin:0;">Last Name</p>
                <div class="mb-3 input-group"  style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-person-check"></i></span>
                    <input type="text" class="form-control" id="lastName" name="last_name" style="border:0;"   required>
                </div>
                <p style="margin:0;">Email Address</p>
                <div class="mb-3 input-group"  style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control"  style="border:0;" id="email" name="email"  required>
                </div>
                <p style="margin:0;">Password</p>
                <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <span class="input-group-text"  style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="password"  style="border:0;"  aria-label="Password" required>
                    <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;"  onclick="togglePasswordVisibility()">
                        <i class="bi bi-eye-slash"  style="border:0;" id="toggleIcon"></i>
                    </span>
                </div>
                                        
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-black w-100 mb-3" style="background-color:#474bc2;color:white; border:0; border-radius:4px;">Register</button>
                </div>
                <div class="social-login text-center d-flex justify-content-center">
                    <button type="button" class="btn social-btn me-3" style="color:#474bc2; border-color:#474bc2;" id="facebook-btn"><i class="bi bi-facebook"></i> Facebook</button>
                    <button type="button" class="btn social-btn" id="google-btn" style="color:#474bc2; border-color:#474bc2; border-radius:4px;"><i class="bi bi-google"></i> Google</button>
                </div>                            
            </form>
            
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












        
        
        

