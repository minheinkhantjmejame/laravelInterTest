<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InternPlus Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- font awesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/styles.css">
  <style type ="text/css" rel="stylesheet">
    body {
      background-color: #ffffff;
      font-family: Arial, sans-serif;
    }


    .sidebar {
  background-color: #eef3fb;
  border-radius: 4px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  height: 100%; /* Make the sidebar height equal to the viewport height */
  position: fixed; /* Fix the sidebar position */
  top: 0;
  left: 0;

}

    .sidebar .menu-item {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-left:10px;
      margin-bottom: 20px;
      color: #000;
      text-decoration: none;
      font-weight: bold;
      
    }

    .menu-item i{
      width:20px;
      height:20px;
      color:black;
    }



    .profile-card {
  display: flex;
  align-items: center;
  background-color: #D1D1F0;
  padding: 10px;
  border-radius: 10px;
  gap: 15px;
}

.profile-photo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.text-container {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: space-between;
}

.name {
  font-size: 16px;
  font-weight: bold;
  margin: 0;
}

.badge {
  width: fit-content;
  border-radius: 4px;
  background-color: #B1BBE7;
  color: black;
}

.action-icon {
  background-color: white;
  font-size: 24px;
  cursor: pointer;
  border-radius: 4px;
  padding: 0 3px;
}

.profile-upload-label {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.profile-upload-label:hover .profile-photo {
  opacity: 0.8;
}

    .profile-card img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }

    .content {
      padding: 20px;
    }

    .card {
      border: none;
      border-radius: 4px;
      background-color: #eef3fb;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
      margin-bottom: 20px;
    }

    .card .btn {
      background-color: #474BC2;
      color: #FFFFFF;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      width:150px;
      height:50px;
    }

    .card .btn:hover {
      background-color: #6C77D9;
    }

    .my-board img {
      width: 80px;
      margin-bottom: 20px;
    }

    .my-board p {
      font-size: 16px;
      font-weight: bold;
      margin: 0;
    }

    .my-board small {
      color: #888;
    }

    .navbar {
  background-color: #FFFFFF;
  padding: 15px 20px;
  font-size: 16px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar .navbar-brand {
  font-size: 24px;
  color: #323438;
  font-weight: bold;
}

.navbar .nav-item {
  text-decoration: none;
  color: #323438;
  font-weight: bold;
  transition: color 0.3s;
}



.navbar .dropdown-toggle {
  font-size: 16px;
  color: #323438;
  font-weight: bold;
}



.navbar .bi-bell {
  color: #323438;
  transition: color 0.3s;
}



.navbar .profile-icon img {
  transition: opacity 0.3s;
}

.navbar .profile-icon img:hover {
  opacity: 0.8;
}

.navbar .nav-items {
  display: flex;
  align-items: center;
}

.navbar .nav-items .nav-item {
  margin-left: 20px;
}

.application-link {
    position: relative;
    padding: 20px;
  }

  .application-link::after {
    content: "";
    position: absolute;
    right: -10px;
    top: 50%; /* Center the border vertically */
    transform: translateY(-50%);
    height: 20px; /* Set the height of the border */
    width: 1px; /* Set the width of the border */
    background-color: #000; /* Border color */
  }

  .menu-item.active {
    background-color: #474BC2;
    padding:4px;
    color: white;
    border-radius: 4px;
    
  }

  .menu-item.active i {
  color: white; /* Ensure icon color is white when active */
  margin:4px;
}
  

  .my-board-centered {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 300px; /* Adjust height if needed */
  }

  .board-card-updated {
    background-color: white !important;
    box-shadow: none !important;
  }
/* application search*/
       .container .headingtext{
            text-align: center;
        }
        .search-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 40px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width:auto;
            margin: auto;
        }

        .input-group {
            justify-content: center;
        }

        .app-id-input {
            width: 40px;
            height: 40px;
            text-align: center;
            margin-right: 5px; 
            border-radius: 5px;
            border: 1px solid black; 
            background-color:white;
            transition: border-color .15s ease-in-out;
            display: inline-block;
        }

        .app-id-input:last-child {
            margin-right: 0; 
        }

        .app-id-input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }

        .app-search-button {
            width: 100px; 
            padding: 10px 0; 
            margin-top: 10px; 
            background-color: #474bc2;

            box-shadow: none;
        }

        .app-search-button:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .internship-details .btn {
            margin: 0 5px;
        }

        .internship-details .card {
            background-color: #f8f9fa;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .internship-details .card-body {
            padding: 20px;
            line-height: 1.6;
            color: #333;
        }

        .status-buttons button {
            margin-bottom: 5px; 
        }

        .statuscontainer {
            max-width: auto; 
            margin: auto;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .status-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px; 
        }

        .btn {
            padding: 10px 15px; 
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden; 
        }

        .card-body {
            display: flex;
            flex-wrap: wrap; 
            align-items: center;
            justify-content: space-between; 
            padding: 20px;
        }


        .card-image {
            height: 100%; 
            object-fit: cover;
        }

        .hr {
            margin-top: 10px;
            margin-bottom: 10px;
            border-top: 1px solid #eee;
        }



        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            text-align: center;
        }

        .date-details p {
            margin-bottom: 5px;
        }

        .type-title {
            font-size: 24px;
            margin-bottom: 0;
        }

        .type-text {
            font-size: 16px;
            margin-top: 5px;
        }

        .card-title {
            font-size: 1.2rem; 
            margin-bottom: 5px; 
        }

        .card-title, .card-text {
            margin-bottom: 4px; 
        }

        .card-body p {
            font-size: 0.9rem; 
            margin-bottom: 5px; 

        }
        .btn-primary, .btn-success, .btn-danger {
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff; 
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545; 
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden; 
        }

        .col-md-3 {
            flex: 1 1 20%;
            margin: 10px;
            min-width: 160px;
        }

        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            text-align: center;
        }
        .card-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px 15px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
        }

        .hr {
            border-top: 1px solid #ddd;
            margin: 8px 0;
        }

        .type-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bi-suitcase-lg {
            font-size: 24px;
            color: #6c757d;
        }

        a{
            text-decoration:none;
        }




@media (max-width: 992px) { /* Adjusts when the screen size is below 992px */
    .card-body {
        flex-direction: column; /* Stacks the columns vertically on smaller screens */
    }

    .col-md-3 {
        flex: 1 1 100%; /* Takes full width on smaller screens */
    }

    .date-box, .type-box {
        margin-bottom: 10px; /* Ensures spacing between boxes on smaller screens */
    }
}

@media (max-width: 1196px) {
    .card-body {
        justify-content: space-around; /* Adjusts spacing for medium screens */
    }
    .col-md-3 {
        flex: 1 1 22%; /* Slightly more width per column at this breakpoint */
    }
}
/* application search */


  </style>
</head>
<body>

<!-- Navbar -->
@include('layouts.dashboard_before_approve.navbar')



  <!-- Main Container -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
@include('layouts.dashboard_before_approve.sidebar')
    
 <!-- Main Content -->
  <div class="col-md-9 content" style="text-align:center;">
    <div class="container my-5">
      <h5 class="mb-4 headingtext" style="font-size:48px;" data-translate="YOUR INTERNSHIP">YOUR INTERNSHIP</h5>
      <div class="search-container text-center" style="background-color:#f3f5fc;">
        <p style="font-size:32px;" data-translate="Enter Your application ID">Enter Your Application ID</p>
        <div class="d-flex justify-content-center mb-3">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
          <input type="text" maxlength="1" class="form-control app-id-input" style="border:0;">
        </div>
        <button class="btn btn-primary app-search-button" type="button" style="background-color:#474bc2;">Search</button>
      </div>
    </div>
    <div class="container internship-details mt-3 w-auto">
      <h4 class="text-start mb-4" data-translate="APPLICATION INTERNSHIP">APPLICATION INTERNSHIP</h4>
      <div class="status-buttons d-flex justify-content-start mb-3">
        <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Pending">Pending</button>
        <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Application">Request Internship Application</button>
        <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Document">Request Internship Document</button>
        <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Acceptance Terms">Acceptance Terms</button>
        <button class="btn btn-success mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Success">Success</button>
        <button class="btn btn-danger mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Fail">Fail</button>
      </div>
      <a href="{{url('pending_status')}}">
        <div class="card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-3">
                <img src="{{ asset('assets/img/pending_status.jpg') }}" style="width:250px;height:150px;" alt="Profile" class="img-fluid">
              </div>
              <div class="col-md-3">
                <h6 class="card-title" style="font-size:24px;" data-translate="UX/UI Designer Trainee">UX/UI Designer Trainee</h6>
                <p class="card-text" style="font-size:20px;"><i class="bi bi-geo-alt"></i> 287 Si Lom Rd, Liberty Square Building</p>
                <hr>
                <p class="card-text"><strong style="font-size:24px;" data-translate="Application ID:">Application ID:</strong><span style="font-size:20px;"> 112987630</span></p>
              </div>
              <div class="col-md-3">
                <div class="date-box" style="background-color:#d1d1f0;">
                  <p style="font-size:24px;" data-translate="Start date:"><strong>Start date:</strong></p>
                  <p style="font-size:20px;" data-translate="Mon, 25 Nov 2024">Mon, 25 Nov 2024</p>
                </div>
                <div class="date-box" style="background-color:#d1d1f0;">
                  <p style="font-size:24px;" data-translate="End date:"><strong>End date:</strong></p>
                  <p style="font-size:20px;" data-translate="Sat, 14 Mar 2025">Sat, 14 Mar 2025</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="type-box" style="background-color:#d1d1f0;">
                  <p style="font-size:24px;" data-translate="Hybrid"><i class="bi bi-suitcase-lg" style="color:black;"></i> <br/>Hybrid</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuItems = document.querySelectorAll('.menu-item');
      const welcomeCard = document.querySelector('.card');
      const badge = document.querySelector('.badge');
      const boardCard = document.querySelector('.card.text-center');

      menuItems.forEach(item => {
        item.addEventListener('click', () => {
          // Remove active class from all menu items
          menuItems.forEach(menu => menu.classList.remove('active'));

          // Add active class to the clicked menu item
          item.classList.add('active');

          // Hide the welcome card
          welcomeCard.style.display = 'none';

          // Change badge text to "Intern"
          badge.textContent = 'Intern';

          // Remove border and heading from the board card and center content
          boardCard.classList.add('my-board-centered');
          boardCard.style.border = 'none';
          boardCard.querySelector('h4').style.display = 'none';
        });
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      const menuItems = document.querySelectorAll('.menu-item');
      const welcomeCard = document.querySelector('.card');
      const badge = document.querySelector('.badge');
      const boardCard = document.querySelector('.card.text-center');

      menuItems.forEach(item => {
        item.addEventListener('click', () => {
          // Remove active class and reset icon color for all menu items
          menuItems.forEach(menu => {
            menu.classList.remove('active');
            const icon = menu.querySelector('i');
            if (icon) {
              icon.style.color = 'black'; // Reset icon color
            }
          });

          // Add active class to the clicked menu item
          item.classList.add('active');
          const icon = item.querySelector('i');
          if (icon) {
            icon.style.color = 'white'; // Change icon color to white
          }

          // Hide the welcome card
          welcomeCard.style.display = 'none';

          // Change badge text to "Intern"
          badge.textContent = 'Intern';

          // Update the board card appearance
          boardCard.classList.add('my-board-centered', 'board-card-updated');
          boardCard.style.border = 'none';
          boardCard.querySelector('h4').style.display = 'none';
        });
      });
    });

    // Application search 
    document.addEventListener("DOMContentLoaded", function() {
      const searchButton = document.querySelector('.app-search-button');
      const appIdInputs = document.querySelectorAll('.app-id-input');
      const internshipDetails = document.querySelector('.internship-details');

      console.log('Internship Details Element:', internshipDetails); // Debugging

      // Hide the internship details on page load
      if (internshipDetails) {
        internshipDetails.style.display = 'none';
        console.log('Internship details hidden on page load'); // Debugging
      } else {
        console.error('Internship details element not found'); // Debugging
      }

      function getAppId() {
        return Array.from(appIdInputs).map(input => input.value).join('');
      }

      if (searchButton) {
        searchButton.addEventListener('click', function() {
          const appId = getAppId();
          console.log('Application ID Entered:', appId); // Debugging
          if (appId === "112987630") {  // Assuming "112987630" is a valid ID for demonstration
            if (internshipDetails) {
              internshipDetails.style.display = 'block';
              console.log('Internship details shown'); // Debugging
            }
          } else {
            alert('No application found with that ID.');
            if (internshipDetails) {
              internshipDetails.style.display = 'none';
              console.log('Internship details hidden'); // Debugging
            }
          }
        });
      } else {
        console.error('Search button not found'); // Debugging
      }

      document.querySelectorAll('.app-id-input').forEach((input, index, array) => {
        input.addEventListener('keyup', function(event) {
          if (this.value.length === 1 && index !== array.length - 1) {
            array[index + 1].focus(); // Move to next input if a digit is entered
          } else if (event.key === "Backspace" && index !== 0 && this.value === "") {
            array[index - 1].focus(); // Move back to previous input when deleting
          }
        });
      });
    });
  </script>
</body>
</html>
