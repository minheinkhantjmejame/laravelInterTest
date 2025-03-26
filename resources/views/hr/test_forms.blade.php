
<!-- heading -->
@extends('layouts.hr.hrHeader')
<!-- heading -->

<!-- content body -->
@include('layouts.hr.navbar')

<div class="row main-container" >
            @include('layouts.hr.sidebar')

            <!-- main dashboard content  -->
            <div class="col-md-9 dashboard-content p-3" id="dashboardContent" style="display:block;">
                <div class="d-flex w-100 justify-content-between mb-5">
                    <h3>Test & Forms</h3>
                    <button class="btn" id="createButton"style="background-color:#474BC2; color:white;border-radius:4px;"> <img src="../assets/icon/feather-add.png" alt=""> Create Test</button>
                </div>

                <div class="d-flex justify-content-between" style="height:50px;">            
                    <div class="d-flex justify-content-between gap-5">
                        <div class="btn-group toggle-buttons" style="padding:5px 10px; background-color:#F3F5FC;gap:4px; height:100%;">
                            <button id="testButton" class="testformactive" style="border:none; ">Test</button>
                            <button id="formButton" style="border:none; ">Form</button>
                        </div>

                        <div class="input-group search-box" style="height:100%; justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                            <span class="input-group-text" style="height:100%; border:none; background-color: transparent;"><i class="bi bi-search"></i></span>
                            <input type="text" id="searchInputTestForm" style="height:100%; width:200px; border:none;"  class="form-control" placeholder="Search for tests">
                        </div>
                    </div>

                    <button class="btn general-setting-btn" style="border:1px solid #C8C8C8; width:auto;">
                        <i class="bi bi-sliders"></i> General Setting
                    </button>
                </div>
            </div>
            <!-- main dashboard content  -->
            <div class="col-md-9 dashboard-content" id="packageContent" style="display: none;">
                <!-- The package UI will be injected here -->
            </div>
            <div class="col-md-9 dashboard-content" id="settingsContent" style="display: none;">
                <!-- The settings UI will be injected here -->
            </div>
            <div class="col-md-9 dashboard-content" id="profileContent" style="display: none;">
                <!-- The profile UI will be injected here -->
            </div>>

            <!-- creat test   -->
            <div class="col-md-9 create-test-content" style="display: none;">
                <a href="#" class="backButton">&lt; Back to Test & Forms</a>
                <h3>Create Test</h3>
                <label>Test name</label>
                <input type="text" class="form-control" placeholder="Enter test name">
                <label>Description</label>
                <textarea class="form-control" placeholder="Type a description of the test topic..."></textarea>
            </div>
            <!-- creat test   -->

            <!-- create form  -->
            <div class="col-md-9 create-form-content p-3" style="display: none;">
                <a href="#" class="backButton" style="color:black; text-decoration:none;"> <img src="../assets/icon/less_than.png" alt=""> Back to Test & Forms</a>

                <div class="d-flex justify-content-between mt-3">
                <h3>Create Form</h3> 
                <div class="d-flex gap-2">
                    <button class="btn" style="background-color: #B1BBE7; color:black;border-radius:4px;"> <img src="../assets/icon/write-AI.png" alt=""> Defaults</button>
                    <button class="btn" style="background-color: #B1BBE7; color:black;border-radius:4px;"> <img src="../assets/icon/eye.png" alt=""> Preview</button>
                    <button class="btn" style="background-color: #474BC2; color:white;border-radius:4px;">Create</button>
                </div>
                </div>
    </div>        


    <!-- create form  -->










</div>


<!-- content body -->

<!-- footer -->
@extends('layouts.hr.hrFooter')
<!-- footer -->

<!-- extra CSS -->
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


                    /* test and form button  */
                    .toggle-buttons button {
                        padding: 10px 20px;
                        border: none;
                        cursor: pointer;
                        background-color: transparent;
                        transition: background-color 0.3s;
                    }
                    .toggle-buttons .testformactive {
                        background-color: white;
                        border-radius:4px;
                    }
                    /* test and form button  */
        
        
</style>    
@endsection
<!-- extra CSS -->

<!-- extra JS -->
@section('script')
<script type="text/javascript">
            // side bar 
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
            //side bar


            // Test and Form button function 

            // button toggling design 
            document.getElementById("testButton").addEventListener("click", function() {
                        this.classList.add("testformactive");
                        document.getElementById("formButton").classList.remove("testformactive");
                        document.getElementById("searchInputTestForm").placeholder = "Search for tests";
                        document.getElementById("createButton").innerHTML = '<img src="../assets/icon/feather-add.png" alt=""><span id="createTestButton"></span> Create Test';
                    });



                    document.getElementById("formButton").addEventListener("click", function() {
                        this.classList.add("testformactive");
                        document.getElementById("testButton").classList.remove("testformactive");
                        document.getElementById("searchInputTestForm").placeholder = "Search for forms";
                        document.getElementById("createButton").innerHTML = '<img src="../assets/icon/feather-add.png" alt=""> Create Forms';
                    });
            // button toggling design 


            // test and form display toggle 
            document.getElementById("createButton").addEventListener("click", function() {
                if (this.innerText.includes("Test")) {
                    document.querySelector(".dashboard-content").style.display = "none";
                    document.querySelector(".create-test-content").style.display = "block";
                    document.querySelector(".create-form-content").style.display = "none";
                } else {
                    document.querySelector(".dashboard-content").style.display = "none";
                    document.querySelector(".create-test-content").style.display = "none";
                    document.querySelector(".create-form-content").style.display = "block";
                }
            });

            document.querySelectorAll(".backButton").forEach(button => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    document.querySelector(".dashboard-content").style.display = "block";
                    document.querySelector(".create-test-content").style.display = "none";
                    document.querySelector(".create-form-content").style.display = "none";
                });
            });
            // test and form display toggle 

            // Test and Form button function 

</script>    
@endsection
<!-- extra JS -->












    

