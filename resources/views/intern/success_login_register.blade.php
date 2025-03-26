@extends('layouts.intern.internLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
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
                    width: 145px;
                    height: 145px;
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
                .confirm-button, .cancel-button {
                        background-color: #474bc2;
                        color: white;
                        border: none;
                        padding: 10px 15px;
                        border-radius: 5px;
                        font-size: 16px;
                        margin: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                    }   

                    .cancel-button {
                        background-color: #ffffff; 
                        border:1px solid #000000;
                        color:#000000;
                    }



            
    </style>
@endsection

@section('content')
   <!-- Navigation Bar -->
    @include('layouts.intern.navbar')
    <div class="application_info_container">
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
                <a href="#"><button class="button status-button-color" style="color:white;">1</button></a>
                <p>Pending</p>
            </div>

            <!-- <div class="badge-container">
                <div class="line before"></div>
                <div class="badge">3 days</div>
                <div class="line after"></div>
            </div> -->
            
            <div>
                <a href="#"><button class="button status-button-color" style="color:white;">2</button></a>
                <p>Request Internship Application</p>
            </div>
            
            <div>
                <button class="button status-button-color" style="color:white;">3</button>
                <p>Request Internship Document</p>
            </div>
            
            <div>
                <button class="button status-button-color" style="color:white;">4</button>
                <p>Acceptance Terms</p>
            </div>
            
            <div>
                <a href="#"><button class="button status-button-color success" style="color:white;">5</button></a>
                <p>Success</p>
            </div>
            
        </div>
        </div>

        
    </div>

        <!-- Status Card -->
        <div class="status-card">
            <div class="status-description">
                <img src="../assets/img/board.png" style="width:220px;" alt="">
                <h3 style="font-size:30px;">WELCOME ONBOARD</h3>
                <p>Welcome onboard as UX/UI Designer Trainee on<br/> Nov 25th,2024.<br/>Please log in to our website or sign up to access details <br/> throughout your internship</p>
                <a href="{{url('login')}}" style="text-decoration: none;">
                    <button class="confirm-button" onclick="confirmInternship()">Login</button>
                </a>
                <a href="{{url('register')}}">
                    <button class="cancel-button" style="border:none; background-color:#b1bbe7;" onclick="cancelInternship()">Register</button>
                </a>
                
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
