    <div class="row mb-0">
        <div class="col-md-3" style="background-color:#F3F5FC;border-right:2px solid #fff;border-bottom:2px solid #fff;">
            <a class="navbar-brand fw-bold" href="#" style="font-size:40px; margin-left:20px;">INTERNPLUS</a>
            <div class="dropdown" style="margin:0;display: inline-block;">
                <button class="btn btn-white" style="border:none;background-color:#F3F5FC" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('EN')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('THAI')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('MYAN')">MYAN</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="background-color:#F3F5FC; display:flex; align-items:center; justify-content:space-between;">
            <div style="margin-left:30px;display:flex;align-items:center;flex-grow:0.2; justify-content: flex-start;">
                <div class="input-group" id="input-search" style="width: 100%;">
                    <button class="btn btn-dark" onclick="applySearch()" style="background-color:#ffffff; display:flex;justify-content: center;align-items:center;">
                        <i class="bi bi-search" style="color:#000;"></i>
                    </button>
                    <input type="text" id="searchInput" class="form-control" style="border:none; background-color:#ffffff;" placeholder="Search for program, candidates and more...">
                </div>
            </div>
            <div style="display:flex; align-items:center; gap:10px; margin-right:10px;">
                <button class="btn text-center gpa-2" style="color:#474BC2; border:1px solid #474BC2; background-color:#ffffff; border-radius:40px;">
                    <img src="../assets/icon/battery-v-charging_purple.png" style="margin-right:5px;" alt="">Standard
                </button>
                <button class="btn" id="settingsButton"  style="background-color:#ffffff; border-radius:50%; width:40px; height:40px; display:flex; justify-content:center; align-items:center;">
                    <img src="../assets/icon/settings-alt.png" alt="">
                </button>
                <button class="btn" style="background-color:#ffffff; border-radius:50%; width:40px; height:40px; display:flex; justify-content:center; align-items:center;">
                    <img src="../assets/icon/notification.png" alt="">
                </button>
                <div class="profile_photo">
                    <img id="navProfileImage" src="" alt="Profile Photo" width="40" height="40" style="border-radius: 50%; object-fit: cover;">
                </div>
                
            </div>
        </div>   
    </div>