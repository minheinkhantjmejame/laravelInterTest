<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css"> 
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

        h6{
            text-align: center;
            font-size: 35px;
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

        /* Custom styling for error messages */
        .invalid-feedback {
            display: block;
            margin-top: 5px;
            font-size: 14px;
            color: #dc3545;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <!-- Logo (not translated) -->
            <a class="navbar-brand fw-bold" href="#" style="font-size:40px;">IN<span style="color:#3c3f7c;">T</span><span style="color:#4346a7;">E</span><span style="color:#4a4ec4;">R</span><span style="color:#5c60cf;">N</span><span style="color:#676bd6;">P</span><span style="color:#777adf;">L</span><span style="color:#888bea;">U</span><span style="color:#888cea;">S</span></a>
            
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

    <div class="card-body" style="margin:auto;">
        <form id="registrationForm" method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <h6 class="mb-5">Admin For HR accounts</h6>
            <div class="mb-5 linediv">            
                <p id="lineptag"><span></span>LOGIN TO YOUR ACCOUNT.</p>
            </div>
            <p class="mt-9">Email Address</p>
            <div class="mb-3 input-group"  style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            </div>
            @error('email')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror

            <p style="margin:0;">Password</p>
            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <span class="input-group-text"  style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;"  onclick="togglePasswordVisibility()">
                    <i class="bi bi-eye-slash"  style="border:0;" id="toggleIcon"></i>
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
                                      
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-black w-100 mb-3" style="background-color:#474bc2; border:0; border-radius:4px;"><a href="#" style="text-decoration: none; color:#fff;">Log In</a></button>
            </div>                           
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
</body>
</html>