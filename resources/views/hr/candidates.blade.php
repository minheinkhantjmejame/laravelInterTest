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





    </style>
@endsection
    
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >

                @include('layouts.hr.sidebar')

                



                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between mb-3">
                            <h2 class="mb-0" data-translate="Candidates">Candidates</h2>
                        
                            <!-- Summary Badges -->
                            <div class="d-flex gap-3">
                                <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 120px; height: 80px;">
                                    <p class="mb-1" data-translate="Succeeded">Succeeded</p>
                                    <h4 class="mb-0">24</h4>
                                </div>
                                <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 120px; height: 80px;">
                                    <p class="mb-1" data-translate="In-progress">In-progress</p>
                                    <h4 class="mb-0">53</h4>
                                </div>
                                <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 120px; height: 80px;">
                                    <p class="mb-1" data-translate="Failed">Failed</p>
                                    <h4 class="mb-0">76</h4>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <!-- Search & Filters Row -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <!-- Left Section: Search Box & Filters -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- Search Box -->
                                <div class="input-group search-box">
                                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control border-0" placeholder="Search for candidates">
                                </div>
                        
                                <!-- All Program Dropdown -->
                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="programDropdownBtn">
                                        <img src="../assets/icon/desktop.png" alt=""> <span data-translate="All Program">All Program</span> 

                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" ></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="programDropdown">
                                        <li><a class="dropdown-item active" href="#" data-translate="All">All</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="HR Trainee">HR Trainee</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="Software Tester">Software Tester</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="Marketing Trainee">Marketing Trainee</a></li>
                                    </ul>
                                </div>
                        
                                <!-- All Step Dropdown -->
                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="stepDropdownBtn">
                                        <img src="../assets/icon/arrow-circle-right.png" alt=""><span data-translate="All Step">All Step</span> 
                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="stepDropdown">
                                        <li><a class="dropdown-item active" href="#" data-translate="All">All</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="Pending">Pending</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="Request Internship Application">Request Internship Application</a></li>
                                        <li><a class="dropdown-item" href="#" data-translate="Success">Success</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <!-- Right Section: General Setting Button -->
                            <button class="btn btn-outline-dark general-setting-btn">
                                <i class="bi bi-sliders"></i> <span data-translate="General Setting"> General Setting</span>
                            </button>
                        </div>
                        
                        

                        
            <!-- Table Container -->
            <div class="table-container">
                <div class="table-responsive"> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th data-translate="Internship ID">Internship ID</th>
                                <th data-translate="First name">First name</th>
                                <th data-translate="Last name">Last name</th>
                                <th data-translate="Email address">Email address</th>
                                <th data-translate="Phone number">Phone number</th>
                                <th data-translate="Internship Period">Internship Period</th>
                                <th data-translate="Type">Type</th>
                                <th data-translate="Program">Program</th>
                                <th data-translate="Step">Step</th>
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
                            <label data-translate="Cadidates per page">Candidates per page</label>
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
    <script tyle="text/javascript">

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
            const profilePhoto = document.querySelector(".profile_photo");
            const dashboardContent = document.querySelector(".dashboard-content");

            profilePhoto.addEventListener("click", function () {
                // Replace dashboard content with profile details
                dashboardContent.innerHTML = `
                    <div class="container-fluid" id="profile_details">
                        <h2 class="mb-3">My Profile</h2>

                        <!-- Profile Summary -->
                        <div class="card p-4 w-50">
                            <div class="d-flex align-items-center">
                                <img src="../assets/img/user_sample_1.png" alt="Profile Photo" class="rounded-circle" width="80" height="80">
                                <div class="ms-3">
                                    <h4 class="mb-0">Lhing W.</h4>
                                    <span class="badge">HR Manager</span>
                                </div>
                                <button class="btn edit ms-auto"><img src="../assets/icon/edit_pen.png" alt="">  Edit</button>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="card p-4 mt-3 w-50">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>Personal Information</h5>
                                <button class="btn edit"><img src="../assets/icon/edit_pen.png" alt=""> Edit</button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Full Name</span><p> Lhing Wang</p>
                                    <span>Team</span><p> Project Internplus</p>
                                    <span>Phone Number</span><p> 0898144676</p>
                                </div>
                                <div class="col-md-6">
                                    <span>Position</span><p>HR Manager</p>
                                    <span>Email</span><p>wanglhing@vennessplus.com</p>
                                    <span>Line ID</span><p>imlhingw21</p>
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
            });
            });



            document.addEventListener("DOMContentLoaded", function () {
            const programDropdownBtn = document.getElementById("programDropdownBtn");
            const stepDropdownBtn = document.getElementById("stepDropdownBtn");
            const programDropdown = document.getElementById("programDropdown");
            const stepDropdown = document.getElementById("stepDropdown");
            const tableBody = document.getElementById("table-body");
            const pageSizeSelect = document.querySelector(".form-select"); // Corrected reference to dropdown

            programDropdownBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                programDropdown.classList.toggle("show");
                stepDropdown.classList.remove("show");
            });

            stepDropdownBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                stepDropdown.classList.toggle("show");
                programDropdown.classList.remove("show");
            });

            document.addEventListener("click", function () {
                programDropdown.classList.remove("show");
                stepDropdown.classList.remove("show");
            });

            // Sample Data
            const candidates = [
            { id: "112987600", firstName: "Peter", lastName: "Pan", email: "pppan2000@gmail.com", phone: "0874452710", period: "2 Dec 2024 - 30 Mar 2025", type: "Work From Home", program: "Software Tester", step: "Pending" },
            { id: "161287621", firstName: "Ron", lastName: "Wisley", email: "badron@gmail.com", phone: "0819452713", period: "20 Jan 2025 - 30 May 2025", type: "Hybrid", program: "HR Trainee", step: "Fail" },
            { id: "112987200", firstName: "Tom", lastName: "Holland", email: "spidertom@gmail.com", phone: "0867912710", period: "20 Jan 2025 - 1 Jun 2025", type: "Hybrid", program: "HR Trainee", step: "Pending" },
            { id: "112987601", firstName: "Sabrina", lastName: "Carpenter", email: "shortsweet@gmail.com", phone: "0823627119", period: "1 Dec 2024 - 25 Mar 2025", type: "Work From Home", program: "UX/UI Designer", step: "Request Internship Application" },
            { id: "112987602", firstName: "Ariana", lastName: "Grande", email: "arianag@gmail.com", phone: "0957716332", period: "1 Jan 2025 - 14 Apr 2025", type: "Work From Home", program: "Web Developer", step: "Request Internship Application" },
            { id: "112987603", firstName: "Selena", lastName: "Gomez", email: "selenagomez@gmail.com", phone: "0671123481", period: "25 Dec 2024 - 25 Mar 2025", type: "Hybrid", program: "Web Developer", step: "Request Internship Application" },
            { id: "112987604", firstName: "Shawn", lastName: "Mendes", email: "shawnmendes@gmail.com", phone: "0898851126", period: "1 Dec 2024 - 1 Apr 2025", type: "On-site", program: "HRD Trainee", step: "Acceptance Terms" },
            { id: "112987605", firstName: "Olivia", lastName: "Rodrigo", email: "sourolivia@gmail.com", phone: "0814452819", period: "1 Dec 2024 - 15 Apr 2025", type: "Work From Home", program: "UX/UI Designer", step: "Success" },
            { id: "112987606", firstName: "Ed", lastName: "Sheeran", email: "edsheeran@gmail.com", phone: "0912456783", period: "10 Jan 2025 - 30 Jun 2025", type: "Remote", program: "Software Tester", step: "Pending" },
            { id: "112987607", firstName: "Taylor", lastName: "Swift", email: "taylorswift@gmail.com", phone: "0908765432", period: "5 Feb 2025 - 1 May 2025", type: "Hybrid", program: "Marketing Intern", step: "Fail" },
            { id: "112987608", firstName: "Chris", lastName: "Evans", email: "chrisevans@gmail.com", phone: "0822345678", period: "3 Mar 2025 - 10 Jul 2025", type: "Work From Home", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987609", firstName: "Robert", lastName: "Downey", email: "rdj@gmail.com", phone: "0834567891", period: "7 Apr 2025 - 12 Aug 2025", type: "Remote", program: "Finance Intern", step: "Pending" },
            { id: "112987610", firstName: "Jennifer", lastName: "Lawrence", email: "jenlawrence@gmail.com", phone: "0987654321", period: "15 Mar 2025 - 1 Jul 2025", type: "On-site", program: "HR Intern", step: "Pending" },
            { id: "112987611", firstName: "Ryan", lastName: "Reynolds", email: "deadpool@gmail.com", phone: "0812345678", period: "10 Feb 2025 - 22 Jun 2025", type: "Work From Home", program: "Software Engineer", step: "Fail" },
            { id: "112987612", firstName: "Emma", lastName: "Watson", email: "emmawatson@gmail.com", phone: "0898765432", period: "12 Apr 2025 - 5 Aug 2025", type: "Hybrid", program: "UX/UI Designer", step: "Pending" },
            { id: "112987613", firstName: "Will", lastName: "Smith", email: "willsmith@gmail.com", phone: "0912345678", period: "2 May 2025 - 30 Sep 2025", type: "Remote", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987614", firstName: "Scarlett", lastName: "Johansson", email: "scarjo@gmail.com", phone: "0823456789", period: "10 Jun 2025 - 15 Oct 2025", type: "On-site", program: "Marketing Trainee", step: "Success" },
            { id: "112987615", firstName: "Leonardo", lastName: "DiCaprio", email: "leodicaprio@gmail.com", phone: "0834567890", period: "5 Jul 2025 - 20 Nov 2025", type: "Hybrid", program: "Finance Intern", step: "Fail" },
            { id: "112987616", firstName: "Dwayne", lastName: "Johnson", email: "therock@gmail.com", phone: "0845678901", period: "15 Aug 2025 - 1 Dec 2025", type: "Remote", program: "HRD Trainee", step: "Pending" },
            { id: "112987617", firstName: "Bruno", lastName: "Mars", email: "brunomars@gmail.com", phone: "0856789012", period: "25 Sep 2025 - 10 Jan 2026", type: "On-site", program: "Marketing Intern", step: "Pending" },
            { id: "112987618", firstName: "Zendaya", lastName: "Coleman", email: "zendaya@gmail.com", phone: "0867890123", period: "10 Oct 2025 - 25 Feb 2026", type: "Work From Home", program: "Software Engineer", step: "Success" },
            { id: "112987619", firstName: "Henry", lastName: "Cavill", email: "superman@gmail.com", phone: "0878901234", period: "15 Nov 2025 - 30 Mar 2026", type: "Hybrid", program: "HR Intern", step: "Fail" },
            { id: "112987620", firstName: "Miley", lastName: "Cyrus", email: "mileycyrus@gmail.com", phone: "0889012345", period: "5 Dec 2025 - 15 Apr 2026", type: "Remote", program: "UX/UI Designer", step: "Request Internship Application" },
            { id: "112987621", firstName: "Keanu", lastName: "Reeves", email: "keanureeves@gmail.com", phone: "0890123456", period: "20 Jan 2026 - 10 May 2026", type: "On-site", program: "Software Tester", step: "Pending" },
            { id: "112987605", firstName: "Olivia", lastName: "Rodrigo", email: "sourolivia@gmail.com", phone: "0814452819", period: "1 Dec 2024 - 15 Apr 2025", type: "Work From Home", program: "UX/UI Designer", step: "Success" },
            { id: "112987606", firstName: "Ed", lastName: "Sheeran", email: "edsheeran@gmail.com", phone: "0912456783", period: "10 Jan 2025 - 30 Jun 2025", type: "Remote", program: "Software Tester", step: "Pending" },
            { id: "112987607", firstName: "Taylor", lastName: "Swift", email: "taylorswift@gmail.com", phone: "0908765432", period: "5 Feb 2025 - 1 May 2025", type: "Hybrid", program: "Marketing Intern", step: "Fail" },
            { id: "112987608", firstName: "Chris", lastName: "Evans", email: "chrisevans@gmail.com", phone: "0822345678", period: "3 Mar 2025 - 10 Jul 2025", type: "Work From Home", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987609", firstName: "Robert", lastName: "Downey", email: "rdj@gmail.com", phone: "0834567891", period: "7 Apr 2025 - 12 Aug 2025", type: "Remote", program: "Finance Intern", step: "Pending" },
            { id: "112987610", firstName: "Jennifer", lastName: "Lawrence", email: "jenlawrence@gmail.com", phone: "0987654321", period: "15 Mar 2025 - 1 Jul 2025", type: "On-site", program: "HR Intern", step: "Pending" },
            { id: "112987611", firstName: "Ryan", lastName: "Reynolds", email: "deadpool@gmail.com", phone: "0812345678", period: "10 Feb 2025 - 22 Jun 2025", type: "Work From Home", program: "Software Engineer", step: "Fail" },
            { id: "112987612", firstName: "Emma", lastName: "Watson", email: "emmawatson@gmail.com", phone: "0898765432", period: "12 Apr 2025 - 5 Aug 2025", type: "Hybrid", program: "UX/UI Designer", step: "Pending" },
            { id: "112987613", firstName: "Will", lastName: "Smith", email: "willsmith@gmail.com", phone: "0912345678", period: "2 May 2025 - 30 Sep 2025", type: "Remote", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987614", firstName: "Scarlett", lastName: "Johansson", email: "scarjo@gmail.com", phone: "0823456789", period: "10 Jun 2025 - 15 Oct 2025", type: "On-site", program: "Marketing Trainee", step: "Success" },
            { id: "112987615", firstName: "Leonardo", lastName: "DiCaprio", email: "leodicaprio@gmail.com", phone: "0834567890", period: "5 Jul 2025 - 20 Nov 2025", type: "Hybrid", program: "Finance Intern", step: "Fail" },
            { id: "112987616", firstName: "Dwayne", lastName: "Johnson", email: "therock@gmail.com", phone: "0845678901", period: "15 Aug 2025 - 1 Dec 2025", type: "Remote", program: "HRD Trainee", step: "Pending" },
            { id: "112987617", firstName: "Bruno", lastName: "Mars", email: "brunomars@gmail.com", phone: "0856789012", period: "25 Sep 2025 - 10 Jan 2026", type: "On-site", program: "Marketing Intern", step: "Pending" },
            { id: "112987618", firstName: "Zendaya", lastName: "Coleman", email: "zendaya@gmail.com", phone: "0867890123", period: "10 Oct 2025 - 25 Feb 2026", type: "Work From Home", program: "Software Engineer", step: "Success" },
            { id: "112987619", firstName: "Henry", lastName: "Cavill", email: "superman@gmail.com", phone: "0878901234", period: "15 Nov 2025 - 30 Mar 2026", type: "Hybrid", program: "HR Intern", step: "Fail" },
            { id: "112987620", firstName: "Miley", lastName: "Cyrus", email: "mileycyrus@gmail.com", phone: "0889012345", period: "5 Dec 2025 - 15 Apr 2026", type: "Remote", program: "UX/UI Designer", step: "Request Internship Application" },
            { id: "112987621", firstName: "Keanu", lastName: "Reeves", email: "keanureeves@gmail.com", phone: "0890123456", period: "20 Jan 2026 - 10 May 2026", type: "On-site", program: "Software Tester", step: "Pending" },
            { id: "112987603", firstName: "Selena", lastName: "Gomez", email: "selenagomez@gmail.com", phone: "0671123481", period: "25 Dec 2024 - 25 Mar 2025", type: "Hybrid", program: "Web Developer", step: "Request Internship Application" },
            { id: "112987604", firstName: "Shawn", lastName: "Mendes", email: "shawnmendes@gmail.com", phone: "0898851126", period: "1 Dec 2024 - 1 Apr 2025", type: "On-site", program: "HRD Trainee", step: "Acceptance Terms" },
            { id: "112987605", firstName: "Olivia", lastName: "Rodrigo", email: "sourolivia@gmail.com", phone: "0814452819", period: "1 Dec 2024 - 15 Apr 2025", type: "Work From Home", program: "UX/UI Designer", step: "Success" },
            { id: "112987606", firstName: "Ed", lastName: "Sheeran", email: "edsheeran@gmail.com", phone: "0912456783", period: "10 Jan 2025 - 30 Jun 2025", type: "Remote", program: "Software Tester", step: "Pending" },
            { id: "112987607", firstName: "Taylor", lastName: "Swift", email: "taylorswift@gmail.com", phone: "0908765432", period: "5 Feb 2025 - 1 May 2025", type: "Hybrid", program: "Marketing Intern", step: "Fail" },
            { id: "112987608", firstName: "Chris", lastName: "Evans", email: "chrisevans@gmail.com", phone: "0822345678", period: "3 Mar 2025 - 10 Jul 2025", type: "Work From Home", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987609", firstName: "Robert", lastName: "Downey", email: "rdj@gmail.com", phone: "0834567891", period: "7 Apr 2025 - 12 Aug 2025", type: "Remote", program: "Finance Intern", step: "Pending" },
            { id: "112987610", firstName: "Jennifer", lastName: "Lawrence", email: "jenlawrence@gmail.com", phone: "0987654321", period: "15 Mar 2025 - 1 Jul 2025", type: "On-site", program: "HR Intern", step: "Pending" },
            { id: "112987611", firstName: "Ryan", lastName: "Reynolds", email: "deadpool@gmail.com", phone: "0812345678", period: "10 Feb 2025 - 22 Jun 2025", type: "Work From Home", program: "Software Engineer", step: "Fail" },
            { id: "112987612", firstName: "Emma", lastName: "Watson", email: "emmawatson@gmail.com", phone: "0898765432", period: "12 Apr 2025 - 5 Aug 2025", type: "Hybrid", program: "UX/UI Designer", step: "Pending" },
            { id: "112987613", firstName: "Will", lastName: "Smith", email: "willsmith@gmail.com", phone: "0912345678", period: "2 May 2025 - 30 Sep 2025", type: "Remote", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987614", firstName: "Scarlett", lastName: "Johansson", email: "scarjo@gmail.com", phone: "0823456789", period: "10 Jun 2025 - 15 Oct 2025", type: "On-site", program: "Marketing Trainee", step: "Success" },
            { id: "112987615", firstName: "Leonardo", lastName: "DiCaprio", email: "leodicaprio@gmail.com", phone: "0834567890", period: "5 Jul 2025 - 20 Nov 2025", type: "Hybrid", program: "Finance Intern", step: "Fail" },
            { id: "112987616", firstName: "Dwayne", lastName: "Johnson", email: "therock@gmail.com", phone: "0845678901", period: "15 Aug 2025 - 1 Dec 2025", type: "Remote", program: "HRD Trainee", step: "Pending" },
            { id: "112987617", firstName: "Bruno", lastName: "Mars", email: "brunomars@gmail.com", phone: "0856789012", period: "25 Sep 2025 - 10 Jan 2026", type: "On-site", program: "Marketing Intern", step: "Pending" },
            { id: "112987618", firstName: "Zendaya", lastName: "Coleman", email: "zendaya@gmail.com", phone: "0867890123", period: "10 Oct 2025 - 25 Feb 2026", type: "Work From Home", program: "Software Engineer", step: "Success" },
            { id: "112987619", firstName: "Henry", lastName: "Cavill", email: "superman@gmail.com", phone: "0878901234", period: "15 Nov 2025 - 30 Mar 2026", type: "Hybrid", program: "HR Intern", step: "Fail" },
            { id: "112987620", firstName: "Miley", lastName: "Cyrus", email: "mileycyrus@gmail.com", phone: "0889012345", period: "5 Dec 2025 - 15 Apr 2026", type: "Remote", program: "UX/UI Designer", step: "Request Internship Application" },
            { id: "112987621", firstName: "Keanu", lastName: "Reeves", email: "keanureeves@gmail.com", phone: "0890123456", period: "20 Jan 2026 - 10 May 2026", type: "On-site", program: "Software Tester", step: "Pending" },
            { id: "112987605", firstName: "Olivia", lastName: "Rodrigo", email: "sourolivia@gmail.com", phone: "0814452819", period: "1 Dec 2024 - 15 Apr 2025", type: "Work From Home", program: "UX/UI Designer", step: "Success" },
            { id: "112987606", firstName: "Ed", lastName: "Sheeran", email: "edsheeran@gmail.com", phone: "0912456783", period: "10 Jan 2025 - 30 Jun 2025", type: "Remote", program: "Software Tester", step: "Pending" },
            { id: "112987607", firstName: "Taylor", lastName: "Swift", email: "taylorswift@gmail.com", phone: "0908765432", period: "5 Feb 2025 - 1 May 2025", type: "Hybrid", program: "Marketing Intern", step: "Fail" },
            { id: "112987608", firstName: "Chris", lastName: "Evans", email: "chrisevans@gmail.com", phone: "0822345678", period: "3 Mar 2025 - 10 Jul 2025", type: "Work From Home", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987609", firstName: "Robert", lastName: "Downey", email: "rdj@gmail.com", phone: "0834567891", period: "7 Apr 2025 - 12 Aug 2025", type: "Remote", program: "Finance Intern", step: "Pending" },
            { id: "112987610", firstName: "Jennifer", lastName: "Lawrence", email: "jenlawrence@gmail.com", phone: "0987654321", period: "15 Mar 2025 - 1 Jul 2025", type: "On-site", program: "HR Intern", step: "Pending" },
            { id: "112987611", firstName: "Ryan", lastName: "Reynolds", email: "deadpool@gmail.com", phone: "0812345678", period: "10 Feb 2025 - 22 Jun 2025", type: "Work From Home", program: "Software Engineer", step: "Fail" },
            { id: "112987612", firstName: "Emma", lastName: "Watson", email: "emmawatson@gmail.com", phone: "0898765432", period: "12 Apr 2025 - 5 Aug 2025", type: "Hybrid", program: "UX/UI Designer", step: "Pending" },
            { id: "112987613", firstName: "Will", lastName: "Smith", email: "willsmith@gmail.com", phone: "0912345678", period: "2 May 2025 - 30 Sep 2025", type: "Remote", program: "Data Analyst", step: "Request Internship Application" },
            { id: "112987614", firstName: "Scarlett", lastName: "Johansson", email: "scarjo@gmail.com", phone: "0823456789", period: "10 Jun 2025 - 15 Oct 2025", type: "On-site", program: "Marketing Trainee", step: "Success" },
            { id: "112987615", firstName: "Leonardo", lastName: "DiCaprio", email: "leodicaprio@gmail.com", phone: "0834567890", period: "5 Jul 2025 - 20 Nov 2025", type: "Hybrid", program: "Finance Intern", step: "Fail" },
            { id: "112987616", firstName: "Dwayne", lastName: "Johnson", email: "therock@gmail.com", phone: "0845678901", period: "15 Aug 2025 - 1 Dec 2025", type: "Remote", program: "HRD Trainee", step: "Pending" },
            { id: "112987617", firstName: "Bruno", lastName: "Mars", email: "brunomars@gmail.com", phone: "0856789012", period: "25 Sep 2025 - 10 Jan 2026", type: "On-site", program: "Marketing Intern", step: "Pending" },
            { id: "112987618", firstName: "Zendaya", lastName: "Coleman", email: "zendaya@gmail.com", phone: "0867890123", period: "10 Oct 2025 - 25 Feb 2026", type: "Work From Home", program: "Software Engineer", step: "Success" },
            { id: "112987619", firstName: "Henry", lastName: "Cavill", email: "superman@gmail.com", phone: "0878901234", period: "15 Nov 2025 - 30 Mar 2026", type: "Hybrid", program: "HR Intern", step: "Fail" },
            { id: "112987620", firstName: "Miley", lastName: "Cyrus", email: "mileycyrus@gmail.com", phone: "0889012345", period: "5 Dec 2025 - 15 Apr 2026", type: "Remote", program: "UX/UI Designer", step: "Request Internship Application" },
            { id: "112987621", firstName: "Keanu", lastName: "Reeves", email: "keanureeves@gmail.com", phone: "0890123456", period: "20 Jan 2026 - 10 May 2026", type: "On-site", program: "Software Tester", step: "Pending" }
            ];



            let data = [...candidates]; // Ensure data is properly assigned

            let currentPage = 1;
            let rowsPerPage = 8;

            function getBadgeColor(step) {
                const badgeStyles = {
                    "Pending": { background: "#FFE9A7", color: "#DFB22A" },
                    "Fail": { background: "#FFB9B9", color: "#980C0C" },
                    "Request Internship Application": { background: "#D5EAFF", color: "#3B82C9" },
                    "Acceptance Terms": { background: "#FFB9E3", color: "#CD4A98" },
                    "Success": { background: "#9FE392", color: "#359C22" }
                };
                return badgeStyles[step] || { background: "#f0f0f0", color: "#000" };
            }

            function displayTable(page) {
                tableBody.innerHTML = "";
                let start = (page - 1) * rowsPerPage;
                let end = start + rowsPerPage;
                let paginatedData = data.slice(start, end);

                paginatedData.forEach(candidate => {
                    let { background, color } = getBadgeColor(candidate.step);
                    let row = `
                        <tr>
                            <td>${candidate.id}</td>
                            <td>${candidate.firstName}</td>
                            <td>${candidate.lastName}</td>
                            <td>${candidate.email}</td>
                            <td>${candidate.phone}</td>
                            <td>${candidate.period}</td>
                            <td>${candidate.type}</td>
                            <td>${candidate.program}</td>
                            <td>
                                <span class="badge" style="background-color: ${background}; color: ${color}; padding: 5px 10px; border-radius: 5px;">
                                    ${candidate.step}
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn action-btn" type="button" data-bs-toggle="dropdown">
                                        &#8942;
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i><span data-translate="Edit">Edit</span> </a></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i><span data-translate="Remove">Remove</span> </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus"></i> <span data-translate="Add to Intern">Add to Intern</span> </a></li>
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
            const paginationContainer = document.querySelector(".pagination");
            paginationContainer.innerHTML = ""; // Clear existing buttons
            let totalPages = Math.ceil(data.length / rowsPerPage);

            // Previous Button
            paginationContainer.innerHTML += `
                <li class="page-item  ${currentPage === 1 ? "disabled" : ""}" style="border:none;">
                    <a class="page-link" href="#"  style="border:none;" onclick="changePage(${currentPage - 1})"><i class="bi bi-chevron-left"></i> <span data-translate="Previous">Previous</span> </a>
                </li>
            `;

            // First Page Button
            paginationContainer.innerHTML += `
                <li class="page-item ${currentPage === 1 ? "active" : ""}">
                    <a class="page-link" href="#" onclick="changePage(1)">1</a>
                </li>
            `;

            // Show page 2 if the user is on page 1 or 2
            if (currentPage === 2) {
                paginationContainer.innerHTML += `
                    <li class="page-item active">
                        <a class="page-link" href="#" onclick="changePage(2)">2</a>
                    </li>
                `;
            } else if (currentPage > 2 && currentPage < totalPages - 1) {
                // Show '...' if current page is more than 2
                paginationContainer.innerHTML += `
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                    <li class="page-item active">
                        <a class="page-link" href="#" onclick="changePage(${currentPage})">${currentPage}</a>
                    </li>
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                `;
            }

            // Last Page Button
            paginationContainer.innerHTML += `
                <li class="page-item ${currentPage === totalPages ? "active" : ""}">
                    <a class="page-link" href="#" onclick="changePage(${totalPages})">${totalPages}</a>
                </li>
            `;

            // Next Button
            paginationContainer.innerHTML += `
                <li class="page-item ${currentPage === totalPages ? "disabled" : ""}">
                    <a class="page-link" href="#" onclick="changePage(${currentPage + 1})" style="border:none;"><span data-translate="Next">Next</span> <i class="bi bi-chevron-right"></i></a>
                </li>
            `;
            }

            window.changePage = function (page) {
                if (page < 1 || page > Math.ceil(data.length / rowsPerPage)) return;
                currentPage = page;
                displayTable(currentPage);
            };

            // Event listener for the dropdown selection
            pageSizeSelect.addEventListener("change", function () {
                rowsPerPage = parseInt(this.value, 10);
                currentPage = 1;
                displayTable(currentPage);
            });

            displayTable(currentPage);
            });


    </script>
@endsection























