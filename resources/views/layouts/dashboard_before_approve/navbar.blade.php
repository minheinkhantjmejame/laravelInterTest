  <!-- Navbar -->
  <nav class="navbar d-flex align-items-center justify-content-end">
    <div class="d-flex align-items-center">
      <div class="nav-items d-flex me-3">
        <a href="{{url('home_page_dashboard_before_approve')}}" class="nav-item mx-3">Home</a>
        <a href="{{url('home_page_dashboard_before_approve_program')}}" class="nav-item mx-3">Program</a>
        <a href="{{('home_page_dashboard_before_approve_application_search')}}" class="nav-item mx-3 application-link">Application</a>
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