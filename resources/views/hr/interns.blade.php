@extends('layouts.hr.hrLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
            body {
                background-color: #fff;
                height: 100%;
            }
            .main-container {
                display: flex;
                align-items: stretch; /* Ensures both sidebar & content stretch equally */
            }
            .sidebar {
                background-color: #F3F5FC;
                padding-top: 10px;
                padding-left: 20px;
                height: auto; /* Allows it to stretch dynamically */

                
            }
            /* Default styling for sidebar links */
        /* Default sidebar link styling */
        .nav-link {
        display: flex;
        align-items: center;
        padding: 10px;
        text-decoration: none;
        color: black;
        border-left: 3px solid transparent; /* No border by default */
        transition: border-left 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        /* Add border-left only when clicked */
        .nav-link.active {
        border-left: 4px solid black; /* Highlight color */
        background-color: #EDEFF7; /* Optional: Background change */
        }


            .dashboard-content {
                padding: 20px;
            }

            .badge-box{
                background-color:#B1BBE7;
                border-radius:4px;
            }

        /* Ensure all elements have the same height */
        .search-box {
        width: 300px;
        height: 42px; /* Set the same height as buttons */
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: white;
        display: flex;
        align-items: center;
        }

        .search-box .input-group-text {
        background: none;
        border: none;
        color: #555;
        }

        .search-box input {
        border: none;
        box-shadow: none;
        background-color: white;
        height: 100%; /* Ensure input fills the height */
        padding: 10px;
        }

        .search-box input:focus {
        outline: none;
        box-shadow: none;
        }

        /* Ensure buttons and dropdowns have the same height */
        .custom-dropdown-btn,
        .general-setting-btn {
        height: 42px; /* Set the same height */
        display: flex;
        align-items: center;
        }

        /* General Setting Button */
        .general-setting-btn {
        border: 1px solid #ccc;
        background: none;
        font-weight: 500;
        }
        .general-setting-btn:hover {
        background-color: #F3F5FC;
        }


        /* Table Wrapper (Background #F3F5FC) */
        .table-container {
        background-color: #F3F5FC;
        padding: 20px;
        border-radius: 4px;
        }

        /* Table Styling */
        .table {
        background-color: #F3F5FC;
        border-collapse: collapse;
        width: 100%;
        border-radius: 4px;
        overflow: hidden; /* Ensures proper border rendering */
        }

        /* Table Header */
        .table thead {
        background-color: white;
        }

        /* Table Header Cells */
        .table th {
        padding: 12px;
        text-align: left;
        font-weight: 600;
        }

        /* Table Rows */
        .table tbody tr {
        background-color: white; /* Ensure each row is white */
        }

        /* Table Data Cells */
        .table td {
        padding: 12px;
        text-align: left;
        background-color:#F3F5FC;
        }

        /* Pagination Section (Inside Table Container) */
        .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        background-color: #F3F5FC; /* Same as table parent */
        }



        /* Pagination Buttons */
        .pagination .page-item .page-link {
        border: none;
        background-color: #F3F5FC;
        color: black;
        font-weight: 500;
        border-radius: 4px;
        padding: 6px 12px;
        border:1px solid grey;
        margin:5px;

        }

        .pagination .page-item.active .page-link {
        background-color: #474BC2; /* Active Page */
        color: white;
        font-weight: bold;
        }

        .pagination .page-item.disabled .page-link {
        color: #A0A0A0;
        }


        /* Remove Default Bootstrap Dropdown Arrow */
        .action-btn::after {
        display: none;
        }

        /* Styling the Three-Dots Button */
        .action-btn {
        border: none;
        background: none;
        font-size: 1.4rem;
        padding: 5px;
        color: black;
        cursor: pointer;
        }

        /* Dropdown Styling */
        .dropdown-menu {
        min-width: 180px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* Dropdown Item Spacing */
        .dropdown-menu .dropdown-item {
        display: flex;
        align-items: center;
        gap: 8px;
        }


        /* edit profile section  */

        .form-label{
        font-size:14px;
        color:#C8C8C8;
        }

        .image-icon {
        background-color: #474BC2;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .image-icon i {
        font-size: 20px;
        color: white;
        }

        .edit-personal-info .form-control, 
        .edit-personal-info select {
        border: 1px solid #C8C8C8 !important;  /* Ensures all sides have a border */
        border-radius: 4px; /* Adds a soft corner */
        padding: 10px; /* Adjusts spacing inside the input */
        width: 100%; /* Ensures full width */
        box-shadow: none !important; /* Removes any default shadows */
        }






    </style>
@endsection
  
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >

                @include('layouts.hr.sidebar')

                



                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between mb-3">
                            <h2 class="mb-0"  data-translate="Intern">Intern</h2>
                        
                            <!-- Summary Badges -->
                            <div class="d-flex gap-3">
                                <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                                    <p class="mb-1" data-translate="Total Intern">Total Intern</p>
                                    <h4 class="mb-0">24</h4>
                                </div>
                                <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                                    <p class="mb-1" data-translate="Successful Orientation">Successful Orientation</p>
                                    <h4 class="mb-0">17</h4>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <!-- Search & Filters Row -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <!-- Left Section: Search Box & Filters -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- Search Box -->
                                <div class="input-group search-box" id="input-search">
                                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                                    <input type="text" id="searchInput" class="form-control border-0" placeholder="Search for candidates">
                                </div>

                                {{-- <div class="input-group" id="input-search" style="width: 100%;">
                                    <button class="btn btn-dark" onclick="applySearch()" style="background-color:#ffffff; display:flex;justify-content: center;align-items:center;">
                                        <i class="bi bi-search" style="color:#000;"></i>
                                    </button>
                                    <input type="text"  class="form-control" style="border:none; background-color:#ffffff;" placeholder="Search for program, candidates and more...">
                                </div> --}}
                        
                                <!-- All Program Dropdown -->
                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="programDropdownBtn"  data-bs-toggle="dropdown">
                                        <img src="../assets/icon/desktop.png" alt=""> <span data-translate="All Position">All Position</span>

                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" ></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="programDropdown">
                                        <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="HR Trainee">HR Trainee</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Software Tester">Software Tester</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Marketing Trainee">Marketing Trainee</span></a></li>
                                    </ul>
                                </div>
                        
                                <!-- All Step Dropdown -->
                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="stepDropdownBtn"  data-bs-toggle="dropdown">
                                        <img src="../assets/icon/arrow-circle-right.png" alt=""><span data-translate="All Type">All Type</span> 
                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="stepDropdown">
                                        <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Pending">Pending</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Request Internship Application">Request Internship Application</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Success">Success</span></a></li>
                                    </ul>
                                </div>



                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="stepDropdownBtn"  data-bs-toggle="dropdown">
                                        <img src="../assets/icon/user-shield.png" alt=""><span data-translate=" All Supervisor"> All Supervisor</span>
                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="stepDropdown">
                                        <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                        <li><a class="dropdown-item" href="#">Emma Watson</span></a></li>
                                        <li><a class="dropdown-item" href="#">Draco Malfoy</a></li>
                                        <li><a class="dropdown-item" href="#">Beck Chan</a></li>
                                        <li><a class="dropdown-item" href="#">Conner Dante</a></li>
                                        <li><a class="dropdown-item" href="#">Barry Barton</a></li>
                                    </ul>
                                </div>

                            </div>
                        
                            <!-- Right Section: General Setting Button -->
                            <button class="btn general-setting-btn">
                                <i class="bi bi-sliders"></i> <span data-translate="General Setting">General Setting</span>
                            </button>
                        </div>
                        
                        

                        
            <!-- Table Container -->
            <div class="table-container">
                <div class="table-responsive"> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Type</th>
                                <th>Supervisor</th>
                                <th>Position</th>
                                <th>Duration</th>
                                <th>Orientation</th>
                                <th></th> <!-- Action Column for Dropdown -->
                            </tr>
                        </thead>            
                        <tbody id="table-body">

                        </tbody>
                    </table>
                </div>
                    <!-- Pagination (Inside Same Container) -->
                    <div class="pagination-container">
                        <div>
                            <label data-translate="Interns per page">Interns per page</label>
                            <select class="form-select d-inline-block w-auto">
                                <option>8</option>
                                <option>16</option>
                                <option>32</option>
                            </select>
                        </div>
                        <nav>
                            <ul class="pagination mb-0">

                            </ul>
                        </nav>
                    </div>
            </div>





                    </div>
                    
                </div>
                <div class="col-md-9 dashboard-content" id="packageContent" style="display: none;">
                    <!-- The package UI will be injected here -->
                </div>
                <div class="col-md-9 dashboard-content" id="settingsContent" style="display: none;">
                    <!-- The settings UI will be injected here -->
                </div>
                <div class="col-md-9 dashboard-content" id="profileContent" style="display: none;">
                    <!-- The profile UI will be injected here -->
                </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
            async function updateLanguage(language) {
            document.getElementById('dropdownLabel').textContent = language.toUpperCase();

            // ✅ Save the selected language in localStorage
            localStorage.setItem('selectedLanguage', language);

            // ✅ Define translations for static text (placeholders, buttons, etc.)
            const translations = {
                'en': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"Search for candidates"
                },
                'th': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"ค้นหาผู้สมัคร"
                },
                'my': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"ကိုယ်စားလှယ်လောင်းများကိုရှာဖွေပါ။"
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
                document.addEventListener("DOMContentLoaded", function () {
            let sidebarLinks = document.querySelectorAll(".nav-link");

            // Get the last active link from localStorage
            let activeLink = localStorage.getItem("activeSidebarLink");

            sidebarLinks.forEach(link => {
                if (link.getAttribute("href") === activeLink) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active"); // Remove active from other links
                }

                link.addEventListener("click", function (event) {
                    if (!this.getAttribute("href").startsWith("#")) {
                        localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                        return;
                    }
                    
                    event.preventDefault();
                    sidebarLinks.forEach(l => l.classList.remove("active"));
                    this.classList.add("active");
                    localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                });
            });
            });



            document.addEventListener("DOMContentLoaded", function () {
            const programDropdownBtn = document.getElementById("programDropdownBtn");
            const stepDropdownBtn = document.getElementById("stepDropdownBtn");
            const programDropdown = document.getElementById("programDropdown");
            const stepDropdown = document.getElementById("stepDropdown");
            const tableBody = document.getElementById("table-body");
            const paginationContainer = document.querySelector(".pagination");
            const pageSizeSelect = document.querySelector(".pagination-container .form-select");

            const interns = [
            { firstName: "Lana", lastName: "Delrey", email: "wmustang@gmail.com", phone: "0874452710", type: "Work From Home", supervisor: "Beck Chan", position: "Software Tester", duration: "2 Jan 2025 - 25 Apr 2025", orientation: "Add welcome onboard" },
            { firstName: "Lily", lastName: "Depp", email: "rosedepp@gmail.com", phone: "0819452713", type: "Hybrid", supervisor: "Draco Malfoy", position: "HR Trainee", duration: "2 Jan 2025 - 13 Apr 2025", orientation: "Add welcome onboard" },
            { firstName: "Margot", lastName: "Robbie", email: "barbiegirly@gmail.com", phone: "0867912710", type: "Hybrid", supervisor: "Draco Malfoy", position: "HR Trainee", duration: "2 Jan 2025 - 30 Apr 2025", orientation: "Add welcome onboard" },
            { firstName: "Jennie", lastName: "Kim", email: "prettymt@gmail.com", phone: "0823627119", type: "On-site", supervisor: "Emma Watson", position: "UX/UI Designer Trainee", duration: "6 Jan 2025 - 30 Apr 2025", orientation: "Pending" },
            { firstName: "Ryan", lastName: "Gosling", email: "justken123@gmail.com", phone: "0898851126", type: "On-site", supervisor: "Connor Dante", position: "HRD Trainee", duration: "3 Jan 2025 - 10 Apr 2025", orientation: "Pending" },
            { firstName: "Taylor", lastName: "Swift", email: "fortnight@gmail.com", phone: "0957716332", type: "Work From Home", supervisor: "Barry Barton", position: "Web Developer Trainee", duration: "3 Jan 2025 - 25 Mar 2025", orientation: "Pending" },
            { firstName: "Doja", lastName: "Cat", email: "paintred@gmail.com", phone: "0671123481", type: "Hybrid", supervisor: "Barry Barton", position: "Web Developer Trainee", duration: "20 Dec 2024 - 20 Mar 2025", orientation: "Pending" },
            { firstName: "Billie", lastName: "Eilish", email: "chihiro000@gmail.com", phone: "0814452819", type: "Work From Home", supervisor: "Emma Watson", position: "UX/UI Designer Trainee", duration: "16 Dec 2024 - 10 Apr 2025", orientation: "Success" },
            { firstName: "Zendaya", lastName: "Coleman", email: "zendaya@gmail.com", phone: "0855547890", type: "On-site", supervisor: "Tom Holland", position: "Acting Trainee", duration: "10 Jan 2025 - 15 May 2025", orientation: "Pending" },
            { firstName: "Robert", lastName: "Downey Jr.", email: "ironman@gmail.com", phone: "0832145678", type: "On-site", supervisor: "Marvel Studios", position: "Film Trainee", duration: "15 Jan 2025 - 20 May 2025", orientation: "Success" },

            // Additional Sample Data for Testing Pagination
            { firstName: "Chris", lastName: "Evans", email: "captain@gmail.com", phone: "0832111111", type: "Hybrid", supervisor: "Marvel Studios", position: "Acting Trainee", duration: "5 Feb 2025 - 10 June 2025", orientation: "Pending" },
            { firstName: "Scarlett", lastName: "Johansson", email: "blackwidow@gmail.com", phone: "0844456789", type: "Work From Home", supervisor: "Kevin Feige", position: "Marketing Trainee", duration: "1 Mar 2025 - 30 Jul 2025", orientation: "Add welcome onboard" },
            { firstName: "Mark", lastName: "Zuckerberg", email: "facebook@gmail.com", phone: "0871112233", type: "On-site", supervisor: "Meta Inc.", position: "Software Engineer Trainee", duration: "10 Mar 2025 - 15 Aug 2025", orientation: "Success" },
            { firstName: "Elon", lastName: "Musk", email: "tesla@gmail.com", phone: "0899999999", type: "Hybrid", supervisor: "Tesla Inc.", position: "Engineering Trainee", duration: "20 Mar 2025 - 10 Sept 2025", orientation: "Pending" },
            { firstName: "Jeff", lastName: "Bezos", email: "amazon@gmail.com", phone: "0855511111", type: "Work From Home", supervisor: "Amazon Inc.", position: "E-commerce Trainee", duration: "5 Apr 2025 - 30 Sept 2025", orientation: "Pending" },
            { firstName: "Tim", lastName: "Cook", email: "apple@gmail.com", phone: "0843322111", type: "On-site", supervisor: "Apple Inc.", position: "Product Manager Trainee", duration: "15 Apr 2025 - 30 Oct 2025", orientation: "Success" },
            { firstName: "Sundar", lastName: "Pichai", email: "google@gmail.com", phone: "0866667777", type: "Hybrid", supervisor: "Google Inc.", position: "AI Researcher Trainee", duration: "1 May 2025 - 20 Nov 2025", orientation: "Add welcome onboard" },
            { firstName: "Satya", lastName: "Nadella", email: "microsoft@gmail.com", phone: "0888889999", type: "Work From Home", supervisor: "Microsoft Inc.", position: "Software Developer Trainee", duration: "10 May 2025 - 30 Nov 2025", orientation: "Pending" },


            { firstName: "Chris", lastName: "Evans", email: "captain@gmail.com", phone: "0832111111", type: "Hybrid", supervisor: "Marvel Studios", position: "Acting Trainee", duration: "5 Feb 2025 - 10 June 2025", orientation: "Pending" },
            { firstName: "Scarlett", lastName: "Johansson", email: "blackwidow@gmail.com", phone: "0844456789", type: "Work From Home", supervisor: "Kevin Feige", position: "Marketing Trainee", duration: "1 Mar 2025 - 30 Jul 2025", orientation: "Add welcome onboard" },
            { firstName: "Mark", lastName: "Zuckerberg", email: "facebook@gmail.com", phone: "0871112233", type: "On-site", supervisor: "Meta Inc.", position: "Software Engineer Trainee", duration: "10 Mar 2025 - 15 Aug 2025", orientation: "Success" },
            { firstName: "Elon", lastName: "Musk", email: "tesla@gmail.com", phone: "0899999999", type: "Hybrid", supervisor: "Tesla Inc.", position: "Engineering Trainee", duration: "20 Mar 2025 - 10 Sept 2025", orientation: "Pending" },
            { firstName: "Jeff", lastName: "Bezos", email: "amazon@gmail.com", phone: "0855511111", type: "Work From Home", supervisor: "Amazon Inc.", position: "E-commerce Trainee", duration: "5 Apr 2025 - 30 Sept 2025", orientation: "Pending" },
            { firstName: "Tim", lastName: "Cook", email: "apple@gmail.com", phone: "0843322111", type: "On-site", supervisor: "Apple Inc.", position: "Product Manager Trainee", duration: "15 Apr 2025 - 30 Oct 2025", orientation: "Success" },
            { firstName: "Sundar", lastName: "Pichai", email: "google@gmail.com", phone: "0866667777", type: "Hybrid", supervisor: "Google Inc.", position: "AI Researcher Trainee", duration: "1 May 2025 - 20 Nov 2025", orientation: "Add welcome onboard" },
            { firstName: "Satya", lastName: "Nadella", email: "microsoft@gmail.com", phone: "0888889999", type: "Work From Home", supervisor: "Microsoft Inc.", position: "Software Developer Trainee", duration: "10 May 2025 - 30 Nov 2025", orientation: "Pending" },
            { firstName: "Chris", lastName: "Evans", email: "captain@gmail.com", phone: "0832111111", type: "Hybrid", supervisor: "Marvel Studios", position: "Acting Trainee", duration: "5 Feb 2025 - 10 June 2025", orientation: "Pending" },
            { firstName: "Scarlett", lastName: "Johansson", email: "blackwidow@gmail.com", phone: "0844456789", type: "Work From Home", supervisor: "Kevin Feige", position: "Marketing Trainee", duration: "1 Mar 2025 - 30 Jul 2025", orientation: "Add welcome onboard" },
            { firstName: "Mark", lastName: "Zuckerberg", email: "facebook@gmail.com", phone: "0871112233", type: "On-site", supervisor: "Meta Inc.", position: "Software Engineer Trainee", duration: "10 Mar 2025 - 15 Aug 2025", orientation: "Success" },
            { firstName: "Elon", lastName: "Musk", email: "tesla@gmail.com", phone: "0899999999", type: "Hybrid", supervisor: "Tesla Inc.", position: "Engineering Trainee", duration: "20 Mar 2025 - 10 Sept 2025", orientation: "Pending" },
            { firstName: "Jeff", lastName: "Bezos", email: "amazon@gmail.com", phone: "0855511111", type: "Work From Home", supervisor: "Amazon Inc.", position: "E-commerce Trainee", duration: "5 Apr 2025 - 30 Sept 2025", orientation: "Pending" },
            { firstName: "Tim", lastName: "Cook", email: "apple@gmail.com", phone: "0843322111", type: "On-site", supervisor: "Apple Inc.", position: "Product Manager Trainee", duration: "15 Apr 2025 - 30 Oct 2025", orientation: "Success" },
            { firstName: "Sundar", lastName: "Pichai", email: "google@gmail.com", phone: "0866667777", type: "Hybrid", supervisor: "Google Inc.", position: "AI Researcher Trainee", duration: "1 May 2025 - 20 Nov 2025", orientation: "Add welcome onboard" },
            { firstName: "Satya", lastName: "Nadella", email: "microsoft@gmail.com", phone: "0888889999", type: "Work From Home", supervisor: "Microsoft Inc.", position: "Software Developer Trainee", duration: "10 May 2025 - 30 Nov 2025", orientation: "Pending" },
            { firstName: "Chris", lastName: "Evans", email: "captain@gmail.com", phone: "0832111111", type: "Hybrid", supervisor: "Marvel Studios", position: "Acting Trainee", duration: "5 Feb 2025 - 10 June 2025", orientation: "Pending" },
            { firstName: "Scarlett", lastName: "Johansson", email: "blackwidow@gmail.com", phone: "0844456789", type: "Work From Home", supervisor: "Kevin Feige", position: "Marketing Trainee", duration: "1 Mar 2025 - 30 Jul 2025", orientation: "Add welcome onboard" },
            { firstName: "Mark", lastName: "Zuckerberg", email: "facebook@gmail.com", phone: "0871112233", type: "On-site", supervisor: "Meta Inc.", position: "Software Engineer Trainee", duration: "10 Mar 2025 - 15 Aug 2025", orientation: "Success" },
            { firstName: "Elon", lastName: "Musk", email: "tesla@gmail.com", phone: "0899999999", type: "Hybrid", supervisor: "Tesla Inc.", position: "Engineering Trainee", duration: "20 Mar 2025 - 10 Sept 2025", orientation: "Pending" },
            { firstName: "Jeff", lastName: "Bezos", email: "amazon@gmail.com", phone: "0855511111", type: "Work From Home", supervisor: "Amazon Inc.", position: "E-commerce Trainee", duration: "5 Apr 2025 - 30 Sept 2025", orientation: "Pending" },
            { firstName: "Tim", lastName: "Cook", email: "apple@gmail.com", phone: "0843322111", type: "On-site", supervisor: "Apple Inc.", position: "Product Manager Trainee", duration: "15 Apr 2025 - 30 Oct 2025", orientation: "Success" },
            { firstName: "Sundar", lastName: "Pichai", email: "google@gmail.com", phone: "0866667777", type: "Hybrid", supervisor: "Google Inc.", position: "AI Researcher Trainee", duration: "1 May 2025 - 20 Nov 2025", orientation: "Add welcome onboard" },
            { firstName: "Satya", lastName: "Nadella", email: "microsoft@gmail.com", phone: "0888889999", type: "Work From Home", supervisor: "Microsoft Inc.", position: "Software Developer Trainee", duration: "10 May 2025 - 30 Nov 2025", orientation: "Pending" },
            { firstName: "Chris", lastName: "Evans", email: "captain@gmail.com", phone: "0832111111", type: "Hybrid", supervisor: "Marvel Studios", position: "Acting Trainee", duration: "5 Feb 2025 - 10 June 2025", orientation: "Pending" },
            { firstName: "Scarlett", lastName: "Johansson", email: "blackwidow@gmail.com", phone: "0844456789", type: "Work From Home", supervisor: "Kevin Feige", position: "Marketing Trainee", duration: "1 Mar 2025 - 30 Jul 2025", orientation: "Add welcome onboard" },
            { firstName: "Mark", lastName: "Zuckerberg", email: "facebook@gmail.com", phone: "0871112233", type: "On-site", supervisor: "Meta Inc.", position: "Software Engineer Trainee", duration: "10 Mar 2025 - 15 Aug 2025", orientation: "Success" },
            { firstName: "Elon", lastName: "Musk", email: "tesla@gmail.com", phone: "0899999999", type: "Hybrid", supervisor: "Tesla Inc.", position: "Engineering Trainee", duration: "20 Mar 2025 - 10 Sept 2025", orientation: "Pending" },
            { firstName: "Jeff", lastName: "Bezos", email: "amazon@gmail.com", phone: "0855511111", type: "Work From Home", supervisor: "Amazon Inc.", position: "E-commerce Trainee", duration: "5 Apr 2025 - 30 Sept 2025", orientation: "Pending" },
            { firstName: "Tim", lastName: "Cook", email: "apple@gmail.com", phone: "0843322111", type: "On-site", supervisor: "Apple Inc.", position: "Product Manager Trainee", duration: "15 Apr 2025 - 30 Oct 2025", orientation: "Success" },
            { firstName: "Sundar", lastName: "Pichai", email: "google@gmail.com", phone: "0866667777", type: "Hybrid", supervisor: "Google Inc.", position: "AI Researcher Trainee", duration: "1 May 2025 - 20 Nov 2025", orientation: "Add welcome onboard" },
            { firstName: "Satya", lastName: "Nadella", email: "microsoft@gmail.com", phone: "0888889999", type: "Work From Home", supervisor: "Microsoft Inc.", position: "Software Developer Trainee", duration: "10 May 2025 - 30 Nov 2025", orientation: "Pending" }
            // Duplicating the pattern to reach 50 records
            ];

            let data = [...interns];
            let currentPage = 1;
            let rowsPerPage = parseInt(pageSizeSelect.value); // Get the default value from dropdown

            function displayTable(page) {
                tableBody.innerHTML = "";
                let start = (page - 1) * rowsPerPage;
                let end = start + rowsPerPage;
                let paginatedData = interns.slice(start, end);

                if (paginatedData.length === 0) {
                    tableBody.innerHTML = `<tr><td colspan="10" class="text-center">No data available</td></tr>`;
                    return;
                }

                paginatedData.forEach(intern => {
                    let orientationBadge = intern.orientation === "Success" 
                        ? `<span class="badge" style="background-color: #9FE392; color: #359C22;">Success</span>` 
                        : intern.orientation === "Pending"
                        ? `<span class="badge" style="background-color: #FFE9A7; color: #DFB22A;">Pending</span>`
                        : `<span class="text-primary">+ ${intern.orientation}</span>`;

                    let row = `
                        <tr>
                            <td>${intern.firstName}</td>
                            <td>${intern.lastName}</td>
                            <td>${intern.email}</td>
                            <td>${intern.phone}</td>
                            <td>${intern.type}</td>
                            <td>${intern.supervisor}</td>
                            <td>${intern.position}</td>
                            <td>${intern.duration}</td>
                            <td>${orientationBadge}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn action-btn" type="button" data-bs-toggle="dropdown">
                                        &#8942;
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i><span data-translate="Edit">Edit</span> </a></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i><span data-translate="Remove">Remove</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus"></i> <span data-translate="Supervisor">Supervisor</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-text"></i><span data-translate="Rules & Policies"> Rules & Policies</span> </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });

                updatePaginationButtons();
            }

            function updatePaginationButtons() {
                paginationContainer.innerHTML = "";
                let totalPages = Math.ceil(interns.length / rowsPerPage);

                if (totalPages === 0) return;

                let prevDisabled = currentPage === 1 ? "disabled" : "";
                paginationContainer.innerHTML += `
                    <li class="page-item ${prevDisabled}">
                        <a class="page-link" href="#" style="border:none;" onclick="changePage(${currentPage - 1}); return false;"><i class="bi bi-chevron-left"></i> <span data-translate="Previous">Previous</span> </a>
                    </li>
                `;

                if (totalPages <= 5) {
            // If there are 5 or fewer pages, show all numbers
            for (let i = 1; i <= totalPages; i++) {
                paginationContainer.innerHTML += createPageButton(i);
            }
            } else {
            // Always show the first page
            paginationContainer.innerHTML += createPageButton(1);

            if (currentPage > 3) {
                paginationContainer.innerHTML += createEllipsis();
            }

            let startPage = Math.max(2, currentPage - 1);
            let endPage = Math.min(totalPages - 1, currentPage + 1);

            for (let i = startPage; i <= endPage; i++) {
                paginationContainer.innerHTML += createPageButton(i);
            }

            if (currentPage < totalPages - 2) {
                paginationContainer.innerHTML += createEllipsis();
            }

            // Always show the last page
            paginationContainer.innerHTML += createPageButton(totalPages);
            }


                let nextDisabled = currentPage === totalPages ? "disabled" : "";
                paginationContainer.innerHTML += `
                    <li class="page-item ${nextDisabled}">
                        <a class="page-link" style="border:none;" href="#" onclick="changePage(${currentPage + 1}); return false;"><span data-translate="Next">Next</span> <i class="bi bi-chevron-right"></i></a>
                    </li>
                `;
            }

            function createPageButton(page) {
            let activeClass = currentPage === page ? "active" : "";
            return `
                <li class="page-item ${activeClass}">
                    <a class="page-link" href="#" onclick="changePage(${page}); return false;">${page}</a>
                </li>
            `;
            }

            function createEllipsis() {
            return `<li class="page-item disabled"><a class="page-link">...</a></li>`;
            }


            window.changePage = function (page) {
                let totalPages = Math.ceil(interns.length / rowsPerPage);
                if (page < 1 || page > totalPages) return;

                currentPage = page;
                displayTable(currentPage);
            };

            // Fix: Update table when dropdown value changes
            pageSizeSelect.addEventListener("change", function () {
                rowsPerPage = parseInt(this.value);
                currentPage = 1; // Reset to first page
                displayTable(currentPage);
            });

            displayTable(currentPage);
            });

            document.addEventListener("DOMContentLoaded", function () {
            const dashboardContent = document.querySelector(".dashboard-content");

            // ✅ Event delegation: Listen for profile image click (Opens profile details)
            document.addEventListener("click", function (event) {
                if (event.target.closest(".profile_photo")) {
                    showProfile();
                }
            });

            // ✅ Event delegation: Listen for Edit Profile button click (Opens edit form)
            document.addEventListener("click", function (event) {
                if (event.target.closest(".edit-profile-btn")) {
                    showEditProfile();
                }
            });

            // ✅ Event delegation: Listen for Back to My Profile button click
            document.addEventListener("click", function (event) {
                if (event.target.closest(".back-profile-btn")) {
                    showProfile();
                }
            });

            document.addEventListener("click", function (event) {
                if (event.target.closest(".edit-personal-info-btn")) {
                    event.preventDefault();
                    showEditPersonalInfo();
                } else if (event.target.closest(".back-profile-btn")) {
                    event.preventDefault();
                    restoreProfile();
                }
            });

            function showProfile() {
                let profileImage = localStorage.getItem("profileImage") || "../assets/img/user_sample_1.png";
                let profileName = localStorage.getItem("profileName") || "Lhing W.";
                let position = localStorage.getItem("position") || "HR Manager";
                let fullName = localStorage.getItem("fullName") || "Lhing Wang";
                let team = localStorage.getItem("team") || "Project Internplus";
                let email = localStorage.getItem("email") || "wanglhing@vennessplus.com";
                let phone = localStorage.getItem("phone") || "0898144676";
                let lineID = localStorage.getItem("lineID") || "imlhingw21";

                dashboardContent.innerHTML = `
                    <div class="container-fluid" id="profile_details">
                        <h2 class="mb-3">My Profile</h2>

                        <!-- Profile Summary -->
                        <div class="card p-4 w-50">
                            <div class="d-flex align-items-center">
                                <img src="${profileImage}" alt="Profile Photo" class="rounded-circle" width="80" height="80">
                                <div class="ms-3">
                                    <h4 class="mb-0">${profileName}</h4>
                                    <span class="badge">${position}</span>
                                </div>
                                <button class="btn edit edit-profile-btn ms-auto"><img src="../assets/icon/edit_pen.png" alt="">  Edit</button>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="card p-4 mt-3 w-50">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>Personal Information</h5>
                                <button class="btn edit-personal-info-btn edit"><img src="../assets/icon/edit_pen.png" alt=""> Edit</button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Full Name</span><p>${fullName}</p>
                                    <span>Team</span><p>${team}</p>
                                    <span>Phone Number</span><p>${phone}</p>
                                </div>
                                <div class="col-md-6">
                                    <span>Position</span><p>${position}</p>
                                    <span>Email</span><p>${email}</p>
                                    <span>Line ID</span><p>${lineID}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-3">
                            <button class="btn" id="logout">Logout</button>
                            <button class="btn ms-2" id="del_account">Delete Account</button>
                        </div>
                    </div>
                `;
            }

            function showEditProfile() {
                dashboardContent.innerHTML = `
                    <div class="container-fluid d-flex flex-column align-items-start" style="width:auto; margin: auto;">
                        <a href="#" class="back-profile-btn d-flex align-items-center mb-3" style="text-decoration: none; color: black;">
                            <i class="bi bi-arrow-left me-2"></i> Back to My Profile
                        </a>

                        <h2 class="mb-4">Edit Profile</h2>

                        <div class="d-flex gap-5">
                            <div class="d-flex flex-column align-items-center">
                                <img id="profilePreview" src="${localStorage.getItem("profileImage") || '../assets/img/user_sample_1.png'}" 
                                    alt="Profile Photo" class="rounded" width="180" height="180" style="border: 1px solid #ddd; object-fit: cover;">
                                <button class="btn btn-primary mt-3 px-4 save-profile-btn" style="align-self: self-start; background-color:#474BC2;">Save</button>
                            </div>

                            <div class="w-100 mt-0">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Image</label>
                                    <div id="customFileInput" class="d-flex align-items-center py-0"
                                        style="cursor: pointer; border: 1px solid #C8C8C8; border-radius: 4px; height: 50px; width: 300px;">
                                        
                                        <div class="d-flex justify-content-center align-items-center" 
                                            style="width: 40px; height: 100%; background-color: #474BC2;">
                                            <i class="bi bi-image" style="font-size: 20px; color:white;"></i>
                                        </div>

                                        <span id="fileLabel" class="flex-grow-1 text-truncate mx-2">Choose a file</span>

                                        <input type="file" id="profileImageInput" class="d-none">
                                    </div>

                                    <small class="text-muted">*Supports size up to 10 MB</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Profile Name</label>
                                    <input type="text" id="profileName" class="form-control"  
                                        style="border:1px solid #C8C8C8; border-radius:4px;" 
                                        value="${localStorage.getItem("profileName") || 'Emma W.'}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold">Role</label>
                                    <select id="profileRole" class="form-select" style="border:1px solid #C8C8C8; border-radius:4px;">
                                        <option ${localStorage.getItem("position") === "HR Manager" ? "selected" : ""}>HR Manager</option>
                                        <option ${localStorage.getItem("position") === "HR" ? "selected" : ""}>HR</option>
                                        <option ${localStorage.getItem("position") === "Supervisor" ? "selected" : ""}>Supervisor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                let selectedImage = null;

                document.getElementById("customFileInput").addEventListener("click", function () {
                    document.getElementById("profileImageInput").click();
                });

                document.getElementById("profileImageInput").addEventListener("change", function (event) {
                    let file = event.target.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            document.getElementById("profilePreview").src = e.target.result;
                            selectedImage = e.target.result;
                            document.getElementById("fileLabel").textContent = file.name;
                        };
                        reader.readAsDataURL(file);
                    }
                });

                document.querySelector(".save-profile-btn").addEventListener("click", function () {
                    let newProfileName = document.getElementById("profileName").value;
                    let newProfileRole = document.getElementById("profileRole").value;

                    localStorage.setItem("profileName", newProfileName);
                    localStorage.setItem("position", newProfileRole);

                    if (selectedImage) {
                        localStorage.setItem("profileImage", selectedImage);

                        // Update the navigation bar profile image
                        let navProfileImg = document.getElementById("navProfileImage");
                        if (navProfileImg) {
                            navProfileImg.src = selectedImage; // ✅ Updates immediately
                        }
                    }

                    showProfile();
                });
            }

            // document.addEventListener("DOMContentLoaded", function () {
            //     let storedProfileImage = localStorage.getItem("profileImage");
            //     if (storedProfileImage) {
            //         document.getElementById("navProfileImage").src = storedProfileImage;
            //     }
            // });

            document.addEventListener("DOMContentLoaded", function () {
            // Set initial profile image from localStorage or default
            let storedProfileImage = localStorage.getItem("profileImage") || "../assets/img/user_sample_1.png";
            let navProfileImage = document.getElementById("navProfileImage");
            if (navProfileImage) {
                navProfileImage.src = storedProfileImage;
            }

            // Function to update the profile image in the navigation bar
            function updateNavProfileImage(newImageSrc) {
                let navProfileImage = document.getElementById("navProfileImage");
                if (navProfileImage) {
                    navProfileImage.src = newImageSrc;
                }
            }

            // Event listener for saving the profile image
            document.addEventListener("click", function (event) {
                if (event.target.closest(".save-profile-btn")) {
                    let newProfileName = document.getElementById("profileName").value;
                    let newProfileRole = document.getElementById("profileRole").value;

                    localStorage.setItem("profileName", newProfileName);
                    localStorage.setItem("position", newProfileRole);

                    let selectedImage = document.getElementById("profilePreview").src;
                    if (selectedImage) {
                        localStorage.setItem("profileImage", selectedImage);
                        updateNavProfileImage(selectedImage); // Update the navigation bar profile image
                    }

                    showProfile();
                }
            });
            });

            function showEditPersonalInfo() {
            const dashboardContent = document.querySelector(".dashboard-content");

            dashboardContent.innerHTML = `
                <div class="container-fluid edit-personal-info">
                    <div style="margin-bottom:5px;">
                        <a href="#" class="back-profile-btn" style="text-decoration: none; color: black;">
                            <i class="bi bi-arrow-left"></i> Back to My Profile
                        </a>
                    </div>
                    <h2 class="mb-3">Edit Personal Information</h2>

                    <div class="w-50">
                        <h4>Personal Information</h4>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" id="fullName" class="form-control" value="${localStorage.getItem("fullName") || 'Lhing Wang'}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <select id="position" class="form-control">
                                <option ${localStorage.getItem("position") === "HR Manager" ? "selected" : ""}>HR Manager</option>
                                <option ${localStorage.getItem("position") === "HR" ? "selected" : ""}>HR</option>
                                <option ${localStorage.getItem("position") === "Supervisor" ? "selected" : ""}>Supervisor</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Team</label>
                            <input type="text" id="team" class="form-control" value="${localStorage.getItem("team") || 'Project Internplus'}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" id="email" class="form-control" value="${localStorage.getItem("email") || 'wanglhing@vennessplus.com'}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" id="phone" class="form-control" value="${localStorage.getItem("phone") || '0898144676'}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Line ID</label>
                            <input type="text" id="lineID" class="form-control" value="${localStorage.getItem("lineID") || 'imlhingw21'}">
                        </div>

                        <button class="btn btn-primary save-profile-btn" style="background-color:#474BC2;">Save</button>
                    </div>
                </div>
            `;

            // ✅ Event listener for Save button
            document.querySelector(".save-profile-btn").addEventListener("click", function () {
                let newFullName = document.getElementById("fullName").value;
                let newPosition = document.getElementById("position").value;
                let newTeam = document.getElementById("team").value;
                let newEmail = document.getElementById("email").value;
                let newPhone = document.getElementById("phone").value;
                let newLineID = document.getElementById("lineID").value;

                // ✅ Save updated information in localStorage
                localStorage.setItem("fullName", newFullName);
                localStorage.setItem("position", newPosition);
                localStorage.setItem("team", newTeam);
                localStorage.setItem("email", newEmail);
                localStorage.setItem("phone", newPhone);
                localStorage.setItem("lineID", newLineID);

                // ✅ Go back to Profile page
                showProfile();
            });

            // ✅ Event listener for Back button
            document.querySelector(".back-profile-btn").addEventListener("click", function (event) {
                event.preventDefault();
                showProfile();
            });
            }




            });

            document.addEventListener("DOMContentLoaded", function () {
            // Retrieve profile image from localStorage
            let storedProfileImage = localStorage.getItem("profileImage");

            // If a profile image exists in localStorage, update the navbar profile image
            if (storedProfileImage) {
                let navProfileImg = document.getElementById("navProfileImage");
                if (navProfileImg) {
                    navProfileImg.src = storedProfileImage;
                }
            }
            });





    </script>
@endsection










