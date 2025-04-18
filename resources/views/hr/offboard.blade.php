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

            /* offboard table  */
            /* Keep the table scrollable */

            .pagination-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
                background-color: #F3F5FC; /* Same as table parent */
            }



            /* Pagination Buttons */
            /* Apply background color to all table data (td) but NOT to the header row */
            .table tbody tr td {
                background-color: #F3F5FC;
            }

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




            /* offboard table  */
        
        
    </style>
@endsection
    
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
            
            @include('layouts.hr.sidebar')



            <div class="col-md-9 dashboard-content" id="dashboardContent">
                <!-- heading part  -->
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="mb-0" data-translate="Offboard">Offboard</h2>
                
                    <!-- Summary Badges -->
                    <div class="d-flex gap-3">
                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                            <p class="mb-1" data-translate="Total Offboard">Total offboard</p>
                            <h4 class="mb-0">9</h4>
                        </div>
                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: 200px; height: 80px;">
                            <p class="mb-1" data-translate="Approved">Approved</p>
                            <h4 class="mb-0">8</h4>
                        </div>
                    </div>
                    
                </div>
                <!-- heading part  -->
                    <!-- Search & Filters Row -->
                    <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
                                <!-- Left Section: Search Box & Filters -->
                                <div class="d-flex align-items-center gap-3">
                                    <!-- Search Box -->
                                    <div class="input-group search-box">
                                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                                        <input type="text" class="form-control border-0" placeholder="Search">
                                    </div>
                            
                                    <!-- All Program Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="programDropdownBtn"  data-bs-toggle="dropdown">
                                            <img src="../assets/icon/verified.png" alt=""><span data-translate="All Approval"> All Approval</span>
                
                                            <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" ></i></span>
                                        </button>
                                        <ul class="dropdown-menu" id="programDropdown">
                                            <li><a class="dropdown-item active" href="#"><span data-translate="All"> All</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="HR Trainee">HR Trainee</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Software Tester">Software Tester</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Marketing Trainee">Marketing Trainee</span></a></li>
                                        </ul>
                                    </div>
                            
                                    <!-- All Step Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="stepDropdownBtn"  data-bs-toggle="dropdown">
                                            <img src="../assets/icon/arrow-circle-right.png" alt=""><span data-translate="All Evalution">All Evaluation</span> 
                                            <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                        </button>
                                        <ul class="dropdown-menu" id="stepDropdown">
                                            <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span> All</a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Pending">Pending</span> </a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate=" Request Internship Application"> Request Internship Application</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Success">Success</span> Success</a></li>
                                        </ul>
                                    </div>
                
                
                
                                    <div class="dropdown">
                                        <button class="btn custom-dropdown-btn" style="background-color:#F3F5FC;" id="stepDropdownBtn"  data-bs-toggle="dropdown">
                                            <img src="../assets/icon/user-shield.png" alt=""> <span data-translate="All Certification">All Certification</span>
                                            <span style="background-color:white;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="background-color:white;"></i></span>
                                        </button>
                                        <ul class="dropdown-menu" id="stepDropdown">
                                            <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                            <li><a class="dropdown-item" href="#">Emma Watson</a></li>
                                            <li><a class="dropdown-item" href="#">Draco Malfoy</a></li>
                                            <li><a class="dropdown-item" href="#">Beck Chan</a></li>
                                            <li><a class="dropdown-item" href="#">Conner Dante</a></li>
                                            <li><a class="dropdown-item" href="#">Barry Barton</a></li>
                                        </ul>
                                    </div>
                
                                </div>
                            
                                <!-- Right Section: General Setting Button -->
                                <button class="btn general-setting-btn">
                                    <i class="bi bi-sliders"></i><span data-translate="General Setting"> General Setting</span>
                                </button>
                    </div>

                            <!-- offbaord table  -->

                            
                            <div class="table-responsive" style="padding:10px; background-color:#F3F5FC;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th data-translate="Intern">Intern</th>
                                            <th data-translate="VDO Testimonial">VDO Testimonial</th>
                                            <th data-translate="Privacy Policy Document">Privacy Policy Document</th>
                                            <th data-translate="Verify Allowances">Verify Allowances</th>
                                            <th data-translate="Internship Certificate">Internship Certificate</th>
                                            <th data-translate="Internship Assessment">Internship Assessment</th>
                                            <th data-translate="Assessment Form">Assessment Form</th>
                                            <th data-translate="Approval">Approval</th>
                                            <th data-translate="Internship Evaluation">Internship Evaluation</th>
                                            <th data-translate="Certification">Certification</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="offboardTableBody">
                                        <!-- Data dynamically inserted here -->
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <label for="offboardPerPage" data-translate="Interns per page:">Interns per page:</label>
                                        <select id="offboardPerPage" class="form-select d-inline-block w-auto bg-transparent">
                                            <option value="4">4</option>
                                            <option value="8">8</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <nav>
                                        <ul class="pagination mb-0" id="offboardPaginationControls"></ul>
                                    </nav>
                                </div>                        
                            </div>
                            

                            
                            
                            
                            

                            <!-- offboard table  -->
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

            // offboard table 

            const offboardData = Array.from({ length: 30 }, (_, i) => ({
                profile: `https://i.pravatar.cc/40?img=${i + 1}`,
                name: `Intern ${i + 1}`,
                email: `intern${i + 1}@mail.com`,
                vdo: `Testimonial${i + 1}.mp4`,
                policy: "Accept",
                allowances: "Confirm",
                certificate: i % 2 === 0 ? "Yes" : "No",
                assessment: i % 3 === 0 ? "Yes" : "No",
                form: i % 2 === 0 ? `Assessment_${i}.pdf` : "-",
                approval: "pending",
                evaluation: `<select class='form-select internship-eval'>
                                <option value='None'>None</option>
                                <option value='Pending'>Pending</option>
                                <option value='Sent'>Sent</option>
                            </select>` ,
                certification: i % 2 === 0 ? "<button class='btn btn-outline-primary btn-sm'>Upload Certificate</button>" : "<span class='badge bg-secondary'>Offboard</span>"
            }));

            let currentOffboardPage = 1;
            let offboardPerPage = 8;

            displayOffboard();

            document.getElementById("offboardPerPage").addEventListener("change", function() {
                offboardPerPage = parseInt(this.value);
                currentOffboardPage = 1;
                displayOffboard();
            });

            function displayOffboard() {
                const tableBody = document.getElementById("offboardTableBody");
                tableBody.innerHTML = "";
                
                const start = (currentOffboardPage - 1) * offboardPerPage;
                const end = start + offboardPerPage;
                const paginatedData = offboardData.slice(start, end);
                
                paginatedData.forEach((intern, index) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td class="d-flex align-items-center" >
                            <img src="${intern.profile}" alt="${intern.name}" class="rounded-circle" width="40" height="40">
                            <div class="ms-2">
                                <strong>${intern.name}</strong><br/>
                                <small>${intern.email}</small>
                            </div>
                        </td>
                        <td>${intern.vdo}</td>
                        <td>${intern.policy}</td>
                        <td>${intern.allowances}</td>
                        <td>${intern.certificate}</td>
                        <td>${intern.assessment}</td>
                        <td>${intern.form !== "-" ? `<a href="#">${intern.form}</a>` : "-"}</td>
                        <td id="approval-${index}">
                            ${getApprovalHtml(intern.approval, index)}
                        </td>
                        <td>${intern.evaluation}</td>
                        <td>${intern.certification}</td>
                        <td>
                            <button class="btn btn-light " type="button" data-bs-toggle="dropdown">
                                &#8942;
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Remove</a></li>
                            </ul>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
                updateOffboardPagination();
            }

            function updateOffboardPagination() {
                const paginationControls = document.getElementById("offboardPaginationControls");
                paginationControls.innerHTML = ""; // Clear existing pagination

                const totalPages = Math.ceil(offboardData.length / offboardPerPage);

                // Previous Button
                paginationControls.innerHTML += `
                    <li class="page-item ${currentOffboardPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" style="border:none !important;" onclick="changeOffboardPage(${currentOffboardPage - 1})"><i class="bi bi-chevron-left"></i> <span>Previous</span> </a>
                    </li>`;

                // Page Numbers
                for (let i = 1; i <= totalPages; i++) {
                    paginationControls.innerHTML += `
                        <li class="page-item ${currentOffboardPage === i ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeOffboardPage(${i})">${i}</a>
                        </li>`;
                }

                // Next Button
                paginationControls.innerHTML += `
                    <li class="page-item ${currentOffboardPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" style="border:none !important;" onclick="changeOffboardPage(${currentOffboardPage + 1})"><span>Next</span><i class="bi bi-chevron-right"></i> </a>
                    </li>`;
            }

            function changeOffboardPage(page) {
                const totalPages = Math.ceil(offboardData.length / offboardPerPage);

                if (page < 1 || page > totalPages) return; // Prevent going out of bounds

                currentOffboardPage = page;
                displayOffboard(); // Re-render table data
            }


            function getApprovalHtml(status, index) {
                if (status === "approved") {
                    return '<span style="color:#6DD52D;">✔ Approved</span>';
                } else if (status === "rejected") {
                    return '<span style="color:#DD3D3D;">✖ Rejected</span>';
                } else {
                    return `
                        <button class="btn approval-approved btn-sm me-2" onclick="approveTask(${index})">✔</button>
                        <button class="btn approval-rejected btn-sm" onclick="rejectTask(${index})">✖</button>
                    `;
                }
            }

            function approveTask(index) {
                offboardData[index].approval = "approved";
                document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("approved", index);
            }

            function rejectTask(index) {
                offboardData[index].approval = "rejected";
                document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("rejected", index);
            }
            // offboard table 




    </script> 
@endsection
   
