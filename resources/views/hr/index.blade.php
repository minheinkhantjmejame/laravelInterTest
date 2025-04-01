<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- JS Chart  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style rel="stylesheet" type="text/css">
  body {
            background-color: #fff;
        }
        .heroparagraph {
            text-align: right;
            margin-top: 20px;
            margin-right: 50px;
            margin-bottom: 50px;
        }
        .heroparagraph p {
            margin-bottom: 0px;
        }
        #lineptag {
    font-size: 18px;
    font-weight: bold;
    color: #323438;
    letter-spacing: 3px;
    position: absolute;
    display: flex;
    align-items: center;
    gap: 20px;
    
    transform: none; /* Remove translateX */
    white-space: nowrap;
}

/* Line element */
#lineptag span:first-child {
    width: 70px;
    height: 2px;
    background-color: #323438;
    display: block;
    flex-shrink: 0;
}

/* Text element */
#lineptag > span:last-child {
    position: relative;
    display: inline-block;
}
        /* #lineptag span {
            position: absolute;
            top: 50%;
            width: 70px;
            height: 2px;
            background-color: #323438;
            transform: translateX(-150%) translateY(-50%);
        } */
        .about-section {
            background-color: #ffffff;
        }
        .about-section h2 {
            color: #3c3f7c;
            margin-bottom: 10px;
        }
        .line-to-left {
            width: 90%;
            height: 3px;
            background-color: #000;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .col-md-6.d-flex.align-items-center {
            align-items: flex-start;
            justify-content: flex-start;
            height: 100%;
        }
        .about-section .badge {
            padding: 10px 20px;
            font-size: 14px;
            border: 2px solid #000;
            border-radius: 4px;
            font-weight: 500;
            background-color: none;
        }
        .pricing-section {
            background-color: #ffffff;
        }
        .pricing-section h2 {
            color: #474bc2;
        }
        .pricing-section .line {
            margin: 0 auto;
            height: 3px;
            width: 50px;
            background-color: #474bc2;
        }
        .pricing-toggle-container {
            height: 65px;
            text-align: center;
            margin: auto;
        }
        .btn-group .btn {
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-group .btn.active {
            background-color: #ffffff;
            color: #474bc2;
            color: #000;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-group .btn:not(.active) {
            background-color: #f3f5fc;
            color: #323438;
        }
        .btn-group .btn:hover {
            cursor: pointer;
        }
        .pricing-cards-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin: 20px 0;
        }
        .pricing-card {
            width: 300px;
            border: 2px solid #8C97C9;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .best-deal-container {
            width: 350px;
            background-color: #D1D1F0;
            border-radius: 12px;
            padding: 10px;
            border: none;
        }
        .pricing-card-content {
            border: 2px solid #8C97C9;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
        }
        .start-trial-btn {
            width: 200px;
        }
        .icon-container {
            display: flex;
            background-color: #474BC2;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
        }
        .icon-image {
            width: 20px;
            height: 20px;
        }
        .card-title {
            font-weight: bold;
            font-size: 20px;
            margin: 10px 0;
        }
        .card-description {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .card-price {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .card-device {
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        .device-icon {
            width: 13px;
            height: 13px;
            margin-right: 5px;
        }
        .text-center {
            margin-top: 15px;
        }
        .compare-features {
            background-color: #ffffff;
        }
        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 15px;
            align-items: center;
        }
        .features-header {
            display: contents;
        }
        .feature-row {
            display: contents;
            text-align: center;
            align-items: center;
            font-size: 16px;
        }
        .feature-row p {
            text-align: left;
            font-size: 16px;
            margin: 0;
            padding: 15px 0;
        }
        .card {
            border: 1px solid #8c97c9;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }
        .feature-check {
            color: #474bc2;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e8ebfc;
            border-radius: 8px;
            height: 40px;
            width: 40px;
            margin: auto;
        }
        .feature-info {
            background-color: #B1BBE7;
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }
        .feature-check-button {
            background-color: #B1BBE7;
            border: none;
            border-radius: 4px;
            height: 40px;
        }
        .product-services .card {
    transition: width 0.3s ease-in-out;
    width: 100%;
    max-width: 350px;
    height: 400px; /* Fixed height */
    overflow: hidden;
    position: relative;
}

.product-services .card.expanded {
    width: 700px; /* Expanded width */
    max-width: 100%;
}

.product-services .card .collapse-text {
    display: none;
    transition: opacity 0.3s ease-in-out;
}

.product-services .card.expanded .collapse-text {
    display: block;
    opacity: 1;
}

.product-services .card .arrow-icon {
    transition: transform 0.3s ease;
}

.product-services .card.expanded .arrow-icon {
    transform: rotate(180deg);
}

.product-services .card .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}
        .learn-more-btn {
            background-color: #E8EBFC;
            color: #474BC2;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .learn-more-btn:hover {
            background-color: #D6D9F3;
        }
        .card-footer i {
            font-size: 18px;
            color: #474BC2;
            cursor: pointer;
        }
        .carousel-controls {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .carousel-controls i {
            font-size: 24px;
            color: #474BC2;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .carousel-controls i:hover {
            color: #323438;
        }
        .upcoming-features {
            background-color: #F8FBFF;
            padding: 40px;
            text-align: left;
        }
        .header-section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 32px;
            font-weight: bold;
            color: #323438;
            margin-bottom: 10px;
        }
        .subtitle {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .horizontal-line {
            flex: 1;
            height: 2px;
            background-color: #000;
            display: inline-block;
        }
        .text {
            color: #000;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .features-cards {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
}
.feature-card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%; /* Keep the percentage width for even spacing */
    min-width: 300px; /* Ensure a minimum width for smaller screens */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    background-size: contain; /* Adjust background image to fit without cropping */
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden; /* Prevent content from overflowing the card */
}
        .card-header {
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }
        .learn-more-btn {
            background-color: #E8EBFC;
            color: #474BC2;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            padding: 8px 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .learn-more-btn:hover {
            background-color: #D6D9F3;
        }
        .card-body {
            padding: 10px;
            text-align: left;
            height: 200px;
            position: relative;
            width: 300px;
        }
        .upcoming {
    border: 2px solid #B1BBE7;
    border-radius: 4px;
    background-color: #F3F5FC;
    padding: 10px;
    position: relative; /* Remove absolute positioning */
    width: 100%; /* Use full width of the parent */
    box-sizing: border-box; /* Ensure padding doesn't increase the width */
}

.upcoming h6 {
    font-size: 16px;
    font-weight: bold;
    color: #323438;
    margin-bottom: 10px;
}

.upcoming p {
    font-size: 14px; /* Increase font size for better readability */
    color: #000;
    line-height: 1.6;
    margin: 0;
}
        .card-body h3 {
            font-size: 16px;
            font-weight: bold;
            color: #323438;
            margin-bottom: 10px;
        }
        .card-body p {
            font-size: 14px;
            color: #000;
            line-height: 1.6;
            z-index:1;
        }
        .card {
            transition: width 0.3s ease-in-out;
            width: 100%;
            max-width: 350px;
        }
        .card.expanded {
            width: 700px;
            max-width: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            position:relative;
        }
        .card-body img {
            transition: transform 0.3s ease-in-out;
            z-index:0;
            position:absolute;
            bottom:50px;
            right:0;
        }
        .arrow-icon.rotated {
            transform: rotate(180deg);
        }

        @media (max-width: 768px) {
    .feature-card {
        width: 100%; /* Stack cards on smaller screens */
        min-width: unset;
    }
}



    </style>

    <!-- Jquery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 mb-0">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="font-size:40px;">INTERNPLUS</a>
            <div class="dropdown" style="display: inline-block;">
                <button class="btn btn-white" style="border:none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('en')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('th')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('my')">MYAN</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-5"><a class="btn btn-dark" href="{{route('hr.register')}}" style="width:140px;background-color:#b1bbe7; color:black;" data-translate="Register">Register</a></li>
                    <li class="nav-item"><a class="btn btn-dark" href="{{route('hr.login')}}" style="width:111px;background-color:#b1bbe7; color:black;" data-translate="Log In">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    

    <!-- Hero Section -->
    <section class="hero-section mt-0 " style="background-color:#fff;">
        <div class="container mt-0 mb-0 d-flex align-items-center justify-content-between">
            <div class="slogan">
                <h1 class="fw-bold display-5" style="font-size:70px;"><span data-translate="HI. WELCOME TO">HI. WELCOME TO</span><br>I<span style="color:#393c66;">n</span><span style="color:#3c3f7c;">t</span><span style="color:#4346a7;">e</span><span style="color:#4a4ec4;">r</span><span style="color:#5c60cf;">n</span><span style="color:#676bd6;">P</span><span style="color:#777adf;">l</span><span style="color:#888bea;">u</span><span style="color:#888cea;">s</span></h1>
                <p class="mb-5" id="lineptag"><span></span><span data-translate="ALL ABOUT HR EASE">ALL ABOUT HR EASE</span></p>
                <a href="{{url('/register')}}" class="btn btn-dark btn-lg mt-5 me-5" style="width:200px;background-color:#474bc2; color:white;"><span data-translate="Free Trial">Free Trial</span></a>
                <a href="{{url('/register')}}" class="btn btn-dark btn-lg mt-5" style="width:200px;background-color:#474bc2; color:white;"><span data-translate="Request Demo">Request Demo</span></a>
            </div>
            <div class="heroparagraph">
                <div>
                    <img src="../assets/img/bag_2.png" style="width:auto;height:auto;" alt="">
                </div>
            </div>
        </div>
        <div class="heroparagraph mt-0">
            <p data-translate="We are all about HR ease to support all HR functions">We are all about HR ease to support all HR functions</p>
            <p data-translate="that could ease your business's HR operation and Management.">that could ease your business's HR operation and Management.</p>
            <p data-translate="Looking for HR Manager? Check out pricing or appoint for Demo here.">Looking for HR Manager? Check out pricing or appoint for Demo here.</p>
        </div>
    </section>

    <section class="about-section pb-5">
        <div class="container">
            <h2 class="fw-bold" style="font-size: 64px; color:#474bc2;" data-translate="About Us">About Us</h2>
            <div class="row ">
                <div class="col-md-6 d-flex align-items-start position-relative">
                    <span class="line-to-left"></span>
                </div>                
                <!-- Right Side with Text -->
                <div class="col-md-6">
                    <p class="" style="line-height: 1.8;" data-translate="All in one HRM application to support your business on HR operation that could ease your business on Cloud, online ANY TIME & ANY WHERE now. 
                    InternPlus is flexible and easy to use regardless of your desire.">
                        All in one HRM application to support your business on HR operation that could ease your business on Cloud, online ANY TIME & ANY WHERE now. 
                        InternPlus is flexible and easy to use regardless of your desire.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mt-5">
                    <div class="mt-3" style="width:90%;">
                        <p style="text-align:left;" data-translate="Recruiting interns is hard or even harder this time, you just need only a reliable HR who could do these jobs along with our tool. Your Human Resource Management would become easy tasks for your man and company. With an reasonably low price and reliable tools, “NO MORE” “multiple Excel are needed. Human Error now would be eliminated from your work line, less complaint and more compliment could be engaged.">Recruiting interns is hard or even harder this time, you just need only a reliable HR who could do these jobs along with our tool. Your Human Resource Management would become easy tasks for your man and company. With an reasonably low price and reliable tools, “NO MORE” “multiple Excel are needed. Human Error now would be eliminated from your work line, less complaint and more compliment could be engaged.</p>
                    </div>
                </div>                
                <!-- Right Side with Text -->
                <div class="col-md-6">
                    <h1 style="color:#474bc2; font-weight:bold;" data-translate="Our Functions Include:">Our Functions Include:</h1>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge text-dark " data-translate="Internship Data Management">Internship Data Management</span>
                        <span class="badge  text-dark " data-translate="Storage Management">Storage Management</span>
                        <span class="badge  text-dark " data-translate="Application Management">Application Management</span>
                        <span class="badge  text-dark " data-translate="Time Attendance">Time Attendance</span>
                        <span class="badge  text-dark " data-translate="Leave Request">Leave Request</span>
                        <span class="badge  text-dark " data-translate="Assignment Management">Assignment Management</span>
                        <span class="badge  text-dark " data-translate="Reporting">Reporting</span>
                        <span class="badge  text-dark " data-translate="Offboarding">Offboarding</span>
                        <span class="badge  text-dark " data-translate="Payroll Management">Payroll Management</span>
                        <span class="badge  text-dark " data-translate="Approval">Approval</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section py-5">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold" style="font-size: 48px; color:#474bc2;" data-translate="Package and Pricing">Package and Pricing</h2>
            <div style="text-align: center;">
                <p style="font-size:18px; font-weight:bold; color:#323438; letter-spacing:3px; display: inline-flex; align-items: center; justify-content: center;">
                    <span class="line" style="width:100px; height:3px; background:#000; margin-right:50px;"></span>
                    <span data-translate="CHOOSE WHAT BEST SUITED">CHOOSE WHAT BEST SUITED</span>
                </p>
            </div>
            
            
            
            <!-- Toggle Button -->
            <div class="pricing-toggle-container" style="background-color: #F3F5FC; padding: 10px; border-radius: 10px; display: inline-block;">
                <div class="btn-group toggle-buttons mb-5" role="group" aria-label="Pricing Toggle">
                    <button id="monthlyBtn" type="button" class="btn active" style="border-radius:4px;" onclick="togglePricing('monthly')" data-translate="Monthly">Monthly</button>
                    <button id="yearlyBtn" type="button" class="btn" style="border-radius:4px;" onclick="togglePricing('yearly')"  data-translate="Yearly">Yearly</button>
                </div>
            </div>
    
            <!-- Pricing Cards -->
            <div class="pricing-section">
                <div id="pricingCards" class="pricing-cards-container">
                    
                </div>
            </div>
             
        </div>
    </section>

    <section class="compare-features py-5">
        <div class="container">
            <div class="features-grid mt-5">
                <div class="features-header">
                    <div><h2 class="fw-bold text-left" style="font-size: 48px; color: #474bc2;"  data-translate="Compare Features">Compare Features</h2></div>
                    <div class="card text-center p-3">
                        <div class="icon mb-3">
                            <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                            </span>                            
                        </div>
                        <h4 class="card-title text-start" data-translate="Starter">Starter</h4>
                        <h3 class="card-price text-start" style="font-size:36px;" data-translate="Free">Free</h3>
                    </div>
                    <div class="card text-center p-3">
                        <div class="icon mb-3">
                            <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                <img src="../assets/icon/battery-v-charging.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                            </span>                            
                        </div>
                        <h4 class="card-title text-start" data-translate="Standard">Standard</h4>
                        <h3 id="standardPrice" class="card-price text-start" style="font-size:36px;">฿199 <span class="text-muted" style="font-size:small;" data-translate="/month">/month</span></h3>
                    </div>
                    <div class="card text-center p-3">
                        <div class="icon mb-3">
                            <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                <img src="../assets/icon/plug.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                            </span>                            
                        </div>
                        <h4 class="card-title text-start" data-translate="Preminum">Premium</h4>
                        <h3 id="premiumPrice" class="card-price text-start" style="font-size:36px;">฿399<span class="text-muted" style="font-size:small;" data-translate="/month">/month</span></h3>
                    </div>
                </div>
                <div class="feature-row">
                    <p data-translate="Register for interns">Register for interns</p>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Track internship status">Track internship status</p>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Storage space">Storage space</p>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Preliminary results report">Preliminary results report</p>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Detailed report">Detailed report</p>
                    <div></div>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Notification system">Notification system</p>
                    <div></div>
                    <div></div>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Data Analytics">Data Analytics</p>
                    <div></div>
                    <div></div>
                    <button class="feature-check-button"><i class="bi bi-check-square-fill"></i></button>
                </div>
                <div class="feature-row">
                    <p data-translate="Maximum intern">Maximum intern</p>
                    <div class="feature-info">10 users</div>
                    <div class="feature-info">50 users</div>
                    <div class="feature-info">Unlimited</div>
                </div>
                <div class="feature-row">
                    <p data-translate="Maximum administrator">Maximum administrator</p>
                    <div class="feature-info">1 device</div>
                    <div class="feature-info">5 devices</div>
                    <div class="feature-info">10 devices</div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-services py-5">
        <div class="container">
            <h2 class="text-left mb-5" data-translate="Product & Services">Product & Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="Internship Data Management">Internship Data Management</h5>
                            <p class="card-text collapse-text" id="text-1" data-translate="Internship Data Management provides real-time data updates for both interns and corporate users.">
                                Internship Data Management provides real-time data updates for both interns and corporate users.
                            </p>
                            <img src="../assets/img/data_management.jpg" style="width:250px;height:250px;" alt="">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn" style="background-color:#b1bbe7"  data-translate="Learn More">Learn More</button>
                                <button class="btn toggle-btn" data-target="text-1" onclick="toggleText(this)">
                                    <img class="arrow-icon" src="../assets/icon/right_arrow.png" alt="Arrow">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="Time Attendance">Time Attendance</h5>
                            <p class="card-text collapse-text" id="text-2" data-translate="Realtime time attendance key in and out rely on setup location which user can choose work from home, work from office, or flexible mode, manage shift. Time attendance could help in time tracking and overtime payment and payroll automatically upon organizational setting which could reduce working time and workload of administrative tasks.">
                                Realtime time attendance key in and out rely on setup location which user can choose work from home, work from office, or flexible mode, manage shift. Time attendance could help in time tracking and overtime payment and payroll automatically upon organizational setting which could reduce working time and workload of administrative tasks.
                            </p>
                            <img src="../assets/img/time_attendance.jpg"  style="width:250px;height:250px;"  alt="">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn" style="background-color:#b1bbe7;" data-translate="Learn More">Learn More</button>
                                <button class="btn toggle-btn" data-target="text-2" onclick="toggleText(this)">
                                    <img class="arrow-icon" src="../assets/icon/right_arrow.png" alt="right arrow icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="Leave Request">Leave Request</h5>
                            <p class="card-text collapse-text" id="text-3" data-translate="The Leave Request system streamlines the process of applying and approving leave. Employees can submit requests online, and managers can easily review and approve them, improving efficiency and transparency.">
                                The Leave Request system streamlines the process of applying and approving leave. Employees can submit requests online, and managers can easily review and approve them, improving efficiency and transparency.
                            </p>
                            <img src="../assets/img/leave_request.jpg"  style="width:250px;height:250px;"  alt="">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn" style="background-color:#b1bbe7;" data-translate="Learn More">Learn More</button>
                                <button class="btn toggle-btn" data-target="text-3" onclick="toggleText(this)">
                                    <img class="arrow-icon" src="../assets/icon/right_arrow.png" alt="right arrow icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end button-container" style="margin-right:40px;margin-top:10px;">
                <button class="btn"><i class="bi bi-arrow-left-circle" style="font-size:30px;"></i></button>
                <button class="btn"><i class="bi bi-arrow-right-circle" style="font-size:30px;"></i></button> 
            </div>
        </div>
    </section>
      
    

    <section class="upcoming-features py-5" style="background-color:#f3f5fc;">
        <div class="container">
            <div class="header-section">
                <h2 class="section-title" data-translate="What's Upcoming Features">What's Upcoming Features</h2>
                <div class="subtitle">
                    <span class="horizontal-line"></span>
                    <span class="text" data-translate="UPCOMING FEATURES YOU SHOULD KNOW">UPCOMING FEATURES YOU SHOULD KNOW</span>
                </div>
            </div>
    
            <div class="features-cards">
                <!-- Card 1 -->
                <div class="feature-card" style="background-image:url(../assets/img/recruitment.png);background-size: cover;  background-repeat: no-repeat;">
                    <div class="card-header">
                        <button class="learn-more-btn" data-translate="Learn More">Learn More</button>
                    </div>
                    <div class="card-body">
                        <div class="upcoming">
                            <h6 data-translate="Recruitment">Recruitment</h6>
                            <p style="font-size:10px;" data-translate="Streamline data handling with robust solutions for storing, organizing, and accessing critical internship information efficiently and securely.">Streamline data handling with robust solutions for storing, organizing, and accessing critical internship information efficiently and securely.</p>
                         </div>
                </div>
                </div>
    
                <!-- Card 2 -->
                <div class="feature-card" style="background-image:url(../assets/img/application_tracking.png);background-size: cover;  background-repeat: no-repeat;">
                    <div class="card-header">
                        <button class="learn-more-btn" data-translate="Learn More">Learn More</button>
                    </div>
                    <div class="card-body">
                        <div class="upcoming">
                            <h6 data-translate="Application Tracking System">Application Tracking System</h6>
                            <p style="font-size:10px;" data-translate="Keep track of all applications in one place, making it easier to manage candidates, track their progress, and communicate effectively with them throughout the hiring process.">Keep track of all applications in one place, making it easier to manage candidates, track their progress, and communicate effectively with them throughout the hiring process.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="feature-card"  style="background-image:url(../assets/img/approval_system.png);background-size: cover;  background-repeat: no-repeat;">
                    <div class="card-header">
                        <button class="learn-more-btn" data-translate="Learn More">Learn More</button>
                    </div>
                    <div class="card-body">
                        <div class="upcoming">
                            <h6 data-translate="Approval System">Approval System</h6>
                            <p style="font-size:10px;" data-translate="HR has the right to approve the actions of interns, whether it is the process of applying for an internship or requesting leave from work and paying allowances.">HR has the right to approve the actions of interns, whether it is the process of applying for an internship or requesting leave from work and paying allowances.</p>
                        </div>
                </div>
                </div>
            </div>

            <div class="d-flex justify-content-end button-container" style="margin-top:10px;">
                <button class="btn"><i class="bi bi-arrow-left-circle" style="font-size:30px;"></i></button>
                <button class="btn"><i class="bi bi-arrow-right-circle" style="font-size:30px;"></i></button> 
            </div>
        </div>
    </section>
    

    @include('layouts.intern.internFooter')


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS  -->
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">

let currentLang = localStorage.getItem('selectedLanguage') || 'en';
document.addEventListener('DOMContentLoaded', () => {
    const monthlyBtn = document.getElementById('monthlyBtn');
    const yearlyBtn = document.getElementById('yearlyBtn');
    const pricingCardsContainer = document.getElementById('pricingCards');
    const standardPrice = document.getElementById('standardPrice');
    const premiumPrice = document.getElementById('premiumPrice');

    const monthlyPackages = `
<div class="pricing-card" style="margin-top:37px;">
            <div class="icon mb-3">
                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                    <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                </span>                            
            </div>
            <h4 class="card-title" data-translate="Starter">Starter</h4>
            <p class="card-description" data-translate="Suitable for students and beginners who need basic features.">Suitable for students and beginners who need basic features.</p>
            <h3 class="card-price" data-translate="Free">Free</h3>
            <p class="card-device">
                <img src="../assets/icon/device.png" class="device-icon" alt="">1 <span data-translate="devices">device</span>
            </p>
            <div class="text-center">
                <button class="btn start-trial-btn" style="background-color:#474bc2; color: white;" data-translate="Start Trial">Start Trial</button>
            </div>
        </div>
        <div class="pricing-card best-deal-container">
            <h6 class="mb-0" style="text-align: center; font-weight:bold;" data-translate="Best Deal">Best Deal</h6>
            <div class="pricing-card-content" style="margin-top:5px;">
                <div class="icon mb-3">
                    <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                        <img src="../assets/icon/battery-v-charging.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                    </span>   
                </div>
                <h4 class="card-title" data-translate="Standard">Standard</h4>
                <p class="card-description" data-translate="Suitable for small organizations or educational institutions that need more features.">Suitable for small organizations or educational institutions that need more features.</p>
                <h3 class="card-price">฿199<span data-translate="/month">/month</span></h3>
                <p class="card-device">
                    <img src="../assets/icon/device.png" class="device-icon"  alt="">5 <span data-translate="devices">devices</span>
                </p>
                <div class="text-center">
                    <button class="btn start-trial-btn" style="background-color:#e8ebfc; color:black;" data-translate="Start Trial">Start Trial</button>
                </div>
            </div>
        </div>
        <div class="pricing-card"  style="margin-top:37px;" >
            <div class="icon mb-3">
                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                    <img src="../assets/icon/plug.png" style="width: 15px; height: 18px; display: block; margin: 0; padding: 0;" alt="">
                </span>   
            </div>
            <h4 class="card-title" data-translate="Premium">Premium</h4>
            <p class="card-description" data-translate="Suitable for large organizations or educational institutions that require a complete system.">Suitable for large organizations or educational institutions that require a complete system.</p>
            <h3 class="card-price">฿399<span data-translate="/month">/month</span></h3>
            <p class="card-device">
                <img src="../assets/icon/device.png" class="device-icon" alt="">10 <span data-translate="devices">devices</span>
            </p>
            <div class="text-center">
                <button class="btn start-trial-btn" style="background-color:#474bc2; color: white;" data-translate="Start Trial">Start Trial</button>
            </div>
        </div>

        
`;

const yearlyPackages = `
<div class="pricing-card" style="margin-top:37px;">
            <div class="icon mb-3">
                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                    <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                </span>                            
            </div>
            <h4 class="card-title" data-translate="Starter">Starter</h4>
            <p class="card-description" data-translate="Suitable for students and beginners who need basic features.">Suitable for students and beginners who need basic features.</p>
            <h3 class="card-price" data-translate="Free">Free</h3>
            <p class="card-device">
                <img src="../assets/icon/device.png" class="device-icon" alt="">1 <span data-translate="device">device</span>
            </p>
            <div class="text-center">
                <button class="btn start-trial-btn" style="background-color:#474bc2; color: white;" data-translate="Start Trial">Start Trial</button>
            </div>
        </div>
        <div class="pricing-card best-deal-container">
            <h6 class="mb-0" style="text-align: center; font-weight:bold;" data-translate="Best Deal">Best Deal</h6>
            <div class="pricing-card-content" style="margin-top:5px;">
                <div class="icon mb-3">
                    <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                        <img src="../assets/icon/battery-v-charging.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                    </span>   
                </div>
                <h4 class="card-title" data-translate="Standard">Standard</h4>
                <p class="card-description" data-translate="Suitable for small organizations or educational institutions that need more features.">Suitable for small organizations or educational institutions that need more features.</p>
                <h3 class="card-price">฿2,388<span data-translate="/month">/month</span></h3>
                <p class="card-device">
                    <img src="../assets/icon/device.png" class="device-icon"  alt="">5 <span data-translate="devices">devices</span>
                </p>
                <div class="text-center">
                    <button class="btn start-trial-btn" style="background-color:#e8ebfc; color:black;" data-translate="Start Trial">Start Trial</button>
                </div>
            </div>
        </div>
        <div class="pricing-card"  style="margin-top:37px;" >
            <div class="icon mb-3">
                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                    <img src="../assets/icon/plug.png" style="width: 15px; height: 18px; display: block; margin: 0; padding: 0;" alt="">
                </span>   
            </div>
            <h4 class="card-title" data-translate="Premium">Premium</h4>
            <p class="card-description" data-translate="Suitable for large organizations or educational institutions that require a complete system.">Suitable for large organizations or educational institutions that require a complete system.</p>
            <h3 class="card-price">฿4,788 <span data-translate="/month">/month</span></h3>
            <p class="card-device">
                <img src="../assets/icon/device.png" class="device-icon" alt="">10 <span data-translate="devices">devices</span>
            </p>
            <div class="text-center">
                <button class="btn start-trial-btn" style="background-color:#474bc2; color: white;" data-translate="Start Trial">Start Trial</button>
            </div>
        </div>
`;
    // Default to Monthly Packages
    pricingCardsContainer.innerHTML = monthlyPackages;

    // Event Listeners for Toggle Buttons
    monthlyBtn.addEventListener('click', () => {
        pricingCardsContainer.innerHTML = monthlyPackages;
    monthlyBtn.classList.add('active');
    yearlyBtn.classList.remove('active');
    
    // Add translation refresh
    setTimeout(() => updateLanguage(currentLang), 100);
        standardPrice.innerHTML = '฿199 <span class="text-muted" style="font-size:small;">/month</span>';
        premiumPrice.innerHTML = '฿399 <span class="text-muted" style="font-size:small;">/month</span>';
    });

    yearlyBtn.addEventListener('click', () => {
        pricingCardsContainer.innerHTML = yearlyPackages;
    yearlyBtn.classList.add('active');
    monthlyBtn.classList.remove('active');
    
    // Add translation refresh
    setTimeout(() => updateLanguage(currentLang), 100);
        standardPrice.innerHTML = '฿2,388 <span class="text-muted" style="font-size:small;">/year</span>';
        premiumPrice.innerHTML = '฿4,788 <span class="text-muted" style="font-size:small;">/year</span>';
    });
});

function toggleText(button) {
    const targetId = button.getAttribute("data-target");
    const textElement = document.getElementById(targetId);
    const card = button.closest(".card");
    const allCards = document.querySelectorAll(".card");

    // Collapse all other cards
    allCards.forEach((c) => {
        if (c !== card) {
            c.classList.remove("expanded");
            const otherArrow = c.querySelector(".arrow-icon");
            if (otherArrow) {
                otherArrow.src = "{{asset('assets/icon/right_arrow.png')}}";
                otherArrow.classList.remove("rotated");
            }
        }
    });

    // Toggle the clicked card
    if (card.classList.contains("expanded")) {
        card.classList.remove("expanded");
        button.querySelector(".arrow-icon").classList.remove("rotated");
        button.querySelector(".arrow-icon").src = "{{asset('assets/icon/right_arrow.png')}}";
    } else {
        card.classList.add("expanded");
        button.querySelector(".arrow-icon").classList.add("rotated");
        button.querySelector(".arrow-icon").src = "{{asset('assets/icon/left_arrow.png')}}";
    }

    // Log for debugging
    console.log(`Toggled card ID: ${targetId}`);
}



    </script>
    
    
</body>
</html>




