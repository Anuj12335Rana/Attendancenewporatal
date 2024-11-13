@extends('userdashboard.layout.main')
@section('main-section')
<!-- Dashboard Body centered on page -->
<div class="dashboard-container">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center">
      
      <!-- User Profile Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>User Profile</h5>
          <p>Manage your profile details</p>
          <a href="userprofile.html" class="btn btn-primary btn-sm">View Profile</a>
        </div>
      </div>
      
      <!-- Settings Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Settings</h5>
          <p>Customize your preferences</p>
          <a href="settings.html" class="btn btn-secondary btn-sm">Settings</a>
        </div>
      </div>
      
      <!-- Check-In Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Check-In</h5>
          <p>Mark your attendance</p>
          <a href="checkin.html" class="btn btn-success btn-sm">Check-In</a>
        </div>
      </div>
      
      <!-- Mobile Check-In Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Mobile Check-In</h5>
          <p>Mark attendance on mobile</p>
          <a href="mobile-checkin.html" class="btn btn-info btn-sm">Mobile Check-In</a>
        </div>
      </div>
      
      <!-- Review Attendance Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Review Attendance</h5>
          <p>View your attendance history</p>
          <a href="attendance-review.html" class="btn btn-warning btn-sm">Review Attendance</a>
        </div>
      </div>
      
      <!-- Logout Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Logout</h5>
          <p>Sign out of your account</p>
          <a href="logout.html" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </div>
      
      <!-- Attendance Sheet Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Attendance Sheet Review</h5>
          <p>Review your daily attendance</p>
          <a href="attendance-sheet.html" class="btn btn-danger btn-sm">Review</a>
        </div>
      </div>
      
      <!-- Punches Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Punches</h5>
          <p>Mark punches</p>
          <a href="punches.html" class="btn btn-danger btn-sm">Review Punches</a>
        </div>
      </div>
      
      <!-- Employee Lists Card -->
      <div class="col">
        <div class="dashboard-card">
          <h5>Employee Lists</h5>
          <p>View other employees</p>
          <a href="employee-lists.html" class="btn btn-warning btn-sm">View Employees</a>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection


