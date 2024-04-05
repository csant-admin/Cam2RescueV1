
<nav class="navbar navbar-expand-lg bg-transparent text-dark py-3 p-3 shadow-lg unscrolled">
<div class="container">
    <a href="<?php echo BASE_URL . 'modules/home/index.php'?>" class="navbar-brand">
        <img src="assets/img/logo3.png" width="45" alt="" class="d-inline-block align-middle mr-2">
        <span class="text-uppercase font-weight-bold">Cam2Rescue</span>
    </a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><i class="fa fa-bars"></i></button>
    <div id="left-navigation-item" class="d-flex justify-content-end">
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active default-color"><a href="<?php echo BASE_URL . 'modules/home/index.php'?>" page-name="home" class="nav-link font-weight-bold text-lg text-dark"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/about/index.php'?>" page-name="about" class="nav-link font-weight-bold text-lg text-dark"><i class="fa fa-lightbulb"></i> About</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle font-weight-bold text-lg text-dark" data-bs-toggle="dropdown"><i class="fa fa-rocket"></i> Services</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/index.php'?>" page-name="dashboard">My Dashboard</a></li>
                    <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/post.php'?>" page-name="mypost">My Post</a></li>
                    <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/rescue.php'?>" page-name="rescue">For Rescue</a></li>
                    <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/request.php'?>" page-name="request">My Request</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/contact/index.php'?>" page-name="contact" class="nav-link font-weight-bold text-lg text-dark"><i class="fa fa-phone"></i> Contact</a></li>
            <?php 
                if(isset($_SESSION['userData'])): ?>
                    <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/logout/logout.php'?>" class="nav-link font-weight-bold text-lg text-dark"><i class="fa fa-user"></i> Logout</a></li>
                    <?php
                endif; 
            ?>
        </div>
    </div>
</nav>
