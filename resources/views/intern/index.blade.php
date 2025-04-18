@extends('layouts.intern.internLayout')

@section('styles')
    <!-- Apply the font -->
    <style rel="stylesheet" type="text/css">
        body {
            font-family: 'Noto Sans Myanmar', sans-serif;
        }
        /* Keep logo font as original */
        .navbar-brand {
            font-family: inherit !important;
        }

    </style>
@endsection

@section('content')
    @include('layouts.intern.navbar')
    
    <!-- Hero Section -->
    <section class="hero-section" style="background-color:#fff;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="slogan">
                <h1 class="fw-bold display-5"> <span  data-translate="HI. WELCOME TO">HI. WELCOME TO</span><br>IN<span style="color:#3c3f7c;">T</span><span style="color:#4346a7;">E</span><span style="color:#4a4ec4;">R</span><span style="color:#5c60cf;">N</span><span style="color:#676bd6;">P</span><span style="color:#777adf;">L</span><span style="color:#888bea;">U</span><span style="color:#888cea;">S</span></h1>
                <p class="lead" style="font-size:20px; font-weight:bold;" data-translate="Internship application system of Vanness Plus Consulting Co., Ltd.">
                    Internship application system by <br> Vanness Plus Consulting Co., Ltd.
                </p>
                <a href="{{url('program')}}" class="btn btn-dark btn-lg mt-3" style="background-color:#474bc2; color:white;" data-translate="Apply Now">Apply Now</a>
            </div>
            <div class="hero-image">
                <img src="../assets/img/pc.png" alt="Laptop Graphic" class="img-fluid" style="width: 600px; height: 600px; max-width: none;"/>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container text-center">
            <h1 class="font-weight:bolder;" data-translate="ABOUT OUR COMPANY">ABOUT US</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="../assets/img/bag.png" alt="Internship" class="mb-3">
                    <h4 class="fw-bold" data-translate="INTERNSHIP">INTERNSHIP</h4>
                    <p data-translate="This website is the company's operating system for students throughout their internship until the end.">
                        This website is the company's operating system for students throughout their internship until the end.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="../assets/img/notebook.png" alt="Task Management" class="mb-3">
                    <h4 class="fw-bold" data-translate="TASK MANAGEMENT">TASK MANAGEMENT</h4>
                    <p data-translate="There is a system for managing assigned tasks, work entry and exit times, daily reporting, document submission, etc.">
                        There is a system for managing assigned tasks, work entry and exit times, daily reporting, document submission, etc.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="../assets/img/clock.png" alt="Faster Process" class="mb-3">
                    <h4 class="fw-bold" data-translate="FASTER PROCESS">FASTER PROCESS</h4>
                    <p data-translate="Shorten the time spent on each step of the internship process, such as waiting for a response email, contacting HR, etc.">
                        Shorten the time spent on each step of the internship process, such as waiting for a response email, contacting HR, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.intern.internFooter')
@endsection

@section('script')
    <script type="text/javascript">

        // Initialize date picker (existing function)
        $(document).ready(function() {
            $("#startDate, #endDate").datepicker({
                showButtonPanel: true,
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
@endsection