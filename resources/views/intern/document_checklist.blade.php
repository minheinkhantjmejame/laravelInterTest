
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>presentation powerpoint form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- custom css  -->
    <link rel="stylesheet" href="../css/styles.css" />

    <style>
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
</head>
<body>
    <!-- Navigation Bar -->
    @include('layouts.navbar')


    <div class="container mt-5">
        <p class="badge" style="font-weight:bold;">In-progress</p>
        <div class="header-content mb-0">
            <h1>DOCUMENT CHECKLIST</h1><i class="bi bi-check2-square text-success"></i>
            <a href="#" style=" border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i>Back</a>
        </div>
        <p class="duedate mt-0">Due today</p>        
        <p>Greeting from Vanness Plus Consulting Co., Ltd.</p>
        <p>Document checklist:</p>
        <ol>
            <li> A copy of ID card</li>
            <li> A copy of house registration</li>
            <li> Trascript</li>
        </ol>
        <p>In case of any further queries, please kindly feel free to contact us anytime.</p>
        <hr>

<!-- File Upload for ID Card -->
<h3>YOUR COPY OF ID CARD</h3>
<div class="input-group mb-1">
    <label class="input-group-text file-label" for="fileInput1">
        <i class="bi bi-file-earmark"></i>
    </label>
    <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
    <input type="file" id="fileInput1" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
</div>
<p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>

<!-- File Upload for House Registration -->
<h3>YOUR COPY OF HOUSE REGISTRATION</h3>
<div class="input-group mb-1">
    <label class="input-group-text file-label" for="fileInput2">
        <i class="bi bi-file-earmark"></i>
    </label>
    <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
    <input type="file" id="fileInput2" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
</div>
<p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>

<!-- File Upload for Transcript -->
<h3>YOUR TRANSCRIPT</h3>
<div class="input-group mb-1">
    <label class="input-group-text file-label" for="fileInput3">
        <i class="bi bi-file-earmark"></i>
    </label>
    <input type="text" class="form-control file-name" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
    <input type="file" id="fileInput3" class="form-control file-input d-none" aria-label="Upload file" accept=".pdf">
</div>
<p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>



        
              
        <button class="btn mb-3" style="background-color:#474bc2;color:white; border-radius:4px;">Send</button>


    </div>


        
        
        
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
    <script>
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
    
</body>
</html>
