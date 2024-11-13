<!-- Header -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{url('userdashboard\css\main.css')}}">
<header class="header">
    Employee Dashboard
  </header>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Leave
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="checkin.html">My Applicatios</a></li>
                <li><a class="dropdown-item" href="attendance-review.html">Team Applications</a></li>
                <li><a class="dropdown-item" href="punches.html">My Leave Balances</a></li>
                <li><a class="dropdown-item" href="punches.html">Team Leave Balances</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.html">Documents</a>
            </li>
  
         
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Attendance
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="checkin.html">My Attendence Records</a></li>
              <li><a class="dropdown-item" href="attendance-review.html">Mobile Checkin</a></li>
              <li><a class="dropdown-item" href="punches.html">Punches</a></li>
              <li><a class="dropdown-item" href="punches.html">My Regularization Requests</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="settings.html">Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>