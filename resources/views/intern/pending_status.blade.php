@extends('layouts.intern.internLayout')
@section('styles')
    <style type="text/css">
            body{
                background-color:#ffffff;
            }


            .application_info_container {
                        width:auto;
                        background-color:#d1d1f0;
                        margin: auto;
                        margin-top:100px;
                        padding: 30px 20px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;

                        position:relative;
                    }

            .info-row {
                width: 100%;
                display: flex;
                justify-content: space-around;
                margin-bottom: 10px;
            }

            .info-card {
                width: 100%;
                padding: 20px;

            }

            .outer-circle {
                background-color: #FFFFFF;
                border-radius: 50%;
                width: 150px;
                height: 150px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 5px;

                position:absolute;
                top:0;
                left:0;
                transform: translate(10%, -50%);
                
            }

                .inner-circle {
                    background-color: #474bc2; 
                    border-radius: 50%;
                    width: 100%;
                    height: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #000000;
                    font-size: 38px;
                    font-family: Arial, sans-serif;

                    
                }

            
                .inner-circle span {
                    padding: 20px;
                }

            .buttons {
                width:100%;
                background: #f8f9fa;
                box-shadow: 0 2px 10px rgba(0,0,0,0.5);
                border-radius:10px;
                padding:20px;

                display: flex;
                justify-content: center;
                align-items:center;
                text-align:center;
                gap: 30px;
                margin-top: 20px;

            }

            .button {
                background: #ffffff;
                color: #000000;
                border: 1px solid #000000;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;

                
            }

            .badge-container {
                display: flex;
                align-items: center;
                position:relative;
            }

            .badge {
                background-color: #007bff;
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
                position: relative;
                z-index: 2;
            }

        /* .line {
            height: 2px;
            width:20px;
            background-color: red;
            color:red;
            flex-grow: 1;
            position:relative;
        }

        .line.before {
            margin-right: 5px;
        }

        .line.after {
            margin-left: 5px;
        } */

                .status-button-color{
                    background:#474bc2;
                }

                .button:hover {
                    background: #474bc2;
                }

                .status-card {
                    width:100%;
                    padding: 20px;
                    background-color: #ffffff;
                    box-shadow: 0 4px 8px rgba(0,0,0,0.15);

                    display:flex;
                    flex-direction:column;
                    align-items:flex-start;          
                }
                .status-description{
                    align-self:center;
                    width:400px;
                    text-align:center;

                
                }

                .status-description img{
                    width:300px;
                    height:200px;
                }
    </style>
@endsection
@section('content')
   <!-- Navigation Bar -->
    @include('layouts.intern.navbar')

    <div class="application_info_container">
        <div class="info-card">
            <div class="info-row">
                <div class="outer-circle">
                    <div class="inner-circle">
                        <strong><span>Intern</span></strong>
                    </div>
                </div>
                <div>
                    <p><strong style="margin-right:20px;"><span data-translate="FIRST NAME">FIRST NAME</span></strong> Nicharee</p>
                    <p><strong stylel="margin-right:30px;"><span data-translate="EMAIL ADDRESS">EMAIL ADDRESS</span></strong> nicharee.sea@ku.th</p>
                </div>
                <div>
                    <p><strong style="margin-right:20px;"><span data-translate="LAST NAME">LAST NAME</span></strong> Seattanannon</p>
                    <p><strong style="margin-right:20px;"><span data-translate="PHONE NUMBER">PHONE NUMBER</span></strong> 0824941461</p>
                </div>
            </div>
            <div class="info-row">
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">112987630</strong><br/><span data-translate="application ID">application ID</span></p>
                </div>
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">UX/UI Designer Trainee</strong><br/><span data-translate="position">position</span></p>
                </div>
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">HYBRID</strong><br/><span data-translate="internship type">internship type</span></p>
                </div>
            </div>

            <!-- Status Buttons -->
        <div class="buttons info-row">
            <div>
                <a href="{{url('pending_status')}}"><button class="button status-button-color" style="color:white;">1</button></a>
                <p data-translate="Pending">Pending</p>
            </div>

            <!-- <div class="badge-container">
                <div class="line before"></div>
                <div class="badge">3 days</div>
                <div class="line after"></div>
            </div> -->
            
            <div>
                <a href="{{url('request_internship_application')}}"><button class="button">2</button></a>
                <p data-translate="Request Internship Application">Request Internship Application</p>
            </div>
            
            <div>
                <a href="#"><button class="button">3</button></a>
                <p data-translate="Request Internship Document">Request Internship Document</p>
            </div>
            
            <div>
                <button class="button">4</button>
                <p data-translate="Acceptance Terms">Acceptance Terms</p>
            </div>
            
            <div>
                <button class="button success">5</button>
                <p data-translate="Success">Success</p>
            </div>
            
        </div>
        </div>

        
    </div>

        <!-- Status Card -->
        <div class="status-card">
            <h4 style="font-size:36px;" data-translate="PENDING">PENDING</h4>
            <div class="status-description">
                <img src="../assets/img/application_success.png" style="width:200px;" alt="">
                <h3 style="font-weight:bolder;" data-translate="APPLICATION SUCCESSFUL">APPLICATION SUCCESSFUL</h3>
                <p style="font-size:18x;" data-translate="We have received your application!"><span></span>We have received your application! <br/><span data-translate="Please wait to proceed to the next step in a few days."></span></p>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
    