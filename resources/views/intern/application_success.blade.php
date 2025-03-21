
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Successful - InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <style type="text/css" rel="stlyesheet">
        body{
            background-color:#fff;
        }
    </style>


</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container d-flex justify-content-start align-items-center">
            <!-- INTERNPLUS -->
            <a class="navbar-brand fw-bold me-3" href="{{url('intern')}}" style="font-size:40px;">INTERNPLUS</a>
            
            <!-- Dropdown -->
            <div class="dropdown">
                <button class="btn btn-white p-0" style="border:none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('EN')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('THAI')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('MYAN')">MYAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Success Message Card -->
    <div class="container ">
        <div class="card mx-auto" style="max-width: 600px; background-color:#f8f8f8;">
            <div class="card-body text-center">
                <img src="../assets/img/application_success.png" alt="Success Image">
                <h1 class="card-title" style="font-size:32px;">APPLICATION SUCCESSFUL</h1>
                <p class="card-text" style="font-size:16px;">We have received your application! <br/>Please wait to proceed to the next step in a few days <br/>and your application ID is</p>
                <h1 class="mb-4" id="applicationId" style="font-weight: bold; font-size:48px;">112987630</h1>
                
                <a href="{{url('application_search')}}" class="btn btn-dark" style="background-color:#474bc2;color:white; border:0; border-radius:4px; font-size:16px;">Go to your internship</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
