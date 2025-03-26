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

                .indent-text {
                    text-indent: 2rem; 
                    text-align: justify;
                    display: block; 
        }
            
    </style>

@endsection

@section('content')
    @include('layouts.intern.navbar')

    <div class="container mt-5">
        <p class="badge" style="font-weight:bold;">In-progress</p>
        <div class="header-content mb-0">
            <h1>DOCUMENT FROM UNIVERSITY</h1><i class="bi bi-check2-square text-success"></i>
            <a href="#" class="btn "  style=" border-radius:4px;" onclick="history.back()"><i class="bi bi-arrow-left-short"></i>Back</a>
        </div>
        <p class="duedate ">Due 2 weeks</p>        
        <p class="mb-3">Dear Ms.Nicharee Sethananon,</p>
        <p class="indent-text">From what you have applied to join the internship program for the position UX/UI Designer Trainee, with a training period between 25 November 2024 and 14 March 2025, the company is pleased to accept you to join the internship with the company. Therefore, we request that documents requesting internship assistance from the university be submitted within 2 weeks after the results are reported.</p>
        <p>If you are stuck in any way, Please notify me back. Otherwise, it will be considered a waiver.</p>
        <hr>
        <h3>YOUR DOCUMENT</h3>
        <div class="input-group mb-1">
            <label class="input-group-text" for="fileInput">
                <i class="bi bi-file-earmark" style="color:white;"></i>
            </label>
            <input type="text" class="form-control" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" aria-label="File's placeholder" readonly>
            <input type="file" id="fileInput" class="form-control d-none" accept=".pdf" aria-label="Upload file">
        </div>
        <p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>
        
              
        <button class="btn mb-3" style="border-radius:4px;background-color:#474bc2;color:white;">Send</button>


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
    

