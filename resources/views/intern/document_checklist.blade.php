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
            color:white;
        }
    </style>
@endsection


@section('content')
            <!-- Navigation Bar -->
            @include('layouts.intern.navbar')


            <div class="container mt-5">
                <p class="badge" style="font-weight:bold;" data-translate="In-progress">In-progress</p>
                <div class="header-content mb-0">
                    <h1 data-translate="DOCUMENT CHECKLIST">DOCUMENT CHECKLIST</h1><i class="bi bi-check2-square text-success"></i>
                    <a href="#" style=" border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i><span data-translate="Back">Back</span></a>
                </div>
                <p class="duedate mt-0" data-translate="Due today">Due today</p>        
                <p data-translate="Greeting from Vanness Plus Consulting Co., Ltd.">Greeting from Vanness Plus Consulting Co., Ltd.</p>
                <p data-translate="Document checklist:">Document checklist:</p>
                <ol>
                    <li data-translate="A copy of ID card"> A copy of ID card</li>
                    <li data-translate="A copy of house registration"> A copy of house registration</li>
                    <li data-translate="Transcript"> Transcript</li>
                </ol>
                <p data-translate="In case of any further queries, please kindly feel free to contact us anytime.">In case of any further queries, please kindly feel free to contact us anytime.</p>
                <hr>

        <!-- File Upload for ID Card -->
        <h3 data-translate="YOUR COPY OF ID CARD">YOUR COPY OF ID CARD</h3>
        <div class="input-group mb-1">
            <label class="input-group-text file-label" for="fileInput1">
                <i class="bi bi-file-earmark"></i>
            </label>
            <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
            <input type="file" id="fileInput1" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
        </div>
        <p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>

        <!-- File Upload for House Registration -->
        <h3 data-translate="YOUR COPY OF HOUSE REGISTRATION">YOUR COPY OF HOUSE REGISTRATION</h3>
        <div class="input-group mb-1">
            <label class="input-group-text file-label" for="fileInput2">
                <i class="bi bi-file-earmark"></i>
            </label>
            <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
            <input type="file" id="fileInput2" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
        </div>
        <p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>

        <!-- File Upload for Transcript -->
        <h3 data-translate="YOUR TRANSCRIPT">YOUR TRANSCRIPT</h3>
        <div class="input-group mb-1">
            <label class="input-group-text file-label" for="fileInput3">
                <i class="bi bi-file-earmark"></i>
            </label>
            <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
            <input type="file" id="fileInput3" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
        </div>
        <p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>



                
                    
        <button class="btn mb-3" style="background-color:#474bc2;color:white; border-radius:4px;" data-translate="Send">Send</button>


        </div>
@endsection

    
@section('script')
    <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.input-group').forEach((group, index) => {
                    const fileInput = group.querySelector('.file-input');
                    const textInput = group.querySelector('.file-name');
                    const label = group.querySelector('.input-group-text');

                    // Click event for both input box & icon
                    group.addEventListener('click', function() {
                        fileInput.click();
                    });

                    label.addEventListener('click', function(event) {
                        event.stopPropagation(); // Prevents double triggering
                        fileInput.click();
                    });

                    // When file is selected, update text input
                    fileInput.addEventListener('change', function() {
                        textInput.value = this.files.length > 0 ? this.files[0].name : "Select the file to upload";
                    });
                });
            });

    </script>
@endsection
    
