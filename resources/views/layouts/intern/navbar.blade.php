    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <!-- Logo (not translated) -->
            <a class="navbar-brand fw-bold" href="{{url('intern')}}" style="font-size:40px;">INTERNPLUS</a>
            
            <!-- Language Dropdown -->
            <div class="dropdown" style="display: inline-block;">
                <button class="btn btn-white"  style="border:none; background-color:white;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
    
            <!-- Nav Items (translatable) -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('intern') }}" data-translate="Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/program') }}" data-translate="Program">Program</a></li>
                    <li class="nav-item"><a class="nav-link applynow" href="{{ url('/application_search') }}" data-translate="Application">Application</a></li>
                    <li class="nav-item"><a class="nav-link register" href="{{ url('/register') }}" data-translate="Register">Register</a></li>
                    <li class="nav-item"><a class="btn btn-dark" href="{{ url('/login') }}" style="background-color:#b1bbe7; color:black;" data-translate="Log In">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>