@extends('layouts.intern.internLayout')

@section('styles')
    <style type="text/css" rel="stylesheet">
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
                .btn-custom {
                    background-color: #d1d1f0;
                    color: black;
                    border: none;
                    border-radius: 0.375rem;
                    padding: 10px 20px;
                }
                .btn-custom.active {
                    background-color: #474bc2;
                    color: white;
                }
                .input-group-text {
                    background-color: #474bc2;
                    color: white;
                }
                .form-control[readonly] {
                    background-color: transparent;
                    cursor: pointer;
                }
                .toggle-select {
                    display: inline-block;
                    padding: 5px 10px;
                    cursor: pointer;
                    border: 1px solid #ccc;
                    margin-right: 5px;

                }
                .toggle-select.active {
                    background-color: #474bc2;
                    color: white;
                    border-color: #474bc2;
                }

                #internshipTypeSelectors {
                    display: flex;
                    align-items: center;
                    flex-wrap: nowrap;
                    gap: 10px;
                }
                input[type="text"].toggle-input {
                    width: auto;
                    flex-grow: 1;
                }

    </style>
@endsection

@section('content')
    @include('layouts.intern.navbar')

    <div class="container mt-5">
        <p class="badge" style="font-weight:bold;" data-translate="In-progress">In-progress</p>
        <div class="header-content mb-0">
            <h1 data-translate="INTERNSHIP REGISTRATION FORM">INTERNSHIP REGISTRATION FORM</h1><i class="bi bi-check2-square text-success"></i>
            <a href="#" style="border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i><span>Back</span></a>
        </div>
        <p class="duedate mt-0" data-translate="Due today">Due today</p>        
        <p data-translate="Agreement, consent for the company to collect information for job applications according to the ActR.AB.B Personal information protection This form aims to store first name, last name, telephone number, address, email, national ID card number, photograph, work history, age, race, health, disability, labor union, genetics, biological, health information (for example. For example. such as a medical certificate) or any other information that affects the owner of personal data. for job recruitment The applicant has consented to the company. Store such information Therefore, we have filled in the information below. If you do not consent to the storage of information You can cancel filling in this information">Agreement, consent for the company to collect information for job applications according to the ActR.AB.B Personal information protection This form aims to store first name, last name, telephone number, address, email, national ID card number, photograph, work history, age, race, health, disability, labor union, genetics, biological, health information (for example. For example. such as a medical certificate) or any other information that affects the owner of personal data. for job recruitment The applicant has consented to the company. Store such information Therefore, we have filled in the information below. If you do not consent to the storage of information You can cancel filling in this information</p>             
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label" data-translate="NAME">NAME</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;"  id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" data-translate="EMAIL ADDRESS">EMAIL ADDRESS</label>
                        <input type="email" class="form-control"   style="border:2px solid black; border-radius:4px;" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label" data-translate="PHONE NUMBER">PHONE NUMBER</label>
                        <input type="tel" class="form-control"  style="border:2px solid black; border-radius:4px;" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label" data-translate="NICKNAME">NICKNAME</label>
                        <input type="text" class="form-control"  style="border:2px solid black; border-radius:4px;" id="nickname">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label" data-translate="ADDRESS">ADDRESS</label>
                        <input type="text" class="form-control"  style="border:2px solid black; border-radius:4px;" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label" data-translate="DATE OF BIRTH">DATE OF BIRTH</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                            <input type="text" id="dateOfBirth" class="form-control"  style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;"  placeholder="MM/DD/YYYY">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" data-translate="BLOOD TYPE">BLOOD TYPE</label>
                        <div id="bloodTypeSelector" class="mb-3">
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectBloodType('A');">A</div>
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectBloodType('B');">B</div>
                            <div class="toggle-select"  style="border:2px solid black; border-radius:4px;" onclick="selectBloodType('AB');">AB</div>
                            <div class="toggle-select"  style="border:2px solid black; border-radius:4px;" onclick="selectBloodType('O');">O</div>
                            <input type="text" id="bloodTypeOther" class="form-control"    placeholder="Other" style="display: inline-block; width: auto;border:2px solid black; border-radius:4px;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lineId" class="form-label" data-translate="LINE ID">LINE ID</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="lineId">
                    </div>
                    <div class="mb-3">
                        <label for="strength" class="form-label" data-translate="YOUR STRENGTH">YOUR STRENGTH</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="strength">
                    </div>
                    <div class="mb-3">
                        <label for="weakness" class="form-label" data-translate="YOUR WEAKNESS">YOUR WEAKNESS</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="weakness">
                    </div>
                    <div class="mb-3">
                        <label for="opportunity" class="form-label" data-translate="YOUR OPPORTUNITY">YOUR OPPORTUNITY</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="opportunity">
                    </div>
                    <div class="mb-3">
                        <label for="threats" class="form-label" data-translate="YOUR THREATS">YOUR THREATS</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="threats">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="university" class="form-label" data-translate="UNIVERSITY">UNIVERSITY</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="university">
                    </div>
                    <div class="mb-3">
                        <label for="qualification" class="form-label" data-translate="QUALIFICATION">QUALIFICATION</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="qualification">
                    </div>
                    <div class="mb-3">
                        <label for="fieldOfStudy" class="form-label" data-translate="FIELD OF STUDY / MAJOR">FIELD OF STUDY / MAJOR</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="fieldOfStudy">
                    </div>
                    <div class="mb-3">
                        <label for="gpa" class="form-label" data-translate="GPA.">GPA.</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="gpa">
                    </div>
                    <div class="mb-3">
                        <label for="resume" class="form-label" data-translate="RESUME">RESUME</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-file-earmark"></i></span>
                            <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
                            <input type="file" id="fileInput" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label" data-translate="POSITION">POSITION</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="position" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" data-translate="HAVE YOUR OWN PC OR NOTEBOOK?">HAVE YOUR OWN PC OR NOTEBOOK?</label>
                        <div id="pcOwnership" class="mb-3">
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectPC('Yes');">Yes</div>
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectPC('No');">No</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="internshipPeriod" class="form-label" data-translate="INTERNSHIP PERIOD">INTERNSHIP PERIOD</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="internshipPeriod" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" data-translate="REASON">REASON</label>
                        <div id="reasonSelectors">
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectReason('University Compulsory');">University Compulsory</div>
                            <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectReason('Voluntary');">Voluntary</div>
                            <div class="toggle-select"  style="border:2px solid black; border-radius:4px;" onclick="selectReason('Other');">Other</div>
                        </div>
                        <input type="hidden" id="reason" name="reason">
                    </div>
                    <div class="mb-3">
                        <label for="sourceOfRecruitment" class="form-label" data-translate="Source of Recruitment Announcement">Source of Recruitment Announcement</label>
                        <input type="text" class="form-control"   style="border:2px solid black; border-radius:4px;" id="sourceOfRecruitment">
                    </div>
                    <div class="container mt-5">
                        <div class="mb-3">
                            <label class="form-label" data-translate="INTERNSHIP TYPE">INTERNSHIP TYPE</label>
                            <div id="internshipTypeSelectors">
                                <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectInternshipType('WFH 100%');">WFH 100%</div>
                                <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectInternshipType('WFO 100%');">WFO 100%</div>
                                <div class="toggle-select"   style="border:2px solid black; border-radius:4px;" onclick="selectInternshipType('Hybrid');">Hybrid</div>
                                <input type="text" class="form-control toggle-input"   style="border:2px solid black; border-radius:4px;" id="otherInternshipType" placeholder="Other" onfocus="selectInternshipType(this.value);" oninput="selectInternshipType(this.value);">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        <button type="submit" class="btn mb-3" style="background-color:#474bc2;color:white; border-radius:4px;" data-translate="Send">Send</button>


    </div>
@endsection

        
        
        
@section('script')
    <script type="text/javascript">
            
                document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".file-input").forEach((fileInput) => {
                const textInput = fileInput.closest(".input-group").querySelector(".file-name");

                fileInput.addEventListener("change", function () {
                    textInput.value = this.files.length > 0 ? this.files[0].name : "Select the file to upload";
                });

                textInput.parentElement.addEventListener("click", function () {
                    fileInput.click();
                });
            });

            document.querySelectorAll(".input-group-text").forEach((label) => {
                label.addEventListener("click", function () {
                    const fileInput = this.closest(".input-group").querySelector(".file-input");
                    fileInput.click();
                });
            });
        });


                document.getElementById('dob').addEventListener('focus', function() {
                    this.type = 'date';
                });
                document.getElementById('dob').addEventListener('blur', function() {
                    this.type = 'text';
                });

                function selectBloodType(type) {
                    const selectors = document.querySelectorAll('#bloodTypeSelector .toggle-select');
                    selectors.forEach(el => {
                        if (el.textContent === type) {
                            el.classList.add('active');
                        } else {
                            el.classList.remove('active');
                        }
                    });
                    if (type !== 'Other') {
                        document.getElementById('bloodTypeOther').value = '';
                    }
                }


                document.querySelectorAll('.file-input').forEach(input => {
            input.addEventListener('change', function() {
                const textInput = this.closest('.input-group').querySelector('.file-name');
                textInput.value = this.files.length > 0 ? this.files[0].name : "Select the file to upload";
            });
        });

            

        document.querySelectorAll('.input-group-text').forEach((label, index) => {
            label.addEventListener('click', function() {
                document.querySelectorAll('.file-input')[index].click();
            });
        });

                function selectPC(choice) {
                    const selectors = document.querySelectorAll('#pcOwnership .toggle-select');
                    selectors.forEach(el => {
                        el.classList.remove('active');
                        if (el.textContent === choice) {
                            el.classList.add('active');
                        }
                    });
                }

                function selectReason(selectedReason) {
                    const reasonSelectors = document.querySelectorAll('#reasonSelectors .toggle-select');
                    reasonSelectors.forEach(selector => {
                        selector.classList.remove('active');
                        if (selector.textContent === selectedReason) {
                            selector.classList.add('active');
                        }
                    });
                    document.getElementById('reason').value = selectedReason; 
                }

                document.addEventListener('DOMContentLoaded', function() {
                    flatpickr("#dateOfBirth", {
                        enableTime: false,
                        dateFormat: "m/d/Y",
                        "locale": {
                            "firstDayOfWeek": 1 
                        },
                        onChange: function(selectedDates, dateStr, instance) {
                            instance.input.value = dateStr;
                        },
                    });
                });

                function selectInternshipType(type) {
                    const selectors = document.querySelectorAll('#internshipTypeSelectors .toggle-select');
                    selectors.forEach(el => el.classList.remove('active'));
                    if (type !== 'WFH 100%' && type !== 'WFO 100%' && type !== 'Hybrid') {
                        document.getElementById('otherInternshipType').value = type;
                        document.getElementById('otherInternshipType').classList.add('active');
                    } else {
                        document.querySelectorAll('#internshipTypeSelectors .toggle-select').forEach(el => {
                            if (el.textContent.trim() === type) {
                                el.classList.add('active');
                            }
                        });
                        document.getElementById('otherInternshipType').value = '';
                    }
                    document.getElementById('internshipType').value = type; 
                }



            
    </script>
        
@endsection
