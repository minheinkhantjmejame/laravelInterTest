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
                flex-grow: 1; /* Ensure the content area takes the remaining space */
                overflow-y: auto; /* Add scroll if content overflows */
            }
                    .card {
                        margin-bottom: 20px;
                    }

                    .container {
                    background-color:#F3F5FC;
                    padding-left: 20px;
                    border-radius: 8px;

                    }

                    h3 {
                        color: #333;
                    }

                    .underline {
                        border-bottom: 3px solid #4a90e2;
                    }

                    .chart-container {
                        width: 100%;
                        height: 350px;
                        border:1px solid #b6a6f1;
                        padding:30px;
                    }

                    .legend {
                        margin-top: 90px;
                        display: flex;
                        flex-direction:column;
                        text-align: left;
                        gap:20px;
                    }

                    .legend-item {
                        width: 12px;
                        height: 12px;
                        display: inline-block;
                        border-radius: 3px;
                        text-align:left;
                    }

                    .on-time {
                        background-color: #D1D1F0;
                    }

                    .late {
                        background-color: #D5CFFB;
                    }

                    .absent {
                        background-color: #B1BBE7;
                    }

                    #category-container .btn {
                margin-right: 10px; /* Adjust the value as needed */
            }

            #category-container .btn:last-child {
                margin-right: 0; /* Remove margin from the last button */
            }

                /* Sidebar Styling */
                .sidebar-form {
                    position: fixed;
                    top: 0;
                    right: -400px; /* Hidden by default */
                    width: 400px;
                    height: 100vh;
                    background-color: white;
                    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
                    padding: 20px;
                    transition: right 0.3s ease-in-out;
                    z-index: 1000;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                /* Show Sidebar */
                .sidebar-form.show {
                    right: 0;
                }

                /* Sidebar Header */
                .sidebar-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 15px;
                }

                .sidebar-header h3 {
                    font-size: 20px;
                    margin: 0;
                }

                /* Close Button */
                .close-btn {
                    font-size: 20px;
                    cursor: pointer;
                    color: black;
                }

                /* Sidebar Content */
                .sidebar-content {
                    flex-grow: 1;
                }

                /* Category Name Label */
                .text-muted {
                    font-size: 14px;
                }

                /* Create Button */
                .btn-create {
                    background-color: #5c67f2; /* Color from image */
                    color: white;
                    width: 100%;
                    padding: 10px;
                    border-radius: 5px;
                    font-size: 16px;
                    border: none;
                }

                .btn-create:hover {
                    background-color: #4a54d2; /* Darker shade on hover */
                }
                    .card-container {
                        background: #F3F5FC;
                        padding: 20px;
                        padding-bottom:0;
                        border-radius: 8px;
                        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
                        margin: 50px auto;
                    }

                    .header-title {
                        font-size: 24px;
                        font-weight: bold;
                    }

                    .table-container {
                        background-color: #F3F5FC;
                        border-radius: 10px;
                        overflow: hidden;
                    }
                    .table{
                        background-color:#F3F5FC;
                    }

                    .table th {
                        background-color: #ffffff;
                        border-bottom: 2px solid #e0e4f5;
                        font-weight: bold;
                    }

                    .table td, .table th {
                        vertical-align: middle;
                        padding: 15px;
                    }
                    .table tr{
                        background-color:#F3F5FC;
                    }
                    .table td{
                        background-color:#F3F5FC;
                    }

                    .table td .approved{
                        color:green;
                    }

                    .profile-img {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }

                    .approval-text {
                        font-weight: bold;
                    }

                    .approval-text.approved {
                        color: #6DD52D;
                    }

                    .approval-text.rejected {
                        color: #DD3D3D;
                    }

                    .approval-icons img{
                        margin-right:10px;
                    }



                    .hold { background-color: #ddd4ff; color: #5a49a1; }
                    .paid { background-color: #d4ffe5; color: #2b8750; }
                    .approved { color: green; }
                    .setup { color: gray; }


                    .table-container {
                        overflow-x: auto;
                        border:none;
                    }
                    .profile-img {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }
                    .status-badge {
                        padding: 5px 10px;
                        border-radius: 12px;
                        font-size: 12px;
                    }



                    .profile-img {
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }
                    .contact-info {
                        display: flex;
                        align-items: center;
                        gap: 8px;
                        font-size: 14px;
                    }
                    .menu-icon {
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        cursor: pointer;
                    }

                    .search-container {
                        position: relative;
                        width: 100%;

                        
                    }

                    .search-input {
                        width: 100%;
                        padding: 12px 40px; /* Space for icon */
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        font-size: 16px;
                        outline: none;
                        color: #555;
                        background-color: #fff;
                    }

                    .search-input::placeholder {
                        color: #aaa;
                    }

                    .search-icon {
                        position: absolute;
                        left: 12px;
                        top: 50%;
                        transform: translateY(-50%);
                        color: #aaa;
                        font-size: 18px;
                    }

                    .dropdown-container {
                        position: relative;
                        display: inline-flex;
                        align-items: center;
                        background-color: #F8F9FC;
                        border-radius: 4px;
                        padding: 10px 10px;
                        font-size: 16px;
                        cursor: pointer;
                        font-weight: 500;
                        width: 100%;
                        justify-content: space-between;
                    }

                    /* Left Section: Icon + Text */
                    .dropdown-label {
                        display: flex;
                        align-items: center;
                        gap: 8px;
                        color: #333;
                    }

                    /* Down Arrow Button */
                    .dropdown-arrow {
                        background: white;
                        border: none;
                        padding: 5px 8px;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 18px;
                        transition: background 0.2s ease-in-out;
                    }

                    .dropdown-arrow:hover {
                        background: #EDEDED;
                    }

                    /* Dropdown Menu */
                    .dropdown-menu {
                        position: absolute;
                        top: 100%;
                        left: 0;
                        width: 100%;
                        background: white;
                        border-radius: 4px;
                        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                        display: none; /* Initially hidden */
                        padding: 5px 0;
                        z-index: 1000;
                    }

                    .dropdown-menu.show {
                        display: block;
                    }

                    /* Dropdown Items */
                    .dropdown-item {
                        padding: 10px 15px;
                        font-size: 16px;
                        color: #333;
                        cursor: pointer;
                        transition: background 0.2s ease-in-out;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .dropdown-item:hover {
                        background: #F3F5FC;
                    }

                    /* Selected Checkmark */
                    .dropdown-item.selected {
                        color: #000;
                        font-weight: bold;

                    }

                    .dropdown-item.selected::after {
                        content: "✔";
                        font-size: 16px;
                        color: #474BC2;
                    }

                    /* Overlay Background */
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.3);
                z-index: 999;
                display: none;
            }

            /* Sidebar Styling */
            .sidebar-form {
                position: fixed;
                top: 0;
                right: -400px; /* Hidden by default */
                width: 400px;
                height: 100vh;
                background-color: white;
                box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
                transition: right 0.3s ease-in-out;
                z-index: 1000;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            /* Show Sidebar */
            .sidebar-form.show {
                right: 0;
            }

            /* Sidebar Header */
            .sidebar-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
            }

            .sidebar-header h3 {
                font-size: 20px;
                margin: 0;
            }

            /* Close Button */
            .close-btn {
                font-size: 20px;
                cursor: pointer;
                color: black;
                background: none;
                border: none;
            }

            /* Sidebar Content */
            .sidebar-content {
                flex-grow: 1;
            }

            .sidebar-content input,.sidebar-content textarea,.sidebar-content select{
                border:1px solid grey;
                margin-bottom:10px;
            }


            .image-upload-label {
                font-size: 13px;
                display: block;
                margin-bottom: 5px;
                color: #666;
            }

            .image-input-container {
                display: flex;
                align-items: center;
                border: 1px solid #ccc;
                border-radius: 8px;
                overflow: hidden;
                width: 100%;
                height:40px;
                background-color: #fff;
                
            }

            .image-icon {
                background-color: #4c47fe;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .image-icon i {
                font-size: 20px;
                color: white;
            }

            .image-input {
                border: none;
                flex-grow: 1;
                padding: 10px;
                outline: none;
            }


            /* Category Name Label */
            .text-muted {
                font-size: 14px;
            }

            /* Create Button */
            .btn-create {
                background-color: #5c67f2; /* Color from image */
                color: white;
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                font-size: 16px;
                border: none;
            }

            .btn-create:hover {
                background-color: #4a54d2; /* Darker shade on hover */
            }


                    .internship-card {
                position: relative; /* Add this line */
                border: 1px solid #DDE2F0;
                border-radius: 12px;
                padding: 20px;
                background-color: #F8F9FC;
                box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.05);
                max-width: 600px;
                margin: 20px auto;
            }

            .status-container {
                display: inline-flex;
                align-items: center;
                gap: 5px;
                padding: 8px 12px;
                border-radius: 8px;
                font-size: 14px;
                font-weight: bold;
                color: white;
                cursor: pointer;
                border: none;
                position: relative; /* Ensure it doesn't interfere with the dropdown */
            }
                    /* Different Status Colors */
                    .status-open { background-color: #34C759; }  /* Green */
                    .status-close { background-color: #FF3B30; } /* Red */
                    .status-hold { background-color: #333333; }  /* Black */

                    /* Dropdown Menu */
                    .dropdown-menu {
                        background: white;
                        border-radius: 8px;
                        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .dropdown-item {
                        font-size: 14px;
                        font-weight: bold;
                        cursor: pointer;
                        padding: 8px 15px;
                        transition: background 0.2s ease-in-out;
                    }

                    .dropdown-item:hover {
                        background: #F3F5FC;
                    }

                    /* Title */
                    .internship-title {
                        font-size: 20px;
                        font-weight: bold;
                        margin-top: 10px;
                    }

                    /* Location */
                    .location {
                        display: flex;
                        align-items: center;
                        font-size: 14px;
                        color: #666;
                    }

                    /* Stats Section */
                    .stats-container {
                        display: flex;
                        background: white;
                        border-radius: 8px;
                        padding: 12px;
                        margin: 15px 0;
                        border: 1px solid #DDE2F0;
                    }

                    .stats-box {
                        flex: 1;
                        text-align: center;
                    }

                    .stats-box:not(:last-child) {
                        border-right: 1px solid #DDE2F0;
                    }

                    .stats-number {
                        font-size: 18px;
                        font-weight: bold;
                        color: black;
                    }

                    .stats-text {
                        font-size: 12px;
                        color: #666;
                    }

                    /* Tags */
                    .tag {
                        background: #D5CFFB;
                        color: #4A3DA1;
                        padding: 6px 12px;
                        font-size: 12px;
                        font-weight: bold;
                        border-radius: 6px;
                        display: inline-block;
                    }

                    /* View Details Link */
                    .view-details {
                        color: black;
                        font-size: 14px;
                        font-weight: bold;
                        text-decoration: none;
                        display: flex;
                        align-items: center;
                        gap: 5px;
                    }

                    .view-details:hover {
                        text-decoration: underline;
                    }

                    /* Three-dot menu */
                    .menu-icon {
                        cursor: pointer;
                        font-size: 18px;
                    }

                    .dropdown-menu.status-dropdown-menu {
                position: absolute; /* Add this line */
                top: 100%; /* Position it below the button */
                left: 0; /* Align it with the left edge of the parent */
                width: 100%; /* Match the width of the parent */
                background: white;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                display: none; /* Initially hidden */
                z-index: 1000; /* Ensure it appears above other elements */
                padding: 5px 0;
            }

            /* 🔹 Internship Details Panel */
            .details-panel {
                position: fixed;
                top: 0;
                right: -500px; /* Initially hidden */
                width: 500px;
                height: 100vh;
                background-color: white;
                box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
                transition: right 0.3s ease-in-out;
                z-index: 1000;
            }

            /* 🔹 Show Details Panel */
            .details-panel.show {
                right: 0;
            }

            /* 🔹 Header */
            .details-header {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
            }

            /* Hide Internship List when viewing Details */
            #internship-details-page {
                display: none;
            }

            .back-btn {
                font-size: 16px;
                background: none;
                border: none;

                cursor: pointer;
                padding: 10px;
            }

            /* 🔹 Card Styling */
            .details-card {
                background: #F3F5FC;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.05);
            }

            /* 🔹 Tab Styling */
            .nav-tabs{
                width:100%;
                padding:0;
                margin:0;
            }
            .nav-tabs .nav-link {

                font-weight: bold;
                border: none;
                color:grey;

            }

            .nav-tabs .nav-link.active {

                border-bottom: 3px solid #474BC2 !important;
                background-color:#F3F5FC;
                box-shadow:none;

            }


            .pagination {
                display: flex;
                gap: 8px;
            }

            .page-item .page-link {
                /* border-radius: 6px;
                color: black;
                border: 1px solid #ddd; */
                padding: 8px 12px;
                font-weight: 500;
                transition: 0.3s ease-in-out;
            }

            .page-item.active .page-link {
                background-color: #4c47fe; /* Match the blue color */
                color: white;
                border: none;
                font-weight: bold;
            }

            .page-item.disabled .page-link {
                color: #aaa;
                cursor: not-allowed;
                border: none;
            }

            .page-link:hover {
                background-color: #f0f0f0;
                color: black;
            }


            .scroll-container {
                overflow-x: auto; /* Enables horizontal scrolling */
                overflow-y: auto; /* Enables vertical scrolling */
                white-space: nowrap; /* Prevents wrapping */
                max-height: calc(100vh - 50px); /* Adjusts height to fit within viewport */
                position: relative;
                padding-bottom: 20px; /* Prevents content from covering the scrollbar */
            }

            /* ✅ Fixed Scrollbar Area */
            .fixed-scrollbar {
                position: sticky;
                bottom: 0;
                width: 100%;
                background: white;
                z-index: 10; /* Ensures scrollbar is above content */
                height: 20px; /* Space for scrollbar */
            }

            /* ✅ Always Show Scrollbar */
            .scroll-container::-webkit-scrollbar {
                height: 10px; /* Makes scrollbar noticeable */
                background-color: #f1f1f1;
            }

            .scroll-container::-webkit-scrollbar-thumb {
                background-color: #888;
                border-radius: 5px;
            }

            .scroll-container::-webkit-scrollbar-thumb:hover {
                background-color: #555;
            }




            .kanban-board {
                display: flex;
                gap: 15px;
                overflow-x: auto;
            }

            .column {
                background: #F3F5FC;
                border-radius: 8px;
                padding: 10px;
                min-width: 300px;
                white-space: normal;
            }

            .card {
                background: white;
                padding: 10px;
                border-radius: 5px;
                margin-top: 5px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }



            .status-pending{
                padding:10px;
                background-color:#FFE9A7;
                border-radius:4px;
            }

            .status-pending .badge{
                background-color:#FFC822;
            }

            .status-request{
                padding:10px;
                background-color:#D5EAFF;
                border-radius:4px;
            }

            .status-request .badge{
                background-color:#4EA6FF;
            }

            .status-fail{
                padding:10px;
                background-color:#FFB9B9;
                border-radius:4px; 
                
            }

            .status-fail .badge{
                background-color:#980C0C;
            }

            .fail .card-body .badge{
                color:#980C0C;
                background-color:#FFB9B9;
            }



            .status-document{
                padding:10px;
                background-color:#DFC1FF;
                border-radius:4px;
            }

            .status-document .badge{
                background-color:#AA5BFF;
            }


            .status-acceptance{
                padding:10px;
                background-color:#FFB9E3;
                border-radius:4px;
            }

            .status-acceptance .badge{
                background-color:#FF68C3;
            }


            .status-success{
                padding:10px;
                background-color:#ADF1D7;
                border-radius:4px;
            }

            .status-success .badge{
                background-color:#4FD8A3;
            }

            .success .card-body .badge{
                color:#359C22;
                background-color:#b9efaf;
            }

            .applicant-card {
                background: white;
                border-radius: 4px;
                padding: 15px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 300px;
            }

            .profile-icon {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .applicant-name {
                font-size: 16px;
                font-weight: bold;
                margin: 0;
            }

            .applicant-email {
                font-size: 12px;
                color: gray;
                margin: 0;
            }

            .file-list {
                margin-top: 10px;
            }

            .file-item {
                display: flex;
                align-items: center;
                margin-top:10px;
            }

            .file-icon {
                width: 20px;
                height: 20px;
                margin-right: 8px;
            }


            /* Edit description  */
            /* Layout Styles */

            #edit-description-box label{
                font-size:14px;

            }

            #edit-description-box textarea,#edit-description-box input,#edit-description-box .image-preview-container{
                border:1px solid grey;
                border-radius:4px;
                color:grey;
            }
            .image-preview {
                width: 100%;
                height:100%;
                border-radius: 4px;
                object-fit: cover;
            }

            /* 🔹 Label */
            .image-upload-label {
                font-size: 14px;
                margin-top: 10px;
                color: #666;
                text-align:start;
                align-self: self-start;
            }

            /* 🔹 Custom Input Box */
            .image-input-container {
                display: flex;
                align-items: center;
                border-radius: 4px;
                overflow: hidden;
                width: 100%;
                height: 40px;
                background-color: #f8f9fc;
                cursor: pointer;
            }

            /* 🔹 Icon Side */
            .image-icon {
                background-color: #4c47fe;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .image-icon i {
                font-size: 20px;
                color: white;
            }

            /* 🔹 Input Box for File Name */
            .image-filename {
                border: none;
                flex-grow: 1;
                padding: 10px;
                outline: none;
                font-size: 14px;
                background: transparent;
            }

            .image-preview {
                width: 100%;
                height: auto;
                border-radius: 4px;
            }

            .save-btn {
                background-color: #474BC2;
                color: white;
                padding: 10px 20px;
                border-radius: 4px;
                border: none;
            }

            .form-control {
                font-size: 14px;
                padding: 10px;
            }


            /* Edit description  */


            /* application settings  */
            /* Sidebar Panel */

            /* Overlay to dim the background when settings panel is open */
            .settings-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
                z-index: 999; /* Below the settings panel */
                display: none; /* Initially hidden */
            }

            /* Ensure the application settings panel is above the overlay */
            .application-settings-panel {
                position: fixed;
                right: 0;
                top: 0;
                width: 450px; /* Adjust width to fit the contents */
                height: 100vh;
                background: white;
                z-index: 1000; /* Above overlay */
                box-shadow: -5px 0 10px rgba(0, 0, 0, 0.2);
                display: none; /* Initially hidden */
            }

            /* 🔹 Application Settings Panel */
            .settings-panel {
                position: fixed;
                top: 0;
                right: -450px; /* Initially hidden */
                width: 450px; /* Keep consistent width */
                height: 100vh;
                background: white;
                padding: 20px;
                transition: right 0.3s ease-in-out;
                z-index: 1000;
                overflow-y: auto; /* Enable scrolling for small screens */
                display: flex;
                flex-direction: column; /* ✅ Makes footer push to the bottom */
            }


                .settings-panel.show {
                    right: 0;
                }

                .settings-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    font-size: 18px;
                    font-weight: bold;
                }

                .close-btn {
                    background: none;
                    border: none;
                    font-size: 18px;
                    cursor: pointer;
                }

                .settings-section {
                    margin-top: 15px;
                    padding: 10px;
                    border-radius: 4px;
                }

                .settings-section label {
                    font-size: 14px;
                    margin-top: 5px;
                }

                .settings-panel label {
                    font-size: 14px;
                    margin-top: 5px;
                }

                .settings-panel input,.settings-panel select{
                    border-radius:4px;
                    border:1px solid grey !important;
                    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
                }

                .settings-section .badge{
                    color:#000;
                }



                .settings-section input,
                .settings-section select {
                    width: auto;
                    padding: 5px;
                    margin-top: 5px;

                }

                .pending { background: #FDE68A; }
                .request { background: #BFDBFE; }
                .document { background: #E9D5FF; }
                .acceptance { background: #FECACA; }
                .success { background: #BBF7D0; }

                #application-settings-panel input {
                    border: 1px solid black;
                    width: 100px;
                }

                .settings-content {
                flex-grow: 1; /* ✅ Makes content take up all available space */
                padding-bottom: 20px; /* Prevents content from being cut off */
            }

                .settings-footer {
                    display: flex;
                    justify-content: end;
                    margin-bottom:30px;
                    gap:20px;
                }

                .btn-default {
                    background: #D1D5DB;
                    padding: 8px 20px;
                    border: none;
                    cursor: pointer;
                }

                .btn-save {
                    background: #4F46E5;
                    color: white;
                    padding: 8px 20px;
                    border: none;
                    cursor: pointer;
                }

                #applicant-status {
                color: black !important; /* Ensures the text color is black */
                padding: 5px 10px;
                border-radius: 4px;
                font-weight: bold;
            }


            /* Scrollbar */
            .settings-panel::-webkit-scrollbar {
                width: 4px;
            }

            .settings-panel::-webkit-scrollbar-thumb {
                background: grey;
            }

            /* .settings-panel::-webkit-scrollbar-thumb {
                background: ;
                
            } */

            /* .settings-panel::-webkit-scrollbar-thumb:hover {
                background: #555;
            } */
            /* application settings  */
            

            
    </style>  
@endsection

    
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
            @include('layouts.hr.sidebar')



            <div class="col-md-9 dashboard-content" id="dashboardContent">
                <div id="area_of_details"> 
                <div  class="row">
                    
                        <div class="col-md-6" style="text-align: start;">
                            <h1 data-translate="Internship Program">Internship Program</h1>
                            <div class="row">
                                <div class="col-md-3"><p style="color:#359C22;">. <span data-translate="Open">Open</span> <span>14</span></p></div>
                                <div class="col-md-3"><p style="color:#DD3D3D;">. <span data-translate="Close">Close</span> <span>3</span></p></div>
                                <div class="col-md-3"><p style="color:#000000;">. <span data-translate="Hold">Hold </span><span>1</span></p></div>
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align:end;">
                            <button id="open-create-program" style="border:none;background-color:#474BC2; padding:10px; color:white;"> <img src="../assets/icon/feather-add.png" alt=""> <span data-translate="Create Program">Create Program</span></button>
                        </div>
                        <!-- Overlay Background -->
            <div id="overlay" class="overlay"></div>

            <!-- Create Program Sidebar -->
            <div id="create-program-sidebar" class="sidebar-form">
                <div class="sidebar-header">
                    <h2 data-translate="Create Program">Create Program</h2>
                    <button id="close-create-program" style="font-size:40px;" class="close-btn">&times;</button>
                </div>

                <div class="sidebar-content">
                    <label for="program-name" style="font-size:13px;" data-translate="Program Name">Program Name</label>
                    <input type="text" class="form-control" id="program-name" placeholder="Enter program name">

                    <label for="image-upload" class="image-upload-label" data-translate="Image">Image</label>
                    <div class="image-input-container" onclick="document.getElementById('image-upload').click()">
                        <div class="image-icon">
                            <i class="bi bi-image"></i>
                        </div>
                        <input type="file" id="image-upload" class="image-input" accept="image/*" onchange="displayFileName()" hidden>
                        <span id="file-name" class="file-name-placeholder"></span>
                    </div>
                    
                    

                    <label for="description"  style="font-size:13px;" data-translate="Description">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>

                    <label for="location"  style="font-size:13px;" data-translate="Location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter location">

                    <div class="d-flex justify-content-between gap-3">
                        <div class="w-50">
                            <label  style="font-size:13px;" data-translate="Category">Category</label>
                            <select class="form-control">
                                <option data-translate="IT">IT</option>
                                <option data-translate="Human Resources">Human Resources</option>
                                <option data-translate="Marketing">Marketing</option>
                                <option data-translate="Translation">Translation</option>
                            </select>
                        </div>
                        <div class="w-50">
                            <label  style="font-size:13px;" data-translate="Number of open positions">Number of open positions</label>
                            <input type="number" class="form-control" min="1" placeholder="Enter number">
                        </div>
                    </div>
                </div>

                <button class="btn btn-create mt-3">Create</button>
            </div>

                    
                    <div class="row mt-3">
                        <div class="col-md-8">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <!-- Search Box (6 columns) -->
                                    <div class="col-md-6 col-lg-6">
                                        <div class="search-container">
                                            <i class="bi bi-search search-icon"></i>
                                            <input type="text" class="search-input" placeholder="Search for internship program">
                                        </div>
                                    </div>
                            
                                    <!-- Category Dropdown (3 columns) -->
                                    <div class="col-md-3 col-lg-3">
                                        <div class="dropdown-container">
                                            <div class="dropdown-label">
                                                <i class="bi bi-diagram-3"></i> 
                                                <span id="selected-category">All Categories</span>
                                            </div>
                                            <button class="dropdown-arrow" onclick="toggleDropdown()">
                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" id="dropdown-menu">
                                                <div class="dropdown-item selected" onclick="selectCategory('All')">All</div>
                                                <div class="dropdown-item" onclick="selectCategory('Human Resources')">Human Resources</div>
                                                <div class="dropdown-item" onclick="selectCategory('IT')">IT</div>
                                                <div class="dropdown-item" onclick="selectCategory('Marketing')">Marketing</div>
                                                <div class="dropdown-item" onclick="selectCategory('Translation')">Translation</div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Status Dropdown (3 columns) -->
                                    <div class="col-md-3 col-lg-3">
                                        <div class="dropdown-container">
                                            <div class="dropdown-label">
                                                <i class="bi bi-activity"></i> 
                                                <span id="selected-status">All Status</span>
                                            </div>
                                            <button class="dropdown-arrow" onclick="toggleStatusDropdown()">
                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" id="status-dropdown-menu">
                                                <div class="dropdown-item selected" onclick="selectStatus('All')">All</div>
                                                <div class="dropdown-item" onclick="selectStatus('Open')">Open</div>
                                                <div class="dropdown-item" onclick="selectStatus('Hold')">Hold</div>
                                                <div class="dropdown-item" onclick="selectStatus('Close')">Close</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <div class="col-md-4 text-end" >
                            <button style="border:1px solid #000;background-color:#fff; padding:10px;"><img src="../assets/icon/filter.png" alt=""> General Setting</button>
                        </div>
                    </div>
                    <div id="internship-container">
                        <div class="row internship-page" data-page="1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                                
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                        
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">Graphic Design Intern</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> Paris, France</p>
                        
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">22</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">5</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                        
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">Design</span>
                                                <span class="tag">4 Positions</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row internship-page" data-page="2" style="display: none;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">Web Developer</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row internship-page" data-page="3" style="display: none;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="internship-card">
                                        <!-- Status Dropdown Button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="status-dropdown-container" style="position:relative;">
                                                <button class="status-container status-open" onclick="toggleStatusDropdownCard(event)">
                                                    <span>• Open</span>
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <!-- Status Dropdown Menu -->
                                                <div class="dropdown-menu status-dropdown-menu" style="position:absolute;">
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Open')">Open</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Close')">Close</div>
                                                    <div class="dropdown-item" onclick="changeStatus(event, 'Hold')">Hold</div>
                                                </div>
                                            </div>    
                                            <i class="bi bi-three-dots-vertical menu-icon"></i>
                                        </div>
                                    
                                        <!-- Internship Title & Location -->
                                        <h2 class="internship-title">UX/UI Designer Trainee</h2>
                                        <p class="location"><i class="bi bi-geo-alt-fill"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    
                                        <!-- Stats Section -->
                                        <div class="stats-container">
                                            <div class="stats-box">
                                                <p class="stats-number">42</p>
                                                <p class="stats-text">Candidates applied</p>
                                            </div>
                                            <div class="stats-box">
                                                <p class="stats-number">8</p>
                                                <p class="stats-text">Candidate pending</p>
                                            </div>
                                        </div>
                                    
                                        <!-- Tags & View Details -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="tag">IT</span>
                                                <span class="tag">10 Position</span>
                                            </div>
                                            <a href="#" class="view-details">View Details <i class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div id="pagination-container" class="d-flex justify-content-end mt-4">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="prev-page" aria-disabled="true">
                                            <span>&lsaquo; Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" id="next-page">
                                            <span>Next &rsaquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> 
                    </div>

                </div>

        <!-- Internship Details Page (Initially Hidden) -->
        <!-- Internship Details Page -->

        </div>
            </div>
        <div id="internship-details-page" style="display: none;width:100%;height:100vh;">
            <button class="back-btn" onclick="goBackToInternshipList()"><img src="../assets/icon/less_than.png" alt=""> Back to Internship Program</button>
            
            <h1 id="program-title">Program Title</h1>
            <div class="card-body details-card">
                <div style="width:100%; padding:0; margin:0;">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs mt-0">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" style="cursor:pointer;">
                                <i class="fa-solid fa-pen" style="margin-right:5px;"></i>Description
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="application-tab" style="cursor:pointer;">
                                <i class="fa-regular fa-user" style="margin-right:5px;"></i>Application
                            </a>
                        </li>
                    </ul>           
                </div>
            
                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- Description Tab -->
                    <div class="tab-pane" id="description-content" style="display: block;">
                        <div style="padding:0; margin:0; margin-bottom:20px; display: flex; justify-content: space-between;">
                            <h4>Program Description</h4>
                            <button id="edit-btn" style="background-color:#474BC2; color:white; padding:10px; border-radius:4px; border:none;" onclick="toggleEditBox()">
                                <img src="../assets/icon/edit-alt.png" alt=""> Edit
                            </button>                    
                        </div>
                        <hr />
                        <div class="row" style="margin:0; padding:0;">
                            <div class="col-md-6 text-start" style="margin:0; padding:0;">
                                <p style="font-size:12px; color:grey;">Description</p>
                                <p id="program-description" style="font-size:18px;">Loading...</p>
                                <p style="font-size:12px; color:grey;"> Location</p> 
                                <span style="font-size:18px;" id="program-location"></span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="font-size:12px; color:grey;">Category</p> 
                                        <span class="tag" id="program-category"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size:12px; color:grey;">Number of open positions</p> 
                                        <span class="tag" id="program-positions"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin:0; padding:0;">
                                <img src="../assets/img/Luffy _ Desktop Wallpaper.jpg" style="width:100%; height:100%; border-radius:4px; border:2px solid #474BC2;" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Editable Description Form (Hidden Initially) -->
                    <div id="edit-description-box" class="tab-pane" style="display: none;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Edit Description</h4>
                            <button class="btn btn-primary save-btn" onclick="saveDescription()">Save</button>
                        </div>
                        <hr />
                    
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <!-- Description -->
                                <label for="edit-description">Description:</label>
                                <textarea id="edit-description" class="form-control" rows="4"></textarea>
                    
                                <!-- Location -->
                                <label for="edit-location" class="mt-3">Location:</label>
                                <input type="text" id="edit-location" class="form-control" />
                    
                                <!-- Category & Positions -->
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="edit-category">Category:</label>
                                        <select id="edit-category" class="form-control" style="border:1px solid grey;">
                                            <option>IT</option>
                                            <option>Finance</option>
                                            <option>Marketing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="edit-positions">Number of open positions:</label>
                                        <input type="number" id="edit-positions" class="form-control" />
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Right Column -->
                            <div class="col-md-6 d-flex flex-column align-items-center mt-2">
                                <!-- Image Preview Box -->
                                <div class="image-preview-container">
                                    <img id="image-preview" src="../assets/img/Luffy _ Desktop Wallpaper.jpg" alt="Preview" class="image-preview">
                                </div>
                            
                                <!-- Label -->
                                <label for="edit-image" class="image-upload-label">Image</label>
                            
                                <!-- File Upload Input (Hidden) -->
                                <input type="file" id="edit-image" class="image-input" accept="image/*" onchange="previewImage(event)" hidden>
                            
                                <!-- Custom File Upload Box -->
                                <div class="image-input-container" onclick="document.getElementById('edit-image').click();">
                                    <div class="image-icon">
                                        <i class="bi bi-image"></i>
                                    </div>
                                    <input type="text" id="image-filename" style="border:none;" class="image-filename" placeholder="" readonly>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    

                
                    <!-- Application Tab -->
                    <div class="tab-pane" id="application-content" style="display: none;">
                        <div id="application-container">
                            <div id="applicant-list">
                            <div class="header d-flex justify-content-between mt-3 mb-5" >
                                <div><h2>Application</h2></div>
                                <div class="d-flex gap-3" >
                                    <div class="search-container" style="width:350px; border:1px solid grey; border-radius:4px;">
                                        <i class="bi bi-search search-icon"></i>
                                        <input type="text" id="search-input" class="search-input" placeholder="Search for name or email here...">
                                    </div>
                                    <button class="btn btn-light gear" style="width:50px; border:1px solid grey;"><i class="bi bi-gear"></i></button>
                                </div>      
                            </div>
                            <!-- Application Settings Panel (Hidden by Default) -->
                            <div id="application-settings-panel" class="settings-panel">
                                <div class="settings-header">
                                    <h2>Application Settings</h2>
                                    <button class="close-btn" onclick="closeSettingsPanel()">✖</button>
                                </div>
                            <div class="settings-content">
                                <p>Set up due date & processing time</p>
                            
                                <div class="settings-section pending">
                                    <span class="badge">Pending</span>                              
                                </div>
                                <label style="font-size:14px;">Processing takes (days)</label><br>
                                <input type="number" id="pending-processing" value="3">
                            
                                <div class="settings-section request">
                                    <span class="badge">Request Internship Application</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label style="font-size:14px;">Due date</label><br/>
                                        <input type="number" id="request-due" style="margin-right:20px;" value="2">
                                        <select id="request-duration" style="padding:0 15px;">
                                            <option>days</option>
                                            <option>weeks</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5" style="margin-top:3px;">
                                        <label style="font-size:14px; display:inline;">Processing takes (days)</label><br/>
                                        <input type="number" id="request-processing" value="3">
                                    </div>
                                </div>

                            
                                <div class="settings-section document">
                                    <span class="badge">Request Internship Document</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <label style="font-size:14px;">Due date</label><br/>
                                        <input type="number" id="document-due" style="margin-right:20px;" value="2">
                                        <select id="document-duration" style="padding:0 15px;">
                                            <option>days</option>
                                            <option>weeks</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label style="font-size:14px;">Processing takes (days)</label><br/>
                                        <input type="number" id="document-processing" value="2">
                                    </div>
                                </div>
                                


                            
                                <div class="settings-section acceptance">
                                    <span class="badge">Acceptance Terms</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <label style="font-size:14px;">Due date</label><br/>
                                        <input type="number" id="acceptance-due" style="margin-right:20px;"  value="2">
                                        <select id="acceptance-duration" style="padding:0 15px;">
                                            <option>days</option>
                                            <option>weeks</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label style="font-size:14px;">Processing takes (days)</label><br/>
                                        <input type="number" id="acceptance-processing" value="1">
                                    </div>
                                </div>



                            
                                <div class="settings-section success">
                                    <span class="badge">Success</span>
                                </div>
                                <div>
                                    <label style="font-size:14px;">Delete within</label><br/>
                                    <input type="number" id="success-delete" style="margin-right:20px;"  value="7">
                                    <select id="success-duration" style="padding:0 15px;">
                                        <option>days</option>
                                        <option>weeks</option>
                                    </select>

                                </div>
                            </div>
                            
                                <div class="settings-footer">
                                    <button class="btn-default" onclick="resetDefaults()">Defaults</button>
                                    <button class="btn-save" onclick="saveSettings()">Save</button>
                                </div>
                            </div>
                            <div class="scroll-wrapper">
                                <div clas="scroll-container">
                                    <div class="kanban-board">
                                        <div class="column">
                                            <div class="badge-header status-pending d-flex justify-content-between mb-3">Pending <span class="badge">18</span></div>
                                            <!-- Thomas Shelby (Peaky Blinders) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=1" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Thomas Shelby</h6>
                                    <p class="applicant-email">thomas.shelby@peaky.co.uk</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>Tom_Resume.pdf</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arthur Shelby (Peaky Blinders) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=2" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Arthur Shelby</h6>
                                    <p class="applicant-email">arthur.shelby@peaky.co.uk</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>Authur_Portfolio.pdf</span>
                                </div>
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/136/136524.png" alt="Word" class="file-icon">
                                    <span>Resume.docx</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Walter White (Breaking Bad) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=3" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Walter White</h6>
                                    <p class="applicant-email">walter.white@breakingbad.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>Mrs_White_Resume.pdf</span>
                                </div>
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>Portfolio.pdf</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jesse Pinkman (Breaking Bad) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=4" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Jesse Pinkman</h6>
                                    <p class="applicant-email">jesse.pinkman@breakingbad.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/136/136524.png" alt="Word" class="file-icon">
                                    <span>My_Portfolio.docx</span>
                                </div>
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>My_Resume.pdf</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Polly Gray (Peaky Blinders) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=5" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Polly Gray</h6>
                                    <p class="applicant-email">polly.gray@peaky.co.uk</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/136/136524.png" alt="Word" class="file-icon">
                                    <span>Portfolio.docx</span>
                                </div>
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/136/136524.png" alt="Word" class="file-icon">
                                    <span>Resume.docx</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gustavo Fring (Breaking Bad) -->
                    <div class="card applicant-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?img=6" alt="Profile" class="profile-icon">
                                <div>
                                    <h6 class="applicant-name">Gustavo Fring</h6>
                                    <p class="applicant-email">gus.fring@lospollos.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="file-list">
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>My_Resume.pdf</span>
                                </div>
                                <div class="file-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                    <span>Portfolio.pdf</span>
                                </div>
                            </div>
                        </div>
                    </div>

                                        </div>
                                        <div class="column">
                                            <div class="badge-header status-request d-flex justify-content-between mb-3">Request Internship Application <span class="badge">5</span></div>
                                            <div class="card applicant-card">
                                                <div class="card-body">
                                                    <!-- Profile Section -->
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://i.pravatar.cc/40?img=6" alt="Profile" class="profile-icon">
                                                        <div>
                                                            <h6 class="applicant-name">Michel Jone</h6>
                                                            <p class="applicant-email">micheljone_03@gmail.com</p>
                                                        </div>
                                                    </div>
                                            
                                                    <!-- Horizontal Line -->
                                                    <hr>
                                            
                                                    <!-- File List -->
                                                    <div class="file-list">
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>Test.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>Presentation.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/1365/1365499.png" alt="MP4" class="file-icon">
                                                            <span>VideoIntroduce.mp4</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>CopyOfIDCard.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>HouseRegis.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>Transcript.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>ResumeCH.pdf</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card applicant-card">
                                                <div class="card-body">
                                                    <!-- Profile Section -->
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://i.pravatar.cc/40?img=7" alt="Profile" class="profile-icon">
                                                        <div>
                                                            <h6 class="applicant-name">Gary David</h6>
                                                            <p class="applicant-email">gary.david@gamil.com</p>
                                                        </div>
                                                    </div>
                                            
                                                    <!-- Horizontal Line -->
                                                    <hr>
                                            
                                                    <!-- File List -->
                                                    <div class="file-list">
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/737/737261.png" alt="ZIP" class="file-icon">
                                                            <span>Test.zip</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>Presentation.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/1365/1365499.png" alt="MP4" class="file-icon">
                                                            <span>VideoIntroduce.mp4</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>CopyOfIDCard.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>HouseRegis.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>Transcript.pdf</span>
                                                        </div>
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>ResumeCH.pdf</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="column">
                                            <div class="badge-header status-document d-flex justify-content-between mb-3">Request Internship Document <span class="badge">3</span></div>
                                            <div class="card applicant-card">
                                                <div class="card-body">
                                                    <!-- Profile Section -->
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://i.pravatar.cc/40?img=21" alt="Profile" class="profile-icon">
                                                        <div>
                                                            <h6 class="applicant-name">Jacob Mercer</h6>
                                                            <p class="applicant-email">jacob.mercer92@email.com</p>
                                                        </div>
                                                    </div>
                                            
                                                    <!-- Horizontal Line -->
                                                    <hr>
                                            
                                                    <!-- File List -->
                                                    <div class="file-list">
                                                        <div class="file-item">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                            <span>assistance.pdf</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="card applicant-card">
                                                    <div class="card-body">
                                                        <!-- Profile Section -->
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://i.pravatar.cc/40?img=22" alt="Profile" class="profile-icon">
                                                            <div>
                                                                <h6 class="applicant-name">Olivia Carter</h6>
                                                                <p class="applicant-email">olivia.carter88@email.com</p>
                                                            </div>
                                                        </div>
                                                
                                                        <!-- Horizontal Line -->
                                                        <hr>
                                                
                                                        <!-- File List -->
                                                        <div class="file-list">
                                                            <div class="file-item">
                                                                <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                                <span>assistance.pdf</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card applicant-card">
                                                    <div class="card-body">
                                                        <!-- Profile Section -->
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://i.pravatar.cc/40?img=23" alt="Profile" class="profile-icon">
                                                            <div>
                                                                <h6 class="applicant-name">Ethan Reynolds</h6>
                                                                <p class="applicant-email">ethan.reynolds72@email.com</p>
                                                            </div>
                                                        </div>
                                                
                                                        <!-- Horizontal Line -->
                                                        <hr>
                                                
                                                        <!-- File List -->
                                                        <div class="file-list">
                                                            <div class="file-item">
                                                                <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF" class="file-icon">
                                                                <span>assistance.pdf</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="column">
                                            <div class="badge-header status-acceptance d-flex justify-content-between mb-3">Acceptance Terms <span class="badge">1</span></div>
                                            <div class="card applicant-card">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://i.pravatar.cc/40?img=15" alt="Profile" class="profile-icon">
                                                    <div>
                                                        <h6 class="applicant-name">Noah Bennett</h6>
                                                        <p class="applicant-email">noah.bennett45@email.com</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="column fail">
                                            <div class="badge-header status-fail d-flex justify-content-between mb-3">Fail <span class="badge">1</span></div>
                                            <div class="card applicant-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://i.pravatar.cc/40?img=23" alt="Profile" class="profile-icon">
                                                        <div>
                                                            <h6 class="applicant-name">Johson Rain</h6>
                                                            <p class="applicant-email">johson.rain@email.com</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div  style=" display:flex;justify-content: end;"><span class="badge">Fail</span></div>
                                                    
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="column">
                                            <div class="badge-header status-success d-flex justify-content-between mb-3">Success <span class="badge">1</span></div>
                                            <div class="card applicant-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://i.pravatar.cc/40?img=23" alt="Profile" class="profile-icon">
                                                        <div>
                                                            <h6 class="applicant-name">Liam Patterson</h6>
                                                            <p class="applicant-email">liam.patterson@email.com</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div  style=" display:flex;justify-content: end;"><span class="badge success">Success</span></div>
                                                </div>
                                            </div> 
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="fixed-scrollbar">
                                    <div class="scroll-helper"></div>
                                </div> -->
                            </div>
                            </div>
                        </div>
                <!-- Applicant Details Section (Initially Hidden) -->
                <div id="applicant-details" style="display: none;">
                    <!-- Header Section -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <img id="applicant-profile" src="" alt="Profile" class="profile-img">
                            <div>
                                <h4 id="applicant-name">Applicant Name</h4>
                                <p id="applicant-id" class="text-muted">Internship ID: 121212121</p>
                            </div>
                            <span id="applicant-status" class="badge"></span>
                        </div>
                        <button id="back-btn" class="btn" style="background-color:#B1BBE7; color:black;border-radius:4px;"> <img src="../assets/icon/less_than.png" alt=""> Back</button>
                    </div>
                
                    <!-- Cards Section -->
                    <div class="row">
                        <!-- Left Side: Application Information & Skill Test -->
                        <div class="col-md-5">
                            <!-- Application Information -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Application Information</h5>
                                    <p>Email: <span id="applicant-email">applicant@example.com</span></p>
                                    <p>Phone: <span id="applicant-phone">+123456789</span></p>
                                    <p>Position: <span id="applicant-position">Software Tester</span></p>
                                    <p>Location: <span id="applicant-location">Remote</span></p>
                                </div>
                            </div>
                
                            <!-- Skill Test -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mt-0">Uploaded Files</h5>
                                        <button class="btn" style="background-color:#474BC2; border-radius:4px; padding:5px; color:white; margin-top: 0;">Download All</button>
                                    </div>
                                    <div id="uploaded-files">
                                        <p>No files uploaded.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                
                        <!-- Right Side: Uploaded Files & Approval -->
                        <div class="col-md-7">
                            <!-- Uploaded Files -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Skill Test</h5>
                                    <p>Topic: <span id="test-topic">1, 2</span></p>
                                    <p>Answer Type: PDF File</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Test.pdf (1MB)</p>
                                        <button class="btn btn-primary btn-sm">Download</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Approval Section -->
                            <!-- <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Approval</h5>
                                    <div class="d-flex gap-2">
                                        <button class="btn" style="border:1px solid black;background-color:white; color:black; padding:5px;">Approve</button>
                                        <button class="btn" style="border:none;background-color:#474BC2; color:white;padding:5px;">Reject</button>
                                    </div>
                                    <textarea class="form-control mt-2" placeholder="Add a note"></textarea>
                                    <button class="btn btn-primary mt-2" style="align-self: self-end;">Confirm</button>
                                </div>
                            </div> -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Approval</h5>
                                    <div class="d-flex gap-2 align-items-center">
                                        <button class="btn" style="border:1px solid black;background-color:white; color:black; padding:5px;">Approve</button>
                                        <button class="btn" style="border:none;background-color:#474BC2; color:white;padding:6px;">Reject</button>
                                        <input type="text" class="form-control border-0 border-bottom" placeholder="Add a note" style="flex: 1; min-width: 200px; outline: none; box-shadow: none;">
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button class="btn btn-primary mt-2" style="border:none;background-color:#474BC2; color:white;padding:5px 10px;align-self: self-end;">Confirm</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
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



                function toggleSidebar() {
                        document.getElementById("createProgramSidebar").classList.toggle("show");
                    }

                    function addCategory() {
                        var categoryName = document.getElementById("category-name").value.trim();
                        if (categoryName === "") {
                            alert("Please enter a category name.");
                            return;
                        }

                        // Create new button
                        var newButton = document.createElement("button");
                        newButton.className = "btn mb-2";
                        newButton.style.backgroundColor = "#474BC2";
                        newButton.style.color = "#ffffff";
                        newButton.innerText = categoryName;

                        // Append new button inside the category container
                        document.getElementById("category-container").appendChild(newButton);

                        // Clear input field
                        document.getElementById("category-name").value = "";

                        // Hide sidebar
                        toggleSidebar();
                    }
                        function updateLanguage(lang) {
                            document.getElementById('dropdownLabel').innerText = lang;
                        }

                        function toggleDropdown() {
                        document.getElementById("dropdown-menu").classList.toggle("show");
                    }

                    document.addEventListener("DOMContentLoaded", function () {
                    const openSidebar = document.getElementById("open-create-program");
                    const closeSidebar = document.getElementById("close-create-program");
                    const sidebar = document.getElementById("create-program-sidebar");
                    const overlay = document.getElementById("overlay");

                    // Open Sidebar
                    openSidebar.addEventListener("click", function () {
                        sidebar.classList.add("show");
                        overlay.style.display = "block"; // Show overlay
                    });

                    // Close Sidebar
                    closeSidebar.addEventListener("click", function () {
                        sidebar.classList.remove("show");
                        overlay.style.display = "none"; // Hide overlay
                    });

                    // Close sidebar if user clicks on overlay
                    overlay.addEventListener("click", function () {
                        sidebar.classList.remove("show");
                        overlay.style.display = "none";
                    });
                });




                    function selectCategory(category) {
                        document.getElementById("selected-category").innerText = category;
                        document.querySelectorAll(".dropdown-item").forEach(item => {
                            item.classList.remove("selected");
                        });
                        event.target.classList.add("selected");
                        toggleDropdown(); // Close the dropdown after selection
                    }

                    // Close dropdown when clicking outside
                    document.addEventListener("click", function(event) {
                        if (!event.target.closest(".dropdown-container")) {
                            document.getElementById("dropdown-menu").classList.remove("show");
                        }
                    });

                    function toggleStatusDropdown() {
                        document.getElementById("status-dropdown-menu").classList.toggle("show");
                    }

                    function selectStatus(status) {
                        document.getElementById("selected-status").innerText = status;
                        document.querySelectorAll("#status-dropdown-menu .dropdown-item").forEach(item => {
                            item.classList.remove("selected");
                        });
                        event.target.classList.add("selected");
                        toggleStatusDropdown(); // Close the dropdown after selection
                    }

                    // Close dropdown when clicking outside
                    document.addEventListener("click", function(event) {
                        if (!event.target.closest(".dropdown-container")) {
                            document.getElementById("status-dropdown-menu").classList.remove("show");
                        }
                    });

                // Toggle the dropdown inside the internship card
                function toggleStatusDropdownCard(event) {
                    event.stopPropagation(); // Prevents dropdown from closing immediately

                    let card = event.currentTarget.closest(".internship-card"); // Find the nearest internship card
                    let dropdown = card.querySelector(".status-dropdown-menu"); // Select the dropdown inside the card

                    // Close all other dropdowns before opening this one
                    document.querySelectorAll(".status-dropdown-menu").forEach(menu => {
                        if (menu !== dropdown) {
                            menu.style.display = "none";
                        }
                    });

                    // Toggle visibility
                    if (dropdown.style.display === "none" || dropdown.style.display === "") {
                        dropdown.style.display = "block";
                    } else {
                        dropdown.style.display = "none";
                    }
                }

                // Change status when selecting from the dropdown
                function changeStatus(event, status) {
                    let card = event.currentTarget.closest(".internship-card"); // Find the internship card
                    let statusButton = card.querySelector(".status-container"); // Get the status button
                    let statusText = statusButton.querySelector("span"); // Get the text inside the button

                    if (status === "Open") {
                        statusButton.className = "status-container status-open";
                        statusText.innerText = "• Open";
                    } else if (status === "Close") {
                        statusButton.className = "status-container status-close";
                        statusText.innerText = "• Close";
                    } else {
                        statusButton.className = "status-container status-hold";
                        statusText.innerText = "• Hold";
                    }

                    // Close dropdown after selection
                    let dropdown = card.querySelector(".status-dropdown-menu");
                    dropdown.style.display = "none";
                }

                // Close dropdown when clicking outside
                document.addEventListener("click", function (event) {
                    document.querySelectorAll(".status-dropdown-menu").forEach(dropdown => {
                        if (!event.target.closest(".status-container") && !event.target.closest(".status-dropdown-menu")) {
                            dropdown.style.display = "none";
                        }
                    });
                });

                document.addEventListener("DOMContentLoaded", function () {
                    const searchInput = document.getElementById("search-input");
                    const applicantCards = document.querySelectorAll(".applicant-card");

                    searchInput.addEventListener("input", function () {
                        const query = searchInput.value.trim().toLowerCase(); // Get input value in lowercase

                        applicantCards.forEach(card => {
                            const email = card.querySelector(".applicant-email").innerText.toLowerCase();

                            if (email.includes(query)) {
                                card.style.display = "block"; // Show if email matches
                            } else {
                                card.style.display = "none"; // Hide if no match
                            }
                        });
                    });
                });


                document.addEventListener("DOMContentLoaded", function () {
                    const viewDetailsButtons = document.querySelectorAll(".view-details");

                    viewDetailsButtons.forEach(button => {
                        button.addEventListener("click", function (event) {
                            event.preventDefault();

                            // Find the closest internship card
                            const card = this.closest(".internship-card");

                            if (!card) return; // Ensure card exists before proceeding

                            // Extract Data
                            const title = card.querySelector(".internship-title")?.innerText || "N/A";
                            const location = card.querySelector(".location")?.innerText || "N/A";
                            const category = card.querySelector(".tag")?.innerText || "N/A";
                            const positions = card.querySelectorAll(".tag")[1]?.innerText || "N/A";
                            const description = `This is a sample description for is is a sample description for is is a sample description for is is a sample description for is is a sample description for  ${title}`; // Placeholder text

                            // Update Details Page Content
                            document.getElementById("program-title").innerText = title;
                            document.getElementById("program-location").innerText = location;
                            document.getElementById("program-category").innerText = category;
                            document.getElementById("program-positions").innerText = positions;
                            document.getElementById("program-description").innerText = description;

                            // Hide Internship Cards and Show Full Dashboard Details
                            document.getElementById("area_of_details").style.display = "none";
                            document.getElementById("internship-details-page").style.display = "block";
                        });
                    });
                });


                function goBackToInternshipList() {
                    document.getElementById("internship-details-page").style.display = "none";
                    document.getElementById("area_of_details").style.display = "block";
                }


                document.addEventListener("DOMContentLoaded", function () {
                    let currentPage = 1;
                    const totalPages = document.querySelectorAll(".internship-page").length;

                    function showPage(page) {
                        document.querySelectorAll(".internship-page").forEach(section => {
                            section.style.display = "none";
                        });

                        document.querySelector(`.internship-page[data-page="${page}"]`).style.display = "flex";

                        document.querySelectorAll(".pagination .page-item").forEach(item => item.classList.remove("active"));
                        document.querySelector(`.pagination .page-item a[data-page="${page}"]`).parentElement.classList.add("active");

                        document.getElementById("prev-page").parentElement.classList.toggle("disabled", page === 1);
                        document.getElementById("next-page").parentElement.classList.toggle("disabled", page === totalPages);
                    }

                    document.querySelectorAll(".pagination .page-link").forEach(link => {
                        link.addEventListener("click", function (event) {
                            event.preventDefault();
                            let page = this.dataset.page ? parseInt(this.dataset.page) : null;

                            if (this.id === "prev-page" && currentPage > 1) {
                                currentPage--;
                            } else if (this.id === "next-page" && currentPage < totalPages) {
                                currentPage++;
                            } else if (page) {
                                currentPage = page;
                            }

                            showPage(currentPage);
                        });
                    });

                    showPage(currentPage);
                });
                document.addEventListener("DOMContentLoaded", function () {
                    const viewDetailsButtons = document.querySelectorAll(".view-details");
                    const descriptionTab = document.getElementById("description-tab");
                    const applicationTab = document.getElementById("application-tab");
                    const descriptionContent = document.getElementById("description-content");
                    const applicationContent = document.getElementById("application-content");
                    const editDescriptionBox = document.getElementById("edit-description-box");
                    const editButton = document.getElementById("edit-btn");

                    function showDescription() {
                        descriptionContent.style.display = "block";
                        applicationContent.style.display = "none";
                        editDescriptionBox.style.display = "none"; // Ensure edit box is hidden
                        descriptionTab.classList.add("active");
                        applicationTab.classList.remove("active");
                        editButton.innerText = "Edit"; // Reset button text
                    }

                    function showApplication() {
                        applicationContent.style.display = "block";
                        descriptionContent.style.display = "none";
                        editDescriptionBox.style.display = "none"; // 🔥 Ensure edit box is hidden
                        applicationTab.classList.add("active");
                        descriptionTab.classList.remove("active");
                        editButton.innerText = "Edit"; // Reset button text
                    }


                    // Ensure Description tab is active when View Details is clicked
                    viewDetailsButtons.forEach(button => {
                        button.addEventListener("click", function (event) {
                            event.preventDefault();

                            // Find the closest internship card
                            const card = this.closest(".internship-card");
                            if (!card) return; 

                            // Extract Data
                            const title = card.querySelector(".internship-title")?.innerText || "N/A";
                            const location = card.querySelector(".location")?.innerText || "N/A";
                            const category = card.querySelector(".tag")?.innerText || "N/A";
                            const positions = card.querySelectorAll(".tag")[1]?.innerText || "N/A";
                            const description = `This is a sample description for ${title}`;

                            // Update Details Page Content
                            document.getElementById("program-title").innerText = title;
                            document.getElementById("program-location").innerText = location;
                            document.getElementById("program-category").innerText = category;
                            document.getElementById("program-positions").innerText = positions;
                            document.getElementById("program-description").innerText = description;

                            // Hide Internship Cards and Show Full Dashboard Details
                            document.getElementById("area_of_details").style.display = "none";
                            document.getElementById("internship-details-page").style.display = "block";

                            // Activate the "Description" tab and add underline
                            showDescription();
                        });
                    });

                    // Tab Click Events
                    descriptionTab.addEventListener("click", showDescription);
                    applicationTab.addEventListener("click", showApplication);
                });


                function toggleEditBox() {
                    let editBox = document.getElementById("edit-description-box");
                    let descriptionContent = document.getElementById("description-content");
                    let editBtn = document.getElementById("edit-btn");

                    // Ensure edit box only works in the description tab
                    if (document.getElementById("description-tab").classList.contains("active")) {
                        if (editBox.style.display === "none" || editBox.style.display === "") {
                            editBox.style.display = "block";
                            descriptionContent.style.display = "none";
                            editBtn.innerText = "Cancel";
                        } else {
                            editBox.style.display = "none";
                            descriptionContent.style.display = "block";
                            editBtn.innerText = "Edit";
                        }
                    }
                }



                function previewImage(event) {
                    const file = event.target.files[0];
                    if (file) {
                        document.getElementById('image-filename').value = file.name; // Update filename field
                        const reader = new FileReader();
                        reader.onload = function() {
                            document.getElementById('image-preview').src = reader.result;
                        };
                        reader.readAsDataURL(file);
                    }
                }


                function saveDescription() {
                    // Get updated values
                    let newDescription = document.getElementById("edit-description").value;
                    let newLocation = document.getElementById("edit-location").value;
                    let newCategory = document.getElementById("edit-category").value;
                    let newPositions = document.getElementById("edit-positions").value;
                    let newImage = document.getElementById("edit-image").files[0];

                    // Update the display text
                    document.getElementById("program-description").innerText = newDescription;
                    document.getElementById("program-location").innerText = newLocation;
                    document.getElementById("program-category").innerText = newCategory;
                    document.getElementById("program-positions").innerText = newPositions;

                    // If a new image is selected, update it
                    if (newImage) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            document.querySelector("#description-content img").src = e.target.result;
                        };
                        reader.readAsDataURL(newImage);
                    }

                    // Hide edit box & show description
                    document.getElementById("edit-description-box").style.display = "none";
                    document.getElementById("description-content").style.display = "block";

                    // Reset edit button text
                    document.getElementById("edit-btn").innerText = "Edit";
                }

                // Open Settings Panel
                function openSettingsPanel() {
                    document.getElementById("application-settings-panel").classList.add("show");
                    document.getElementById("settings-overlay").style.display = "block";
                }

                // Close Settings Panel
                function closeSettingsPanel() {
                    document.getElementById("application-settings-panel").classList.remove("show");
                    document.getElementById("settings-overlay").style.display = "none"; // Hide new overlay
                }

                // Reset to Default Values
                function resetDefaults() {
                    document.getElementById("pending-processing").value = 3;
                    document.getElementById("request-due").value = 2;
                    document.getElementById("request-processing").value = 3;
                    document.getElementById("document-due").value = 2;
                    document.getElementById("document-processing").value = 2;
                    document.getElementById("acceptance-due").value = 2;
                    document.getElementById("acceptance-processing").value = 1;
                    document.getElementById("success-delete").value = 7;
                }

                // Save Settings (You can extend this to save to localStorage or an API)
                function saveSettings() {
                    let settings = {
                        pendingProcessing: document.getElementById("pending-processing").value,
                        requestDue: document.getElementById("request-due").value,
                        requestProcessing: document.getElementById("request-processing").value,
                        documentDue: document.getElementById("document-due").value,
                        documentProcessing: document.getElementById("document-processing").value,
                        acceptanceDue: document.getElementById("acceptance-due").value,
                        acceptanceProcessing: document.getElementById("acceptance-processing").value,
                        successDelete: document.getElementById("success-delete").value,
                    };

                    console.log("Settings Saved:", settings);
                    closeSettingsPanel();
                }

                // Attach event to gear button
                document.addEventListener("DOMContentLoaded", function () {
                    document.querySelector(".gear").addEventListener("click", openSettingsPanel);
                });

                document.addEventListener("DOMContentLoaded", function () {
                    function updateBadgeCounts() {
                        // Get all columns
                        let columns = document.querySelectorAll(".column");

                        columns.forEach(column => {
                            // Find the badge inside the badge-header
                            let badge = column.querySelector(".badge-header .badge");
                            
                            // Count the number of applicant cards inside the column
                            let count = column.querySelectorAll(".applicant-card").length;

                            // Update the badge number
                            if (badge) {
                                badge.innerText = count;
                            }
                        });
                    }

                    // Run the function on page load
                    updateBadgeCounts();

                    // Run the function every time an applicant is added or removed (optional)
                    const observer = new MutationObserver(updateBadgeCounts);
                    columns.forEach(column => {
                        observer.observe(column, { childList: true });
                    });
                });

                document.addEventListener("DOMContentLoaded", function () {
                    const applicantCards = document.querySelectorAll(".applicant-card");
                    const applicantList = document.getElementById("applicant-list");
                    const applicantDetails = document.getElementById("applicant-details");
                    const uploadedFilesContainer = document.getElementById("uploaded-files");
                    const backBtn = document.getElementById("back-btn");

                    applicantCards.forEach(card => {
                        card.addEventListener("click", function () {
                            // Hide the applicant list and show the details panel
                            applicantList.style.display = "none";
                            applicantDetails.style.display = "block";

                            // Extract applicant details
                            const name = this.querySelector(".applicant-name").innerText;
                            const email = this.querySelector(".applicant-email").innerText;
                            const profileImage = this.querySelector(".profile-icon").src;

                            // Identify the status from the parent column
                            const column = this.closest(".column");
                            const statusHeader = column.querySelector(".badge-header").innerText.trim();

                            // Remove numbers from the status text (only keep words)
                            const statusText = statusHeader.replace(/[0-9]/g, '').trim();

                            // Define class mappings for badge colors
                            const statusClassMap = {
                                "Pending": "status-pending",
                                "Request Internship Application": "status-request",
                                "Request Internship Document": "status-document",
                                "Acceptance Terms": "status-acceptance",
                                "Fail": "status-fail",
                                "Success": "status-success"
                            };

                            // Set applicant details
                            document.getElementById("applicant-name").innerText = name;
                            document.getElementById("applicant-email").innerText = email;
                            document.getElementById("applicant-profile").src = profileImage;
                            document.getElementById("applicant-id").innerText = "Internship ID: 112987628";

                            // Update badge with text & color class (without number)
                            const badge = document.getElementById("applicant-status");
                            badge.innerText = statusText; // Show only the status name
                            badge.className = `badge ${statusClassMap[statusText] || "badge-secondary"}`; // Apply correct color
                            badge.style.color = "black"; // Make text black to fix previous issue

                            // ✅ Populate the uploaded files section
                            const fileList = this.querySelector(".file-list"); // Get the file list from the clicked card
                            if (fileList && fileList.innerHTML.trim() !== "") {
                                uploadedFilesContainer.innerHTML = fileList.innerHTML; // Copy the content to the uploaded files section
                            } else {
                                uploadedFilesContainer.innerHTML = "<p>No files uploaded.</p>"; // Show "No files uploaded" if empty
                            }
                        });
                    });

                    // Back button to show the list again
                    backBtn.addEventListener("click", function () {
                        applicantList.style.display = "block";
                        applicantDetails.style.display = "none";
                    });
                });




    </script>  
@endsection
 

