<?php session_start(); ?>
    <?php include '../../views/includes/head.php'; ?>
    <?php include '../../views/includes/navbar.php'; ?>
    <section class="home-intro">
        <?php 
            if(!isset($_SESSION['userData'])) { ?>
                <div class="d-flex justify-content-center mt-5">
                  <a href="<?php echo BASE_URL . 'modules/register/register.php'?>" class="nav-link register-btn btn-button ms-2" page-name="register">Register Now</a>
                  <a href="<?php echo BASE_URL . 'modules/login/login.php'?>" class="nav-link login-btn btn-button ms-2" page-name="login">Log In</a>
                </div>
                <?php 
            }
            elseif(isset($_SESSION['userData']) && (int)$_SESSION['userData']['userType'] === 2) { ?>
              <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo BASE_URL ?>modules/rescue/rescue.php" class="nav-link register-btn btn-button ms-2" page-name="register">Post Rescue</a>
                <a href="<?php echo BASE_URL . 'modules/pet/index.php'?>" class="nav-link login-btn btn-button ms-2" page-name="login">Adopt a Pet</a>
              </div>
				<?php 
            } else { ?>
              <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo BASE_URL ?>modules/rescue/rescue.php" class="nav-link register-btn btn-button ms-2" page-name="register">For Rescue</a>
                <a href="<?php echo BASE_URL . 'modules/pet/index.php'?>" class="nav-link login-btn btn-button ms-2" page-name="login">For Adoption</a>
              </div>
				<?php 
			}
        ?>
    </section>
    <div class="jumbotron p-4" style="background-color: #8fc1ec; margin-bottom:-1%;">
        <h1 class="display-4" style="color: white">Donations</h1>
        <p class="lead" style="color: black">If you believe that animals need help as much as humans do, 
          I encourage you to support and donate to organizations located in Cebu.
          Cam2Rescue is a place where  we prioritize the helpless strays. With our partnered organizations, 
          they are always called upon to rescue animals suffering from abandonment, abuse, 
          injury or neglect and none of it is possible without your support. Donations may be used to help cover the costs of daily operations, 
          supplies, staff training, animal housing upgrades, community outreach programs, animal enrichment and much more.
        </p>
        <hr class="my-4">
        <p class="lead">
          <a href="users/donation-listorg.php" class="w3-btn-donate btn-button" href="#" role="button">Donate</a>
          <i><p>All of the donations process will only be by the use of GCash.</p></i>
        </p>
    </div>
    <?php include '../../views/includes/footer.php'; ?>
    <?php include '../../views/includes/script.php'; ?>