
<nav class="navbar navbar-expand-lg py-3 p-3 navbar-dark bg-transparent shadow-lg fixed-top fade-top">
<div class="container">
    <a href="#" class="navbar-brand">
        <img src="assets/img/logo3.png" width="45" alt="" class="d-inline-block align-middle mr-2">
        <span class="text-uppercase font-weight-bold">Cam2Rescue</span>
    </a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="#" page-name="home" class="nav-link font-weight-bold text-lg text-white">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="#" page-name="about" class="nav-link font-weight-bold text-lg text-white">About</a></li>
        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle font-weight-bold text-lg text-white" data-bs-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-lg font-weight-bold" href="#" page-name="dashboard">My Dashboard</a></li>
                <li><a class="dropdown-item text-lg font-weight-bold" href="#" page-name="mypost">My Post</a></li>
                <li><a class="dropdown-item text-lg font-weight-bold" href="#" page-name="rescue">For Rescue</a></li>
                <li><a class="dropdown-item text-lg font-weight-bold" href="#" page-name="request">My Request</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle font-weight-bold text-lg text-white" role="button" data-toggle="dropdown" area-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg> 
                <span class="badge bg-danger text-white" id="count">
                </span>
                </a>
                <ul class="dropdown-menu bg-transparent">
                </ul>
        </li>
        <li class="nav-item"><a href="#" page-name="contact" class="nav-link font-weight-bold text-lg text-white">Contact</a></li>
        <?php 
            if(!isset($_SESSION['username'])): ?>
                <li class="nav-item"><a href="#" page-name="login" class="nav-link font-weight-bold text-lg text-white">Login</a></li>
                <li class="nav-item"><a href="#" page-name="register" class="nav-link font-weight-bold text-lg text-white">Signup</a></li>
        <?php 
            else: ?>
                <li class="nav-item"><a href="logout.php" class="nav-link font-weight-bold text-lg text-white">Logout</a></li>
        <?php
            endif; ?>
  </div>
</nav>
