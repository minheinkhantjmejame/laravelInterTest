@extends('layouts.intern.internLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
        body {
            background-color: #fff;
        }
        .card {
            width: 50%; /* Adjust width to match the photo */
            height: 400px; /* Fixed height for the card */
            padding: 20px;
            background-color: #F3F5FC;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space between top and bottom content */
        }
        .card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .card p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #666;
        }
        .form-control {
            height: 40px;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* Default border color */
            border-radius: 4px;
            padding: 10px;
            width: 70%; /* Adjust width of the input box */
            margin: 0 auto; /* Center the input box */
        }
        input {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #697077;
            border: 1px solid #ccc; /* Default border color */
        }
        .btn-primary {
            height: 40px;
            background-color: #474BC2;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 40%; /* Match the width of the input box */
            margin: 0 auto; /* Center the button */
        }
        .btn-primary:hover {
            background-color: #686bc5;
        }
        .code-input {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .code-input input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 18px;
            margin: 0 2px; /* Adjust the space between input boxes */
            border: 1px solid #B5B6B6; /* Default border color */
            box-shadow:none;
            transition: border-color 0.3s ease; /* Smooth transition for border color */
        }
        .code-input input:focus {
            border-color: #474BC2; /* Border color when focused */
            outline: none; /* Remove default outline */
            cursor: text; /* Change cursor to text when focused */
        }
        .password-input-container {
            position: relative;
            width: 70%; /* Match the width of the input box */
            margin: 0 auto; /* Center the container */
        }
        .input-wrapper {
            position: relative;
        }
        .input-wrapper .password-toggle {
            position: absolute;
            right: 10px; /* Positions icon inside the input */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }
        .input-wrapper .password-toggle:hover {
            color: #474BC2;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
            text-align: left;
            margin-left: 15%; /* Align with the input box */
        }
        #passwordResetSuccessCard .card {
            width: 70%; /* Match design */
            padding: 20px;
            background-color: #F3F5FC;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        #passwordResetSuccessCard h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        #passwordResetSuccessCard p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        #passwordResetSuccessCard .btn-primary {
            width: 30%;
            background-color: #474BC2;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        #passwordResetSuccessCard .btn-primary:hover {
            background-color: #686bc5;
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
    
    <!-- Forgot Password Card -->
    <div class="container" id="emailCard">
        <div class="card mx-auto" style="border: 1px solid #B1BBE7;">
            <div class="card-body text-center">
                <h3 data-translate="FORGOT PASSWORD?">FORGOT PASSWORD?</h3>
                <p style="color:#000;">Enter your email to reset your password</p>
                <form class="text-center">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                </form>
            </div>
            <div class="text-center" style="border: none;">
                <button type="button" class="btn btn-primary" data-translate="Send 5-digit code" onclick="showCodeCard()">Send 5-digit code</button>
            </div>
        </div>
    </div>

    <!-- Enter Code Card -->
    <div class="container" id="codeCard" style="display: none;">
        <div class="card mx-auto" style="border: 1px solid #B1BBE7;">
            <div class="card-body text-center">
                <h3 data-translate="ENTER YOUR CODE">ENTER YOUR CODE</h3>
                <p><span  data-translate="We sent a code to">We sent a code to</span> <b><span id="userEmail"></span></b></p>
                <div class="code-input">
                    <input type="text" maxlength="1" class="form-control" id="code1">
                    <input type="text" maxlength="1" class="form-control" id="code2">
                    <input type="text" maxlength="1" class="form-control" id="code3">
                    <input type="text" maxlength="1" class="form-control" id="code4">
                    <input type="text" maxlength="1" class="form-control" id="code5">
                </div>
                <p style="margin-bottom:0;" data-translate="If you didn't receive the code?">If you didn't receive the code? </p>
                <a href="#" style="text-decoration:none; color:#474BC2;"onclick="resendCode()">RESEND</a>
            </div>
            <div class="text-center" style="border: none;">
                <button type="button" class="btn btn-primary" data-translate="Continue" onclick="submitCode()">Continue</button>
            </div>
        </div>
    </div>

    <!-- Set New Password Card -->
    <div class="container" id="newPasswordCard" style="display: none;">
        <div class="card mx-auto" style="border: 1px solid #B1BBE7; width: 50%; height: 400px; padding: 20px; background-color: #F3F5FC; display: flex; flex-direction: column; justify-content: space-between;">
            <div class="card-body text-center" style="padding: 0;">
                <h3 data-translate="NEW PASSWORD" style="font-size: 24px; margin-bottom: 15px;" data-translate="NEW PASSWORD">NEW PASSWORD</h3>
                <p style="color: #000; font-size: 14px; margin-bottom: 20px;"  data-translate="Must be at least 8 characters.">Must be at least 8 characters.</p>
            
                <div class="password-input-container" style="position: relative; width: 70%; margin: 0 auto;">
                    <label for="newPassword" class="form-label" style="display: block; margin-bottom: 5px; font-size: 14px; color: #333; text-align: left; margin-left: 15%;" data-translate="Password">Password</label>
                    <div class="input-wrapper" style="position: relative; width: 100%;">
                        <input type="password" class="form-control" id="newPassword" required style="height: 40px; border: 1px solid #ccc; border-radius: 4px; padding: 10px 40px 10px 10px; width: 100%; margin: 0; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); color: #697077;">
                        <i class="bi bi-eye-slash password-toggle" onclick="togglePassword('newPassword', this)" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; font-size: 18px; color: #333; background-color: #fff; height: 40px; line-height: 40px; padding: 0 5px; border-top:1px solid #ccc;border-bottom:1px solid #ccc;"></i>
                    </div>
                </div>
            
                <div class="password-input-container" style="position: relative; width: 70%; margin: 20px auto 0;">
                    <label for="confirmPassword" class="form-label" style="display: block; margin-bottom: 5px; font-size: 14px; color: #333; text-align: left; margin-left: 15%;" data-translate="Confirm Password">Confirm Password</label>
                    <div class="input-wrapper" style="position: relative; width: 100%;">
                        <input type="password" class="form-control" id="confirmPassword" required style="height: 40px; border: 1px solid #ccc; border-radius: 4px; padding: 10px 40px 10px 10px; width: 100%; margin: 0; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); color: #697077;">
                        <i class="bi bi-eye-slash password-toggle" onclick="togglePassword('confirmPassword', this)" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; font-size: 18px; color: #333; background-color: #fff; height: 40px; line-height: 40px; padding: 0 5px; border-top:1px solid #ccc;border-bottom:1px solid #ccc;"></i>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="border: none;">
                <button type="button" class="btn btn-primary" onclick="setNewPassword()" style="height: 40px; background-color: #474BC2; border: none; border-radius: 5px; font-size: 16px; width: 40%; color: #fff;" data-translate="Set Password">Set Password</button>
            </div>
        </div>
    </div>

    <!-- Password Reset Success Card -->
    <div class="container" id="passwordResetSuccessCard" style="display: none;">
        <div class="card mx-auto"  style="border: 1px solid #B1BBE7;">
            <div class="card-body text-center">
                <h3 data-translate="PASSWORD RESET SUCCESSFUL">PASSWORD RESET SUCCESSFUL</h3>
                <p data-translate="Your password has been reset. You can sign in to use InternPlus now.">Your password has been reset. You can sign in to use InternPlus now.</p>
                <img src="../assets/img/notebook.png" alt="Success Icon" style="width: 120px; margin: 20px 0;">
                <div class="text-center">
                    <button type="button" class="btn btn-primary" onclick="redirectToLogin()" data-translate="Login">Login</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

    // Function to update language and translate all elements
async function updateLanguage(language) {
    document.getElementById('dropdownLabel').textContent = language.toUpperCase();

    // ✅ Save the selected language in localStorage
    localStorage.setItem('selectedLanguage', language);

    // ✅ Define translations for static text (placeholders, buttons, etc.)
    const translations = {
        'en': {
            'emailPlaceholder': "Enter your email"
        },
        'th': {
            'emailPlaceholder': "ใส่อีเมลของคุณ"
        },
        'my': {
            'emailPlaceholder': "သင့် အီးမဲလ်ကို ရိုက်ထည့်ပါ"
        }
    };

    // ✅ Update placeholders
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.setAttribute("placeholder", translations[language]?.searchPlaceholder || translations['en'].searchPlaceholder);
    }

    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.setAttribute("placeholder", translations[language]?.emailPlaceholder || translations['en'].emailPlaceholder);
    }

    // ✅ Update text content using predefined translations or Google Translate API
    const elementsToTranslate = document.querySelectorAll('[data-translate]');
    for (const element of elementsToTranslate) {
        const key = element.getAttribute('data-translate');
        
        if (translations[language][key]) {
            element.innerText = translations[language][key];
        } else {
            // Use Google Translate API if predefined translation is unavailable
            const translatedText = await translateText(key, language);
            element.innerText = translatedText;
        }
    }
}

// ✅ Function to translate text using Google Translate API
async function translateText(text, targetLanguage) {
    try {
        const response = await fetch(
            `https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURIComponent(text)}`
        );
        const data = await response.json();
        return data[0][0][0]; // Extract the translated text
    } catch (error) {
        console.error('Translation error:', error);
        return text; // Fallback to the original text if translation fails
    }
}
        function showCodeCard() {
            const email = document.getElementById('email').value;
            if (email) {
                document.getElementById('emailCard').style.display = 'none';
                document.getElementById('codeCard').style.display = 'block';
                document.getElementById('userEmail').textContent = email;
                document.getElementById('code1').focus(); // Focus on the first input box
            } else {
                alert('Please enter your email.');
            }
        }

        function resendCode() {
            alert('Code resent to your email.');
        }

        function submitCode() {
            const inputs = document.querySelectorAll('.code-input input');
            let code = '';
            inputs.forEach(input => {
                code += input.value;
            });
            if (code.length === 5) {
                alert('Code submitted: ' + code);
                document.getElementById('codeCard').style.display = 'none';
                document.getElementById('newPasswordCard').style.display = 'block';
            } else {
                alert('Please enter the full 5-digit code.');
            }
        }

        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }

        function setNewPassword() {
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword.length < 8) {
                alert('Password must be at least 8 characters.');
                return;
            }
            if (newPassword !== confirmPassword) {
                alert('Passwords do not match.');
                return;
            }

            // Hide the "Set New Password" card and show the "Success" card
            document.getElementById('newPasswordCard').style.display = 'none';
            document.getElementById('passwordResetSuccessCard').style.display = 'block';
        }

        function redirectToLogin() {
            window.location.href = "{{ url('/login') }}"; // Replace with your actual login page URL
        }

        // Automatically move to the next input box
        const inputs = document.querySelectorAll('.code-input input');
        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value.length === 0 && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
@endsection
