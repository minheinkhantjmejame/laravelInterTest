@extends('layouts.intern.internLayout')


@section('styles')
    <style rel="stylesheet" type="text/css">
                body {
                    background-color: #ffffff;
                }
                .header-content {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 20px;
                }

                .badge {
                    display: inline-block;
                    padding: 10px 12px;
                    font-size: 0.75em;
                    font-weight:3;
                    line-height: 1;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: baseline;
                    border-radius: 0.375rem;
                    background-color: #d1d1f0;
                    color: black;
                }
                .btn{
                    background-color: #d1d1f0;
                    color:black;
                    border-radius:0px;
                    border:none;
                }
                .topic {
                    margin: 10px 0;
                }
                .duedate{
                    font-size:12px;
                }


                .input-group-text{
                    background-color:#474bc2;
                }

                .form-control {
                border: 1px solid black; 
                box-shadow: none; 
            }
            .form-control:focus {
                border-color: black; 
                box-shadow: none;
            }



                .form-check {
                    padding-left: 0;
                }
                .form-check-input {
            display: none; 
        }

        .form-check-label {
            display: inline-block;
            padding: 8px 15px;
            margin-right: 10px;
            border: 1px solid black;
            font-size:16px;
            border-radius:4px;
            background-color: #fff; 
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s; 
        }

        .form-check-input:checked + .form-check-label {
            background-color: #474bc2;
            color: white;
            border-color: #474bc2; 
        }
    </style>
@endsection

@section('content')
    <!-- Navigation Bar -->
    @include('layouts.intern.navbar')
    

    <div class="container mt-5">
        <p class="badge" style="font-weight:bold;" data-translate="In-progress">In-progress</p>
        <div class="header-content mb-0">
            <h1 data-translate="ACCEPTANCE TERMS FORM">ACCEPTANCE TERMS FORM</h1>
            <a href="#" class="btn " onclick="history.back()" style="border-radius:4px;"><img src="{{asset('assets/icon/less_than.png')}}" alt=""><span data-translate="Back">Back</span></a>
        </div>
        <p class="duedate mt-0" data-translate="Due 2 days">Due 2 days</p>        
        <p style="text-align:justify;" data-translate="This form outlines the essential terms and conditions for interns at Vanness Plus Consulting Co., Ltd. Interns must review, acknowledge, and agree to these terms, which cover work arrangements, confidentiality, compliance with company policies, and responsibility for assigned tasks during the internship.">This form outlines the essential terms and conditions for interns at Vanness Plus Consulting Co., Ltd. Interns must review, acknowledge, and agree to these terms, which cover work arrangements, confidentiality, compliance with company policies, and responsibility for assigned tasks during the internship.</p>
        <hr>

        <form>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="emailAddress" class="form-label fw-bold" data-translate="EMAIL ADDRESS">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" id="emailAddress" required>
                </div>
                <div class="col-md-6">
                    <label for="university" class="form-label fw-bold" data-translate="UNIVERSITY">UNIVERSITY</label>
                    <input type="text" class="form-control" id="university" required>
                </div>
                <div class="col-md-6">
                    <label for="firstName" class="form-label fw-bold" data-translate="FIRST NAME">FIRST NAME</label>
                    <input type="text" class="form-control" id="firstName" required>
                </div>
                <div class="col-md-6">
                    <label for="position" class="form-label fw-bold" data-translate="POSITION">POSITION</label>
                    <input type="text" class="form-control" id="position" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label fw-bold" data-translate="LAST NAME">LAST NAME</label>
                    <input type="text" class="form-control" id="lastName" required>
                </div>
                <div class="col-md-6">
                    <label for="internshipPeriod" class="form-label fw-bold" data-translate="INTERNSHIP PERIOD">INTERNSHIP PERIOD</label>
                    <input type="text" class="form-control" id="internshipPeriod" required>
                </div>
            </div>

            <p class="mt-3 mb-3" style="font-size:20px;" data-translate="At Vanness Plus Consulting Co., Ltd, we are committed to establishing clear and professional Acceptance Terms for our internship program. The following outlines the key terms and conditions that interns must acknowledge and agree to upon acceptance of their internship offer:">At Vanness Plus Consulting Co., Ltd, we are committed to establishing clear and professional Acceptance Terms for our internship program. The following outlines the key terms and conditions that interns must acknowledge and agree to upon acceptance of their internship offer:</p>
    
            <div class="my-3">
                <label style=" font-size:18px; font-weight: bold; text-transform:uppercase;" data-translate="For the hybrid internship option, working from the office or from home will be determined by the company:">For the hybrid internship option, working from the office or from home will be determined by the company:</label>
                <div class="mb-3 mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hybridOption" id="hybridOptionAccepted" value="Accepted" required>
                        <label class="form-check-label" for="hybridOptionAccepted" data-translate="Accepted">Accepted</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hybridOption" id="hybridOptionNotAccepted" value="Not Accepted" required>
                        <label class="form-check-label" for="hybridOptionNotAccepted" data-translate="Not Accepted">Not Accepted</label>
                    </div>
                </div>
            </div>
            
            <div class="my-3">
                <label style=" font-size:18px; font-weight: bold; text-transform:uppercase;" data-translate="Any information or work conducted during the internship is considered internal and must not be shared with others without permission:">Any information or work conducted during the internship is considered internal and must not be shared with others without permission:</label>
                <div class="mb-3 mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="infoSharing" id="infoSharingAccepted" value="Accepted" required>
                        <label class="form-check-label" for="infoSharingAccepted" data-translate="Accepted">Accepted</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="infoSharing" id="infoSharingNotAccepted" value="Not Accepted" required>
                        <label class="form-check-label" for="infoSharingNotAccepted" data-translate="Not Accepted">Not Accepted</label>
                    </div>
                </div>
            </div>
            
            <div class="my-3">
                <label style=" font-size:18px; font-weight: bold; text-transform:uppercase;" data-translate="Interns are required to follow the company's rules and regulations. In case of violation, the company reserves the right to send the intern back to the university:">Interns are required to follow the company's rules and regulations. In case of violation, the company reserves the right to send the intern back to the university:</label>
                <div class="mb-3 mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rulesCompliance" id="rulesComplianceAccepted" value="Accepted" required>
                        <label class="form-check-label" for="rulesComplianceAccepted" data-translate="Accepted">Accepted</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rulesCompliance" id="rulesComplianceNotAccepted" value="Not Accepted" required>
                        <label class="form-check-label" for="rulesComplianceNotAccepted" data-translate="Not Accepted">Not Accepted</label>
                    </div>
                </div>
            </div>
            
            <div class="my-3">
                <label style=" font-size:18px; font-weight: bold; text-transform:uppercase;" data-translate="THE COMPANY EMPHASIZES SELF-LEARNING AND PERSONAL DEVELOPMENT OVER FORMAL CLASSROOM TRAINING. INTERNS ARE RESPONSIBLE FOR THEIR ASSIGNED TASKS AND MAY NOT EXTEND DEADLINES WITHOUT APPROVAL FROM THEIR SUPERVISOR">THE COMPANY EMPHASIZES SELF-LEARNING AND PERSONAL DEVELOPMENT OVER FORMAL CLASSROOM TRAINING. INTERNS ARE RESPONSIBLE FOR THEIR ASSIGNED TASKS AND MAY NOT EXTEND DEADLINES WITHOUT APPROVAL FROM THEIR SUPERVISOR</label>
                <div class="mb-3 mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="selfLearning" id="selfLearningAccepted" value="Accepted" required>
                        <label class="form-check-label" for="selfLearningAccepted" data-translate="Accepted">Accepted</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="selfLearning" id="selfLearningNotAccepted" value="Not Accepted" required>
                        <label class="form-check-label" for="selfLearningNotAccepted" data-translate="Not Accepted">Not Accepted</label>
                    </div>
                </div>
            </div>
            
    
            <button type="submit" class="btn mb-3" style="background-color:#474bc2; color:white; font-size:18px; border-radius:4px;" data-translate="Send">Send</button>
        </form>
    </div>
@endsection
  
    
@section('script')
    <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                const inputGroup = document.querySelector('.input-group');
                inputGroup.addEventListener('click', function() {
                    document.getElementById('fileInput').click();  
                });

            document.getElementById('fileInput').addEventListener('change', function() {
                const textInput = document.querySelector('.input-group input[type="text"]');
                if (this.files.length > 0) {
                    textInput.value = this.files[0].name; 
                } else {
                    textInput.value = "Select the file to upload";  
                }
            });
        });

        document.querySelector('.input-group-text').onclick = function() {
            document.getElementById('fileInput').click();
        };
    </script>
@endsection



