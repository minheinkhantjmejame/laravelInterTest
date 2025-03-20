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

  /* internship page */
 .calendar-container {
            background: #f3f5fc;
            border: 1px solid #d0d8e9;
            box-shadow:0px 4px 4px rgba(0,0,0,0.2);
            border-radius: 10px;
            padding: 20px;
            width: 100%;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-header .month-name {
            font-weight: bold;
            font-size: 18px;
            color: #323438;
        }

        .calendar-header .year-select {
            border: none;
            background: none;
            font-size: 16px;
            color: #323438;
            cursor: pointer;
            outline: none;
            font-weight: bold;
        }

        .calendar-header .nav-buttons {
            display: flex;
            gap: 10px;
            color:#000;
        }

        .calendar-header .nav-buttons button {
            background: none;
            border: none;
            font-size: 18px;
            font-weight: bold;
            color: #000;
            cursor: pointer;
        }

        .day-names {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            font-weight: bold;
            color: #888;
            margin-bottom: 10px;
        }

        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            gap: 5px;
        }

        .calendar-dates div {
            padding: 10px;
            border-radius: 5px;
            background-color: #f3f5fc;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .calendar-dates div:hover {
            background-color: #d6e2f9;
        }

        .calendar-dates div.selected {
            background-color: #d1d1f0;
            color: #000;
        }

        .calendar-dates div.in-range {
    background-color: #e4e4f7; /* Soft pastel purple */
    color: #000;
}


        .date-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .date-button {
            flex: 1;
            padding: 10px;
            margin: 0 5px;
            border: 1px solid #d0d8e9;
            border-radius: 5px;
            background-color: #eef3fb;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .date-button.active {
            background-color: #d1d1f0;
            border:none;
        }
  /* internship page */


  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar d-flex align-items-center justify-content-end">
  <div class="d-flex align-items-center">
    <div class="nav-items d-flex me-3">
      <a href="#" class="nav-item mx-3">Home</a>
      <a href="{{url('home_page_dashboard_before_approve_program')}}" class="nav-item mx-3">Program</a>
      <a href="{{url('home_page_dashboard_before_approve_application_search')}}" class="nav-item mx-3 application-link">Application</a>
    </div>
    <div class="dropdown mx-3">
      <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; background: none; font-weight: bold;">
        EN
      </button>
      <ul class="dropdown-menu" aria-labelledby="languageDropdown">
        <li><a class="dropdown-item" href="#">EN</a></li>
        <li><a class="dropdown-item" href="#">THAI</a></li>
        <li><a class="dropdown-item" href="#">MYAN</a></li>
      </ul>
    </div>
    <div class="mx-3">
      <i class="bi bi-bell" style="font-size: 1.5rem; cursor: pointer;"></i>
    </div>
    <div class="profile-icon mx-3">
      <img src="../assets/img/user_sample.png" alt="Profile Picture" style="width: 40px; height: 40px; border-radius: 50%; cursor: pointer;">
    </div>
  </div>
</nav>



  <!-- Main Container -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar" style="position: relative; top: -60px; left: 30px; z-index: 1; margin-right: 20px;">
        <i class="bi bi-list" style="font-size:25px;"></i><a class="navbar-brand" style="font-size:30px;" href="#">INTERNPLUS</a>
        <hr/>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-clipboard"></i> Assignments Task
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-calendar"></i>Timesheet
        </a>
        <a href="#" class="menu-item">
          <i class="fa-solid fa-phone-slash"></i> Leave
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-file-lines"></i> Report
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-user"></i> Supervisor
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-shield"></i>Rules & Policies
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-archive"></i> Offboard
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-book"></i> Manual
        </a>
        <div class="mt-3">
          <small class="text-left" >InternPlus @ 2024. All rights reserved.</small>
          <br>
          <small class="text-left">Terms of Use</small>
        </div>
        <div class="profile-card d-flex align-items-center mt-3" style="background-color: #D1D1F0; padding: 10px; border-radius: 10px; gap: 15px;">
          <label for="profileUpload" class="profile-upload-label mb-0">
            <img id="profileImage" src="../assets/img/user_sample.png" alt="Profile" class="profile-photo" style="width: 50px; height: 50px; border-radius: 50%;"/>
          </label>
          <div class="d-flex flex-column flex-grow-1">
            <p class="mb-0 fw-bold" style="font-size: 16px;">Nicharee S.</p>
            <span class="badge text-black" style="width: fit-content; border-radius:4px; background-color:#B1BBE7;">Candidate</span>
          </div>
          <i class="bi bi-box-arrow-right" style="background-color:white;font-size: 24px; cursor: pointer; border-radius:4px; padding:0 3px;"></i>
        </div>
        
      </div>
    
      <!-- Main Content -->
      <div class="col-md-8 content" style="margin-left: 20px;">
              <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <span id="job-category" class="badge" style="background-color:#d1d1f0; color:black;"></span>
                <span id="job-positions" class="ms-2 badge" style="background-color:#b1bbe7; color:black;"></span>
                <h1 id="job-title" class="fw-bold mt-2" style="font-size:48px;"></h1>
                <p class="text-muted" style="color:#000;font-size:20px;"><i class="bi bi-geo-alt"></i>287 Si Lom Rd, Liberty Square Building</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-dark" onclick="history.back()"  style="background-color:#b1bbe7; color:black; border:0;"><i class="bi bi-arrow-left"></i> Back</button>
                <button class="btn btn-dark ms-2" style="background-color:#474bc2; color:white; border:0;"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <p style="font-size:24px;">Hi, Vanness Plus consulting Co., Ltd. is now recruiting interns. Internships can be done in both Work from home, On-site, and Hybrid with allowances. The office is located at Liberty Square Building, near BTS Sala Daeng/MRT Silom.</p>
            </div>
        </div>
            <hr/>
    </div>



    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control internship" id="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control internship" id="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control internship" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control internship" id="phone" required>
                    </div>
                    <p class="mb-2" style="font-size:30px;">Your CV/RESUME</p>
                    <div class="input-group mb-3" onclick="document.getElementById('cvFileInput').click();">                        
                        <label class="input-group-text" for="cvFileInput">
                            <i class="bi bi-file-earmark" style="color:white;"></i>
                        </label>
                        <input type="text" class="form-control internship" style="border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" aria-label="File's placeholder" readonly>
                        <input type="file" id="cvFileInput" class="form-control internship d-none" accept=".pdf" aria-label="Upload file" required>
                    </div>
                    <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
                    
                    <p class="mb-2" style="font-size:30px;">Your Portfolio</p>
                    <div class="input-group mb-3" onclick="document.getElementById('portfolioFileInput').click();">
                        <label class="input-group-text" for="portfolioFileInput">
                            <i class="bi bi-file-earmark" style="color:white;"></i>
                        </label>
                        <input type="text" class="form-control internship"  style="border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
                        <input type="file" id="portfolioFileInput" class="form-control internship d-none"  aria-label="Upload file">
                    </div>
                    <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Internship Period</label>
                        <div class="calendar-container">
                            <!-- Header -->
                            <div class="calendar-header">
                              <div>
                                <span class="month-name" id="monthName"></span>
                                <select id="yearSelect" class="year-select"></select>
                              </div>
                              <div class="nav-buttons">
                                <button id="prevMonth"><i class="fa-solid fa-less-than"></i></button>
                                <button id="nextMonth"><i class="fa-solid fa-greater-than"></i></button>
                              </div>
                            </div>
                        
                            <!-- Days of the Week -->
                            <div class="day-names">
                              <div>Sun</div>
                              <div>Mon</div>
                              <div>Tue</div>
                              <div>Wed</div>
                              <div>Thu</div>
                              <div>Fri</div>
                              <div>Sat</div>
                            </div>
                        
                            <!-- Dates -->
                            <div class="calendar-dates" id="calendarDates"></div>
                        
                            <!-- Start and End Date Buttons -->
                            <div class="date-buttons">
                              <div class="date-button" id="startDateButton"><h5>Start date</h5> Select date</div>
                              <div class="date-button" id="endDateButton"><h5>End date</h5> Select date</div>
                            </div>
                          </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Internship Type *</label>
                    
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" style="margin-left:10px;">
                <div class="internship-type d-flex align-items-center justify-content-center gap-2">
                    <div class="type-option">
                        <input type="radio" id="onSite" name="internshipType" value="on-site" hidden />
                        <label for="onSite" class="d-block ">
                            <div class="text-end">
                                <i class="bi bi-building" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-start">
                                <p>On-site</p>
                            </div>
                        </label>
                    </div>
                    <div class="type-option">
                        <input type="radio" id="workFromHome" name="internshipType" value="work-from-home" hidden />
                        <label for="workFromHome" class="d-block text-center">
                            <div class="text-end mt-3">
                                <i class="bi bi-house" style="font-size: 2rem;"></i>
                            </div>
                            <div class="text-start ml-0">
                               <p>Work From Home</p> 
                            </div>
                            
                        </label>
                    </div>
                    <div class="type-option" >
                        <input type="radio" id="hybrid" name="internshipType" value="hybrid" hidden />
                        <label for="hybrid" class="d-block text-center">
                            <div class="text-end">
                                <i class="bi bi-briefcase" style="font-size: 2rem;"></i>
                            </div>      
                            <div class="text-start ml-0">
                                <p>Hybrid</p>
                            </div>                    
                            
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- </div style="justify-content-end">
        <a href="./application_success.html" type="submit" class="btn btn-dark" style="background-color:#474bc2;color:white;">Apply</a>
    </div> -->

    <div class="d-flex justify-content-end mt-3">
        <a href="{{url('application_success')}}" type="submit" class="btn btn-dark" style="background-color:#474bc2;color:white;">Apply</a>
    </div>
    
                    
                </form>
            </div>
        </div>
    </div>

      </div>

    </div>
    
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        boardCard.querySelector('button').style.display = 'block';
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


//internship page js 

document.addEventListener('DOMContentLoaded', function () {
    // Function to get URL parameters
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return decodeURIComponent(urlParams.get(param)) || ""; // Decode the URL parameter
    }

    // Get values from URL parameters
    const jobTitle = getQueryParam('title');
    const jobCategory = getQueryParam('category');
    const jobPositions = getQueryParam('positions');

    // Update the job details on the page
    if (jobTitle) {
        document.getElementById('job-title').textContent = jobTitle;
    }
    if (jobCategory) {
        document.getElementById('job-category').textContent = jobCategory;
    }
    if (jobPositions) {
        document.getElementById('job-positions').textContent = `${jobPositions} positions`;
    }
});
    
    document.addEventListener('DOMContentLoaded', function() {
        const cvFileInput = document.getElementById('cvFileInput');
        cvFileInput.addEventListener('change', function() {
            const cvTextInput = cvFileInput.previousElementSibling;
            if (this.files.length > 0) {
                cvTextInput.value = this.files[0].name;  
            } else {
                cvTextInput.value = "Select the file to upload";  
            }
        });


        const portfolioFileInput = document.getElementById('portfolioFileInput');
        portfolioFileInput.addEventListener('change', function() {
            const portfolioTextInput = portfolioFileInput.previousElementSibling; 
            if (this.files.length > 0) {
                portfolioTextInput.value = this.files[0].name; 
            } else {
                portfolioTextInput.value = "Select the file to upload"; 
            }
        });
    });

    
    document.querySelectorAll('.internship-type .type-option input[type="radio"]').forEach(input => {
    input.addEventListener('change', function() {
        document.querySelectorAll('.type-option').forEach(option => {
            option.classList.remove('active');
        });

        if (this.checked) {
            this.closest('.type-option').classList.add('active');
        }
    });
});


// date picker chart 
document.addEventListener("DOMContentLoaded", () => {
      const monthName = document.getElementById("monthName");
      const yearSelect = document.getElementById("yearSelect");
      const calendarDates = document.getElementById("calendarDates");
      const startDateButton = document.getElementById("startDateButton");
      const endDateButton = document.getElementById("endDateButton");
      const prevMonth = document.getElementById("prevMonth");
      const nextMonth = document.getElementById("nextMonth");

      let today = new Date();
      let currentMonth = today.getMonth();
      let currentYear = today.getFullYear();
      let activeButton = null; // Tracks whether Start or End button is active
      let startDate = null;
      let endDate = null;

      // Populate year dropdown
      function populateYears() {
        for (let i = currentYear - 50; i <= currentYear + 50; i++) {
          const option = document.createElement("option");
          option.value = i;
          option.textContent = i;
          if (i === currentYear) option.selected = true;
          yearSelect.appendChild(option);
        }
      }

      // Update calendar
      function updateCalendar() {
        monthName.textContent = new Date(currentYear, currentMonth).toLocaleString("default", {
          month: "long",
        });
        renderDates(currentYear, currentMonth);
      }

      // Render dates
      function renderDates(year, month) {
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        calendarDates.innerHTML = "";

        // Add empty divs for days before the first day of the month
        for (let i = 0; i < firstDay; i++) {
          const emptyDiv = document.createElement("div");
          calendarDates.appendChild(emptyDiv);
        }

        for (let i = 1; i <= daysInMonth; i++) {
    const dateDiv = document.createElement("div");
    dateDiv.textContent = i;

    // Format the date correctly: "Mon, 23 Nov 2024"
    const selectedDateObj = new Date(year, month, i);
    const formattedDate = selectedDateObj.toLocaleDateString("en-GB", {
        weekday: "short",
        day: "2-digit",
        month: "short",
        year: "numeric"
    }).replace(/^(\w{3}) (\d{2}) (\w{3}) (\d{4})$/, "$1, $2 $3 $4"); // Adds comma

    // Remove previous styles
    dateDiv.classList.remove("selected", "in-range");

    // Highlight Start Date
    if (startDate === formattedDate) {
        dateDiv.classList.add("selected");
    }

    // Highlight End Date
    if (endDate === formattedDate) {
        dateDiv.classList.add("selected");
    }

    // Highlight dates between Start and End
    if (startDate && endDate && new Date(startDate) < selectedDateObj && selectedDateObj < new Date(endDate)) {
        dateDiv.classList.add("in-range");
    }

    // Click event to update Start or End Date
    dateDiv.addEventListener("click", () => {
        if (activeButton === "start") {
            startDate = formattedDate;
            startDateButton.innerHTML = `<h5>Start date</h5> ${startDate}`;
            startDateButton.classList.add("selected");
        } else if (activeButton === "end") {
            if (startDate && selectedDateObj < new Date(startDate)) {
                alert("End date cannot be earlier than Start date!");
                return;
            }
            endDate = formattedDate;
            endDateButton.innerHTML = `<h5>End date</h5> ${endDate}`;
            endDateButton.classList.add("selected");
        }
        updateCalendar(); // Re-render calendar with correct highlighting
    });

    calendarDates.appendChild(dateDiv);
}


      }

      // Event listeners for navigation
      prevMonth.addEventListener("click", () => {
        currentMonth -= 1;
        if (currentMonth < 0) {
          currentMonth = 11;
          currentYear -= 1;
        }
        updateCalendar();
      });

      nextMonth.addEventListener("click", () => {
        currentMonth += 1;
        if (currentMonth > 11) {
          currentMonth = 0;
          currentYear += 1;
        }
        updateCalendar();
      });

      // Event listener for year dropdown
      yearSelect.addEventListener("change", (e) => {
        currentYear = parseInt(e.target.value, 10);
        updateCalendar();
      });

      // Event listeners for Start and End Date Buttons
      startDateButton.addEventListener("click", () => {
        activeButton = "start";
        startDateButton.classList.add("active");
        endDateButton.classList.remove("active");
      });

      endDateButton.addEventListener("click", () => {
        activeButton = "end";
        endDateButton.classList.add("active");
        startDateButton.classList.remove("active");
      });

      // Event listeners for navigation
prevMonth.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent page reload
    currentMonth -= 1;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear -= 1;
    }
    updateCalendar();
});

nextMonth.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent page reload
    currentMonth += 1;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear += 1;
    }
    updateCalendar();
});

      populateYears();
      updateCalendar();
    });
// date picker chart 
//internship page js



  
</script>
</body>
</html>
