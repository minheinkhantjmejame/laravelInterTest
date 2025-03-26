@extends('layouts.intern.internLayout')

@section('styles')
    <style type="text/css" rel="stylesheet">
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
                    <p><strong style="margin-right:20px;">FIRST NAME</strong> Nicharee</p>
                    <p><strong stylel="margin-right:30px;">EMAIL ADDRESS</strong> nicharee.sea@ku.th</p>
                </div>
                <div>
                    <p><strong style="margin-right:20px;">LAST NAME </strong> Seattanannon</p>
                    <p><strong style="margin-right:20px;">PHONE NUMBER</strong> 0824941461</p>
                </div>
            </div>
            <div class="info-row">
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">112987630</strong><br/>application ID</p>
                </div>
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">UX/UI Designer Trainee</strong><br/> position</p>
                </div>
                <div style="text-align:center;">
                    <p><strong style="font-size:26px;">HYBRID</strong><br/>internship type</p>
                </div>
            </div>

            <!-- Status Buttons -->
        <div class="buttons info-row">
            <div>
                <a href="#"><button class="button status-button-color" style="color:#fff;">1</button></a>
                <p>Pending</p>
            </div>

            <!-- <div class="badge-container">
                <div class="line before"></div>
                <div class="badge">3 days</div>
                <div class="line after"></div>
            </div> -->
            
            <div>
                <a href="#"><button class="button button status-button-color" style="color:#fff;">2</button></a>
                <p>Request Internship Application</p>
            </div>
            
            <div>
                <a href="{{url('request_internship_document_pending')}}"><button class="button">3</button></a>
                <p>Request Internship Document</p>
            </div>
            
            <div>
                <button class="button">4</button>
                <p>Acceptance Terms</p>
            </div>
            
            <div>
                <button class="button success">5</button>
                <p>Success</p>
            </div>
            
        </div>
        </div>

        
    </div>

        <!-- Status Card -->
    <div class="status-card">
            <h4>REQUEST INTERNSHIP APPLICATION</h4>
            <div class="status-description">
                <img src="../assets/img/application_success.png" style="width:200px;" alt="">
                <h3>SUBMIT SUCCESSFULLY</h3>
                <p>We have received your answer! <br/>Please wait for evaluation and review your answer</p>
            </div>
    </div>
    </div>
@endsection

@section('script')

@endsection