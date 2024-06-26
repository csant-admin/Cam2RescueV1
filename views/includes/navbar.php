
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark py-3 p-3 shadow-lg unscrolled">
            <div class="container">
                <a href="<?php echo BASE_URL . 'modules/home/index.php'?>" class="navbar-brand">
                    <img src="<?= BASE_URL ?>assets/images/img/logo3.png" width="45" alt="" class="d-inline-block align-middle mr-2">
                    <!-- <img src="<?= BASE_URL ?>assets/images/img/logo3.png" width="180" alt="" /> -->
                    <span class="text-uppercase font-weight-bold">Cam2Rescue</span>
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active default-color"><a href="<?php echo BASE_URL . 'modules/dashboard/index.php'?>" page-name="dashboard" class="nav-link font-weight-bold text-lg"><i class="fa fa-tachometer"></i> Dashboard <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/home/index.php'?>" page-name="home" class="nav-link font-weight-bold text-lg"><i class="fa fa-home"></i> Home</a></li>
                        <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/about/index.php'?>" page-name="about" class="nav-link font-weight-bold text-lg"><i class="fa fa-lightbulb"></i> About</a></li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle font-weight-bold text-lg" data-bs-toggle="dropdown"><i class="fa fa-rocket"></i> Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/post.php'?>" page-name="mypost">My Post</a></li>
                                <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/rescue.php'?>" page-name="rescue">For Rescue</a></li>
                                <li><a class="dropdown-item text-lg font-weight-bold" href="<?php echo BASE_URL . 'modules/dashboard/request.php'?>" page-name="request">My Request</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/contact/index.php'?>" page-name="contact" class="nav-link font-weight-bold text-lg"><i class="fa fa-phone"></i> Contact</a></li>
                        <?php 
                            if(isset($_SESSION['userData'])): ?>
                                <li class="nav-item"><a href="<?php echo BASE_URL . 'modules/logout/logout.php'?>" class="nav-link font-weight-bold text-lg"><i class="fa fa-user"></i> Logout</a></li>
                                <?php
                            endif; 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
</div>
