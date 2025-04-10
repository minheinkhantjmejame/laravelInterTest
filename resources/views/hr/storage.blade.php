@extends('layouts.hr.hrLayout')

@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
                @include('layouts.hr.sidebar')



                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <h2 class="mb-0" data-translate="Storage">Storage</h2>
                    <div class="row" style="margin-left:5px; gap:20px;">

                                                <!-- Right-Side New Folder Panel -->
                        <div id="newFolderPanel" class="new-folder-panel">
                            <div class="new-folder-header">
                                <h4>Create New Folder</h4>
                                <button id="closePanel" class="btn-close"></button>
                            </div>
                            <div class="new-folder-body">
                                <label class="mb-2" for="folderName" style="font-size:14px;" data-translate="Folder Name">Folder Name</label>
                                <input type="text" id="folderName" class="form-control" style="border:1px solid #C8C8C8;" placeholder="Enter folder name">
                            </div>
                            <div class="new-folder-footer align-self-end" style="align-items: end;">
                                <button id="createFolder" class="btn btn-primary" style="background-color:#474BC2;" data-translate="Create">Create</button>
                            </div>
                        </div>

                        <!-- Background overlay -->
                        <div id="overlay" class="overlay"></div>
                        <div class="card folder-card col-md-3" style="padding:20px;">
                            <button class="btn align-self-end"><img src="../assets/icon/add.png" style="width:30px;height:30px;" alt=""></button>
                            <img src="../assets/icon/folder-add.png" style="width:50px;height:50px;" alt="">
                            <p class="mb-0" style="font-size:20px;" data-translate="New Folder">New Folder</p>
                        </div>
                    </div> 
                    <h3 class="mb-0 mt-4">Recent uploaded</h3>
                    <div class="row" id="recentUploadsContainer" style="margin-left:5px;">
                        <!-- Recent uploaded files will be loaded here -->
                    </div>
                    

                    <h3 class="mt-4" data-translate="All Files">All files</h3>
                    <!-- File Category Tabs -->
                    <div class="d-flex align-items-center">
                        <!-- File Category Buttons with Equal Height and Width -->
                        <div class="d-flex p-1" style="background-color:#F3F5FC; border-radius:4px; height:45px; width:auto;">
                            <button class="btn file-category active me-2" data-category="all" data-translate="View all">View all</button>
                            <button class="btn file-category me-2" data-category="documents" data-translate="Documents">Documents</button>
                            <button class="btn file-category me-2" data-category="pdfs" data-translate="PDFs">PDFs</button>
                            <button class="btn file-category me-2" data-category="zips" data-translate="ZIPs">ZIPs</button>
                            <button class="btn file-category me-2" data-category="images" data-translate="Images">Images</button>
                            <button class="btn file-category" data-category="videos" data-translate="Videos">Videos</button>
                        </div>
                    
                        <!-- Search Bar & General Settings Button -->
                        <div class="d-flex align-items-center ms-auto">
                            <div class="input-group search-box">
                                <span class="input-group-text"><i class="bi bi-search"></i></span>
                                <input type="text" id="searchInput" style="border:none;" class="form-control" placeholder="Search">
                            </div>
                            <button class="btn general-setting-btn" style="border:1px solid #C8C8C8; width:auto;">
                                <i class="bi bi-sliders"></i><span data-translate="General Setting">General Setting</span> 
                            </button>
                        </div>
                    </div>
                    
                    
                    <!-- File Table -->
                    <div class="table-container mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th data-translate="File name">File name</th>
                                    <th data-translate="Uploaded by">Uploaded by</th>
                                    <th data-translate="File source">File source</th>
                                    <th data-translate="Date/Time">Date/Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="fileTableBody">
                                <!-- Table Data Will Load Here via JavaScript -->
                            </tbody>
                        </table>
                                <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <label data-translate="Files per page">Files per page</label>
                            <select id="filesPerPage" class="form-select d-inline-block w-auto">
                                <option>6</option>
                                <option>12</option>
                                <option>24</option>
                            </select>
                        </div>
                        <nav>
                            <ul class="pagination mb-0" id="paginationContainer">
                                <!-- Pagination Will Load Here -->
                            </ul>
                        </nav>
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

                <!-- Hidden folder content section -->
            <div id="folderContent" class="col-md-9" style="display: none;">
                


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

                        .card.folder-card{
                            box-shadow: none;
                            border:none;
                            border-radius:4px;
                            background-color:#D1D1F0;
                            width:200px;
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

                        /* File Category Tabs */
                .file-category {
                    background-color: transparent;
                    border: none;
                    padding: 10px 15px;
                    font-weight: 500;
                    color: black;
                    border-radius: 5px;
                    transition: 0.3s;
                }

                .file-category.active {
                    background-color: white;
                    color: black;
                    font-weight: bold;
                }

                /* Right-Side Panel  Add Folder*/
                .new-folder-panel {
                    position: fixed;
                    right: -400px; /* Hidden by default */
                    top: 0;
                    width: 400px;
                    height: 100vh;
                    background: white;
                    box-shadow: -3px 0 10px rgba(0, 0, 0, 0.2);
                    transition: right 0.3s ease-in-out;
                    padding: 20px;
                    z-index: 1050;
                }
                .new-folder-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .new-folder-body {
                    margin-top: 20px;
                }
                .new-folder-footer {
                    position: absolute;
                    right:10px;
                    bottom: 20px;
                    width: 100%;
                    display: flex;
                    justify-content: flex-end; /* Push button to the right */

                }
                .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    height: 100vh;
                    background: rgba(0, 0, 0, 0.4);
                    z-index: 1049;
                    display: none;
                }


                /* Search Box */
                .search-box {
                    background-color: white;
                    border-radius: 4px;
                    display: flex;
                    align-items: center;
                    border: 1px solid #ccc;
                    padding: 0;
                    height: 45px;
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
                    height: 100%; /* Make input same height */
                }

                .search-box input:focus {
                    outline: none;
                    box-shadow: none;
                }

                /* General Settings Button */
                .general-setting-btn {
                    background-color: white;
                    border: 1px solid #C8C8C8;
                    height: 45px;
                    padding: 5px 15px;
                    display: flex;
                    align-items: center;
                    font-weight: 500;
                    margin-left: 10px;
                }

                .general-setting-btn:hover {
                    background-color: #F3F5FC;
                }

                /* Table Design */
                .table-container {
                    background-color: #F3F5FC;
                    padding: 15px;
                    border-radius: 5px;
                }

                .table thead {
                    background-color: white;
                }

                .table th {
                    font-weight: 600;
                    padding: 12px;
                    text-align: left;
                }

                .table tbody tr {
                    background-color: white;
                    border-bottom: 1px solid #ccc;
                }

                .table td {
                    padding: 12px;
                    text-align: left;
                    background-color:#F3F5FC;
                }

                /* Dropdown Menu */
                .action-btn::after {
                    display: none;
                }

                .action-btn {
                    border: none;
                    background: none;
                    font-size: 1.4rem;
                    color: black;
                    cursor: pointer;
                }

                .dropdown-menu {
                    min-width: 180px;
                    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
                }
                .page-link{
                    border:1px solid #C8C8C8;
                    background-color:transparent;
                    margin:5px;
                    color:black;
                    border-radius:4px;
                }
                .page-link.previous,.page-link.next{
                    border:none;
                    background-color:transparent;
                }

                /* Style for the active pagination button */
                .pagination .page-item.active .page-link {
                    background-color: #474BC2 !important;
                    border-color: transparent !important;
                    color: white !important; /* Ensures text is visible */
                }


                /* Parent dropdown menu */
                .dropdown-menu {
                    position: absolute;
                    top: 60%;
                    left: 20%;
                    z-index: 1000;
                    display: none;
                    float: left;
                    min-width: 180px;
                    padding: 0.5rem 0;
                    margin: 0.125rem 0 0;
                    font-size: 1rem;
                    color: #212529;
                    text-align: left;
                    list-style: none;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid rgba(0, 0, 0, 0.15);
                    border-radius: 0.25rem;
                    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.175);
                }

                /* Show the parent dropdown when the button is clicked */
                .dropdown.show .dropdown-menu {
                    display: block;
                }

                /* Nested dropdown menu */
                .dropdown-submenu .sub-dropdown {
                    display: none;
                    position: absolute;
                    top: 0;
                    left: 100%;
                    margin-top: -0.5rem; /* Adjust as needed */
                    margin-left: 0.125rem;
                    border-radius: 0.25rem;
                }

                /* Position the nested dropdown under the parent dropdown */
                .dropdown-submenu:hover .sub-dropdown {
                    display: block;
                }

                /* Adjust the nested dropdown to appear below the parent item */
                .dropdown-submenu {
                    position: relative;
                }

                .dropdown-submenu .sub-dropdown {
                    top: 100%;
                    left: 0;
                    margin-top: 0;
                }


                .dashboard-content {
                    display: block; /* Visible by default */
                }

                #folderContent {
                    display: none; /* Hidden by default */
                }
            
    </style>    
@endsection

@section('script')
    <script type="text/javascript">



    
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

                document.addEventListener("DOMContentLoaded", function () {
                    const addFolderBtn = document.querySelector(".folder-card button");
                    const newFolderPanel = document.getElementById("newFolderPanel");
                    const overlay = document.getElementById("overlay");
                    const closePanelBtn = document.getElementById("closePanel");
                    const createFolderBtn = document.getElementById("createFolder");
                    const folderNameInput = document.getElementById("folderName");
                    const storageContainer = document.querySelector(".row[style*='margin-left:5px;']");

                    let folders = []; // Array to store folder names

                    // Open the side panel
                    addFolderBtn.addEventListener("click", function () {
                        newFolderPanel.style.right = "0";
                        overlay.style.display = "block";
                    });

                    // Close the panel
                    closePanelBtn.addEventListener("click", function () {
                        newFolderPanel.style.right = "-400px";
                        overlay.style.display = "none";
                        folderNameInput.value = ""; // Clear input field
                    });

                    // Create the folder
                    createFolderBtn.addEventListener("click", function () {
                        let folderName = folderNameInput.value.trim();
                        if (folderName === "") {
                            alert("Please enter a folder name.");
                            return;
                        }

                        // Add folder name to the array
                        folders.push({ name: folderName, files: [] });

                        // Create new folder element dynamically
                        let newFolderHTML = document.createElement("div");
                        newFolderHTML.classList.add("card", "folder-card", "col-md-3");
                        newFolderHTML.style.padding = "20px";
                        newFolderHTML.setAttribute("data-folder-name", folderName); // Add data attribute
                        newFolderHTML.innerHTML = 
                            `<div style="display:flex;justify-content:space-between;">
                                <img src="../assets/icon/folder-open-two.png" style="width:50px;height:50px;" alt="">
                                <button class="btn btn-light action-btn" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-download"></i> Edit name</a></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i> Remove</a></li>
                                </ul>
                            </div>
                            <p class="mb-0" style="font-size:20px;">${folderName}</p>`;

                        // Get the "New Folder" button card (always last)
                        let addFolderCard = storageContainer.querySelector(".folder-card:last-child");

                        // Insert new folder before "New Folder" button card
                        storageContainer.insertBefore(newFolderHTML, addFolderCard);

                        // Update the dropdown menu
                        updateFolderDropdown();

                        newFolderHTML.addEventListener("click", function () {
                            loadFolderContent(folderName);
                        });

                        // Close the panel
                        newFolderPanel.style.right = "-400px";
                        overlay.style.display = "none";
                        folderNameInput.value = "";
                    });

                    // Close panel when clicking outside
                    overlay.addEventListener("click", function () {
                        newFolderPanel.style.right = "-400px";
                        overlay.style.display = "none";
                        folderNameInput.value = "";
                    });

                    function loadFolderContent(folderName) {
                        const dashboardContent = document.querySelector(".dashboard-content");
                        const folderContentSection = document.getElementById("folderContent");

                        // Hide dashboard content
                        dashboardContent.style.display = "none";

                        // Find the folder
                        const folder = folders.find(f => f.name === folderName);
                        if (!folder) {
                            alert(`Folder "${folderName}" not found`);
                            return;
                        }

                        // Update folder content section
                        folderContentSection.innerHTML = `
                            <div style="display:flex;width:100%;justify-content:space-between;">
                                <button id="backToStorage" class="btn mt-3" style="border:none;background-color:none;font-size:14px;">
                                    <img src="../assets/icon/less_than.png" />Back to Storage
                                </button>
                                <button class="btn mt-3" style="background-color:#474BC2;color:white;border-radius:4px; align-self:self-end; margin-right:20px;">
                                    Edit Name
                                </button>
                            </div>
                            <h2 class="mt-3" style="margin-left:10px;">${folderName}</h2>
                            <div class="table-container mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>File name</th>
                                            <th>Uploaded by</th>
                                            <th>File source</th>
                                            <th>Date/Time</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="folderFileTableBody">
                                        <!-- Table Data Will Load Here via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        `;

                        // Show the folder content section
                        folderContentSection.style.display = "block";

                        // Load files into the folder table
                        const folderFileTableBody = document.getElementById("folderFileTableBody");
                        folderFileTableBody.innerHTML = "";

                        folder.files.forEach(file => {
                            let fileIcon = getFileIcon(file.type);

                            let row = document.createElement("tr");
                            row.innerHTML = `
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="${fileIcon}" width="25" height="25" class="me-2">
                                        <div>
                                            ${file.name} <br>
                                            <small>${file.type} - ${file.size}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="${file.profileImg}" width="30" height="30" class="rounded-circle me-2">
                                        <div>
                                            ${file.uploadedBy} <br>
                                            <small>${file.email}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>${file.fileSource}</td>
                                <td>${file.date}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn action-btn" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-download"></i> Download</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i> Remove</a></li>
                                        </ul>
                                    </div>
                                </td>
                            `;

                            folderFileTableBody.appendChild(row);
                        });

                        // Add event listener to "Back to Storage" button
                        document.getElementById("backToStorage").addEventListener("click", function () {
                            goBackToStorage();
                        });
                    }

                    function goBackToStorage() {
                        const dashboardContent = document.querySelector(".dashboard-content");
                        const folderContentSection = document.getElementById("folderContent");

                        // Hide the folder content section
                        folderContentSection.style.display = "none";

                        // Show the dashboard content
                        dashboardContent.style.display = "block";
                    }

                    function updateFolderDropdown() {
                        const allSubDropdowns = document.querySelectorAll(".sub-dropdown");
                        allSubDropdowns.forEach(subDropdown => {
                            subDropdown.innerHTML = ""; // Clear existing items

                            folders.forEach(folder => {
                                let folderItem = document.createElement("li");
                                folderItem.innerHTML = `
                                    <a class="dropdown-item" href="#" data-folder="${folder.name}">
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <span style="flex-grow:1;">${folder.name}</span>
                                        </div>
                                    </a>`;
                                
                                folderItem.addEventListener("click", function (event) {
                                    event.preventDefault();
                                    event.stopPropagation();

                                    const folderName = folder.name;
                                    const row = this.closest("tr"); // Get the row associated with the dropdown

                                    if (!row) {
                                        alert("Error: No file row found.");
                                        return;
                                    }

                                    // Get the file name from the row
                                    const fileName = row.querySelector("td:nth-child(2)").innerText.split("\n")[0].trim();

                                    // Find the file object in the `files` array
                                    const file = files.find(f => f.name.trim() === fileName);

                                    if (!file) {
                                        alert("Error: Could not find file.");
                                        return;
                                    }

                                    // Move the file to the folder
                                    addFileToFolder(file, folderName, row);
                                });

                                subDropdown.appendChild(folderItem);
                            });
                        });
                    }

                    function addFileToFolder(file, folderName, row) {
                        if (!file || !folderName || !row) {
                            alert("Error: No file, folder, or row selected.");
                            return;
                        }

                        // Find the folder object
                        let folder = folders.find(f => f.name === folderName);
                        if (!folder) {
                            alert(`Folder "${folderName}" not found`);
                            return;
                        }

                        // Prevent duplicate file entries
                        if (folder.files.some(f => f.name === file.name)) {
                            alert(`File "${file.name}" already exists in folder "${folderName}"`);
                            return;
                        }

                        // Add file to the folder
                        folder.files.push(file);

                        // Remove file from the main table (move the row)
                        row.remove();

                        alert(`File "${file.name}" added to folder "${folderName}"`);
                        loadFolderContent(folderName);
                    }

                    // Initial load of the folder dropdown
                    updateFolderDropdown();
                });

                function getFileIcon(type) {
                    const icons = {
                        "PDF": "https://cdn-icons-png.flaticon.com/512/337/337946.png",
                        "JPG": "https://cdn-icons-png.flaticon.com/512/136/136524.png",
                        "JPEG": "https://cdn-icons-png.flaticon.com/512/136/136524.png",
                        "PNG": "https://cdn-icons-png.flaticon.com/512/136/136530.png",
                        "MP4": "https://cdn-icons-png.flaticon.com/512/136/136545.png",
                        "AVI": "https://cdn-icons-png.flaticon.com/512/136/136549.png",
                        "MOV": "https://cdn-icons-png.flaticon.com/512/136/136549.png",
                        "ZIP": "https://cdn-icons-png.flaticon.com/512/337/337946.png",
                        "RAR": "https://cdn-icons-png.flaticon.com/512/337/337946.png",
                        "DOCX": "https://cdn-icons-png.flaticon.com/512/281/281760.png",
                        "DOC": "https://cdn-icons-png.flaticon.com/512/281/281760.png",
                        "TXT": "https://cdn-icons-png.flaticon.com/512/136/136527.png"
                    };
                    return icons[type] || "https://cdn-icons-png.flaticon.com/512/716/716784.png"; // Default file icon
                }

                const files = [
                    { name: "Peter_Resume", type: "PDF", size: "5.9 MB", uploadedBy: "Peter Pan", email: "pppan2000@gmail.com", profileImg: "https://cdn-icons-png.flaticon.com/512/3135/3135715.png", fileSource: "Internship Program Application", date: "17 Dec 2024, 11:05:24" },
                    { name: "ExampleTag", type: "JPG", size: "3 MB", uploadedBy: "Doc Hudson", email: "justacup@gmail.com", profileImg: "https://cdn-icons-png.flaticon.com/512/149/149071.png", fileSource: "Report before lunch", date: "17 Dec 2024, 10:44:56" },
                    { name: "Design_Logo", type: "PNG", size: "2.5 MB", uploadedBy: "Lightning McQueen", email: "pistons1@gmail.com", profileImg: "https://cdn-icons-png.flaticon.com/512/4333/4333609.png", fileSource: "Graphic Design", date: "16 Dec 2024, 13:21:10" },
                    { name: "VideoTestimonialPotter", type: "MP4", size: "67 MB", uploadedBy: "Harry Potter", email: "harryp@gmail.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922561.png", fileSource: "VDO Testimonial", date: "16 Dec 2024, 15:19:41" },
                    { name: "MarketingFinal", type: "ZIP", size: "9.3 MB", uploadedBy: "Lightning McQueen", email: "pistons1@gmail.com", profileImg: "https://cdn-icons-png.flaticon.com/512/847/847969.png", fileSource: "Assignment Task", date: "15 Dec 2024, 17:36:22" },

                    { name: "User_Agreement", type: "DOCX", size: "2.1 MB", uploadedBy: "Tony Stark", email: "tony@starkindustries.com", profileImg: "https://cdn-icons-png.flaticon.com/512/147/147144.png", fileSource: "Legal Document", date: "15 Dec 2024, 08:15:42" },
                    { name: "Product_Catalog", type: "PDF", size: "8.5 MB", uploadedBy: "Steve Rogers", email: "cap@avengers.com", profileImg: "https://cdn-icons-png.flaticon.com/512/145/145867.png", fileSource: "Sales Department", date: "14 Dec 2024, 13:45:30" },
                    { name: "Office_Presentation", type: "PPTX", size: "4.7 MB", uploadedBy: "Natasha Romanoff", email: "nat@shield.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png", fileSource: "Annual Meeting", date: "13 Dec 2024, 09:30:15" },
                    { name: "Invoice_2024", type: "XLSX", size: "3.2 MB", uploadedBy: "Bruce Wayne", email: "bruce@wayneenterprises.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922506.png", fileSource: "Finance Reports", date: "12 Dec 2024, 10:22:19" },
                    { name: "Intern_Project", type: "ZIP", size: "12.4 MB", uploadedBy: "Clark Kent", email: "ckent@dailyplanet.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922513.png", fileSource: "Internship Report", date: "11 Dec 2024, 15:00:45" },

                    { name: "Team_Photo", type: "JPG", size: "2.8 MB", uploadedBy: "Peter Parker", email: "spidey@nyc.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922512.png", fileSource: "Team Event", date: "10 Dec 2024, 18:10:30" },
                    { name: "Training_Video", type: "MP4", size: "50 MB", uploadedBy: "Diana Prince", email: "wonder@themyscira.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922507.png", fileSource: "Employee Training", date: "09 Dec 2024, 14:05:55" },
                    { name: "Company_Brochure", type: "PDF", size: "3.9 MB", uploadedBy: "Barry Allen", email: "flash@centralcity.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922504.png", fileSource: "Marketing", date: "08 Dec 2024, 10:45:20" },
                    { name: "System_Architecture", type: "PNG", size: "1.7 MB", uploadedBy: "Victor Stone", email: "cyborg@justiceleague.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922508.png", fileSource: "Development", date: "07 Dec 2024, 11:22:40" },
                    { name: "Research_Paper", type: "DOCX", size: "6.5 MB", uploadedBy: "Reed Richards", email: "reed@fantasticfour.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922502.png", fileSource: "Research", date: "06 Dec 2024, 16:50:38" },

                    { name: "Employee_Handbook", type: "PDF", size: "4.2 MB", uploadedBy: "Charles Xavier", email: "professorx@xavierinstitute.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922509.png", fileSource: "HR Department", date: "05 Dec 2024, 09:10:20" },
                    { name: "Security_Manual", type: "TXT", size: "2.3 MB", uploadedBy: "Nick Fury", email: "nfury@shield.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922505.png", fileSource: "Security Division", date: "04 Dec 2024, 12:33:15" },
                    { name: "Project_Plan", type: "PPTX", size: "7.8 MB", uploadedBy: "Hank Pym", email: "hank@pymtech.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922503.png", fileSource: "Engineering Team", date: "03 Dec 2024, 14:20:25" },
                    { name: "Legal_Disclaimer", type: "DOC", size: "1.9 MB", uploadedBy: "Matt Murdock", email: "daredevil@hellskitchen.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922501.png", fileSource: "Legal", date: "02 Dec 2024, 15:45:30" },
                    { name: "Budget_Report", type: "XLSX", size: "3.6 MB", uploadedBy: "Bruce Banner", email: "hulk@science.com", profileImg: "https://cdn-icons-png.flaticon.com/512/2922/2922500.png", fileSource: "Finance", date: "01 Dec 2024, 17:25:50" }
                ];

                document.addEventListener("DOMContentLoaded", function () {
                    const fileTableBody = document.getElementById("fileTableBody");
                    const paginationContainer = document.getElementById("paginationContainer");
                    const filesPerPageSelect = document.getElementById("filesPerPage");
                    const categoryButtons = document.querySelectorAll(".file-category");

                    let currentPage = 1;
                    let rowsPerPage = parseInt(filesPerPageSelect.value);
                    let filteredFiles = files; // Initially, show all files

                    // Function to filter files based on category
                    function filterFiles(category) {
                        if (category === "all") {
                            return files; // Return all files if "View all" is selected
                        }
                        // Map category to file type
                        const categoryToType = {
                            "documents": ["DOCX", "DOC", "TXT"],
                            "pdfs": ["PDF"],
                            "zips": ["ZIP", "RAR"],
                            "images": ["JPG", "JPEG", "PNG"],
                            "videos": ["MP4", "AVI", "MOV"]
                        };
                        const types = categoryToType[category] || [];
                        return files.filter(file => types.includes(file.type));
                    }

                    // Function to load the table with filtered files
                    function loadTable(filesToLoad) {
                        fileTableBody.innerHTML = "";
                        let start = (currentPage - 1) * rowsPerPage;
                        let end = start + rowsPerPage;
                        let paginatedFiles = filesToLoad.slice(start, end);

                        paginatedFiles.forEach(file => {
                            let fileIcon = getFileIcon(file.type);

                            let row = `
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="${fileIcon}" width="25" height="25" class="me-2" 
                                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/716/716784.png'; console.error('File icon missing:', '${fileIcon}')">
                                            <div>
                                                ${file.name} <br>
                                                <small>${file.type} - ${file.size}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="${file.profileImg}" width="30" height="30" class="rounded-circle me-2"
                                                onerror="this.src='https://cdn-icons-png.flaticon.com/512/847/847969.png'; console.error('Profile image missing:', '${file.profileImg}')">
                                            <div>
                                                ${file.uploadedBy} <br>
                                                <small>${file.email}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>${file.fileSource}</td>
                                    <td>${file.date}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn action-btn" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-download"></i> Download</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#" id="addToFolder"><i class="bi bi-folder-plus"></i> Add to folder</a>
                                                    <ul class="dropdown-menu sub-dropdown">
                                                        
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            `;
                            fileTableBody.innerHTML += row;
                        });

                        updatePagination(filesToLoad);
                    }

                    function updatePagination(filesToPaginate) {
                        paginationContainer.innerHTML = "";
                        let totalPages = Math.ceil(filesToPaginate.length / rowsPerPage);

                        // Function to generate page number buttons with ellipsis
                        const generatePageNumbers = () => {
                            let pageNumbers = [];

                            if (totalPages <= 3) {
                                // Show all pages if there are 3 or fewer
                                for (let i = 1; i <= totalPages; i++) {
                                    pageNumbers.push(i);
                                }
                            } else {
                                if (currentPage <= 2) {
                                    // Show first 2 pages, ellipsis, and last page
                                    pageNumbers = [1, 2, "...", totalPages];
                                } else if (currentPage >= totalPages - 1) {
                                    // Show first page, ellipsis, and last 2 pages
                                    pageNumbers = [1, "...", totalPages - 1, totalPages];
                                } else {
                                    // Show first page, ellipsis, current page, ellipsis, and last page
                                    pageNumbers = [1, "...", currentPage, "...", totalPages];
                                }
                            }

                            return pageNumbers;
                        };

                        // Previous Button
                        paginationContainer.innerHTML += `
                            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                                <a class="page-link previous" href="#" onclick="changePage(${currentPage - 1}); return false;"><i class="bi bi-chevron-left"></i><span data-translate="Previous">Previous</span></a>
                            </li>
                        `;

                        // Page Number Buttons
                        const pageNumbers = generatePageNumbers();
                        pageNumbers.forEach(page => {
                            if (page === "...") {
                                paginationContainer.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                            } else {
                                paginationContainer.innerHTML += `
                                    <li class="page-item ${page === currentPage ? 'active' : ''}">
                                        <a class="page-link" href="#" onclick="changePage(${page}); return false;">${page}</a>
                                    </li>
                                `;
                            }
                        });

                        // Next Button
                        paginationContainer.innerHTML += `
                            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                                <a class="page-link next" href="#" onclick="changePage(${currentPage + 1}); return false;">Next <i class="bi bi-chevron-right"></i></a>
                            </li>
                        `;
                    }

                    // Function to handle page changes
                    window.changePage = function (page) {
                        if (page < 1 || page > Math.ceil(filteredFiles.length / rowsPerPage)) return;
                        currentPage = page;
                        loadTable(filteredFiles);
                    };

                    // Event listener for files per page change
                    filesPerPageSelect.addEventListener("change", function () {
                        rowsPerPage = parseInt(this.value);
                        currentPage = 1;
                        loadTable(filteredFiles);
                    });

                    // Event listeners for category buttons
                    categoryButtons.forEach(button => {
                        button.addEventListener("click", function () {
                            categoryButtons.forEach(btn => btn.classList.remove("active"));
                            this.classList.add("active");
                            const category = this.getAttribute("data-category");
                            filteredFiles = filterFiles(category);
                            currentPage = 1;
                            loadTable(filteredFiles);
                        });
                    });

                    // Initial load of the table
                    loadTable(filteredFiles);
                });

                document.addEventListener("DOMContentLoaded", function () {
                    const recentUploadsContainer = document.getElementById("recentUploadsContainer");

                    function parseDate(dateString) {
                        return new Date(dateString.replace(/(\d{2}) (\w{3}) (\d{4}), (\d{2}):(\d{2}):(\d{2})/, 
                            (match, day, month, year, hour, minute, second) => {
                                const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                                return `${year}-${months.indexOf(month) + 1}-${day}T${hour}:${minute}:${second}`;
                            }));
                    }

                    function loadRecentUploads() {
                        recentUploadsContainer.innerHTML = ""; // Clear existing content

                        // Sort files by latest date
                        let sortedFiles = [...files].sort((a, b) => parseDate(b.date) - parseDate(a.date));

                        let recentFiles = sortedFiles.slice(0, 3); // Get 3 most recent uploads

                        recentFiles.forEach(file => {
                            let fileIcon = getFileIcon(file.type); // Get file icon

                            let recentFileHTML = `
                                <div class="col-md-4">
                                    <div class="card p-3" style="background-color:#F3F5FC; border:none; border-radius:10px;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="${fileIcon}" width="30" height="30" alt="File Icon">
                                            <div>
                                                <a href="#" class="fw-bold text-decoration-none" style="color:#474BC2;">${file.name}</a>
                                                <p class="mb-0">${file.type} • ${file.size}</p>
                                                <small class="text-muted">${file.date}</small>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn action-btn" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-download"></i> <span data-translate="Download">Download</span></a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="addToFolder"><i class="bi bi-folder-plus"></i> Add to folder</a>
                                                        <ul class="dropdown-menu sub-dropdown">
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;

                            recentUploadsContainer.innerHTML += recentFileHTML;
                        });
                    }

                    loadRecentUploads(); // Call function to load recent files
                });

                document.addEventListener("DOMContentLoaded", function () {
                    const addToFolderLinks = document.querySelectorAll("#addToFolder");

                    addToFolderLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                            event.preventDefault();
                            event.stopPropagation();

                            const subDropdown = this.nextElementSibling;
                            subDropdown.style.display = subDropdown.style.display === "block" ? "none" : "block";
                        });
                    });

                    // Close the sub-dropdown when clicking outside
                    document.addEventListener("click", function () {
                        const subDropdowns = document.querySelectorAll(".sub-dropdown");
                        subDropdowns.forEach(subDropdown => {
                            subDropdown.style.display = "none";
                        });
                    });
                });

                document.getElementById('uploadForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent form from reloading the page

                    let fileInput = document.getElementById('fileInput');
                    if (fileInput.files.length === 0) {
                        alert("No file selected. Please choose a file to upload.");
                        return;
                    }

                    let formData = new FormData();
                    for (let i = 0; i < fileInput.files.length; i++) {
                        formData.append("files[]", fileInput.files[i]);
                    }

                    fetch('upload_endpoint.php', { // Replace with your backend endpoint
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => console.log("Upload successful:", data))
                    .catch(error => console.error("Error uploading file:", error));
                });


                
    </script>
@endsection

















