@extends('layouts.hr.hrLayout')

@section('content')
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
                    <!-- Test Cards Container -->
                    <div class="row mt-4 test-cards-container" id="testCardsContainer">
                        <!-- Test cards will be dynamically added here -->
                    </div>

                <!-- Pagination -->
                <div class="pagination-container mt-4">
                    <nav>
                        <ul class="pagination mb-0">
                            <!-- Pagination buttons will be dynamically added here -->
                        </ul>
                    </nav>
                </div>
                    <!-- Test Cards Container -->
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
                </div>

                <!-- creat test   -->
<div class="col-md-9 create-test-content" style="display: none;">
    <a href="#" class="backButton" style="color:black; text-decoration:none;"> <img src="../assets/icon/less_than.png" alt=""> Back to Test & Forms</a>

                <div class="d-flex justify-content-between mt-3">
                    <h3>Create Test</h3> 
                    <div class="d-flex gap-2">
                        <button class="btn" style="background-color: #B1BBE7; color:black;border-radius:4px;"> <img src="../assets/icon/write-AI.png" alt=""> Defaults</button>
                        <button class="btn" style="background-color: #B1BBE7; color:black;border-radius:4px;"> <img src="../assets/icon/eye.png" alt=""> Preview</button>
                        <button class="btn" style="background-color: #474BC2; color:white;border-radius:4px;">Create</button>
                    </div>
                </div>
    
                <div class="row mt-4 gap-3" style="margin-left:10px;">
                    <!-- Test Name Section -->
                    <div class="col-md-7 mb-4" style="background-color:#f3f5fc; padding:20px;">
                        <div class="col-md-12">
                            <label style="font-size:16px;">Test name</label>
                            <input type="text" id="testNameInput" class="form-control" placeholder="Enter test name" style="border: 1px solid #C8C8C8;">
                        </div>
                        <div class="col-md-12">
                            <label style="font-size:16px;">Description</label>
                            <div class="textarea-container" style="border: 1px solid #C8C8C8; border-radius: 4px; position: relative;">
                                <div id="testDescriptionInput" class="form-control rich-text" contenteditable="true" placeholder="Type a description of the test topic..." style="min-height: 120px; padding: 12px; line-height: 1.5;"></div>
                                <div class="formatting-toolbar" style="position: absolute; bottom: 0; width: 100%; padding: 4px 8px; background-color:white !important;">
                                    <div class="d-flex align-items-center gap-2">
                                        <button type="button" class="btn btn-sm p-0" data-style="bold" style="width: 24px; height: 24px;">
                                            <strong>B</strong>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-style="italic" style="width: 24px; height: 24px;">
                                            <em>I</em>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-style="underline" style="width: 24px; height: 24px;">
                                            <u>U</u>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-align="left" style="width: 24px; height: 24px;">
                                            <i class="bi bi-text-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-align="center" style="width: 24px; height: 24px;">
                                            <i class="bi bi-text-center"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-align="right" style="width: 24px; height: 24px;">
                                            <i class="bi bi-text-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm p-0" data-align="justify" style="width: 24px; height: 24px;">
                                            <i class="bi bi-justify"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Display Dropdown Section -->
                    <div class="col-md-4 mb-4" style="padding:10px;background-color:#f3f5fc; height:100px;">
                        <div class="col-md-12">
                            <div class="d-flex flex-column h-100">
                                <label style="font-size:16px;">Display</label>
                                <select id="displaySelect" class="form-select" style="border: 1px solid #C8C8C8; width: 80%;">
                                    <option>Content Creator Trainee</option>
                                    <option>HR Trainee</option>
                                    <option>HRD Trainee</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        {{-- create test preview  --}}
        <!-- Preview Section -->
        <div class="col-md-9 preview-content test-preview-content" style="display: none; padding: 20px;">
            <a href="#" class="backToEditButton" style="color:black; text-decoration:none; display: flex; align-items: center; gap: 6px; margin-bottom: 20px;">
                <img src="../assets/icon/less_than.png" alt="" style="height: 12px; width: 12px;"> Back to Edit
            </a>

            <h3 id="previewTestName" style="font-size: 24px; font-weight: 600; margin-bottom: 10px;"></h3>
            <h4 style="font-size: 18px; font-weight: 600; text-transform: uppercase; margin-bottom: 10px;">Skill Test</h4>
            <p style="font-size: 14px; color: #6c757d; margin-bottom: 20px;">Due today</p>
            <div id="previewDescription" style="font-size: 16px; margin-bottom: 20px;"></div>

        </div>
        {{-- create test preview  --}}
                <!-- creat test   -->

                <!-- create form  -->
<!-- create form -->
<div class="col-md-9 create-form-content p-3" style="display: none;">
    <a href="#" class="backButton" style="color:black; text-decoration:none;"> 
        <img src="../assets/icon/less_than.png" alt=""> Back to Test & Forms
    </a>

    <div class="d-flex justify-content-between mt-3">
        <h3>Create Form</h3> 
        <div class="d-flex gap-2">
            <button class="btn btn-defaults" style="background-color: #B1BBE7; color:black;border-radius:4px;"> 
                <img src="../assets/icon/write-AI.png" alt=""> Defaults
            </button>
            <button class="btn btn-preview" style="background-color: #B1BBE7; color:black;border-radius:4px;"> 
                <img src="../assets/icon/eye.png" alt=""> Preview
            </button>
            <button class="btn btn-create-form" style="background-color: #474BC2; color:white;border-radius:4px;">
                Create
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Left Section: Form Builder -->
        <div class="col-md-9">
            <div class="row">
                <!-- Form Name -->
                <div class="col-md-12 mb-3">
                    <label for="formNameInput" style="font-size:16px;">Form name</label>
                    <input type="text" id="formNameInput" class="form-control" placeholder="Type a name of form..." style="border: 1px solid #C8C8C8;">
                </div>
            </div>
            <!-- Form Builder Area -->
            <div class="form-builder-area" style="background-color: #F9FAFF; border: 1px solid #EDEFF7; border-radius: 8px; padding: 20px; min-height: 300px; text-align: center;">
                <div class="form-fields" id="formFields">
                    <!-- Fields will be dynamically added here -->
                    <div class="placeholder-text" style="color: #6c757d; font-size: 16px;">
                        Get started with these Components or Drag & Drop from the right area
                    </div>
                </div>
                <button class="btn btn-add-field mt-3" style="background-color: #474BC2; color: white; border-radius: 4px;">
                    <i class="bi bi-plus-circle"></i> Add field
                </button>
            </div>
        </div>

        <!-- Right Section: Components Sidebar -->
        <div class="col-md-3">
            <!-- Display Dropdown -->
            <div class="mb-3">
                <label for="formDisplaySelect" style="font-size:16px;">Display</label>
                <select id="formDisplaySelect" class="form-select" style="border: 1px solid #C8C8C8;">
                    <option>Request Internship Application</option>
                    <option>HR Application</option>
                    <option>General Application</option>
                </select>
            </div>
            <!-- Components Sidebar -->
            <div class="components-sidebar" style="background-color: #F3F5FC; padding: 15px; border-radius: 8px;">
                <input type="text" class="form-control mb-3" placeholder="Search for components" style="border: 1px solid #C8C8C8;">
                <!-- Layout Elements -->
                <h6 style="font-size: 14px; font-weight: 600; margin-bottom: 10px;">Layout Elements</h6>
                <div class="component-item" data-type="head" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-type-h1"></i> Head
                </div>
                <div class="component-item" data-type="textblock" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-blockquote-left"></i> Textblock
                </div>
                <div class="component-item" data-type="single-line" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-type"></i> Single line
                </div>
                <div class="component-item" data-type="section" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-layout-text-window"></i> Section
                </div>
                <div class="component-item" data-type="column" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-columns"></i> Column
                </div>
                <div class="component-item" data-type="table" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-table"></i> Table
                </div>

                <!-- Paragraph Elements -->
                <h6 style="font-size: 14px; font-weight: 600; margin-bottom: 10px; margin-top: 15px;">Paragraph Elements</h6>
                <div class="component-item" data-type="head" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-type-h1"></i> Head
                </div>
                <div class="component-item" data-type="textblock" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-blockquote-left"></i> Textblock
                </div>
                <div class="component-item" data-type="description" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-text-paragraph"></i> Description
                </div>
                <div class="component-item" data-type="line" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-dash"></i> Line
                </div>

                <!-- Text Elements -->
                <h6 style="font-size: 14px; font-weight: 600; margin-bottom: 10px; margin-top: 15px;">Text Elements</h6>
                <div class="component-item" data-type="single-line" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-type"></i> Single line
                </div>
                <div class="component-item" data-type="multiline" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-textarea"></i> Multiline
                </div>

                <!-- Date Elements -->
                <h6 style="font-size: 14px; font-weight: 600; margin-bottom: 10px; margin-top: 15px;">Date Elements</h6>
                <div class="component-item" data-type="date" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-calendar"></i> Date
                </div>
                <div class="component-item" data-type="start-end" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-calendar-range"></i> Start/End
                </div>

                <!-- Multi Elements -->
                <h6 style="font-size: 14px; font-weight: 600; margin-bottom: 10px; margin-top: 15px;">Multi Elements</h6>
                <div class="component-item" data-type="condition" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-check-square"></i> Condition
                </div>
                <div class="component-item" data-type="dropdown" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-chevron-down"></i> Dropdown
                </div>
                <div class="component-item" data-type="checklist" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-list-check"></i> Checklist
                </div>
                <div class="component-item" data-type="button" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-square"></i> Button
                </div>
                <div class="component-item" data-type="file" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-file-earmark"></i> File
                </div>
                <div class="component-item" data-type="link" style="background-color: white; padding: 10px; margin-bottom: 10px; border-radius: 4px; cursor: pointer;">
                    <i class="bi bi-link"></i> Link
                </div>
            </div>
        </div>
    </div>
</div>
<!-- create form -->

        <!-- create form  -->

{{-- create form preview --}}
<!-- Preview Section -->
<div class="col-md-9 preview-content form-preview-content" style="display: none; padding: 20px;">
    <a href="#" class="backToEditButton" style="color:black; text-decoration:none; display: flex; align-items: center; gap: 6px; margin-bottom: 20px;">
        <img src="../assets/icon/less_than.png" alt="" style="height: 12px; width: 12px;"> Back to Edit Form
    </a>

    <h3 id="previewFormName" style="font-size: 24px; font-weight: 600; margin-bottom: 10px;"></h3>
    <h4 style="font-size: 18px; font-weight: 600; text-transform: uppercase; margin-bottom: 10px;">Acceptance Terms Form</h4>
    <p style="font-size: 14px; color: #6c757d; margin-bottom: 20px;">Due 2 days</p>
    <div id="previewFormDescription" style="font-size: 16px; margin-bottom: 20px;"></div>
    <div id="previewFormFields" style="margin-bottom: 20px;">
        <!-- Dynamically added fields will be rendered here -->
    </div>
    <button class="btn btn-primary" style="background-color: #474BC2; color: white; border-radius: 4px;">Send</button>
</div>
{{-- create form preview --}}

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

                        .toggle-buttons {
                            position: relative;
                            z-index: 10;
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
                            border-radius: 4px;
                        }
                        /* test and form button  */

                        /* Add this to your existing styles */
.create-test-content {
    padding: 20px;
    background: white;
}

/* Form elements styling */
.create-test-content label {
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
}

.create-test-content .form-control {
    border: 1px solid #C8C8C8;
    border-radius: 4px;
    padding: 8px 12px;
    margin-bottom: 20px;
}

.create-test-content textarea.form-control {
    resize: vertical;
    min-height: 100px;
}

/* Section headings */
.create-test-content h4 {
    font-weight: 600;
    margin: 25px 0 15px;
    padding-bottom: 8px;
    border-bottom: 1px solid #eee;
}

/* List styling */
.trainee-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 25px;
}

.trainee-list li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 8px;
    color: #555;
}

.trainee-list li::before {
    content: "-";
    position: absolute;
    left: 0;
    color: #333;
}

/* Two-column layout */
.trainee-columns {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 15px;
}

/* Sub-headings */
.trainee-list h5 {
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

/* Button styling */
.create-test-content .btn {
    font-weight: 500;
    padding: 8px 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid transparent !important;
}

.create-test-content .btn img {
    height: 16px;
    width: 16px;
}

/* Back button styling */
.backButton {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 20px;
}

.backButton img {
    height: 12px;
    width: 12px;
}

/* Formatting Toolbar */
.formatting-toolbar {
    background-color:white !important;


    

}




/* Rich Text Area */
.rich-text {
    min-height: 120px;
    padding: 12px;
    line-height: 1.5;
}

.textarea-container {
    position: relative;
    border-radius: 4px;
    overflow: hidden;
}

.rich-text {
    min-height: 120px;
    padding: 12px;
    line-height: 1.5;
    resize: vertical;
    border: none !important;
    box-shadow: none !important;
}

.formatting-toolbar {
    height: 40px;
    display: flex;
    align-items: center;
    background: #F3F5FC;
}

.formatting-toolbar .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #C8C8C8;
    background: white;
    border-radius: 2px;
}

.formatting-toolbar .btn:hover {
    background-color: #e9ecef;
}

.formatting-toolbar .dropdown-toggle::after {
    display: none;
}

/* Dropdown Styling */
.form-select {
    padding: 8px 12px;
    border-radius: 4px;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
}

/* List Styling */
.list-unstyled li {
    padding-left: 1rem;
    text-indent: -1rem;
    margin-bottom: 8px;
}

.list-unstyled li::before {
    content: "- ";
    margin-right: 4px;
}

.rich-text:empty::before {
    content: attr(placeholder);
    color: #6c757d; /* Bootstrap's placeholder color */
    pointer-events: none;
}

.rich-text:focus::before {
    content: none;
}

.preview-content {
    padding: 20px;
    background: white;
}

.preview-content h3 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
}

.preview-content h4 {
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.preview-content p {
    font-size: 16px;
    margin-bottom: 20px;
}

.preview-content p[style*="color: #6c757d"] {
    font-size: 14px;
    color: #6c757d;
}

/* test cards container */
.test-cards-container .card {
    border: 1px solid #EDEFF7;
    border-radius: 8px;
    background-color: #F9FAFF;
    padding: 15px;
    width: 100%; /* Ensure the card takes the full width of its parent (col-md-3) */
    box-sizing: border-box; /* Include padding and border in the width */
    overflow: hidden; /* Prevent content from spilling out */
}

.test-cards-container .card-body {
    padding: 10px; /* Add some padding to the card body */
    width: 100%; /* Ensure the card body takes the full width of the card */
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content horizontally */
}

.test-cards-container .card-body img {
    max-width: 100%; /* Ensure the image doesn’t exceed the card’s width */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 10px;
}

.test-cards-container .card-body h5 {
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center; /* Center the text */
    word-break: break-word; /* Break long words to prevent overflow */
    overflow-wrap: break-word; /* Ensure text wraps within the card */
    width: 100%; /* Ensure the h5 takes the full width of the card body */
}

.test-cards-container .card-body p {
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 10px;
    text-align: center; /* Center the text */
    width: 100%;
}

.test-cards-container .card-body .d-flex {
    width: 100%; /* Ensure the button container takes the full width */
    justify-content: space-between; /* Space out the buttons */
    align-items: center;
}

.test-cards-container .card-body .btn {
    font-size: 14px;
    padding: 5px 10px;
    white-space: nowrap; /* Prevent the button text from wrapping */
}

.test-cards-container .dropdown-menu {
    min-width: 100px;
}

.test-cards-container .dropdown-item {
    font-size: 14px;
}

/* create form content  */
/* Form Builder Area */
.form-builder-area {
    position: relative;
}

.form-field {
    margin-bottom: 15px;
    position: relative;
}

.form-field input[type="text"],
.form-field textarea,
.form-field select {
    width: 100%;
    padding: 8px;
    border: 1px solid #C8C8C8;
    border-radius: 4px;
    margin-bottom: 5px;
}

.form-field textarea {
    min-height: 100px;
    resize: vertical;
}

.form-field .btn-remove-field {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 2px 8px;
    font-size: 12px;
}

.form-field .btn-add-condition {
    background-color: #474BC2;
    color: white;
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 14px;
    margin-top: 5px;
}

.form-field .condition-option {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 5px;
}

.form-field .condition-option input[type="radio"] {
    margin-right: 5px;
}

.form-field .condition-option label {
    margin: 0;
}

.section-block {
    border: 1px solid #EDEFF7;
    padding: 15px;
    margin-bottom: 15px;
    background-color: #F9FAFF;
    border-radius: 4px;
}

.column-layout {
    display: flex;
    gap: 15px;
}

.column-layout .column {
    flex: 1;
}

.form-field .required-toggle {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-top: 5px;
}

.form-field .required-toggle input[type="checkbox"] {
    margin: 0;
}

.form-field .required-toggle label {
    font-size: 14px;
    margin: 0;
}

.pagination-container {
    display: flex;
    justify-content: center; /* Center the pagination buttons */
    align-items: center;
    padding: 10px 0;
    background-color: transparent; /* Match the dashboard background */
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

/* Preview Styling */
.preview-content .form-field {
    margin-bottom: 20px;
}

.preview-content .form-field label {
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.preview-content .form-field input[type="text"],
.preview-content .form-field input[type="date"],
.preview-content .form-field select {
    width: 100%;
    padding: 8px;
    border: 1px solid #C8C8C8;
    border-radius: 4px;
}

.preview-content .form-field .radio-group {
    display: flex;
    gap: 15px;
}

.preview-content .form-field .radio-group div {
    display: flex;
    align-items: center;
    gap: 5px;
}

.preview-content .form-field .radio-group input[type="radio"] {
    margin: 0;
}

.preview-content .form-field .radio-group label {
    margin: 0;
}

.preview-content .form-field hr {
    border: 0;
    border-top: 1px solid #EDEFF7;
    margin: 15px 0;
}

.preview-content .form-field .checkbox-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.preview-content .form-field .checkbox-group div {
    display: flex;
    align-items: center;
    gap: 5px;
}

.preview-content .form-field .checkbox-group input[type="checkbox"] {
    margin: 0;
}

.preview-content .form-field .checkbox-group label {
    margin: 0;
}

/* Miniature Form Preview in Card */
.form-preview-mini {
    transform: scale(0.8); /* Slightly scale down to fit nicely in the card */
    transform-origin: top left;
    width: 100%;
    box-sizing: border-box;
}

.form-preview-mini input,
.form-preview-mini textarea,
.form-preview-mini select,
.form-preview-mini button {
    pointer-events: none; /* Disable interaction in the preview */
}

.test-cards-container .card-body {
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: stretch; /* Ensure content stretches to fit the card */
}

.test-cards-container .card-body h5 {
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left; /* Align text to the left for better readability */
    word-break: break-word;
    overflow-wrap: break-word;
}

.test-cards-container .card-body p {
    font-size: 12px;
    color: #6c757d;
    margin-bottom: 10px;
    text-align: left;
}
/* create form content  */
            
            
    </style>    
@endsection


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



document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("testButton").addEventListener("click", function() {
        this.classList.add("testformactive");
        document.getElementById("formButton").classList.remove("testformactive");
        document.getElementById("searchInputTestForm").placeholder = "Search for tests";
        document.getElementById("createButton").innerHTML = '<img src="../assets/icon/feather-add.png" alt=""><span id="createTestButton"></span> Create Test';

        currentPage = 1;
        renderCards();
    });

    document.getElementById("formButton").addEventListener("click", function() {
        this.classList.add("testformactive");
        document.getElementById("testButton").classList.remove("testformactive");
        document.getElementById("searchInputTestForm").placeholder = "Search for forms";
        document.getElementById("createButton").innerHTML = '<img src="../assets/icon/feather-add.png" alt=""> Create Forms';

        currentPage = 1;
        renderCards();
    });
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
        editingCardId = null; // Reset edit mode
        // Reset button texts
        document.querySelector('.create-test-content .btn[style*="background-color: #474BC2"]').textContent = 'Create';
        document.querySelector('.create-form-content .btn-create-form').textContent = 'Create';
    });
});
                // test and form display toggle 

                // Text formatting functionality
// Text formatting functionality
// Text formatting functionality
document.querySelectorAll('.formatting-toolbar button[data-style]').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const style = button.dataset.style;
        document.execCommand(style, false, null);
        button.closest('.textarea-container').querySelector('.rich-text').focus(); // Ensure focus remains
    });
});

// Text alignment functionality
document.querySelectorAll('.formatting-toolbar button[data-align]').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const align = button.dataset.align;
        let command = '';
        if (align === 'justify') {
            command = 'justifyFull'; // Special case for justify
        } else {
            command = 'justify' + align.charAt(0).toUpperCase() + align.slice(1); // Left, Center, Right
        }
        document.execCommand(command, false, null);
        button.closest('.textarea-container').querySelector('.rich-text').focus(); // Ensure focus remains
    });
});

// Preview button functionality
const display = document.getElementById('displaySelect').value || 'Not specified';

document.querySelector('.create-test-content .btn img[src="../assets/icon/eye.png"]').parentElement.addEventListener('click', function() {
    const testName = document.getElementById('testNameInput').value || 'Untitled Test';
    const description = document.getElementById('testDescriptionInput').innerHTML || 'No description provided.';
    
    document.getElementById('previewTestName').textContent = `Preview: ${testName}`;
    document.getElementById('previewDescription').innerHTML = description;

    document.querySelector('.create-test-content').style.display = 'none';
    document.querySelector('.test-preview-content').style.display = 'block';
    document.querySelector('.form-preview-content').style.display = 'none'; // Ensure form preview is hidden
});




                // Test and Form button function 

                // test cards container
                // Create button functionality
// Create button functionality

document.querySelector('.create-test-content .btn[style*="background-color: #474BC2"]').addEventListener('click', function() {
    // Get user input values
    const testName = document.getElementById('testNameInput').value || 'Untitled Test';
    const description = document.getElementById('testDescriptionInput').innerHTML || 'No description provided.';
    const display = document.getElementById('displaySelect').value || 'Not specified';
    const lastEdited = new Date().toLocaleDateString();

    // Retrieve existing tests from localStorage
    const savedTests = JSON.parse(localStorage.getItem('tests')) || [];

    if (editingCardId !== null) {
        // Edit mode: Update the existing card
        const cardIndex = savedTests.findIndex(card => card.id === editingCardId);
        if (cardIndex !== -1) {
            savedTests[cardIndex] = {
                ...savedTests[cardIndex],
                testName,
                description,
                display,
                lastEdited
            };
            localStorage.setItem('tests', JSON.stringify(savedTests));
            editingCardId = null; // Reset edit mode
        }
    } else {
        // Create mode: Add a new card
        const id = Date.now(); // Unique ID for each card
        savedTests.push({ id, testName, description, display, lastEdited, type: 'test' });
        localStorage.setItem('tests', JSON.stringify(savedTests));
    }

    // Reset the button text
    this.textContent = 'Create';

    // Render the cards for the current page
    renderCards();

    // Hide create-test-content and show dashboard-content
    document.querySelector('.create-test-content').style.display = 'none';
    document.querySelector('.dashboard-content').style.display = 'block';
});

// Pagination settings
// Pagination settings
const cardsPerPage = 8; // Fixed number of cards per page
let currentPage = 1;

function renderCards() {
    const savedItems = JSON.parse(localStorage.getItem('tests')) || [];
    const testCardsContainer = document.getElementById('testCardsContainer');
    const activeTab = document.getElementById("testButton").classList.contains('testformactive') ? 'test' : 'form';

    // Filter cards based on the active tab
    const filteredCards = savedItems.filter(card => card.type === activeTab);

    // Calculate pagination
    const totalCards = filteredCards.length;
    const totalPages = Math.ceil(totalCards / cardsPerPage);
    const startIndex = (currentPage - 1) * cardsPerPage;
    const endIndex = startIndex + cardsPerPage;
    const cardsToShow = filteredCards.slice(startIndex, endIndex);

    // Clear the container
    testCardsContainer.innerHTML = '';

    // Render the cards for the current page
    cardsToShow.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('col-md-3', 'mb-4');
        cardElement.setAttribute('data-type', card.type);

        // Adjust the card content based on type (test or form)
        const cardTitle = card.type === 'test' ? `${card.testName} Skill Test` : `${card.testName}`;
        const cardContent = card.type === 'test' 
            ? `<img src="{{asset('assets/img/skt.png')}}" class="card-img" />`
            : generateFormPreview(card.fields || []);

        cardElement.innerHTML = `
            <div class="card">
                <div class="card-body">
                    ${cardContent}
                    <h5>${cardTitle}</h5>
                    <p>• Last edited on ${card.lastEdited}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-sm">Read more</button>
                        <div class="dropdown">
                            <button class="btn btn-sm" type="button" id="dropdownMenuButton${card.id}" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton${card.id}">
                                <li><a class="dropdown-item" href="#" data-id="${card.id}" onclick="editCard(${card.id})">Edit</a></li>
                                <li><a class="dropdown-item" href="#" data-id="${card.id}" onclick="deleteCard(${card.id})">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        `;
        testCardsContainer.appendChild(cardElement);
    });

    // Update pagination
    updatePagination(totalPages);
}

// Function to update pagination buttons
function updatePagination(totalPages) {
    const paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = '';

    // Previous Button
    paginationContainer.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})"><i class="bi bi-chevron-left"></i> Previous</a>
        </li>
    `;

    // Always show the first page
    if (totalPages > 0) {
        paginationContainer.innerHTML += `
            <li class="page-item ${currentPage === 1 ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(1)">1</a>
            </li>
        `;
    }

    // Determine the range of pages to show
    let startPage = Math.max(2, currentPage - 1);
    let endPage = Math.min(totalPages - 1, currentPage + 1);

    // Show ellipsis after first page if needed
    if (currentPage > 3) {
        paginationContainer.innerHTML += `
            <li class="page-item disabled"><span class="page-link">...</span></li>
        `;
    }

    // Show pages around current page
    for (let i = startPage; i <= endPage; i++) {
        if (i > 1 && i < totalPages) {
            paginationContainer.innerHTML += `
                <li class="page-item ${currentPage === i ? 'active' : ''}">
                    <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                </li>
            `;
        }
    }

    // Show ellipsis before last page if needed
    if (currentPage < totalPages - 2) {
        paginationContainer.innerHTML += `
            <li class="page-item disabled"><span class="page-link">...</span></li>
        `;
    }

    // Always show the last page if there is one
    if (totalPages > 1) {
        paginationContainer.innerHTML += `
            <li class="page-item ${currentPage === totalPages ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${totalPages})">${totalPages}</a>
            </li>
        `;
    }

    // Next Button
    paginationContainer.innerHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next <i class="bi bi-chevron-right"></i></a>
        </li>
    `;
}

// Function to change the page
window.changePage = function(page) {
    const savedItems = JSON.parse(localStorage.getItem('tests')) || [];
    const activeTab = document.getElementById('testButton').classList.contains('testformactive') ? 'test' : 'form';
    const filteredCards = savedItems.filter(card => card.type === activeTab);
    const totalPages = Math.ceil(filteredCards.length / cardsPerPage);

    if (page < 1 || page > totalPages) return;
    currentPage = page;
    renderCards();
};

// Initial render
renderCards();

// Variable to track the ID of the card being edited
let editingCardId = null;

function editCard(cardId) {
    // Retrieve the card data from localStorage
    const savedItems = JSON.parse(localStorage.getItem('tests')) || [];
    const card = savedItems.find(item => item.id === cardId);

    if (!card) {
        alert("Card not found!");
        return;
    }

    // Set the editingCardId to indicate we're in edit mode
    editingCardId = cardId;

    // Show the appropriate editing interface based on the card type
    if (card.type === 'test') {
        // Show the "Create Test" section
        document.querySelector('.dashboard-content').style.display = 'none';
        document.querySelector('.create-test-content').style.display = 'block';
        document.querySelector('.create-form-content').style.display = 'none';
        document.querySelector('.test-preview-content').style.display = 'none';
        document.querySelector('.form-preview-content').style.display = 'none';

        // Pre-fill the test form fields
        document.getElementById('testNameInput').value = card.testName || '';
        document.getElementById('testDescriptionInput').innerHTML = card.description || '';
        document.getElementById('displaySelect').value = card.display || 'Content Creator Trainee';

        // Update the "Create" button text to "Save Changes"
        const createButton = document.querySelector('.create-test-content .btn[style*="background-color: #474BC2"]');
        createButton.textContent = 'Save Changes';
    } else if (card.type === 'form') {
        // Show the "Create Form" section
        document.querySelector('.dashboard-content').style.display = 'none';
        document.querySelector('.create-test-content').style.display = 'none';
        document.querySelector('.create-form-content').style.display = 'block';
        document.querySelector('.test-preview-content').style.display = 'none';
        document.querySelector('.form-preview-content').style.display = 'none';

        // Pre-fill the form fields
        document.getElementById('formNameInput').value = card.testName || '';
        document.getElementById('formDisplaySelect').value = card.display || 'Request Internship Application';

        // Load the form fields
        formFields = card.fields || [];
        renderFormFields();

        // Update the "Create" button text to "Save Changes"
        const createButton = document.querySelector('.create-form-content .btn-create-form');
        createButton.textContent = 'Save Changes';
    }
}
// Function to delete a card
function deleteCard(cardId) {
    let savedTests = JSON.parse(localStorage.getItem('tests')) || [];
    savedTests = savedTests.filter(card => card.id !== cardId);
    localStorage.setItem('tests', JSON.stringify(savedTests));
    renderCards();
}


                //test cards container 


                // Form Builder Functionality
// Form Builder Functionality
let formFields = [];
let currentSection = null;
let columnMode = false;
let currentColumn = 0;

// Add field when clicking a component
document.querySelectorAll('.component-item').forEach(item => {
    item.addEventListener('click', function() {
        const type = this.getAttribute('data-type');
        addField(type);
    });
});

// Add field when clicking the "Add field" button
document.querySelector('.btn-add-field').addEventListener('click', function() {
    addField('section'); // Default to section when clicking "Add field"
});

// Function to add a field to the form
function addField(type) {
    const formFieldsContainer = document.getElementById('formFields');
    const fieldId = Date.now();
    let fieldHtml = '';
    let fieldData = { id: fieldId, type, html: '', section: currentSection, column: columnMode ? currentColumn : null };

    // Remove placeholder text if it exists
    const placeholder = formFieldsContainer.querySelector('.placeholder-text');
    if (placeholder) placeholder.remove();

    switch (type) {
        case 'section':
            currentSection = fieldId;
            columnMode = false;
            currentColumn = 0;
            fieldHtml = `
                <div class="section-block" data-id="${fieldId}" data-type="section">
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'column':
            columnMode = true;
            currentColumn = 0;
            fieldHtml = `
                <div class="column-layout" data-id="${fieldId}" data-type="column">
                    <div class="column" data-column="0"></div>
                    <div class="column" data-column="1"></div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'head':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="head">
                    <input type="text" placeholder="Enter heading..." value="ACCEPTANCE TERMS FORM">
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'textblock':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="textblock">
                    <textarea placeholder="Enter description...">This form outlines the essential terms and conditions for interns at Vannees Plus Consulting Co., Ltd. Interns must review, acknowledge, and agree to these terms, which cover work arrangements, confidentiality, compliance with company policies, and responsibility for assigned tasks during the internship.</textarea>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'description':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="description">
                    <textarea placeholder="Enter description...">At Vannees Plus Consulting Co., Ltd., we are committed to establishing clear and professional Acceptance Terms for our internship program.</textarea>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'line':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="line">
                    <hr />
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'single-line':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="single-line">
                    <input type="text" placeholder="Field label (e.g., Email Address)" value="Email Address">
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}" checked>
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = true;
            break;

        case 'multiline':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="multiline">
                    <textarea placeholder="Field label (e.g., Comments)"></textarea>
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'condition':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="condition">
                    <input type="text" placeholder="Condition statement" value="For the hybrid internship option, working from the office or from home will be determined by the company">
                    <div class="condition-option">
                        <input type="radio" id="condition-${fieldId}-accepted" name="condition-${fieldId}" value="Accepted" checked>
                        <label for="condition-${fieldId}-accepted">Accepted</label>
                        <input type="radio" id="condition-${fieldId}-not-accepted" name="condition-${fieldId}" value="Not Accepted">
                        <label for="condition-${fieldId}-not-accepted">Not Accepted</label>
                    </div>
                    <button class="btn btn-add-condition">+ Add condition</button>
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}" checked>
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = true;
            break;

        case 'dropdown':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="dropdown">
                    <input type="text" placeholder="Dropdown label" value="Dropdown">
                    <select>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'checklist':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="checklist">
                    <input type="text" placeholder="Checklist label" value="Checklist">
                    <div class="checkbox-group">
                        <div>
                            <input type="checkbox" id="checklist-${fieldId}-1">
                            <label for="checklist-${fieldId}-1">Option 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="checklist-${fieldId}-2">
                            <label for="checklist-${fieldId}-2">Option 2</label>
                        </div>
                    </div>
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'button':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="button">
                    <input type="text" placeholder="Button label" value="Submit">
                    <button class="btn btn-primary" style="background-color: #474BC2; color: white; border-radius: 4px;">Submit</button>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            break;

        case 'file':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="file">
                    <input type="text" placeholder="File upload label" value="Upload File">
                    <input type="file">
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'link':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="link">
                    <input type="text" placeholder="Link label" value="Enter Link">
                    <input type="url" placeholder="https://example.com">
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'date':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="date">
                    <input type="text" placeholder="Date label" value="Select Date">
                    <input type="date">
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}">
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = false;
            break;

        case 'start-end':
            fieldHtml = `
                <div class="form-field" data-id="${fieldId}" data-type="start-end">
                    <input type="text" placeholder="Start/End label" value="Internship Period">
                    <input type="date" placeholder="Start Date">
                    <input type="date" placeholder="End Date">
                    <div class="required-toggle">
                        <input type="checkbox" id="required-${fieldId}" checked>
                        <label for="required-${fieldId}">Mask as required</label>
                    </div>
                    <button class="btn btn-sm btn-remove-field">Remove</button>
                </div>`;
            fieldData.html = fieldHtml;
            fieldData.required = true;
            break;

        default:
            return;
    }

    formFields.push(fieldData);
    renderFormFields();
}

// Function to render form fields with sections and columns
function renderFormFields() {
    const formFieldsContainer = document.getElementById('formFields');
    formFieldsContainer.innerHTML = '';

    let currentSectionElement = null;
    let currentColumnLayout = null;

    formFields.forEach(field => {
        if (field.type === 'section') {
            currentSectionElement = document.createElement('div');
            currentSectionElement.classList.add('section-block');
            currentSectionElement.setAttribute('data-id', field.id);
            currentSectionElement.setAttribute('data-type', 'section');
            currentSectionElement.innerHTML = field.html;
            formFieldsContainer.appendChild(currentSectionElement);
            currentColumnLayout = null;
        } else if (field.type === 'column') {
            currentColumnLayout = document.createElement('div');
            currentColumnLayout.classList.add('column-layout');
            currentColumnLayout.setAttribute('data-id', field.id);
            currentColumnLayout.setAttribute('data-type', 'column');
            currentColumnLayout.innerHTML = field.html;
            if (currentSectionElement) {
                currentSectionElement.appendChild(currentColumnLayout);
            } else {
                formFieldsContainer.appendChild(currentColumnLayout);
            }
        } else {
            const fieldElement = document.createElement('div');
            fieldElement.classList.add('form-field');
            fieldElement.setAttribute('data-id', field.id);
            fieldElement.setAttribute('data-type', field.type);
            fieldElement.innerHTML = field.html;

            if (currentColumnLayout) {
                const columns = currentColumnLayout.querySelectorAll('.column');
                columns[currentColumn % 2].appendChild(fieldElement);
                currentColumn++;
            } else if (currentSectionElement) {
                currentSectionElement.appendChild(fieldElement);
            } else {
                formFieldsContainer.appendChild(fieldElement);
            }
        }
    });

    addRemoveFieldListeners();
    addConditionListeners();
}

// Function to add remove field listeners
function addRemoveFieldListeners() {
    document.querySelectorAll('.btn-remove-field').forEach(button => {
        button.addEventListener('click', function() {
            const fieldId = parseInt(this.parentElement.getAttribute('data-id'));
            formFields = formFields.filter(field => field.id !== fieldId);
            if (this.parentElement.classList.contains('section-block')) {
                currentSection = null;
            } else if (this.parentElement.classList.contains('column-layout')) {
                columnMode = false;
                currentColumn = 0;
            }
            renderFormFields();
        });
    });

    document.querySelectorAll('.required-toggle input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const fieldId = parseInt(this.closest('.form-field').getAttribute('data-id'));
            const field = formFields.find(f => f.id === fieldId);
            if (field) {
                field.required = this.checked;
            }
        });
    });
}

// Function to add condition listeners
function addConditionListeners() {
    document.querySelectorAll('.btn-add-condition').forEach(button => {
        button.addEventListener('click', function() {
            const fieldId = Date.now();
            const parentField = this.closest('.form-field');
            const conditionHtml = `
                <div class="condition-option" data-id="${fieldId}">
                    <input type="text" placeholder="Condition statement" value="New condition">
                    <div>
                        <input type="radio" id="condition-${fieldId}-accepted" name="condition-${fieldId}" value="Accepted" checked>
                        <label for="condition-${fieldId}-accepted">Accepted</label>
                        <input type="radio" id="condition-${fieldId}-not-accepted" name="condition-${fieldId}" value="Not Accepted">
                        <label for="condition-${fieldId}-not-accepted">Not Accepted</label>
                    </div>
                </div>`;
            parentField.insertBefore(document.createRange().createContextualFragment(conditionHtml), this);
        });
    });
}

//Show created forms 
// Create button functionality for forms
document.querySelector('.create-form-content .btn-create-form').addEventListener('click', function() {
    // Get user input values
    const formName = document.getElementById('formNameInput').value || 'Untitled Form';
    const display = document.getElementById('formDisplaySelect').value || 'Not specified';
    const lastEdited = new Date().toLocaleDateString();

    // Retrieve existing forms from localStorage
    const savedForms = JSON.parse(localStorage.getItem('tests')) || [];

    if (editingCardId !== null) {
        // Edit mode: Update the existing card
        const cardIndex = savedForms.findIndex(card => card.id === editingCardId);
        if (cardIndex !== -1) {
            savedForms[cardIndex] = {
                ...savedForms[cardIndex],
                testName: formName,
                description: display,
                display,
                lastEdited,
                fields: formFields
            };
            localStorage.setItem('tests', JSON.stringify(savedForms));
            editingCardId = null; // Reset edit mode
        }
    } else {
        // Create mode: Add a new card
        const id = Date.now(); // Unique ID for each card
        savedForms.push({ id, testName: formName, description: display, display, lastEdited, type: 'form', fields: formFields });
        localStorage.setItem('tests', JSON.stringify(savedForms));
    }

    // Reset the button text
    this.textContent = 'Create';

    // Render the cards for the current page
    renderCards();

    // Hide create-form-content and show dashboard-content
    document.querySelector('.create-form-content').style.display = 'none';
    document.querySelector('.dashboard-content').style.display = 'block';
    document.querySelector('.test-preview-content').style.display = 'none';
    document.querySelector('.form-preview-content').style.display = 'none';

    // Reset form fields for the next form creation
    formFields = [];
    renderFormFields();
});
// Show created forms

// Preview button functionality for forms
document.querySelector('.create-form-content .btn-preview').addEventListener('click', function() {
    const formName = document.getElementById('formNameInput').value || 'Untitled Form';
    const display = document.getElementById('formDisplaySelect').value || 'Not specified';

    // Populate the preview section
    document.getElementById('previewFormName').textContent = `Preview: ${formName}`;
    const previewFieldsContainer = document.getElementById('previewFormFields');
    previewFieldsContainer.innerHTML = '';

    let currentSectionElement = null;
    let currentColumnLayout = null;

    formFields.forEach(field => {
        let previewHtml = '';

        if (field.type === 'section') {
            currentSectionElement = document.createElement('div');
            currentSectionElement.classList.add('section-block');
            previewFieldsContainer.appendChild(currentSectionElement);
            currentColumnLayout = null;
            return;
        } else if (field.type === 'column') {
            currentColumnLayout = document.createElement('div');
            currentColumnLayout.classList.add('column-layout');
            currentColumnLayout.innerHTML = `
                <div class="column" data-column="0"></div>
                <div class="column" data-column="1"></div>`;
            if (currentSectionElement) {
                currentSectionElement.appendChild(currentColumnLayout);
            } else {
                previewFieldsContainer.appendChild(currentColumnLayout);
            }
            return;
        }

        switch (field.type) {
            case 'head':
                previewHtml = `<h4 style="font-size: 18px; font-weight: 600; text-transform: uppercase; margin-bottom: 10px;">${field.html.match(/value="([^"]*)"/)[1]}</h4>`;
                break;
            case 'textblock':
            case 'description':
                previewHtml = `<p style="font-size: 16px; margin-bottom: 20px;">${field.html.match(/<textarea[^>]*>([^<]*)<\/textarea>/)[1]}</p>`;
                break;
            case 'line':
                previewHtml = `<hr />`;
                break;
            case 'single-line':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <input type="text" class="form-control" ${field.required ? 'required' : ''}>
                    </div>`;
                break;
            case 'multiline':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/<textarea[^>]*placeholder="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <textarea class="form-control" ${field.required ? 'required' : ''}></textarea>
                    </div>`;
                break;
            case 'condition':
                previewHtml = `
                    <div class="form-field">
                        <p style="font-size: 16px; margin-bottom: 10px;">${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</p>
                        <div class="radio-group">
                            <div>
                                <input type="radio" id="condition-${field.id}-accepted" name="condition-${field.id}" value="Accepted" ${field.required ? 'required' : ''}>
                                <label for="condition-${field.id}-accepted">Accepted</label>
                            </div>
                            <div>
                                <input type="radio" id="condition-${field.id}-not-accepted" name="condition-${field.id}" value="Not Accepted">
                                <label for="condition-${field.id}-not-accepted">Not Accepted</label>
                            </div>
                        </div>
                    </div>`;
                break;
            case 'dropdown':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <select class="form-control" ${field.required ? 'required' : ''}>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>`;
                break;
            case 'checklist':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <div class="checkbox-group">
                            <div>
                                <input type="checkbox" id="checklist-${field.id}-1" ${field.required ? 'required' : ''}>
                                <label for="checklist-${field.id}-1">Option 1</label>
                            </div>
                            <div>
                                <input type="checkbox" id="checklist-${field.id}-2">
                                <label for="checklist-${field.id}-2">Option 2</label>
                            </div>
                        </div>
                    </div>`;
                break;
            case 'button':
                previewHtml = `
                    <div class="form-field">
                        <button class="btn btn-primary" style="background-color: #474BC2; color: white; border-radius: 4px;">${field.html.match(/value="([^"]*)"/)[1]}</button>
                    </div>`;
                break;
            case 'file':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <input type="file" class="form-control" ${field.required ? 'required' : ''}>
                    </div>`;
                break;
            case 'link':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <input type="url" class="form-control" placeholder="https://example.com" ${field.required ? 'required' : ''}>
                    </div>`;
                break;
            case 'date':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <input type="date" class="form-control" ${field.required ? 'required' : ''}>
                    </div>`;
                break;
            case 'start-end':
                previewHtml = `
                    <div class="form-field">
                        <label>${field.html.match(/value="([^"]*)"/)[1]} ${field.required ? '<span style="color: red;">*</span>' : ''}</label>
                        <input type="date" class="form-control" placeholder="Start Date" ${field.required ? 'required' : ''}>
                        <input type="date" class="form-control" placeholder="End Date" ${field.required ? 'required' : ''}>
                    </div>`;
                break;
        }

        const fieldElement = document.createElement('div');
        fieldElement.classList.add('form-field');
        fieldElement.innerHTML = previewHtml;

        if (currentColumnLayout) {
            const columns = currentColumnLayout.querySelectorAll('.column');
            columns[currentColumn % 2].appendChild(fieldElement);
            currentColumn++;
        } else if (currentSectionElement) {
            currentSectionElement.appendChild(fieldElement);
        } else {
            previewFieldsContainer.appendChild(fieldElement);
        }
    });

    // Hide create-form-content and show preview-content
    document.querySelector('.create-form-content').style.display = 'none';
    document.querySelector('.form-preview-content').style.display = 'block';
    document.querySelector('.test-preview-content').style.display = 'none';
});

// Function to generate a miniature preview of the form for the card
function generateFormPreview(fields) {
    let previewHtml = '<div class="form-preview-mini" style="padding: 5px; background: #fff; border: 1px solid #EDEFF7; border-radius: 4px; min-height: 80px; max-height: 100px; overflow: hidden; font-size: 8px; line-height: 1.2;">';

    fields.forEach(field => {
        switch (field.type) {
            case 'head':
                previewHtml += `<h6 style="font-size: 10px; font-weight: 600; margin: 2px 0;">${field.html.match(/value="([^"]*)"/)[1]}</h6>`;
                break;
            case 'textblock':
            case 'description':
                const text = field.html.match(/<textarea[^>]*>([^<]*)<\/textarea>/)[1];
                previewHtml += `<p style="margin: 2px 0; color: #6c757d;">${text.substring(0, 50)}${text.length > 50 ? '...' : ''}</p>`;
                break;
            case 'line':
                previewHtml += `<hr style="margin: 2px 0; border-top: 1px solid #EDEFF7;" />`;
                break;
            case 'single-line':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <input type="text" style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" disabled />
                    </div>`;
                break;
            case 'multiline':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/<textarea[^>]*placeholder="([^"]*)"/)[1]}</label>
                        <textarea style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px; resize: none; height: 20px;" disabled></textarea>
                    </div>`;
                break;
            case 'condition':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <p style="margin: 0;">${field.html.match(/value="([^"]*)"/)[1]}</p>
                        <div style="display: flex; gap: 5px;">
                            <label style="font-size: 8px;"><input type="radio" disabled /> Accepted</label>
                            <label style="font-size: 8px;"><input type="radio" disabled /> Not Accepted</label>
                        </div>
                    </div>`;
                break;
            case 'dropdown':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <select style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" disabled>
                            <option>Option 1</option>
                        </select>
                    </div>`;
                break;
            case 'checklist':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <div>
                            <label style="font-size: 8px;"><input type="checkbox" disabled /> Option 1</label>
                        </div>
                    </div>`;
                break;
            case 'button':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <button style="padding: 2px 5px; background-color: #474BC2; color: white; border-radius: 2px; font-size: 8px;" disabled>${field.html.match(/value="([^"]*)"/)[1]}</button>
                    </div>`;
                break;
            case 'file':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <input type="text" style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" placeholder="File..." disabled />
                    </div>`;
                break;
            case 'link':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <input type="text" style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" placeholder="https://..." disabled />
                    </div>`;
                break;
            case 'date':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <input type="text" style="width: 100%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" placeholder="Date" disabled />
                    </div>`;
                break;
            case 'start-end':
                previewHtml += `
                    <div style="margin: 2px 0;">
                        <label style="font-weight: 600;">${field.html.match(/value="([^"]*)"/)[1]}</label>
                        <div style="display: flex; gap: 5px;">
                            <input type="text" style="width: 50%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" placeholder="Start" disabled />
                            <input type="text" style="width: 50%; padding: 2px; border: 1px solid #C8C8C8; border-radius: 2px;" placeholder="End" disabled />
                        </div>
                    </div>`;
                break;
            case 'section':
                previewHtml += `<div style="border: 1px dashed #EDEFF7; padding: 2px; margin: 2px 0;"></div>`;
                break;
            case 'column':
                previewHtml += `<div style="display: flex; gap: 5px; margin: 2px 0;"><div style="flex: 1; border: 1px dashed #EDEFF7;"></div><div style="flex: 1; border: 1px dashed #EDEFF7;"></div></div>`;
                break;
        }
    });

    previewHtml += '</div>';
    return previewHtml;
}


document.querySelector('.create-test-content .btn img[src="../assets/icon/eye.png"]').parentElement.addEventListener('click', function() {
    // ... populate preview ...
    document.querySelector('.create-test-content').style.display = 'none';
    document.querySelector('.preview-content').style.display = 'block';
});
let currentPreviewMode = null;

// Test preview button
document.querySelector('.create-test-content .btn img[src="../assets/icon/eye.png"]').parentElement.addEventListener('click', function() {
    currentPreviewMode = 'test';
    // ... existing code ...
});

// Form preview button
document.querySelector('.create-form-content .btn-preview').addEventListener('click', function() {
    currentPreviewMode = 'form';
    // ... existing code ...
});

// Back to Edit button
document.querySelectorAll('.backToEditButton').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('.test-preview-content').style.display = 'none';
        document.querySelector('.form-preview-content').style.display = 'none';
        
        if (currentPreviewMode === 'test') {
            document.querySelector('.create-test-content').style.display = 'block';
            document.querySelector('.create-form-content').style.display = 'none';
        } else if (currentPreviewMode === 'form') {
            document.querySelector('.create-form-content').style.display = 'block';
            document.querySelector('.create-test-content').style.display = 'none';
        }
    });
});
    </script>    
@endsection













    

