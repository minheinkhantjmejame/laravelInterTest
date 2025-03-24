document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkPath = new URL(link.href).pathname;
        if (linkPath === currentPath) {
            link.classList.add('active');
        }
    });

    // ✅ Load saved language from localStorage
    const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
    updateLanguage(savedLanguage);
});

// Function to update language and translate all elements
async function updateLanguage(language) {
    document.getElementById('dropdownLabel').textContent = language.toUpperCase();

    // ✅ Save the selected language in localStorage
    localStorage.setItem('selectedLanguage', language);

    // ✅ Define translations for static text (placeholders, buttons, etc.)
    const translations = {
        'en': {
            'searchPlaceholder': "Enter the program you are interested in...",
            'applyNow': "Apply Now",
            'internshipProgram': "Internship Program",
            'emailPlaceholder': "Enter your email to get the latest news..."
        },
        'th': {
            'searchPlaceholder': "กรอกโปรแกรมที่คุณสนใจ...",
            'applyNow': "สมัครตอนนี้",
            'internshipProgram': "โปรแกรมฝึกงาน",
            'emailPlaceholder': "กรอกอีเมลของคุณเพื่อรับข่าวสารล่าสุด..."
        },
        'my': {
            'searchPlaceholder': "သင့်စိတ်ဝင်စားသောအစီအစဉ်ကိုရိုက်ထည့်ပါ...",
            'applyNow': "လျှောက်ထားရန်",
            'internshipProgram': "အလုပ်သင်အစီအစဉ်",
            'emailPlaceholder': "နောက်ဆုံးသတင်းများရယူရန်သင့်အီးမေးလ်ထည့်ပါ..."
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


// HR JS 

// packange checking function
document.addEventListener("DOMContentLoaded", function () {
    const standardButton = document.querySelector(".gpa-2"); // Standard package button
    const dashboardContent = document.getElementById("dashboardContent");
    const packageContent = document.getElementById("packageContent");
    const settingsContent = document.getElementById("settingsContent");

    // Inject the package UI inside packageContent div
    packageContent.innerHTML = `
        <div class="mt-4">        
            <div class="row gap-5">
                <div class="col-md-6">
                    <div class="">
                        <h2>Package & Pricing</h2>
                        <div class="d-flex">
                            <div style="width:150px;height:150px; display:flex;justify-content:center;align-items:center;position:relative;">
                                <div style="width:120px; height:120px; border-radius:50%; background-color:#474BC2;display:flex;justify-content:center;align-items:center;">
                                    <img src="../assets/icon/battery_white.png" alt="">
                                </div>
                                <div style="width:120px;height:30px; border-radius:20px; background-color:#B1BBE7; position:absolute; bottom:0;">
                                    <p style="display:flex;justify-content:center;align-items:center;margin-top:3px;">Standard</p>
                                </div>
                            </div>
                            <div style="width:200px; height:150px; display:flex; justify-content:center; align-items:center;">
                                <div style="width:100%; height:100%; display:flex; flex-direction:column; justify-content:center;">
                                    <h4>Standard Package</h4>
                                    <h5 class="mt-2">฿199 /month</h5>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p>Suitable for large organizations or educational institutions that require a complete system.</p>
                            <div class="d-flex justify-content-between w-50">
                                <p><img src="../assets/icon/device.png" /> <span>5</span> devices</p>
                                <p><img src="../assets/icon/user-circle.png" /><span>50</span> users</p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p> Register for Interns</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Track internship status</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Storage space</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Preliminary results report</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Detailed report</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Notification system</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    <i class="bi bi-check-square-fill"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Maximum intern</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    50 users
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Maximum administrator</p>
                                <div style="width:100px;height:30px;border-radius:10px;background-color:#B1BBE7; display:flex;justify-content:center;align-items:center;">
                                    5 devices
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                <div class="d-flex gap-5" >
                    <div class="d-flex justify-content-cener align-items-center">
                        <h5>Upgrade your package</h5>
                    </div>
                    <div class="d-flex mb-3">
                        <button class="btn btn-outline-secondary active">Monthly</button>
                        <button class="btn btn-outline-secondary ms-2">Yearly</button>
                    </div>
                </div>                
                    <div class="card p-3 mb-2" style="box-shadow:none; border-radius:4px;">
                        <div class="d-flex gap-2 mb-0">
                            <div class="icon mb-0">
                                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                    <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                                </span>                            
                            </div>
                            <div class="mb-0">                  
                                <h5>Starter Package</h5>
                                <p>Free</p>
                            </div>
                        </div>  
                        <hr/>
                        <p> <img src="../assets/icon/device.png" /> 1 device <img src="../assets/icon/user-circle.png" />  10 users</p>
                    </div>
                    <div class="card p-3 mb-2" style="box-shadow:none; border-radius:4px;">
                        <div class="d-flex gap-2 mb-0">
                            <div class="icon mb-0">
                                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                    <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                                </span>                            
                            </div>
                            <div class="mb-0">                  
                                <h5>Standard Package</h5>
                                <p> / month</p>
                            </div>
                        </div>  
                        <hr/>
                        <p> <img src="../assets/icon/device.png" /> 1 device <img src="../assets/icon/user-circle.png" />  10 users</p>
                    </div>
                    <div class="card p-3 mb-2" style="box-shadow:none; border-radius:4px;">
                        <div class="d-flex gap-2 mb-0">
                            <div class="icon mb-0">
                                <span class="icon-container" style="display: flex; background-color: #474bc2; border-radius: 50%; width: 50px; height: 50px; justify-content: center; align-items: center; overflow: hidden; margin: 0; padding: 0;">
                                    <img src="../assets/icon/battery-v-50.png" style="width: 20px; height: 20px; display: block; margin: 0; padding: 0;" alt="">
                                </span>                            
                            </div>
                            <div class="mb-0">                  
                                <h5>Premium Package</h5>
                                <p> / month</p>
                            </div>
                        </div>  
                        <hr/>
                        <p> <img src="../assets/icon/device.png" /> 1 device <img src="../assets/icon/user-circle.png" />  10 users</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn mt-2" style="background-color: #474bc2; color:white;" id="cancelPackage">
                            Cancel Package
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;

    // Function to switch content
    function showPackageContent() {
        dashboardContent.style.display = "none"; // Hide dashboard
        packageContent.style.display = "block"; // Show package
        settingsContent.style.display = "none"; // Show settings page
    }

    settingsButton.addEventListener("click", function () {
        dashboardContent.style.display = "none"; // Hide dashboard
        
        packageContent.style.display = "none";
    });

    // Function to restore dashboard content
    function restoreDashboard() {
        packageContent.style.display = "none"; // Hide package
        dashboardContent.style.display = "block"; // Show dashboard
    }

    // When the Standard button is clicked, show package content
    standardButton.addEventListener("click", function () {
        showPackageContent();
    });

    // When the cancel button inside the package UI is clicked, restore dashboard
    document.addEventListener("click", function (event) {
        if (event.target.id === "cancelPackage") {
            restoreDashboard();
        }
    });
});

// package checking function

// Setting function
document.addEventListener("DOMContentLoaded", function () {
    const settingsButton = document.getElementById("settingsButton");
    const dashboardContent = document.getElementById("dashboardContent");
    const settingsContent = document.getElementById("settingsContent");
    const packageContent = document.getElementById("packageContent");

    // Inject settings UI only once
    settingsContent.innerHTML = `
        <h2 class="mb-4">Settings</h2>
        <div class="row h-100 gap-1">
            <div class="col-md-3" style="background-color:#F3F5FC; padding:20px;border-radius:4px;">
                <nav class="nav flex-column" style="color:black;">
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('emailPassword')"><img src="/assets/icon/key-alt.png" alt="key"> Email & Password</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('notification')"><img src="/assets/icon/notification-unread.png" alt="noti"> Notification</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('language')"><img src="/assets/icon/globe.png" alt="globe"> Language</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('supervisor')"><img src="/assets/icon/user-shield_2.png" alt="user"> Supervisor</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('allowance')"><img src="/assets/icon/money-bag.png" alt="allowance"> Allowance</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('contact')"><img src="/assets/icon/message-alt.png" alt="message"> Contact</a>
                    <a class="nav-link bg-transparent" href="#" style="color:black;" onclick="showSection('features')"><img src="/assets/icon/stars-shiny.png" alt="star"> Features & Service</a>
                </nav>
            </div>

            <div class="col-md-8 p-4" style="background-color:#F3F5FC;padding:10px; border-radius:4px; position:relative;" id="settingsContentSection">
                <!-- Default section will be Email & Password -->
                <div id="emailPasswordSection">
                    <h3>Email & Password</h3>
                    <div class=" d-flex justify-content-between w-100">
                        <div>
                            <small>Email</small>
                            <p id="hr_email">zzz@gmail.com</p>
                        </div>
                        <div>
                            <button class="btn" style="background-color:#4a54d2; border-radius:4px;color:white;">Change</button>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between w-100">
                        <div>
                            <small>password</small>
                            <p id="hr_email">*******</p>
                        </div>
                        <div>
                            <button class="btn" style="background-color:#4a54d2; border-radius:4px;color:white;">Change</button>
                        </div>
                    </div>
                </div>

                <!-- Other sections -->
<div id="notificationSection" style="display: none;">
    <h3 style="font-size: 24px; color: #333; margin-bottom: 20px;">Notification</h3>
    <small style="font-size: 14px; color: #666; display: block; margin-bottom: 20px;">Hide Notifications</small>

    <!-- Notification List -->
    <div style="margin-bottom: 20px;">
        <!-- Applying for an Internship -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Applying for an Internship</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Request Internship Application -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Request Internship Application</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Request Internship Document -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Request Internship Document</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Acceptance Terms -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Acceptance Terms</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Rules & Policies -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Rules & Policies</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Timesheet Submission -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Timesheet Submission</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Assignments -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Assignments</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Daily Reports -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Daily Reports</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Feedback -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Feedback</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Submitting Leave Requests -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Submitting Leave Requests</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Offboarding -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Offboarding</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Comment Section -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Comment Section</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>

        <!-- Email Notification -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 16px; color: #555;">Email Notification</span>
            <label style="position: relative; display: inline-block; width: 36px; height: 18px;">
                <input type="checkbox" style="opacity: 0; width: 0; height: 0;">
                <span style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #B1BBE7; border-radius: 18px; transition: 0.4s;"></span>
                <span style="position: absolute; content: ''; height: 14px; width: 14px; left: 2px; bottom: 2px; background-color: white; border-radius: 50%; transition: 0.4s;"></span>
            </label>
        </div>
    </div>
</div>


                <!-- Language-->

                <div id="languageSection" style="display: none;">
                    <h3 style="font-size: 24px; color: #333; margin-bottom: 10px;">Language</h3>
                    <small style="font-size: 14px; color: #666; display: block; margin-bottom: 20px;">Choose your preferred language</small>

                        <label style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="mailLanguage" style="margin-right: 10px; accent-color: #474BC2;">
                            <span style="font-size: 16px; color: #555;">Thai Language</span>
                        </label>
                        <label style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="mailLanguage" style="margin-right: 10px; accent-color: #474BC2;">
                            <span style="font-size: 16px; color: #555;">English Language</span>
                        </label>

                </div>

                <!-- Language-->



    <!-- Supervisor Card -->
    <div id="supervisorSection" style="padding: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h3 style="margin: 0;">Supervisor</h3>
            <button id="createSupervisorBtn" style="background-color: #474BC2; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                Create Supervisor
            </button>
        </div>
        <small style="display: block; margin-top: 8px; color: #666;">Select or add a supervisor for the internship</small>
    </div>

    <!-- Supervisor Card -->
    <div id="supervisorCard" style="display: none; position: fixed; top: 0; right: 0; width: 350px; height: 100%; background-color: white; box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1); z-index: 1000; overflow-y: auto;">
        <!-- Card Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px; border-bottom: 1px solid #ddd;">
            <h4 style="margin: 0;">Create Supervisor</h4>
            <button id="closeCardBtn" style="background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
        </div>

        <!-- Card Body -->
        <div style="padding: 16px;">
            <!-- Image Upload Section -->
            <div style="text-align: center; margin-bottom: 16px;">
                <div style="width: 100px; height: 100px; background-color: #f0f0f0; border-radius: 50%; margin: 0 auto 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #666;">
                    Select picture
                </div>
                <small style="color: #666;">*Supports size up to 10 MB</small>
            </div>

            <!-- Form Fields -->
            <form>
                <!-- Full Name -->
                <div style="margin-bottom: 16px;">
                    <label for="fullName" style="display: block; margin-bottom: 4px; font-weight: bold;">Full name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter first and last name" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Role -->
                <div style="margin-bottom: 16px;">
                    <label for="role" style="display: block; margin-bottom: 4px; font-weight: bold;">Role</label>
                    <input type="text" id="role" name="role" value="Supervisor" readonly style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; background-color: #f0f0f0;">
                </div>

                <!-- Position -->
                <div style="margin-bottom: 16px;">
                    <label for="position" style="display: block; margin-bottom: 4px; font-weight: bold;">Position</label>
                    <input type="text" id="position" name="position" value="HR" readonly style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; background-color: #f0f0f0;">
                </div>

                <!-- Team -->
                <div style="margin-bottom: 16px;">
                    <label for="team" style="display: block; margin-bottom: 4px; font-weight: bold;">Team</label>
                    <input type="text" id="team" name="team" placeholder="Enter the team project name" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Email Address -->
                <div style="margin-bottom: 16px;">
                    <label for="email" style="display: block; margin-bottom: 4px; font-weight: bold;">Email address</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Phone Number -->
                <div style="margin-bottom: 16px;">
                    <label for="phone" style="display: block; margin-bottom: 4px; font-weight: bold;">Phone number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter a maximum of 10 numbers only" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Line ID -->
                <div style="margin-bottom: 16px;">
                    <label for="lineId" style="display: block; margin-bottom: 4px; font-weight: bold;">Line ID</label>
                    <input type="text" id="lineId" name="lineId" placeholder="Enter Line ID" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <!-- Create Button -->
                <button type="submit" style="background-color: #474BC2; color: white; border: none; padding: 12px 16px; border-radius: 4px; cursor: pointer; width: 100%;">
                    Create
                </button>
            </form>
        </div>
    </div>



                <!-- Allowance-->

                <div id="allowanceSection">
                    <!-- Title and Description -->
                    <h3 style="font-size: 24px; color: #333; margin-bottom: 10px;">Allowance</h3>
                    <small style="font-size: 14px; color: #666; display: block; margin-bottom: 20px;">
                        Set daily allowances for each type of internship
                    </small>

                    <!-- Office Allowance -->
                    <span style="font-size: 16px; color: #333;">Office</span>
                    <div style="display: flex; align-items: center; margin-bottom: 16px;">  
                        <input type="number" value="150" style="width: 80px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; text-align: right; margin-right: 8px;">
                        <select style="padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                            <option value="BAHT">BAHT</option>
                            <option value="USD">USD</option>
                        </select>
                    </div>

                    <!-- Work From Home Allowance -->                        
                    <span style="font-size: 16px; color: #333;">Work From Home</span>
                    <div style="display: flex; align-items: center;">
                        <input type="number" value="80" style="width: 80px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; text-align: right; margin-right: 8px;">
                        <select style="padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                            <option value="BAHT">BAHT</option>
                            <option value="USD">USD</option>
                        </select>
                    </div>

                    
                    <button style="position:absolute;bottom:20px;left:30px;background-color: #474BC2; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px;">
                        Save
                    </button>
                </div>
                <!-- Allowance-->

                <!-- Contact-->

                <div id="contactSection" style="display: none;">
                    <h3 style="font-size: 24px; color: #333; margin-bottom: 10px;">Contact</h3>
                    <p style="font-size: 14px; color: #898989; margin-bottom: 30px; line-height: 1.5;">
                        Have questions or feedback? We're here to help. Send us a message, and we'll reply as soon as possible.
                    </p>

                    <div style="margin-bottom: 20px;">
                        <span style="font-size: 14px; color: #898989;">Location</span><br>
                        <span style="font-size: 18px; color: #323438;">
                            <span style="display: inline-block; width: 20px; text-align: center;"><i class="bi bi-geo-alt-fill"></i></span> 287 Si Lom Rd, Liberty Square Building
                        </span>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <span style="font-size: 14px; color: #898989;">Phone Number</span><br>
                        <span style="font-size: 18px; color: #323438;">
                            <span style="display: inline-block; width: 20px; text-align: center;"><i class="bi bi-telephone-fill"></i></span> 02-0777581 (Head Quarter Contact)
                        </span>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <span style="font-size: 14px; color: #898989;">Email Address</span><br>
                        <span style="font-size: 18px; color: #323438;">
                            <span style="display: inline-block; width: 20px; text-align: center;"><i class="bi bi-envelope-fill"></i></span> cs@internplus.com
                        </span>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <span style="font-size: 14px; color: #898989;">Social Media</span><br>
                        <div style="margin-top: 10px;">
                            <a href="#" style="margin-right: 15px; text-decoration: none; color: #323438;; font-size: 20px;"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" style="margin-right: 15px; text-decoration: none; color: #323438;; font-size: 20px;">f</a>
                            <a href="#" style="margin-right: 15px; text-decoration: none; color: #323438;; font-size: 20px;"><i class="bi bi-twitter"></i></a>
                            <a href="#" style="margin-right: 15px; text-decoration: none; color: #323438;; font-size: 20px;"><i class="bi bi-instagram"></i></a>
                            <a href="#" style="margin-right: 15px; text-decoration: none; color: #323438;; font-size: 20px;"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <button style="background-color: #474BC2;position:absolute;bottom:20px;left:30px; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">
                        Send Email
                    </button>
                </div>

                <!-- Contact-->

                <!-- Features-->
                <div id="featuresSection">
                    <!-- Heading -->
                    <h3 style="font-size: 24px; color: #333; margin-bottom: 20px;">Features & Service</h3>
                    <ul class="nav" id="featuresServiceTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="features-tab" data-bs-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="true">Features</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="service-tab" data-bs-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Service</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="featuresServiceContent">
                        <!-- Features Content -->
                        <div class="tab-pane fade show active w-100" id="features" role="tabpanel" aria-labelledby="features-tab">
    
                            <div class="card w-100" style="max-width: 450px; border-radius: 30px; box-shadow:none;border:none;">
                                <div class="card-body d-flex align-items-start" style="padding: 20px;">
                                    <!-- Text Content -->
                                    <div style="flex-grow: 2; aligns-self:center;">
                                        <h5 class="card-title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 10px; text-transform: uppercase;">Recruitment</h5>
                                        <p class="card-text" style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Streamline data handling with robust solutions for storing, organizing, and accessing internship information efficiently and securely.</p>
                                    </div>
                                    <!-- Image Container -->
                                    <div style="flex-shrink: 0; margin-left: 5px;">
                                        <div style="width: 130px; height: 120px; border:1px solid #B1BBE7; border-radius:20%;">
                                            <img src="/assets/img/recruitment.png" style=" border-radius:21%;width: 100%; height: 100%; object-fit: contain;" alt="Recruitment Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            
                            <div class="card w-100" style="max-width: 450px; border-radius: 30px; box-shadow:none;border:none;">
                                <div class="card-body d-flex align-items-start" style="padding: 20px;">
                                    <!-- Text Content -->
                                    <div style="flex-grow: 2; aligns-self:center;">
                                        <h5 class="card-title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 10px; text-transform: uppercase;">Application Tracking System</h5>
                                        <p class="card-text" style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Keep track of all applications in one place, making it easier to manage candidates, track their progress, and communicate effectively with them throughout the hiring process.</p>
                                    </div>
                                    <!-- Image Container -->
                                    <div style="flex-shrink: 0; margin-left: 5px;">
                                        <div style="width: 130px; height: 120px; border:1px solid #B1BBE7; border-radius:20%;">
                                            <img src="/assets/img/application_tracking.png" style=" border-radius:21%;width: 100%; height: 100%; object-fit: contain;" alt="Recruitment Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100" style="max-width: 450px; border-radius: 30px; box-shadow:none;border:none;">
                                <div class="card-body d-flex align-items-start" style="padding: 20px;">
                                    <!-- Text Content -->
                                    <div style="flex-grow: 2; aligns-self:center;">
                                        <h5 class="card-title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 10px; text-transform: uppercase;">Approval System</h5>
                                        <p class="card-text" style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">HR has the right to approve the actions of interns. Whether it is the process of applying for an internship or requesting leave from work and paying allowances.</p>
                                    </div>
                                    <!-- Image Container -->
                                    <div style="flex-shrink: 0; margin-left: 5px;">
                                        <div style="width: 130px; height: 120px; border:1px solid #B1BBE7; border-radius:20%;">
                                            <img src="/assets/img/approval_system.png" style=" border-radius:21%;width: 100%; height: 100%; object-fit: contain;" alt="Recruitment Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100" style="max-width: 450px; border-radius: 30px; box-shadow:none;border:none;">
                                <div class="card-body d-flex align-items-start" style="padding: 20px;">
                                    <!-- Text Content -->
                                    <div style="flex-grow: 2; aligns-self:center;">
                                        <h5 class="card-title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 10px; text-transform: uppercase;">Ability testing system</h5>
                                        <p class="card-text" style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">There is a system to create a test for applicants for each position. To test the applicant's specific potential in that field.</p>
                                    </div>
                                    <!-- Image Container -->
                                    <div style="flex-shrink: 0; margin-left: 5px;">
                                        <div style="width: 130px; height: 120px; border:1px solid #B1BBE7; border-radius:20%;">
                                            <img src="/assets/img/56.png" style=" border-radius:21%;width: 100%; height: 100%; object-fit: contain;" alt="Recruitment Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100" style="max-width: 450px; border-radius: 30px; box-shadow:none;border:none;">
                                <div class="card-body d-flex align-items-start" style="padding: 20px;">
                                    <!-- Text Content -->
                                    <div style="flex-grow: 2; aligns-self:center;">
                                        <h5 class="card-title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 10px; text-transform: uppercase;">Deep Data Analytics</h5>
                                        <p class="card-text" style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">Deep Data Analytics is used to summarize data to provide a more holistic view of the data, such as dashboards, etc., to help with decision-making and monthly or yearly reports.</p>
                                    </div>
                                    <!-- Image Container -->
                                    <div style="flex-shrink: 0; margin-left: 5px;">
                                        <div style="width: 130px; height: 120px; border:1px solid #B1BBE7; border-radius:20%;">
                                            <img src="/assets/img/57.png" style=" border-radius:21%;width: 100%; height: 100%; object-fit: contain;" alt="Recruitment Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                         <!-- Add other features content as necessary -->
                        </div>

                        <!-- Service Content -->
                        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/data.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Internship Data Management</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">Internship Data Management provides real-time data updates for both interns and corporate users. It also stores apprentice documents online which can be downloaded by apprentices or organizations for further use.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/time_attd.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Time Attendance</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">Realtime time attendance key in and out rely on setup location which user can choose work from home, work from office or flexible mode, manage shift. Time attendance could help in time tracking and overtime payment and payroll automatically upon organizational setting which could reduce working time and workload of administrative tasks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/leave.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Leave Request</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">Interns can fill in their leave information to submit a leave request for that day. HR can approve or disapprove the leave through the website or application. You can also view the leave history of each intern.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/offboard.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Offboarding</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">It is a process that helps in managing interns who are about to leave the organization or leave the internship. Documents related to offboarding can be viewed in an organized manner. Including internship evaluation documents, allowance payment documents,
or documents required for processing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/assignment.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Assignment Management</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">A system where interns submit assigned work and report their daily tasks on what work they did. HR can check the submitted work and approve the task on that day. Including expressing opinions and exchanging with interns through the comment section.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="width: 200px; height: 250px; border: none; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <div style="padding: 15px 0; text-align: center;">
                                            <img src="/assets/img/storage.png" class="card-img-top" style="width: 110px; height: 110px; margin: 0 auto; display: block;" alt="Data Management">
                                        </div>
                                        <div class="card-body" style="padding: 0 15px 15px 15px; text-align: center; flex-grow: 1; overflow: hidden;">
                                            <h5 class="card-title" style="font-size: 10px; font-weight: 600; color: #333; margin-bottom: 8px; text-transform: uppercase;">Storage Management</h5>
                                            <p class="card-text" style="font-size: 8px; color: #666; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">Managing data and resources stored in the system In order to access information efficiently and securely It will be stored in the format you want, such as a folder or file name. The system will save the origin of the file import to facilitate analysis of that data.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add other service content as necessary -->
                        </div>
                    </div>
                </div>

                <!-- Features-->
            </div>
        </div>
    `;

    document.addEventListener("DOMContentLoaded", function () {
        const featuresTab = document.getElementById('features-tab');
        const serviceTab = document.getElementById('service-tab');
        const featuresSection = document.getElementById('featuresSection');
        
        // Initialize content for features and services (it will show when page loads)
        const featuresContent = `
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/assets/icon/recruitment.png" class="card-img-top" alt="Recruitment">
                        <div class="card-body">
                            <h5 class="card-title">RECRUITMENT</h5>
                            <p class="card-text">Streamline data handling with robust solutions for storing, organizing, and accessing internship information efficiently and securely.</p>
                        </div>
                    </div>
                </div>
                <!-- Additional features content can go here -->
            </div>
        `;
        
        const serviceContent = `
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/assets/icon/data-management.png" class="card-img-top" alt="Data Management">
                        <div class="card-body">
                            <h5 class="card-title">INTERNSHIP DATA MANAGEMENT</h5>
                            <p class="card-text">Internship Data Management provides real-time data updates for interns and promotes users.</p>
                        </div>
                    </div>
                </div>
                <!-- Additional service content can go here -->
            </div>
        `;
        
        // Add content to Features & Service section
        document.getElementById('features').innerHTML = featuresContent;
        document.getElementById('service').innerHTML = serviceContent;
        
        // Display the Features section by default when the page loads
        featuresTab.addEventListener("click", function () {
            featuresTab.classList.add("active");
            serviceTab.classList.remove("active");
            document.getElementById('features').classList.add("show", "active");
            document.getElementById('service').classList.remove("show", "active");
        });
    
        serviceTab.addEventListener("click", function () {
            serviceTab.classList.add("active");
            featuresTab.classList.remove("active");
            document.getElementById('service').classList.add("show", "active");
            document.getElementById('features').classList.remove("show", "active");
        });
    });
    

    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const slider = this.nextElementSibling;
            const circle = slider.nextElementSibling;
            if (this.checked) {
                slider.style.backgroundColor = '#474BC2'; // Background color when ON
                circle.style.transform = 'translateX(18px)'; // Move the circle to the right
            } else {
                slider.style.backgroundColor = '#B1BBE7'; // Background color when OFF
                circle.style.transform = 'translateX(0)'; // Move the circle back to the left
            }
        });
    });

    // creat supervisor card 

     // Show the card when "Create Supervisor" button is clicked
     document.getElementById('createSupervisorBtn').addEventListener('click', function() {
        document.getElementById('supervisorCard').style.display = 'block';
    });

    // Hide the card when the close button is clicked
    document.getElementById('closeCardBtn').addEventListener('click', function() {
        document.getElementById('supervisorCard').style.display = 'none';
    });

    // creat supervisor card 

    //create functions for tabs in

    // Show settings page when clicking the button
    settingsButton.addEventListener("click", function () {
        dashboardContent.style.display = "none"; // Hide dashboard
        settingsContent.style.display = "block"; // Show settings page
        packageContent.style.display = "none";
    });

    // Show selected section
    window.showSection = function (section) {
        // Hide all sections
        document.getElementById("emailPasswordSection").style.display = "none";
        document.getElementById("notificationSection").style.display = "none";
        document.getElementById("languageSection").style.display = "none";
        document.getElementById("supervisorSection").style.display = "none";
        document.getElementById("allowanceSection").style.display = "none";
        document.getElementById("contactSection").style.display = "none";
        document.getElementById("featuresSection").style.display = "none";
        
        // Remove active class from all nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => link.classList.remove('active'));
        
        // Show selected section and set the active link
        if (section === 'emailPassword') {
            document.getElementById("emailPasswordSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'emailPassword\')"]').classList.add('active');
        } else if (section === 'notification') {
            document.getElementById("notificationSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'notification\')"]').classList.add('active');
        } else if (section === 'language') {
            document.getElementById("languageSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'language\')"]').classList.add('active');
        } else if (section === 'supervisor') {
            document.getElementById("supervisorSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'supervisor\')"]').classList.add('active');
        } else if (section === 'allowance') {
            document.getElementById("allowanceSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'allowance\')"]').classList.add('active');
        } else if (section === 'contact') {
            document.getElementById("contactSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'contact\')"]').classList.add('active');
        } else if (section === 'features') {
            document.getElementById("featuresSection").style.display = "block";
            document.querySelector('a[onclick="showSection(\'features\')"]').classList.add('active');
        }
    }

    // Set the default active section when page loads (Email & Password)
    showSection('emailPassword');
});
// Setting function

// profile change function 

document.addEventListener("DOMContentLoaded", function () {
    // DOM Elements
    const dashboardContent = document.getElementById("dashboardContent");
    const packageContent = document.getElementById("packageContent");
    const settingsContent = document.getElementById("settingsContent");
    const profileContent = document.getElementById("profileContent");
    const profilePhoto = document.querySelector(".profile_photo");
    const standardButton = document.querySelector(".gpa-2");
    const settingsButton = document.getElementById("settingsButton");

    // Initialize content visibility
    dashboardContent.style.display = "block";
    packageContent.style.display = "none";
    settingsContent.style.display = "none";
    profileContent.style.display = "none";

    // Load saved language from localStorage
    const savedLanguage = localStorage.getItem("selectedLanguage") || "en";
    updateLanguage(savedLanguage);

    // Load the profile image from localStorage
    loadProfileImage();

    // Event Listeners
    profilePhoto.addEventListener("click", showProfileContent);
    standardButton.addEventListener("click", showPackageContent);
    settingsButton.addEventListener("click", showSettingsContent);

    // Event Delegation for Profile Actions
    document.addEventListener("click", function (event) {
        if (event.target.closest(".edit-profile-btn")) {
            showEditProfile();
        } else if (event.target.closest(".edit-personal-info-btn")) {
            event.preventDefault();
            showEditPersonalInfo();
        } else if (event.target.closest(".back-profile-btn")) {
            event.preventDefault();
            showProfileContent();
        } else if (event.target.closest(".save-profile-btn")) {
            saveProfile();
        } else if (event.target.closest(".save-personal-info-btn")) {
            savePersonalInfo();
        } else if (event.target.id === "cancelPackage") {
            restoreDashboard();
        }
    });

    // Functions
    function loadProfileImage() {
        // Retrieve profile image from localStorage
        let storedProfileImage = localStorage.getItem("profileImage");

        // If a profile image exists in localStorage, update the navbar profile image
        if (storedProfileImage) {
            let navProfileImg = document.getElementById("navProfileImage");
            if (navProfileImg) {
                navProfileImg.src = storedProfileImage;
            }
        } else {
            // Set a default image if no profile image is stored
            let navProfileImg = document.getElementById("navProfileImage");
            if (navProfileImg) {
                navProfileImg.src = "../assets/img/user_sample_1.png"; // Default image
            }
        }
    }

    function showProfileContent() {
        hideAllContent();
        profileContent.style.display = "block";
        showProfile();
    }

    function showPackageContent() {
        hideAllContent();
        packageContent.style.display = "block";
    }

    function showSettingsContent() {
        hideAllContent();
        settingsContent.style.display = "block";
    }

    function hideAllContent() {
        dashboardContent.style.display = "none";
        packageContent.style.display = "none";
        settingsContent.style.display = "none";
        profileContent.style.display = "none";
    }

    function restoreDashboard() {
        hideAllContent();
        dashboardContent.style.display = "block";
    }

    function showProfile() {
        let profileImage = localStorage.getItem("profileImage") || "../assets/img/user_sample_1.png";
        let profileName = localStorage.getItem("profileName") || "Lhing W.";
        let position = localStorage.getItem("position") || "HR Manager";
        let fullName = localStorage.getItem("fullName") || "Lhing Wang";
        let team = localStorage.getItem("team") || "Project Internplus";
        let email = localStorage.getItem("email") || "wanglhing@vennessplus.com";
        let phone = localStorage.getItem("phone") || "0898144676";
        let lineID = localStorage.getItem("lineID") || "imlhingw21";

        profileContent.innerHTML = `
            <div class="container-fluid" id="profile_details">
                <h2 class="mb-3">My Profile</h2>

                <!-- Profile Summary -->
                <div class="card p-4 w-50">
                    <div class="d-flex align-items-center">
                        <img src="${profileImage}" alt="Profile Photo" class="rounded-circle" width="80" height="80">
                        <div class="ms-3">
                            <h4 class="mb-0">${profileName}</h4>
                            <span class="badge">${position}</span>
                        </div>
                        <button class="btn edit edit-profile-btn ms-auto"><img src="../assets/icon/edit_pen.png" alt="">  Edit</button>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="card p-4 mt-3 w-50">
                    <div class="d-flex justify-content-between mb-3">
                        <h5>Personal Information</h5>
                        <button class="btn edit-personal-info-btn edit"><img src="../assets/icon/edit_pen.png" alt=""> Edit</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span>Full Name</span><p>${fullName}</p>
                            <span>Team</span><p>${team}</p>
                            <span>Phone Number</span><p>${phone}</p>
                        </div>
                        <div class="col-md-6">
                            <span>Position</span><p>${position}</p>
                            <span>Email</span><p>${email}</p>
                            <span>Line ID</span><p>${lineID}</p>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-3">
                    <button class="btn" id="logout">Logout</button>
                    <button class="btn ms-2" id="del_account">Delete Account</button>
                </div>
            </div>
        `;
    }

    function showEditProfile() {
        profileContent.innerHTML = `
            <div class="container-fluid d-flex flex-column align-items-start" style="width:auto; margin: auto;">
                <a href="#" class="back-profile-btn d-flex align-items-center mb-3" style="text-decoration: none; color: black;">
                    <i class="bi bi-arrow-left me-2"></i> Back to My Profile
                </a>

                <h2 class="mb-4">Edit Profile</h2>

                <div class="d-flex gap-5">
                    <div class="d-flex flex-column align-items-center">
                        <img id="profilePreview" src="${localStorage.getItem("profileImage") || '../assets/img/user_sample_1.png'}" 
                            alt="Profile Photo" class="rounded" width="180" height="180" style="border: 1px solid #ddd; object-fit: cover;">
                        <button class="btn btn-primary mt-3 px-4 save-profile-btn" style="align-self: self-start; background-color:#474BC2;">Save</button>
                    </div>

                    <div class="w-100 mt-0">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Image</label>
                            <div id="customFileInput" class="d-flex align-items-center py-0"
                                style="cursor: pointer; border: 1px solid #C8C8C8; border-radius: 4px; height: 50px; width: 300px;">
                                
                                <div class="d-flex justify-content-center align-items-center" 
                                    style="width: 40px; height: 100%; background-color: #474BC2;">
                                    <i class="bi bi-image" style="font-size: 20px; color:white;"></i>
                                </div>

                                <span id="fileLabel" class="flex-grow-1 text-truncate mx-2">Choose a file</span>

                                <input type="file" id="profileImageInput" class="d-none">
                            </div>

                            <small class="text-muted">*Supports size up to 10 MB</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Profile Name</label>
                            <input type="text" id="profileName" class="form-control"  
                                style="border:1px solid #C8C8C8; border-radius:4px;" 
                                value="${localStorage.getItem("profileName") || 'Emma W.'}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Role</label>
                            <select id="profileRole" class="form-select" style="border:1px solid #C8C8C8; border-radius:4px;">
                                <option ${localStorage.getItem("position") === "HR Manager" ? "selected" : ""}>HR Manager</option>
                                <option ${localStorage.getItem("position") === "HR" ? "selected" : ""}>HR</option>
                                <option ${localStorage.getItem("position") === "Supervisor" ? "selected" : ""}>Supervisor</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        `;

        let selectedImage = null;

        document.getElementById("customFileInput").addEventListener("click", function () {
            document.getElementById("profileImageInput").click();
        });

        document.getElementById("profileImageInput").addEventListener("change", function (event) {
            let file = event.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("profilePreview").src = e.target.result;
                    selectedImage = e.target.result;
                    document.getElementById("fileLabel").textContent = file.name;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    function saveProfile() {
        let newProfileName = document.getElementById("profileName").value;
        let newProfileRole = document.getElementById("profileRole").value;
        let selectedImage = document.getElementById("profilePreview").src;

        // Save updated information in localStorage
        localStorage.setItem("profileName", newProfileName);
        localStorage.setItem("position", newProfileRole);
        localStorage.setItem("profileImage", selectedImage);

        // Update the navigation bar profile image
        let navProfileImg = document.getElementById("navProfileImage");
        if (navProfileImg) {
            navProfileImg.src = selectedImage; // Update the src of the profile image in the navbar
        }

        // Go back to the profile page
        showProfileContent();
    }

    function showEditPersonalInfo() {
        profileContent.innerHTML = `
            <div class="container-fluid edit-personal-info">
                <div style="margin-bottom:5px;">
                    <a href="#" class="back-profile-btn" style="text-decoration: none; color: black;">
                        <i class="bi bi-arrow-left"></i> Back to My Profile
                    </a>
                </div>
                <h2 class="mb-3">Edit Personal Information</h2>

                <div class="w-50">
                    <h4>Personal Information</h4>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" id="fullName" class="form-control" value="${localStorage.getItem("fullName") || 'Lhing Wang'}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <select id="position" class="form-control">
                            <option ${localStorage.getItem("position") === "HR Manager" ? "selected" : ""}>HR Manager</option>
                            <option ${localStorage.getItem("position") === "HR" ? "selected" : ""}>HR</option>
                            <option ${localStorage.getItem("position") === "Supervisor" ? "selected" : ""}>Supervisor</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Team</label>
                        <input type="text" id="team" class="form-control" value="${localStorage.getItem("team") || 'Project Internplus'}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" id="email" class="form-control" value="${localStorage.getItem("email") || 'wanglhing@vennessplus.com'}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" id="phone" class="form-control" value="${localStorage.getItem("phone") || '0898144676'}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Line ID</label>
                        <input type="text" id="lineID" class="form-control" value="${localStorage.getItem("lineID") || 'imlhingw21'}">
                    </div>

                    <button class="btn btn-primary save-personal-info-btn" style="background-color:#474BC2;">Save</button>
                </div>
            </div>
        `;

        // Add event listener for the Save button in the personal info form
        document.querySelector(".save-personal-info-btn").addEventListener("click", savePersonalInfo);
    }

    function savePersonalInfo() {
        // Get updated values from the form
        let newFullName = document.getElementById("fullName").value;
        let newPosition = document.getElementById("position").value;
        let newTeam = document.getElementById("team").value;
        let newEmail = document.getElementById("email").value;
        let newPhone = document.getElementById("phone").value;
        let newLineID = document.getElementById("lineID").value;

        // Save updated information in localStorage
        localStorage.setItem("fullName", newFullName);
        localStorage.setItem("position", newPosition);
        localStorage.setItem("team", newTeam);
        localStorage.setItem("email", newEmail);
        localStorage.setItem("phone", newPhone);
        localStorage.setItem("lineID", newLineID);

        // Go back to the profile page
        showProfileContent();
    }
});


// profile change function

// calendar dropdown function 
document.addEventListener('DOMContentLoaded', function () {
    const dateButton = document.getElementById('dateButton');
    const calendarDropdown = document.getElementById('calendarDropdown');
    const monthYear = document.getElementById('monthYear');
    const dates = document.getElementById('dates');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const selectedDate = document.getElementById('selectedDate');

    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    // Set the default selected date
    selectedDate.textContent = formatDate(today);

    // Initialize the calendar when the dropdown is shown
    dateButton.addEventListener('shown.bs.dropdown', function () {
        updateCalendar(currentMonth, currentYear);
    });

    // Update the calendar when navigating months
    prevMonthButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent event from bubbling up
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        updateCalendar(currentMonth, currentYear);
    });

    nextMonthButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent event from bubbling up
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendar(currentMonth, currentYear);
    });

    // Update the selected date when a date is clicked
    dates.addEventListener('click', function (event) {
        if (event.target.tagName === 'SPAN' && event.target.textContent) {
            const selectedDay = parseInt(event.target.textContent, 10);
            const selectedDateObj = new Date(currentYear, currentMonth, selectedDay);
            selectedDate.textContent = formatDate(selectedDateObj);
            event.stopPropagation(); // Prevent event from bubbling up
        }
    });

    // Prevent the dropdown from closing when interacting with the calendar
    calendarDropdown.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent event from bubbling up
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (!dateButton.contains(event.target) && !calendarDropdown.contains(event.target)) {
            const dropdown = new bootstrap.Dropdown(dateButton);
            dropdown.hide();
        }
    });

    // Function to update the calendar
    function updateCalendar(month, year) {
        dates.innerHTML = '';
        monthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const startDay = firstDay.getDay();
        const endDate = lastDay.getDate();

        for (let i = 0; i < startDay; i++) {
            dates.innerHTML += '<span></span>';
        }

        for (let i = 1; i <= endDate; i++) {
            const date = new Date(year, month, i);
            const span = document.createElement('span');
            span.textContent = i;
            if (date.toDateString() === today.toDateString()) {
                span.classList.add('today');
            }
            dates.appendChild(span);
        }
    }

    function formatDate(date) {
    const day = date.getDate(); // Get the day (e.g., 15)
    const month = date.toLocaleString('default', { month: 'long' }); // Get the full month name (e.g., December)
    const year = date.getFullYear(); // Get the year (e.g., 2024)
    return `${day} ${month} ${year}`; // Return the formatted date (e.g., 15 December 2024)
}
});

// calendar dropdown function 


// HR JS 
