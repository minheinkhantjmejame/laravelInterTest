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
                    padding: 30px;
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

                .task-list {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }

                .task-item {
                    display: flex;
                    align-items: center;
                    background: #FFFFFF;
                    padding: 10px;
                    border-radius: 5px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                }

                .task-list a {
                        display: block; 
                        color: inherit; 
                        text-decoration: none;
                    }

                .task-item img {
                    width: 100px;

                }

                .task-label {
                    flex-grow: 1;
                    margin:10px;
                }

                .task-status {
                    margin-left: auto;
                    padding: 5px 10px;
                    border-radius: 10px;
                    font-size: 0.8em;
                }

                .task-status.done {
                    background-color: #d1d1f0;
                    color: #000000;
                }

                .task-status.in-progress {
                    background-color: #d1d1f0;
                    color: #000000;
                }

                .task-due {
                    margin-left: 10px;
                    color: #333;
                    font-size: 0.8em;
                }

                .submit-btn {
                    background-color: #474bc2;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px;
                    transition: background-color 0.3s ease;
                    width: 100%;
                    margin-top: 20px;
                }

                .submit-btn:hover {
                    background-color: #3658a7;
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
                <a href="{{url('pending_status')}}"><button class="button status-button-color"  style="color:white;">1</button></a>
                <p>Pending</p>
            </div>

            <!-- <div class="badge-container">
                <div class="line before"></div>
                <div class="badge">3 days</div>
                <div class="line after"></div>
            </div> -->
            
            <div>
                <a href="{{url('request_internship_application')}}"><button class="button status-button-color" style="color:white;">2</button></a>
                <p>Request Internship Application</p>
            </div>
            
            <div>
                <button class="button">3</button>
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
                <h4 style="font-size:34px;">REQUEST INTERNSHIP APPLICATION</h4>
                <div class="task-list">
                    <a href="{{url('skill_test_form')}}">
                        <div class="task-item">
                            <img src="../assets/img/skill_test.png" alt="Skill Test">
                            <span class="task-label" style="font-size:28px; text-transform: uppercase;">Skill Test</span>
                            <span class="task-status in-progress">In-progress</span>
                            <span class="task-due">Due today</span>
                        </div>
                    </a>
                    <a href="{{url('presentation_form')}}">
                        <div class="task-item">
                            <img src="../assets/img/powerpoint.png" alt="PowerPoint Presentation">
                            <span class="task-label" style="font-size:28px; text-transform: uppercase;">PowerPoint Presentation</span>
                            <span class="task-status done">Done</span>
                            <span class="task-due">Due today</span>
                        </div>
                    </a>
                    <a href="{{url('introduction_video')}}">
                        <div class="task-item">
                            <img src="../assets/img/intro_video.png" alt="Introduce Yourself Video">
                            <span class="task-label" style="font-size:28px; text-transform: uppercase;">Introduce Yourself Video</span>
                            <span class="task-status done">Done</span>
                            <span class="task-due">Due today</span>
                        </div>
                    </a>
                    <a href="{{url('document_checklist')}}">
                        <div class="task-item">
                            <img src="../assets/img/document_checklist.png" alt="Document Checklist">
                            <span class="task-label" style="font-size:28px; text-transform: uppercase;">Document Checklist</span>
                            <span class="task-status done">Done</span>
                            <span class="task-due">Due today</span>
                        </div>
                    </a>
                    <a href="{{url('internship_registration_form')}}">
                        <div class="task-item">
                            <img src="../assets/img/intern_form.png" alt="Internship Registration Form">
                            <span class="task-label" style="font-size:28px; text-transform: uppercase;">Internship Registration Form</span>
                            <span class="task-status in-progress">In-progress</span>
                            <span class="task-due">Due today</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{url('request_internship_application_success')}}"><button class="submit-btn" type="button" onclick="submitForm()">Submit</button></a>
                </div>
                
            </div>
@endsection

@section('script')
@endsection
