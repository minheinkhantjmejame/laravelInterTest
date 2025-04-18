
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Myanmar Unicode Font (Noto Sans Myanmar) -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Jquery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Apply the font -->
    <style>
        body {
            font-family: 'Noto Sans Myanmar', sans-serif;
        }
        /* Keep logo font as original */
        .navbar-brand {
            font-family: inherit !important;
        }
        /* Typing animation */
        @keyframes typing {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.typing span {
    opacity: 0;
    animation: typing 2s forwards;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <!-- Logo (not translated) -->
            <a class="navbar-brand fw-bold" href="#" style="font-size:40px;">INTERNPLUS</a>
            
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
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero-section" style="background-color:#fff;">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="slogan">
                <h1 class="fw-bold display-5"><span data-translate="HI. WELCOME TO">HI. WELCOME TO</span> <span class="typing">IN<span style="color:#3c3f7c;">T</span><span style="color:#4346a7;">E</span><span style="color:#4a4ec4;">R</span><span style="color:#5c60cf;">N</span><span style="color:#676bd6;">P</span><span style="color:#777adf;">L</span><span style="color:#888bea;">U</span><span style="color:#888cea;">S</span></span></h1>
                <p class="lead" style="font-size:20px; font-weight:bold;" data-translate="Internship application system by Vanness Plus Consulting Co., Ltd.">
                    Internship application system by Vanness Plus Consulting Co., Ltd.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5 bg-white">
        <div class="container text-center bg-white">
            <h1 class="font-weight:bolder;" data-translate="CHOOSE YOUR ACCOUNT">CHOOSE YOUR ACCOUNT</h1>
            <div class="d-flex justify-content-center" style="gap:100px;">
            <div>
                <a href="{{ route('intern') }}" style="border:none;background-color:transparent;">
                    <img src="{{ asset('assets/img/bag.png') }}" alt="Internship" class="mb-3">
                </a>
                <h4 class="fw-bold" data-translate="INTERNSHIP">INTERNSHIP</h4>
            </div>

            <div>
                <a href="{{ route('hr') }}" style="border:none;background-color:transparent;">
                    <img src="{{ asset('assets/img/notebook.png') }}" alt="Task Management" class="mb-3">
                </a>
                <h4 class="fw-bold">HR</h4>
            </div>
            </div>
        </div>
    </section>

    <footer class="bg-light py-4">
        <div class="container text-left">
            <div class="row align-items-center">
                <div class="col-md-6 fw-bold fs-4">INTERNPLUS</div>
                <div class="col-md-6 text-end">
                    <div class="form-control d-inline-flex align-items-center me-2" style="background-color: #f3f4f6;border:0;width:  300px; height:35px;">
                        <span class="input-group-text bg-transparent" style="border:0;"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control bg-trasparent" style="border:0; width:300px;background-color: transparent;" id="email" placeholder="Enter your email to get the latest news..." required>
                    </div>
                    <button class="btn" style="background-color:#474bc2; color:white;" data-translate="Subscribe">Subscribe</button>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col-md-6 contact">
                    <h5 class="fw-bold mb-3" data-translate="Contact Information">Contact Us</h5>
                    <p><a href="https://maps.app.goo.gl/vupuH5eNXeRHCKHC9" class="text-decoration-none" style="color:#333333;"><i class="bi bi-geo-alt"></i> 287 Si Lom Rd, Silom, Bang Rak, Bangkok 10500</a></p>
                    <p><i class="bi bi-telephone"></i> <a href="tel:020777581" class="text-decoration-none" style="color:#333333;">02-0777581 (Head Quarter Contact)</a></p>
                    <p><i class="bi bi-envelope"></i> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=cs@internplus.com" class="text-decoration-none" style="color:#333333;">cs@internplus.com</a></p>
                </div>
                <div class="col-md-6 text-end">
                    <img src="./assets/img/location.png" alt="Map Icon" class="img-fluid">
                </div>
            </div>
            <hr>
            <div class="row align-items-center" id="footer">
                <div class="col-md-6 order-md-1">
                    <p data-translate="&copy; Internplus @ 2024. All rights reserved.">&copy; Internplus @ 2024. All rights reserved.</p>
                </div>
                <div class="col-md-6 order-md-2 footer-icons">
                    <a href="#" class="text-dark mx-2"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript">
                // Typing animation logic
    document.addEventListener("DOMContentLoaded", function () {
    const typingElement = document.querySelector(".typing");
    if (typingElement) {
        const spans = typingElement.querySelectorAll("span");
        let delay = 0;

        spans.forEach((span, index) => {
            setTimeout(() => {
                span.style.animation = `typing 2s forwards`;
            }, delay);
            delay += 200; // Adjust the delay between letters (in milliseconds)
        });
    }
});

        // Initialize date picker (existing function)
        $(document).ready(function() {
            $("#startDate, #endDate").datepicker({
                showButtonPanel: true,
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</body>
</html>