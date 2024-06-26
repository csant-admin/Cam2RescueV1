<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?= BASE_URL ?>assets/images/img/logo3.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>modules/dashboard/index.php" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-layout-dashboard"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/board.png" class="fa-images">
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">MODULES</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>modules/home/index.php" aria-expanded="false">
                <span>
                  <!-- <i class="fa fa-home"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/logo3.png" class="fa-images">
                </span>
                <span class="hide-menu">Home</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>modules/dashboard/adoption_request.php" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-article text-info"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/adopts.png" class="fa-images">
                </span>
                <span class="hide-menu">Adoption Request</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>rescue" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-alert-circle text-danger"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/rescues.png" class="fa-images">
                </span>
                <span class="hide-menu">For Rescue</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>donation" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-box text-success"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/donates.png" class="fa-images">
                </span>
                <span class="hide-menu">Donation</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= BASE_URL ?>modules/user/index.php" aria-expanded="false">
                <span>
                  <!-- <i class="ti ti-user"></i> -->
                  <img src="<?= BASE_URL ?>/assets/images/img/users.png" class="fa-images">
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      <!-- End Sidebar scroll-->
    </aside>