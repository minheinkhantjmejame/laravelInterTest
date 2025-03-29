@extends('layouts.intern.internLayout')
@section('styles')
    <style rel="stylesheet" type="text/css">
            body{
                background-color:#ffffff;
            }
            .container .headingtext{
                text-align: center;
            }
            .search-container {
                background-color: #f8f9fa;
                width: 100vw; /* Full viewport width */
                position: relative; /* Ensures it breaks out of parent constraints */
                left: 50%; /* Center it */
                right: 50%; /* Center it */
                margin-left: -50vw; /* Offset to stretch full width */
                margin-right: -50vw; /* Offset to stretch full width */
                padding: 40px 20px; /* Keep internal padding */
                max-width: none; /* Remove max-width restriction */
            }

            .input-group {
                justify-content: center;
            }



            .app-id-input {
                width: 40px;
                height: 40px;
                text-align: center;
                margin-right: 5px; 
                border-radius: 2px;
                border: 1px solid black !important; 
                background-color:white;
                transition: border-color .15s ease-in-out;
                display: inline-block;
            }

            .app-id-input:last-child {
                margin-right: 0; 
            }

            .app-id-input:focus {
                border-color: #80bdff;
                box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
            }

            .app-search-button {
                width: 100px; 
                padding: 10px 0; 
                margin-top: 10px; 
                background-color: #474bc2;

                box-shadow: none;
            }

            .app-search-button:hover {
                background-color: #0056b3;
                border-color: #004085;
            }

            .internship-details .btn {
                margin: 0 5px;
            }

            .internship-details .card {
                background-color: #f8f9fa;
                border: 1px solid #B1BBE7;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .internship-details .card-body {
                padding: 20px;
                line-height: 1.6;
                color: #333;
            }

            .status-buttons button {
                margin-bottom: 5px; 
            }

            .statuscontainer {
                max-width: 1000px; 
                margin: auto;
                background-color: #f8f9fa;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .status-buttons {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px; 
            }

            .btn {
                padding: 10px 15px; 
            }

            /* .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 20px;
}

.card-body {
    padding: 20px;
}

.row {
    width: 100%;
    margin: 0;
    display: flex;
    align-items: stretch;
    min-height: 200px; /* Set a minimum height to ensure consistency */
/* } */

.col-md-3, .col-md-4, .col-md-2 {
    padding: 0 10px;
    display: flex;
    flex-direction: column;
    height: 100%; /* Ensure columns stretch to the full height of the row */
}

.col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.col-md-4 {
    flex: 0 0 33.3333%;
    max-width: 33.3333%;
}

.col-md-2 {
    flex: 0 0 16.6667%;
    max-width: 16.6667%;
}

.image-container {
    position: relative;
    height: 100%; /* Ensure the container stretches to the full height */
    display: flex;
    flex-direction: column;
}

.card-image {
    width: 100%;
    height: 100%; /* Ensure the image stretches to the full height */
    object-fit: cover; /* Maintain aspect ratio while filling the container */
}

.content-section {
    height: 100%; /* Ensure the section stretches to the full height */
}

.content-box, .date-container, .type-box {
    height: 100%; /* Ensure all content boxes stretch to the full height */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Align content at the top */
    align-items: flex-start;
    padding: 15px;
    margin: 0; /* Remove any default margins */
}

.content-box {
    padding: 15px 0;
}

.date-container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 0; /* Remove padding to align with other sections */
}

.date-box, .type-box {
    background-color: #d1d1f0;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0; /* Remove any margins */
}

.date-box {
    flex: 1; /* Ensure each date box takes equal space */
    margin-bottom: 10px;
}

.date-box:last-child {
    margin-bottom: 0;
}

.type-box {
    flex: 1; /* Ensure the type-box stretches to the full height */
    justify-content: center; /* Center the content vertically */
}

.date-box p, .type-box p {
    margin: 0;
}

.type-box img {
    width: 24px;
    height: 24px;
    margin-bottom: 5px;
}

.card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 8px;
    margin-top: 0; /* Ensure no extra margin at the top */
}

.card-text {
    font-size: 20px;
    margin-bottom: 8px;
    margin-top: 0; /* Ensure no extra margin at the top */
}

.hr {
    border-top: 1px solid #ddd;
    margin: 10px 0;
    width: 100%;
}

.pending-button {
    position: absolute;
    top: 10px;
    left: 10px;
}

.btn-pending {
    background-color: #b1bbe7;
    color: #000;
    border: 0;
    border-radius: 4px;
    font-size: 20px;
    padding: 5px 15px;
}

@media (max-width: 992px) {
    .row {
        flex-direction: column;
        min-height: auto; /* Remove min-height on smaller screens */
    }

    .col-md-3, .col-md-4, .col-md-2 {
        flex: 0 0 100%;
        max-width: 100%;
        height: auto; /* Allow height to adjust on smaller screens */
    }

    .image-container {
        height: auto;
    }

    .content-section {
        height: auto;
    }

    .content-box, .date-container, .type-box {
        height: auto;
    }

    .pending-button {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .date-box, .type-box {
        margin-bottom: 10px;
    }

    .date-box:last-child {
        margin-bottom: 10px;
    }
}

a {
    text-decoration: none;
}

@media (max-width: 1196px) {
    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
    }

    .col-md-2 {
        flex: 0 0 16.6667%;
        max-width: 16.6667%;
    }
} */

    </style>
@endsection



@section('content')
    <!-- Navigation Bar -->
    @include('layouts.intern.navbar')
    
    <div class="container my-5">
        <h5 class="mb-4 headingtext" style="font-size:48px;" data-translate="YOUR APPLICATION">YOUR APPLICATION</h5>
        <div class="search-container text-center" style="background-color:#f3f5fc;">
            <p  style="font-size:32px;" data-translate="ENTER YOUR APPLICATION ID">ENTER YOUR APPLICATION ID</p>
            <div class="d-flex justify-content-center mb-3 application-id">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
            </div>
            <button class="btn btn-primary app-search-button" type="button" style="background-color:#474bc2;" data-translate="Search">Search</button>
        </div>
    </div>

    <div class="container internship-details mt-3">
            <h4 class="text-start mb-4" data-translate="APPLICATION INTERNSHIP"> APPLICATION INTERNSHIP</h4>
            <div class="status-buttons d-flex justify-content-start mb-3">
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Pending">Pending</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Application">Request Internship Application</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Document">Request Internship Document</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Acceptance Terms">Acceptance Terms</button>
                <button class="btn btn-success mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Success">Success</button>
                <button class="btn btn-danger mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Fail">Fail</button>
            </div>
            <a href="{{url('pending_status')}}">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-stretch position-relative">
                            <!-- Image with Pending Button -->
                            <div class="col-md-3 image-container">
                                <img src="{{ asset('assets/img/status.png') }}" style="width:200px;height:180px;" alt="Profile" class="image-fluid card-image">
                                <div class="pending-button">
                                    <button class="btn btn-pending" style="background-color:#b1bbe7;color:#000;border:0;border-radius:4px;font-size:20px;" data-translate="Pending">Pending</button>
                                </div>
                            </div>
                            <!-- Title, Location, and Application ID -->
                            <div class="col-md-4 content-section">
                                <div class="content-box">
                                    <h6 class="card-title" style="font-size:24px;" data-translate="UX/UI Designer Trainee">UX/UI Designer Trainee</h6>
                                    <p class="card-text" style="font-size:20px;"><i class="bi bi-geo-alt"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                    <hr class="hr">
                                    <p class="card-text"><strong style="font-size:24px;" data-translate="Application ID:">Application ID:</strong><span style="font-size:20px;"> 112987630</span></p>
                                </div>
                            </div>
                            <!-- Date Boxes -->
                            <div class="col-md-3 content-section">
                                <div class="date-container">
                                    <div class="date-box" style="background-color:#d1d1f0;">
                                        <p style="font-size:24px;" data-translate="Start date:"><strong>Start date:</strong></p>
                                        <p style="font-size:20px;" data-translate="Mon, 25 Nov 2024">Mon, 25 Nov 2024</p>
                                    </div>
                                    <div class="date-box" style="background-color:#d1d1f0;">
                                        <p style="font-size:24px;" data-translate="End date:"><strong>End date:</strong></p>
                                        <p style="font-size:20px;" data-translate="Sat, 14 Mar 2025">Sat, 14 Mar 2025</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Type Box -->
                            <div class="col-md-2 content-section" style="width:180px;height:200px;">
                                <div class="type-box h-100" style="background-color:#d1d1f0; position: relative;">
                                    <img src="{{asset('assets/icon/hybrid.png')}}" alt="" style="width:24px;height:24px; position: absolute; top:15px;right:15px;"> <p style="font-size:18px;position: absolute;left:13px;bottom:14px;"><span data-translate="Hybrid">Hybrid</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
    </div>             

    @include('layouts.intern.internFooter')
@endsection


@section('script')
    <script type="text/javascript">


                $(document).ready(function() {
                        $("#startDate, #endDate").datepicker({
                            showButtonPanel: true,
                            dateFormat: "dd/mm/yy"
                        });
                    });

                    document.querySelectorAll('.app-id-input').forEach((input, index, array) => {
            input.addEventListener('keyup', function() {
                if (this.value.length === 1 && index !== array.length - 1) {
                    array[index + 1].focus();
                }
            });
        });

            document.addEventListener("DOMContentLoaded", function() {
                const searchButton = document.querySelector('.app-search-button');
                const appIdInputs = document.querySelectorAll('.app-id-input');
                const internshipDetails = document.querySelector('.internship-details');

                // Hide the internship details on page load
                internshipDetails.style.display = 'none';

                function getAppId() {
                    return Array.from(appIdInputs).map(input => input.value).join('');
                }

                searchButton.addEventListener('click', function() {
                    const appId = getAppId();
                    if (appId === "112987630") {  // Assuming "112987630" is a valid ID for demonstration
                        internshipDetails.style.display = 'block';
                    } else {
                        alert('No application found with that ID.');
                        internshipDetails.style.display = 'none';
                    }
                });

                document.querySelectorAll('.app-id-input').forEach((input, index, array) => {
            input.addEventListener('keyup', function(event) {
                if (this.value.length === 1 && index !== array.length - 1) {
                    array[index + 1].focus(); // Move to next input if a digit is entered
                } else if (event.key === "Backspace" && index !== 0 && this.value === "") {
                    array[index - 1].focus(); // Move back to previous input when deleting
                }
            });
        });

        });


    </script>
@endsection

