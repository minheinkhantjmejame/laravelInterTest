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
            height:520px;
            position:relative;
            overflow: hidden;
            
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

        .linediv{
            width:100%;
            height:1px;
            position:relative;
            margin-bottom:0;

        }

        #lineptag{
            font-size: 18px;
            font-weight: bold;
            color: #323438;
            letter-spacing: 3px;
            position:absolute;
            transform:translateY(-50%);
            right:10px;;
        }

        #lineptag span{
            position: absolute;
            top: 50%;
            width: 70px;
            height: 2px;
            background-color: #323438;
            transform:translateX(-150%)translateY(-50%);
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
        <form id="registrationForm"  action="{{route('hr.login')}}" method="POST">
            @csrf
            <h2 class="mb-5">Login</h2>
            <div class="mb-5 linediv">            
                <p id="lineptag"><span></span>LOGIN TO YOUR ACCOUNT.</p>
            </div>
            <p class="mt-9">Email Address</p>
            <div class="mb-3 input-group"  style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control"  style="border:0;" id="email" name="email" required>
            </div>
            <p style="margin:0;">Password</p>
            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <span class="input-group-text"  style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password"  style="border:0;"  aria-label="Password" required>
                <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;"  onclick="togglePasswordVisibility()">
                    <i class="bi bi-eye-slash"  style="border:0;" id="toggleIcon"></i>
                </span>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe" style="font-size:16px;">Remember me</label>
                </div>
                <a href="#" class="forgot-password" style="text-decoration: none;text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);font-size:16px;color:#fff;">Forgot Password?</a>
            </div>
                                      
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-black w-100 mb-3" style="background-color:#474bc2; border:0; border-radius:4px;">Log In</button>
                <button type="submit" class="btn btn-black w-100 mb-3" style="background-color:#b1bbe7; border:0; border-radius:4px;"><a href="#" style="text-decoration: none; color:#000;">Request Demo</a></button>
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




 







        
        

