@extends('layouts.hr.hrLayout')

@section('content')
    @include('layouts.hr.navbar')
    <div class="row main-container" >
        
                @include('layouts.hr.sidebar')



                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <!-- heading -->
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="mb-0" data-translate="Time Attendance">Time Attendance</h2>
                        <!-- Summary Badges -->
                        <div class="d-flex gap-3">
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                <p class="mb-1" data-translate="Today">Today</p>
                                <h4 class="mb-0">12 March 2025</h4>
                            </div>
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                <p class="mb-1" data-translate="On-Time">On-Time</p>
                                <h4 class="mb-0">11</h4>
                            </div>
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                <p class="mb-1" data-translate="Late Attendance">Late Attendance</p>
                                <h4 class="mb-0">4</h4>
                            </div>
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                <p class="mb-1" data-translate="Absent">Absent</p>
                                <h4 class="mb-0">2</h4>
                            </div>
                        </div>
                    </div>
                    <!-- heading  -->

                    <!-- Timesheet & attendance Table  -->
                    <div class="container mt-4">         
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" id="attendanceTabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="timesheet-tab" data-bs-toggle="tab" href="#timesheet"> 
                                    <i class="bi bi-calendar2-event-fill" style="margin-right:5px;"></i><span data-translate="Timesheet">Timesheet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="leave-request-tab" data-bs-toggle="tab" href="#leave-request"> 
                                    <i class="bi bi-calendar2-x-fill"  style="margin-right:5px;"></i><span data-translate="Leave Request">Leave Request</span> 
                                </a>
                            </li>
                        </ul>
                    
                        <div class="tab-content mt-3">
                            <!-- Timesheet Tab -->
                            <div class="tab-pane fade show active" id="timesheet">
                                <div class="w-100 d-flex justify-content-between mb-5">
                                    <h3 data-translate="Timesheet">Timesheet</h3>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn calendar_btn" type="button" id="dateButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../assets/icon/calendar.png" alt="">
                                                <span id="selectedDate"></span>
                                                <img src="../assets/icon/down_arrow.png" alt="">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dateButton" id="calendarDropdown">
                                                <div class="calendar">
                                                    <div class="header">
                                                        <button id="prevMonth" style="background-color: #B1BBE7;border-radius:4px;"><img src="../assets/icon/less_than.png" alt=""></button>
                                                        <span id="monthYear"></span>
                                                        <button id="nextMonth" style="background-color: #B1BBE7;border-radius:4px;"><img src="../assets/icon/greater_than.png" class="fw-bold" alt=""></button>
                                                    </div>
                                                    <div class="days">
                                                        <span>Sun</span>
                                                        <span>Mon</span>
                                                        <span>Tue</span>
                                                        <span>Wed</span>
                                                        <span>Thu</span>
                                                        <span>Fri</span>
                                                        <span>Sat</span>
                                                    </div>
                                                    <div class="dates" id="dates"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""> Export</button>
                                    </div>
                                </div>
                                <!-- data filter  -->
                                <div class="d-flex justify-content-between mb-3" style="height:50px;">
                                    <div class="d-flex gap-2">
                                        <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="All Intern">All Intern</span></button>
                                        <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="On-site">On-site</span></button>
                                        <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="Work From Home">Work From Home</span></button>
                                        <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="Hybrid">Hybrid</span></button>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <div class="input-group search-box" style="height:100%; justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                                            <span class="input-group-text" style="height:100%; border:none; background-color: white;"><i class="bi bi-search"></i></span>
                                            <input type="text" id="searchInputTestForm" style="height:100%; width:200px; border:none; background-color: white;"  class="form-control" placeholder="Search for tests">
                                        </div>
                                        <button class="btn general-setting-btn" style="border:1px solid black; width:auto; display:flex;justify-content: center;align-items: center;">
                                            <i class="bi bi-sliders"></i> <span data-translate="General Setting"> General Setting</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- data filter  -->

                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th data-translate="Intern">Intern</th>
                                                <th data-translate="Date">Date</th>
                                                <th data-translate="Time In">Time In</th>
                                                <th data-translate="Time Out">Time Out</th>
                                                <th data-translate="Description">Description</th>
                                                <th data-translate="Site Name">Site Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="internTableBody">
                                            <!-- Data will be dynamically inserted here -->
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center ">
                                    <div>
                                        <label for="entriesPerPage" style="font-size:14px; margin-right:10px;" data-translate="Attendances per page">Attendances per page</label>
                                        <select id="entriesPerPage" class="form-select d-inline-block w-auto bg-transparent" style="border:1px solid #C8C8C8;">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>
                                    <nav>
                                        <ul class="pagination mb-0" id="paginationControls">
                                            <!-- Pagination buttons will be dynamically inserted -->
                                        </ul>
                                    </nav>
                                </div>

                                <!-- table  -->

                            </div>
                            <!-- Timesheet Tab -->
                    
                            <!-- Leave Request Tab -->
                            <div class="tab-pane fade" id="leave-request">
                                <div class="d-flex justify-content-between mb-5 mt-4">
                                    <div class="d-flex justify-content-center align-items-center gap-5" style=" height:40px;">
                                        <div>
                                        <h3>18 <span data-translate="Request">Request</span></h3>
                                        </div>
                                        <div class="" style="background-color:white; padding:10px 5px; border-radius: 4px;">
                                            <button style="background-color: transparent; border-radius:4px; border:none;"><span data-translate="View All">View All</span></button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;"><span data-translate="Pending">Pending</span> <span>4</span></button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;"><span data-translate="Approved">Approved</span> <span>8</span></button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;"><span data-translate="Rejected">Rejected</span> <span>7</span></button>
                                        </div>
                                    </div>
                                    <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""><span data-translate="Export"> Export</span></button>
                                </div>
                                <div class="d-flex justify-content-between mb-5" style="height:50px;">
                                    <div class="d-flex justify-content-start text-start gap-2" style="width:70%;">
                                            <div class="input-group search-box" style="height:100%; width:auto; justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                                                <span class="input-group-text" style="height:100%; border:none; background-color: white; margin:0;"><i class="bi bi-search"></i></span>
                                                <input type="text" id="searchInputTestForm" style="height:100%; width:200px; margin:0; border:none; background-color: white;"  class="form-control" placeholder="Search for tests">
                                            </div>
                                            <div class="dropdown" style="width:auto; border-radius:4px;">
                                                <button class="btn custom-dropdown-btn" style="background-color:white; height:100%;" data-bs-toggle="dropdown" >
                                                    <img src="../assets/icon/component.png" alt=""> <span data-translate="All Type">All Type</span>
                        
                                                    <span style="background-color:#474BC2;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="color:white;"></i></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Sick Leave">Sick Leave</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Vacation">Vacation</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Business">Business</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Other">Other</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown"  style="width:auto; border-radius:4px;">
                                                <button class="btn custom-dropdown-btn" style="background-color:white; height:100%;" data-bs-toggle="dropdown">
                                                    <img src="../assets/icon/verified.png" alt=""><span data-translate="All Approval">All Approval</span> 
                                                    <span style="background-color:#474BC2 !important;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="color:white;"></i></span>
                                                </button>
                                                <ul class="dropdown-menu" id="stepDropdown">
                                                    <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Approved">Approved</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Pending">Pending</span></a></li>
                                                    <li><a class="dropdown-item" href="#"><span data-translate="Rejected">Rejected</span></a></li>
                                                </ul>
                                            </div>
                                    </div>
                                
                                    <button class="btn btn-outline-dark general-setting-btn">
                                        <i class="bi bi-sliders"></i><span data-translate=" General Setting"> General Setting</span>
                                    </button>
                                </div>
                                                <!-- leave request table  -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th data-translate="Intern">Intern</th>
                                            <th data-translate="Leave Type">Leave Type</th>
                                            <th data-translate="Duration">Duration</th>
                                            <th data-translate="Start - End Date">Start - End Date</th>
                                            <th data-translate="Start Time">Start Time</th>
                                            <th data-translate="End Time">End Time</th>
                                            <th data-translate="Reason">Reason</th>
                                            <th data-translate="Approval">Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody id="leaveTableBody">
                                        <!-- Data will be dynamically inserted here -->
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <label for="leavesPerPage"><span data-translate="Leaves per page:">Leaves per page:</span></label>
                                    <select id="leavesPerPage" class="form-select d-inline-block w-auto bg-transparent" style="border:1px solid #C8C8C8;">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                                <nav>
                                    <ul class="pagination mb-0" id="leavePaginationControls">
                                        <!-- Pagination buttons will be dynamically inserted -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- leave request table  -->
                            </div>
                            <!-- Leave Request Tab -->
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
    </div>
@endsection

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

                        /* heading part  */
                        .badge-box{
                            background-color:#B1BBE7;
                            border-radius:4px;
                        }

                        /* heading part  */

                        .container {
                            background-color: #F3F5FC;
                            padding: 20px;
                            border-radius: 4px;
                            width:100%;
                            height:auto;
                            margin:0;
                        }
                        .nav-tabs {
                            border-bottom: 2px solid #ddd;
                        }
                        .nav-tabs .nav-link {
                            color: #C8C8C8;
                            font-weight: bold;
                            border: none;
                            padding: 12px 20px;
                        }
                        .nav-tabs .nav-link.active {
                            border-bottom:3px solid #474BC2;
                            background-color:transparent;
                            
                        }

                        .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .calendar_btn{
                    border:2px solid black;
                    border-radius:4px;
                }

                .dropbtn {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 200px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .calendar {
                    padding: 10px;
                    border-radius: 4px;
                }

                .header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                }

                .header button {
                    background: none;
                    border: none;
                    cursor: pointer;
                    font-size: 16px;
                }

                .days, .dates {
                    display: grid;
                    grid-template-columns: repeat(7, 1fr);
                    gap: 5px;
                }

                .dates span {
                    text-align: center;
                    padding: 5px;
                    cursor: pointer;
                }

                .dates span.today {
                    background-color: #D1D1F0;
                    border-radius: 4px;
                }

                .dates span:hover {
                    background-color: #ddd;
                }

                .show {
                    display: block;
                }

                /* timesheet table  */

                .table{
                    border-radius: 4px !important;
                }
                .table thead tr {
                    background-color: white !important;
                    font-weight: bold;
                }

                .table tbody tr td {
                    background-color: transparent !important;
                    
                }

                .badge-work-from-home {
                    background-color: #BE9DFE;
                    border: 1px solid #8165B7;
                    color: #8165B7;
                    padding: 5px 10px;
                    border-radius: 5px;
                }

                .badge-office {
                    background-color: #FEC79D;
                    border: 1px solid #C35C18;
                    color: #C35C18;
                    padding: 5px 10px;
                    border-radius: 5px;
                }

                .page-link{
                    background-color:transparent !important;
                    color:black;
                    border:1px solid #C8C8C8 !important;
                    margin:10px;
                    border-radius:4px !important;
                    
                }

                .pagination .page-item.active .page-link {
                    background-color: #474BC2 !important; /* Purple Background */
                    border:none !important;
                    color: white !important; /* White Text */
                }


                /* timesheet table  */

                /* leave request table  */



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


                /* leave request table  */
            
            
    </style>    
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
                            // Only prevent default for internal navigation (hash links)
                            if (!this.getAttribute("href").startsWith("#")) {
                                localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                                return; // Let the browser navigate normally
                            }
                            
                            event.preventDefault(); // Prevent hash-based jumps

                            // Remove active class from all links
                            sidebarLinks.forEach(l => l.classList.remove("active"));

                            // Add active class only to the clicked link
                            this.classList.add("active");

                            // Save active link in localStorage
                            localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                        });
                    });
                });

                // tabpane changing 
                // Ensure the correct tab is displayed on reload

                    let savedTab = localStorage.getItem("activeTab") || "#timesheet"; // Default to Timesheet
                    let currentTab = document.querySelector(`a[href="${savedTab}"]`);

                    if (currentTab) {
                        let tab = new bootstrap.Tab(currentTab);
                        tab.show();
                    }

                    document.querySelectorAll("#attendanceTabs a").forEach(tab => {
                        tab.addEventListener("click", function () {
                            localStorage.setItem("activeTab", this.getAttribute("href"));
                        });
                    });



                // tabpane changing 

                // Time sheet tabpane 

                // calendar dropdown function 
                document.addEventListener('DOMContentLoaded', function () {
                    const dateButton = document.getElementById('dateButton');
                    const calendarDropdown = document.getElementById('calendarDropdown');
                    const monthYear = document.getElementById('monthYear');
                    const dates = document.getElementById('dates');
                    const prevMonthButton = document.getElementById('prevMonth');
                    const nextMonthButton = document.getElementById('nextMonth');
                    const selectedDate = document.getElementById('selectedDate');

                    const today = new Date();
                    let currentMonth = today.getMonth();
                    let currentYear = today.getFullYear();

                    // Set the default selected date
                    selectedDate.textContent = formatDate(today);

                    // Initialize the calendar when the dropdown is shown
                    dateButton.addEventListener('shown.bs.dropdown', function () {
                        updateCalendar(currentMonth, currentYear);
                    });

                    // Update the calendar when navigating months
                    prevMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        updateCalendar(currentMonth, currentYear);
                    });

                    nextMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        updateCalendar(currentMonth, currentYear);
                    });

                    // Update the selected date when a date is clicked
                    dates.addEventListener('click', function (event) {
                        if (event.target.tagName === 'SPAN' && event.target.textContent) {
                            const selectedDay = parseInt(event.target.textContent, 10);
                            const selectedDateObj = new Date(currentYear, currentMonth, selectedDay);
                            selectedDate.textContent = formatDate(selectedDateObj);
                            event.stopPropagation(); // Prevent event from bubbling up
                        }
                    });

                    // Prevent the dropdown from closing when interacting with the calendar
                    calendarDropdown.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                    });

                    // Close the dropdown when clicking outside
                    document.addEventListener('click', function (event) {
                        if (!dateButton.contains(event.target) && !calendarDropdown.contains(event.target)) {
                            const dropdown = new bootstrap.Dropdown(dateButton);
                            dropdown.hide();
                        }
                    });

                    // Function to update the calendar
                    function updateCalendar(month, year) {
                        dates.innerHTML = '';
                        monthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

                        const firstDay = new Date(year, month, 1);
                        const lastDay = new Date(year, month + 1, 0);
                        const startDay = firstDay.getDay();
                        const endDate = lastDay.getDate();

                        for (let i = 0; i < startDay; i++) {
                            dates.innerHTML += '<span></span>';
                        }

                        for (let i = 1; i <= endDate; i++) {
                            const date = new Date(year, month, i);
                            const span = document.createElement('span');
                            span.textContent = i;
                            if (date.toDateString() === today.toDateString()) {
                                span.classList.add('today');
                            }
                            dates.appendChild(span);
                        }
                    }

                    function formatDate(date) {
                    const day = date.getDate(); // Get the day (e.g., 15)
                    const month = date.toLocaleString('default', { month: 'long' }); // Get the full month name (e.g., December)
                    const year = date.getFullYear(); // Get the year (e.g., 2024)
                    return `${day} ${month} ${year}`; // Return the formatted date (e.g., 15 December 2024)
                }
                });

                // calendar dropdown function 

                // table timesheet
                const internData = [
                { profile: "https://i.pravatar.cc/40?img=1", name: "Doc Hudson", role: "Web Developer Trainee", date: "17th Dec 2024", timeIn: "8:26", timeOut: "17:31", description: "Programming web apps for selling products", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=2", name: "Lightning Mcqueen", role: "Software Tester", date: "17th Dec 2024", timeIn: "8:29", timeOut: "17:30", description: "Black box testing of product sales websites", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=3", name: "Lana Delrey", role: "Software Tester", date: "17th Dec 2024", timeIn: "8:25", timeOut: "17:35", description: "Black box testing of product sales websites", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=4", name: "Margot Robbie", role: "HR Trainee", date: "17th Dec 2024", timeIn: "8:33", timeOut: "17:37", description: "Preparation of work schedules, meeting reports", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=5", name: "Doja Cat", role: "Web Developer Trainee", date: "17th Dec 2024", timeIn: "8:30", timeOut: "17:40", description: "Programming web apps for selling products", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=6", name: "Elon Musk", role: "AI Researcher", date: "17th Dec 2024", timeIn: "8:20", timeOut: "17:30", description: "Developing AI models", site: "Hybrid" },
                    { profile: "https://i.pravatar.cc/40?img=7", name: "Steve Jobs", role: "Product Designer", date: "17th Dec 2024", timeIn: "8:15", timeOut: "17:25", description: "Designing new UI/UX", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=8", name: "Bill Gates", role: "Software Engineer", date: "17th Dec 2024", timeIn: "8:10", timeOut: "17:20", description: "Building scalable software", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=9", name: "Jeff Bezos", role: "E-commerce Manager", date: "17th Dec 2024", timeIn: "8:05", timeOut: "17:15", description: "Managing online store operations", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=10", name: "Mark Zuckerberg", role: "Social Media Analyst", date: "17th Dec 2024", timeIn: "8:00", timeOut: "17:10", description: "Analyzing user engagement", site: "Hybrid" },
                    { profile: "https://i.pravatar.cc/40?img=11", name: "Sundar Pichai", role: "Cloud Architect", date: "17th Dec 2024", timeIn: "8:12", timeOut: "17:22", description: "Developing cloud solutions", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=12", name: "Tim Cook", role: "Operations Manager", date: "17th Dec 2024", timeIn: "8:18", timeOut: "17:28", description: "Overseeing product operations", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=13", name: "Larry Page", role: "SEO Specialist", date: "17th Dec 2024", timeIn: "8:22", timeOut: "17:32", description: "Optimizing search engine rankings", site: "Hybrid" },
                    { profile: "https://i.pravatar.cc/40?img=14", name: "Sergey Brin", role: "Data Scientist", date: "17th Dec 2024", timeIn: "8:35", timeOut: "17:45", description: "Analyzing big data", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=15", name: "Jack Dorsey", role: "Blockchain Developer", date: "17th Dec 2024", timeIn: "8:40", timeOut: "17:50", description: "Developing decentralized apps", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=10", name: "Mark Zuckerberg", role: "Social Media Analyst", date: "17th Dec 2024", timeIn: "8:00", timeOut: "17:10", description: "Analyzing user engagement", site: "Hybrid" },
                    { profile: "https://i.pravatar.cc/40?img=11", name: "Sundar Pichai", role: "Cloud Architect", date: "17th Dec 2024", timeIn: "8:12", timeOut: "17:22", description: "Developing cloud solutions", site: "Work From Home" },
                    { profile: "https://i.pravatar.cc/40?img=12", name: "Tim Cook", role: "Operations Manager", date: "17th Dec 2024", timeIn: "8:18", timeOut: "17:28", description: "Overseeing product operations", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=13", name: "Larry Page", role: "SEO Specialist", date: "17th Dec 2024", timeIn: "8:22", timeOut: "17:32", description: "Optimizing search engine rankings", site: "Hybrid" },
                    { profile: "https://i.pravatar.cc/40?img=14", name: "Sergey Brin", role: "Data Scientist", date: "17th Dec 2024", timeIn: "8:35", timeOut: "17:45", description: "Analyzing big data", site: "Office" },
                    { profile: "https://i.pravatar.cc/40?img=15", name: "Jack Dorsey", role: "Blockchain Developer", date: "17th Dec 2024", timeIn: "8:40", timeOut: "17:50", description: "Developing decentralized apps", site: "Work From Home" }
                ];


                let currentPage = 1;
                let rowsPerPage = 5;

                function displayTableData() {
                    const tableBody = document.getElementById("internTableBody");
                    tableBody.innerHTML = "";
                    
                    const start = (currentPage - 1) * rowsPerPage;
                    const end = start + rowsPerPage;
                    const paginatedData = internData.slice(start, end);
                    
                    paginatedData.forEach((intern) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td class="d-flex">
                                <img src="${intern.profile}" alt="${intern.name}" class="rounded-circle" width="40" height="40">
                                <span class="ms-2">${intern.name}<br/><small>${intern.role}</small></span>
                            </td>
                            <td>${intern.date}</td>
                            <td>${intern.timeIn}</td>
                            <td>${intern.timeOut}</td>
                            <td>${intern.description}</td>
                            <td>
                                <span class="badge ${intern.site === 'Office' ? 'badge-office' : 'badge-work-from-home'}">
                                    ${intern.site}
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn " type="button" data-bs-toggle="dropdown">&#8942;</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                        <li><a class="dropdown-item" href="#">Timesheet Details</a></li>
                                    </ul>
                                </div>
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                    updatePagination();
                }

                function updatePagination() {
                    const paginationControls = document.getElementById("paginationControls");
                    paginationControls.innerHTML = "";
                    const totalPages = Math.ceil(internData.length / rowsPerPage);

                    paginationControls.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${currentPage - 1})" style="border:none !important;justify-content:center;align-items:center;"><i class="bi bi-chevron-left"></i> Previous</a></li>`;

                    if (totalPages > 3) {
                        paginationControls.innerHTML += `<li class="page-item ${currentPage === 1 ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changePage(1)">1</a></li>`;
                        
                        if (currentPage > 2) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        let startPage = Math.max(2, currentPage - 1);
                        let endPage = Math.min(totalPages - 1, currentPage + 1);

                        for (let i = startPage; i <= endPage; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a></li>`;
                        }

                        if (currentPage < totalPages - 1) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        paginationControls.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${totalPages})">${totalPages}</a></li>`;
                    } else {
                        for (let i = 1; i <= totalPages; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a></li>`;
                        }
                    }

                    paginationControls.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${currentPage + 1})"  style="border:none !important;"> Next <i class="bi bi-chevron-right"></i></a></li>`;
                }


                function changePage(page) {
                    if (page < 1 || page > Math.ceil(internData.length / rowsPerPage)) return;
                    currentPage = page;
                    displayTableData();
                }

                document.getElementById("entriesPerPage").addEventListener("change", function() {
                    rowsPerPage = parseInt(this.value);
                    currentPage = 1;
                    displayTableData();
                });

                displayTableData();
                // table timesheet

                // Time sheet tabpane 

                // Leave request tab pane

                // leave request table 

                const leaveData = [
                    { profile: "https://i.pravatar.cc/40?img=1", name: "Ryan Gosling", role: "HRD Trainee", type: "Vacation", duration: "2 days", dateRange: "2nd - 5th Jan 2025", startTime: "8:30", endTime: "17:30", reason: "Personal", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=2", name: "Lightning Mcqueen", role: "Software Tester", type: "Sick Leave", duration: "1 day", dateRange: "17th Dec 2025", startTime: "8:30", endTime: "17:30", reason: "Medical", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=3", name: "Lana Delrey", role: "Software Tester", type: "Vacation", duration: "3 days", dateRange: "15th - 17th Jan 2025", startTime: "8:30", endTime: "17:30", reason: "Holiday", approval: "rejected" },
                    { profile: "https://i.pravatar.cc/40?img=4", name: "Margot Robbie", role: "HR Trainee", type: "Vacation", duration: "2 days", dateRange: "25th - 26th Dec 2024", startTime: "8:30", endTime: "17:30", reason: "Family Event", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=5", name: "Doja Cat", role: "Web Developer Trainee", type: "Business", duration: "1 day", dateRange: "3rd Dec 2024", startTime: "8:30", endTime: "13:30", reason: "Client Meeting", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=6", name: "Elon Musk", role: "AI Researcher", type: "Vacation", duration: "5 days", dateRange: "10th - 15th Feb 2025", startTime: "9:00", endTime: "18:00", reason: "Space Exploration", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=7", name: "Steve Jobs", role: "Product Designer", type: "Sick Leave", duration: "2 days", dateRange: "5th - 6th Jan 2025", startTime: "9:30", endTime: "17:00", reason: "Flu", approval: "rejected" },
                    { profile: "https://i.pravatar.cc/40?img=8", name: "Bill Gates", role: "Software Engineer", type: "Business", duration: "3 days", dateRange: "12th - 14th March 2025", startTime: "8:00", endTime: "16:00", reason: "Conference", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=9", name: "Jeff Bezos", role: "E-commerce Manager", type: "Vacation", duration: "7 days", dateRange: "20th - 27th May 2025", startTime: "10:00", endTime: "17:00", reason: "Cruise Trip", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=10", name: "Mark Zuckerberg", role: "Social Media Analyst", type: "Sick Leave", duration: "1 day", dateRange: "9th Sept 2025", startTime: "8:00", endTime: "14:00", reason: "Migraine", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=11", name: "Sundar Pichai", role: "Cloud Architect", type: "Vacation", duration: "4 days", dateRange: "11th - 14th Aug 2025", startTime: "8:00", endTime: "17:00", reason: "Family Visit", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=12", name: "Tim Cook", role: "Operations Manager", type: "Business", duration: "2 days", dateRange: "8th - 9th July 2025", startTime: "9:00", endTime: "17:00", reason: "Board Meeting", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=13", name: "Larry Page", role: "SEO Specialist", type: "Sick Leave", duration: "3 days", dateRange: "18th - 20th Feb 2025", startTime: "9:30", endTime: "17:30", reason: "Cold", approval: "rejected" },
                    { profile: "https://i.pravatar.cc/40?img=14", name: "Sergey Brin", role: "Data Scientist", type: "Vacation", duration: "5 days", dateRange: "6th - 10th April 2025", startTime: "8:30", endTime: "17:30", reason: "Personal Retreat", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=15", name: "Jack Dorsey", role: "Blockchain Developer", type: "Business", duration: "1 day", dateRange: "22nd April 2025", startTime: "10:00", endTime: "18:00", reason: "Investor Meet", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=16", name: "Oprah Winfrey", role: "HR Specialist", type: "Vacation", duration: "7 days", dateRange: "5th - 12th June 2025", startTime: "9:00", endTime: "17:30", reason: "Travel", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=17", name: "Kanye West", role: "Music Producer", type: "Sick Leave", duration: "2 days", dateRange: "15th - 16th Sept 2025", startTime: "10:00", endTime: "15:00", reason: "Voice Rest", approval: "rejected" },
                    { profile: "https://i.pravatar.cc/40?img=18", name: "Taylor Swift", role: "Marketing Manager", type: "Vacation", duration: "5 days", dateRange: "1st - 6th Nov 2025", startTime: "8:00", endTime: "17:00", reason: "Concert Tour", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=19", name: "Brad Pitt", role: "Film Director", type: "Business", duration: "3 days", dateRange: "7th - 10th Dec 2025", startTime: "9:00", endTime: "17:30", reason: "Film Festival", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=20", name: "Angelina Jolie", role: "NGO Director", type: "Vacation", duration: "10 days", dateRange: "12th - 22nd Jan 2025", startTime: "8:30", endTime: "17:30", reason: "Charity Work", approval: "pending" }
                ];



                let currentLeavePage = 1;
                let leavesPerPage = 5;

                displayLeaveData();

                document.getElementById("leavesPerPage").addEventListener("change", function() {
                    leavesPerPage = parseInt(this.value);
                    currentLeavePage = 1;
                    displayLeaveData();
                });

                function displayLeaveData() {
                    const tableBody = document.getElementById("leaveTableBody");
                    tableBody.innerHTML = "";
                    
                    const start = (currentLeavePage - 1) * leavesPerPage;
                    const end = start + leavesPerPage;
                    const paginatedData = leaveData.slice(start, end);
                    
                    paginatedData.forEach((leave, index) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td class="d-flex align-items-center">
                                <img src="${leave.profile}" alt="${leave.name}" class="rounded-circle" width="40" height="40">
                                <span class="ms-2">${leave.name}<br/><small>${leave.role}</small></span>
                            </td>
                            <td>${leave.type}</td>
                            <td>${leave.duration}</td>
                            <td>${leave.dateRange}</td>
                            <td>${leave.startTime}</td>
                            <td>${leave.endTime}</td>
                            <td><a href="#" class="text-decoration-none">📄 View Reason</a></td>
                            <td id="approval-${index}">
                                ${getApprovalHtml(leave.approval, index)}
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                    updateLeavePagination();
                }

                function getApprovalHtml(status, index) {
                    if (status === "approved") {
                        return '<span class="text-success">✔ Approved</span>';
                    } else if (status === "rejected") {
                        return '<span class="text-danger">✖ Rejected</span>';
                    } else {
                        return `
                            <button class="btn btn-success btn-sm me-2" onclick="approveLeave(${index})">✔</button>
                            <button class="btn btn-danger btn-sm" onclick="rejectLeave(${index})">✖</button>
                        `;
                    }
                }

                function approveLeave(index) {
                    leaveData[index].approval = "approved";
                    document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("approved", index);
                }

                function rejectLeave(index) {
                    leaveData[index].approval = "rejected";
                    document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("rejected", index);
                }

                function updateLeavePagination() {
                    const paginationControls = document.getElementById("leavePaginationControls");
                    paginationControls.innerHTML = "";
                    const totalPages = Math.ceil(leaveData.length / leavesPerPage);

                    paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeLeavePage(${currentLeavePage - 1})"  style="border:none !important;"> <img src="../assets/icon/less_than.png" /> Previous</a></li>`;

                    if (totalPages > 3) {
                        paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === 1 ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeLeavePage(1)">1</a></li>`;
                        
                        if (currentLeavePage > 2) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        let startPage = Math.max(2, currentLeavePage - 1);
                        let endPage = Math.min(totalPages - 1, currentLeavePage + 1);

                        for (let i = startPage; i <= endPage; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changeLeavePage(${i})">${i}</a></li>`;
                        }

                        if (currentLeavePage < totalPages - 1) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === totalPages ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeLeavePage(${totalPages})">${totalPages}</a></li>`;
                    } else {
                        for (let i = 1; i <= totalPages; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changeLeavePage(${i})">${i}</a></li>`;
                        }
                    }

                    paginationControls.innerHTML += `<li class="page-item ${currentLeavePage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeLeavePage(${currentLeavePage + 1})"  style="border:none !important;">Next <img src="../assets/icon/greater_than.png" /></a></li>`;
                }

                function changeLeavePage(page) {
                    if (page < 1 || page > Math.ceil(leaveData.length / leavesPerPage)) return;
                    currentLeavePage = page;
                    displayLeaveData();
                }
                // leave request table 

                // Leave request tab pane

    </script>   
@endsection





















