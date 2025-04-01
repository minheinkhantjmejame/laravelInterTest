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

            /* offboard heading part  */   
                    .dashboard-content {
                        padding: 20px;
                    }
                    .badge-box{
                        background-color:#B1BBE7;
                        border-radius:4px;
                    }
            /* offboard heading part  */   

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
        
    </style>
@endsection
    
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
                @include('layouts.hr.sidebar')





                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <!-- heading part  -->
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="mb-0" data-translate="Payroll">Payroll</h2>
                    
                        <!-- Summary Badges -->
                        <div class="d-flex gap-3">
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                                <p class="mb-1" data-translate="Total Request">Total Request</p>
                                <h4 class="mb-0">9</h4>
                            </div>
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                                <p class="mb-1" data-translate="Approved">Approved</p>
                                <h4 class="mb-0">6</h4>
                            </div>
                            <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                                <p class="mb-1" data-translate="Paid">Paid</p>
                                <h4 class="mb-0">5</h4>
                            </div>
                        </div>           
                    </div>
                    <!-- heading part  -->
                        <!-- Search & Filters Row -->
                        <div class="d-flex justify-content-between align-items-center mt-5 mb-3" style="height:50px;">
                            <!-- Left Section: Search Box & Filters -->
                            <div class="d-flex gap-3">
                                <!-- Search Box -->
                                <div class="input-group" id="input-search" style="width: auto; border:1px solid #c0c0c0; border-radius:4px;">
                                    <button class="btn btn-dark" onclick="applySearch()" style="background-color:#ffffff; display:flex;justify-content: center;align-items:center;">
                                        <i class="bi bi-search" style="color:#000;"></i>
                                    </button>
                                    <input type="text" id="searchInput" class="form-control" style="border:none; background-color:#ffffff;" placeholder="Search">
                                </div>
                                <div class="dropdown">
                                    <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="programDropdownBtn"  data-bs-toggle="dropdown">
                                        <img src="../assets/icon/desktop.png" alt=""><span data-translate="All Approval">All Approval</span> 

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
                                        <img src="../assets/icon/arrow-circle-right.png" alt=""><span data-translate="All Status">All Status</span> 
                                        <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" id="stepDropdown">
                                        <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Pending">Pending</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Request Internship Application">Request Internship Application</span></a></li>
                                        <li><a class="dropdown-item" href="#"><span data-translate="Success">Success</span></a></li>
                                    </ul>
                                </div>
                        

                        
                            </div>
                            
                            <div class="d-flex gap-3">
                            <!-- Right Section: General Setting Button -->
                                <button class="btn general-setting-btn" style="border:1px solid #c0c0c0; border-radius: 4px;">
                                    <i class="bi bi-sliders"></i><span data-translate="General Setting">General Setting</span> 
                                </button> 
                                <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""> <span data-translate="Export">Export</span></button>
                            </div>
                        </div>  
                        
                        <!-- payroll table  -->
                <!-- payroll table  -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th data-translate="Intern">Intern</th>
                                <th data-translate="Day Worked">Day Worked</th>
                                <th data-translate="Allowance">Allowance</th>
                                <th data-translate="Payday Date">Payday Date</th>
                                <th data-translate="Approval">Approval</th>
                                <th data-translate="Status">Status</th>
                                <th data-translate=""></th>
                            </tr>
                        </thead>
                        <tbody id="payrollTableBody"></tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <label for="payrollPerPage" data-translate="Interns per page:">Interns per page:</label>
                        <select id="payrollPerPage" class="form-select d-inline-block w-auto bg-transparent">
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <nav>
                        <ul class="pagination mb-0" id="payrollPaginationControls"></ul>
                    </nav>
                </div>             
                        <!-- payroll table  -->
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

        // payroll table 
        const payrollData = Array.from({ length: 20 }, (_, i) => ({
                    profile: `https://i.pravatar.cc/40?img=${i + 1}`,
                    name: `Intern ${i + 1}`,
                    email: `intern${i + 1}@mail.com`,
                    daysWorked: `${25 + (i % 5)} Days WFO / ${30 + (i % 10)} Days WFH`,
                    allowance: `${6000 + (i % 5) * 500} BATH`,
                    payday: "Setup",
                    approval: "pending",
                    status: "Hold"
                }));

                let currentPayrollPage = 1;
                let payrollPerPage = 6;
                displayPayroll();

                document.getElementById("payrollPerPage").addEventListener("change", function() {
                    payrollPerPage = parseInt(this.value);
                    currentPayrollPage = 1;
                    displayPayroll();
                });

                function displayPayroll() {
                    const tableBody = document.getElementById("payrollTableBody");
                    tableBody.innerHTML = "";
                    const start = (currentPayrollPage - 1) * payrollPerPage;
                    const end = start + payrollPerPage;
                    const paginatedData = payrollData.slice(start, end);
                    paginatedData.forEach((intern, index) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td class="d-flex align-items-center">
                                <img src="${intern.profile}" alt="${intern.name}" class="rounded-circle" width="40" height="40">
                                <div class="ms-2">
                                    <strong>${intern.name}</strong><br/>
                                    <small>${intern.email}</small>
                                </div>
                            </td>
                            <td>${intern.daysWorked}</td>
                            <td>${intern.allowance}</td>
                            <td>
                                <button class="btn btn-light dropdown-toggle" onclick="openCalendar(${index})">${intern.payday}</button>
                                <input type="text" class="payday-picker d-none" id="payday-${index}" />
                            </td>
                            <td id="approval-${index}">
                                <button class="btn btn-outline-success btn-sm me-2" onclick="approvePayroll(${index})">✔</button>
                                <button class="btn btn-outline-danger btn-sm" onclick="rejectPayroll(${index})">✖</button>
                            </td>
                            <td><span class="badge bg-secondary">${intern.status}</span></td>
                            <td>
                                <button class="btn btn-light" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Remove</a></li>
                                </ul>
                            </td>
                        `;
                        tableBody.appendChild(row);
                        $(`#payday-${index}`).datepicker({
                            dateFormat: "dd M yy",
                            onSelect: function(date) {
                                payrollData[start + index].payday = date;
                                displayPayroll();
                            }
                        });
                    });
                    updatePayrollPagination();
                }

                function openCalendar(index) {
                    $(`#payday-${index}`).removeClass("d-none").datepicker("show");
                }

                function approvePayroll(index) {
                    payrollData[index].approval = "approved";
                    document.getElementById(`approval-${index}`).innerHTML = '<span style="color:#6DD52D;">✔ Approved</span>';
                }

                function rejectPayroll(index) {
                    payrollData[index].approval = "rejected";
                    document.getElementById(`approval-${index}`).innerHTML = '<span style="color:#DD3D3D;">✖ Rejected</span>';
                }


                function updatePayrollPagination() {
                    const paginationControls = document.getElementById("payrollPaginationControls");
                    paginationControls.innerHTML = "";
                    const totalPages = Math.ceil(payrollData.length / payrollPerPage);

                    // Previous Button
                    paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" style="border:none !important;" onclick="changePayrollPage(${currentPayrollPage - 1})"><i class="bi bi-chevron-left"></i> <span>Previous</span></a></li>`;

                    if (totalPages > 3) {
                        paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === 1 ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changePayrollPage(1)">1</a></li>`;

                        if (currentPayrollPage > 2) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        let startPage = Math.max(2, currentPayrollPage - 1);
                        let endPage = Math.min(totalPages - 1, currentPayrollPage + 1);

                        for (let i = startPage; i <= endPage; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePayrollPage(${i})">${i}</a></li>`;
                        }

                        if (currentPayrollPage < totalPages - 1) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === totalPages ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changePayrollPage(${totalPages})">${totalPages}</a></li>`;
                    } else {
                        for (let i = 1; i <= totalPages; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePayrollPage(${i})">${i}</a></li>`;
                        }
                    }

                    // Next Button
                    paginationControls.innerHTML += `<li class="page-item ${currentPayrollPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" style="border:none !important;" onclick="changePayrollPage(${currentPayrollPage + 1})"><span>Next</span><i class="bi bi-chevron-right"></i> </a></li>`;
                }

                function changePayrollPage(page) {
                    if (page < 1 || page > Math.ceil(payrollData.length / payrollPerPage)) return;
                    currentPayrollPage = page;
                    displayPayroll();
                }

        // payroll table 




    </script>   
@endsection
       
