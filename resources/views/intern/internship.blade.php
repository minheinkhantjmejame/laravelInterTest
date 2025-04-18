@extends('layouts.intern.internLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
                .input-group-text{
                    background-color:#474bc2;
                }

                body{
                    background-color:#fff;
                }
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


    </style>
@endsection

@section('content')
        <!-- Navigation Bar -->
        @include('layouts.intern.navbar')

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <span id="job-category" class="badge" style="background-color:#d1d1f0; color:black;"></span>
                    <span id="job-positions" class="ms-2 badge" style="background-color:#b1bbe7; color:black;"></span>
                    <h1 id="job-title" class="fw-bold mt-2" style="font-size:48px;"></h1>
                    <p class="text-muted" style="color:#000;font-size:20px;"><i class="bi bi-geo-alt"></i>287 Si Lom Rd, Liberty Square Building</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-dark" onclick="history.back()"  style="background-color:#b1bbe7; color:black; border:0;"><i class="bi bi-arrow-left"></i><span data-translate="Back"> Back</span></button>
                    <button class="btn btn-dark ms-2" style="background-color:#474bc2; color:white; border:0;"><i class="bi bi-download"></i></button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p style="font-size:24px;" data-translate="Hi, Vanness Plus consulting Co., Ltd. is now recruiting interns. Internships can be done in both Work from home, On-site, and Hybrid with allowances. The office is located at Liberty Square Building, near BTS Sala Daeng/MRT Silom.">Hi, Vanness Plus consulting Co., Ltd. is now recruiting interns. Internships can be done in both Work from home, On-site, and Hybrid with allowances. The office is located at Liberty Square Building, near BTS Sala Daeng/MRT Silom.</p>
                </div>
            </div>
                <hr/>
        </div>



        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="firstName" class="form-label" data-translate="FIRST NAME">FIRST NAME</label>
                            <input type="text" class="form-control internship" id="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label"  data-translate="LAST NAME">LAST NAME</label>
                            <input type="text" class="form-control internship" id="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"  data-translate="EMAIL ADDRESS">EMAIL ADDRESS</label>
                            <input type="email" class="form-control internship" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"  data-translate="PHONE NUMBER">PHONE NUMBER</label>
                            <input type="tel" class="form-control internship" id="phone" required>
                        </div>
                        <p class="mb-2" style="font-size:30px;"  data-translate="YOUR CV/RESUME">YOUR CV/RESUME</p>
                        <div class="input-group mb-3" onclick="document.getElementById('cvFileInput').click();">                        
                            <label class="input-group-text" for="cvFileInput">
                                <i class="bi bi-file-earmark" style="color:white;"></i>
                            </label>
                            <input type="text" class="form-control internship" style="border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" aria-label="File's placeholder" readonly>
                            <input type="file" id="cvFileInput" class="form-control internship d-none" accept=".pdf" aria-label="Upload file" required>
                        </div>
                        <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
                        
                        <p class="mb-2" style="font-size:30px;" data-translate="YOUR PORTFOLIO">YOUR PORTFOLIO</p>
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
                            <label for="startDate" class="form-label" data-translate="INTERNSHIP PERIOD">INTERNSHIP PERIOD</label>
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
                            <label class="form-label" data-translate="INTERNSHIP TYPE">INTERNSHIP TYPE</label>
                        
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="internship-type d-flex align-items-center justify-content-center gap-2">
                        <div class="type-option">
                            <input type="radio" id="onSite" name="internshipType" value="on-site" hidden />
                            <label for="onSite" class="d-block ">
                                <div class="text-end">
                                    <i class="bi bi-building" style="font-size: 2rem;"></i>
                                </div>
                                <div class="text-start">
                                    <p data-translate="On-site">On-site</p>
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
                                <p data-translate="WORK FROM HOME">WORK FROM HOME</p> 
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
                                    <p data-translate="Hybrid">Hybrid</p>
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
            <a href="{{url('application_success')}}" type="submit" class="btn btn-dark" style="background-color:#474bc2;color:white;" data-translate="Apply">Apply</a>
        </div>
        
                        
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('script')
    <script type="text/javascript"> 

    // Function to update language and translate all elements
    async function updateLanguage(language) {
    document.getElementById('dropdownLabel').textContent = language.toUpperCase();

    // ✅ Save the selected language in localStorage
    localStorage.setItem('selectedLanguage', language);

    // ✅ Define translations for static text (placeholders, buttons, etc.)
    const translations = {
        'en': {
            'emailPlaceholder': "Enter your email"
        },
        'th': {
            'emailPlaceholder': "ใส่อีเมลของคุณ"
        },
        'my': {
            'emailPlaceholder': "သင့် အီးမဲလ်ကို ရိုက်ထည့်ပါ"
        }
    };

    // ✅ Update placeholders
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.setAttribute("placeholder", translations[language]?.searchPlaceholder || translations['en'].searchPlaceholder);
    }

    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.setAttribute("placeholder", translations[language]?.emailPlaceholder || translations['en'].emailPlaceholder);
    }

    // ✅ Update text content using predefined translations or Google Translate API
    const elementsToTranslate = document.querySelectorAll('[data-translate]');
    for (const element of elementsToTranslate) {
        const key = element.getAttribute('data-translate');
        
        if (translations[language][key]) {
            element.innerText = translations[language][key];
        } else {
            // Use Google Translate API if predefined translation is unavailable
            const translatedText = await translateText(key, language);
            element.innerText = translatedText;
        }
    }
}

// ✅ Function to translate text using Google Translate API
async function translateText(text, targetLanguage) {
    try {
        const response = await fetch(
            `https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURIComponent(text)}`
        );
        const data = await response.json();
        return data[0][0][0]; // Extract the translated text
    } catch (error) {
        console.error('Translation error:', error);
        return text; // Fallback to the original text if translation fails
    }
}

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

    </script>
@endsection

