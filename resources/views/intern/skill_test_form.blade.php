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

        .select_button{
            background-color:white;
            color:black;
            border:1px solid black;
            border-radius:4px;
        }
        .topic {
            margin: 10px 0;
        }
        .duedate{
            font-size:12px;
        }
        .disabled-input {
            opacity: 0.5;
            pointer-events: none;
        }
        .active-button {
            cursor: pointer;
        }
        .btn:hover{
            background-color:#d1d1f0;
            color:black;
            border-color:black;
        }

        .btn-topic {
            margin: 0.5rem;
        }

        .btn-active {
            background-color: #d1d1f0;
            color: black;
        }

        .input-group-text{
            background-color:#474bc2;
            color:white;
        }

        .disabled-input, .input-group-text.disabled-input, .form-control.disabled-input {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }

        .disabled-input {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
            pointer-events: none;
        }









    </style>
@endsection

@section('content')
    <!-- Navigation Bar -->
    @include('layouts.intern.navbar')

    <div class="container mt-5">
        <p class="badge" style="font-size:16px; font-weight:bold;" data-translate="In-progress">In-progress</p>
        <div class="header-content mb-0">
            <h1 data-translate="SKILL TEST">SKILL TEST</h1>
            <a href="#" style=" border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i><span data-translate="Back">Back</span></a>
        </div>
        <p class="duedate mt-0" data-translate="Due today">Due today</p>        
        <h2 data-translate="Greeting from Vanness Plus Consulting Co., Ltd.">Greeting from Vanness Plus Consulting Co., Ltd.</h2>
        <p data-translate="Please do the skill test by choosing at least one of the following topics:">Please do the skill test by choosing at least one of the following topics:</p>
        <ol>
            <li data-translate="Design the dashboard of applicants tracking in the sense of applying, rejected, accepted, interviewed.">Design the dashboard of applicants tracking in the sense of applying, rejected, accepted, interviewed.</li>
            <li data-translate="Designing the dashboard of web or mobile application to show the status of applicants who applied the Internship Program with company.">Designing the dashboard of web or mobile application to show the status of applicants who applied the Internship Program with company.</li>
            <li data-translate="Designing the dashboard of web or mobile application to submit the assignments in each subject to professor.">Designing the dashboard of web or mobile application to submit the assignments in each subject to professor.</li>
        </ol>
        <p data-translate="In case of any further queries, please kindly feel free to contact us anytime.">In case of any further queries, please kindly feel free to contact us anytime.</p>
        <hr>
        <h3 data-translate="Select Topics">Select Topics</h3>
        <p class="m-0" style="font-size:12px;">* You can choose more than one</p>
        <div>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px;">1</button>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px; ">2</button>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px;">3</button>
        </div>
        <h3 data-translate="Select Answer Type">Select Answer Type</h3>
        <div class="mb-3">
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('file')" data-translate="PDF File">PDF File</button>
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('file')" data-translate="ZIP File">ZIP File</button>
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('link')" data-translate="Link">Link</button>
        </div>
        <h3 data-translate="Your Answer">Your Answer</h3>
        <div class="input-group mb-1">
            <label class="input-group-text" for="fileInput">
                <i class="bi bi-file-earmark"></i>
            </label>
            <input type="text" class="form-control"   style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
            <input type="file" id="fileInput" class="form-control d-none" aria-label="Upload file">
        </div>
        <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
        
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-link-45deg"></i>
            </span>
            <input type="text" id="linkInput" class="form-control"   style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Enter the link here..." aria-label="Enter link" >
        </div>
        
        <button class="btn mb-3" style="background-color:#474bc2;color:white; border-radius:4px;" data-translate="Send">Send</button>


    </div>

@endsection

@section('script')
    <script type="text/javascript">

            document.addEventListener('DOMContentLoaded', function() {
                    const inputGroup = document.querySelector('.input-group');
                    inputGroup.addEventListener('click', function() {
                    document.getElementById('fileInput').click();  
                    });
                });

                
            document.querySelectorAll('.btn-topic').forEach(button => {
                button.addEventListener('click', function() {
                this.classList.toggle('btn-active');
                });
            });
            
                
            function toggleInput(type) {
                const fileInput = document.getElementById('fileInput');
                const fileTextInput = document.querySelector('.input-group input[type="text"]'); 
                const linkInput = document.getElementById('linkInput');

            if (type === 'file') {
                fileInput.disabled = false;
                fileTextInput.classList.remove('disabled-input');
                fileInput.classList.remove('disabled-input');

                linkInput.disabled = true;
                linkInput.classList.add('disabled-input');
                linkInput.value = '';
            } else {
                linkInput.disabled = false;
                linkInput.classList.remove('disabled-input');

                fileInput.disabled = true;
                fileTextInput.classList.add('disabled-input');
                fileInput.classList.add('disabled-input');
                fileInput.value = '';
            }
        }

            

            document.querySelector('#fileInput').addEventListener('change', function() {
                const textInput = document.querySelector('.input-group input[type="text"]');
                if (this.files.length > 0) {
                textInput.value = this.files[0].name; 
                } else {
                        textInput.value = "Select the file to upload"; 
                    }
                });
            

                document.querySelector('.input-group-text').onclick = function() {
                    document.getElementById('fileInput').click();
                };
    </script>
@endsection
    

