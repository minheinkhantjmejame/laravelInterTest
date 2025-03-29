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
    </style>
@endsection

@section('content')
        <!-- Navigation Bar -->
        @include('layouts.intern.navbar')

        <div class="container mt-5">
            <p class="badge" style="font-weight:bold;" data-translate="In-progress">In-progress</p>
            <div class="header-content mb-0">
                <h1 class="m-0" data-translate="PRESENTATION POWERPOINT">PRESENTATION POWERPOINT</h1><i class="bi bi-check2-square text-success"></i>
                <a href="#" style=" border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i><span data-translate="Back">Back</span></a>
            </div>
            <p class="duedate mt-0" data-translate="Due Today">Due today</p>        
            <p data-translate="Greeting from Vanness Plus Consulting Co., Ltd.">Greeting from Vanness Plus Consulting Co., Ltd.</p>
            <p data-translate="Presentation about:">Presentation about:</p>
            <ol>
                <li data-translate="What is your dream job and why?"> "What is your dream job and why?"</li>
                <li data-translate="What are your characteristic and hobbies?"> "What are your characteristic and hobbies?"</li>
            </ol>
            <p data-translate="In case of any further queries, please kindly feel free to contact us anytime.">In case of any further queries, please kindly feel free to contact us anytime.</p>
            <hr>
            <h3 data-translate="YOUR PRESENTATION">YOUR PRESENTATION</h3>
            <div class="input-group mb-1">
                <label class="input-group-text" for="fileInput">
                    <i class="bi bi-file-earmark" style="color:white;"></i>
                </label>
                <input type="text" class="form-control"  style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" aria-label="File's placeholder" readonly>
                <input type="file" id="fileInput" class="form-control d-none" aria-label="Upload file">
            </div>
            <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
            
                
            <button class="btn mb-3" style="background-color:#474bc2;color:white; border-radius: 4px;" data-translate="Send">Send</button>


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
