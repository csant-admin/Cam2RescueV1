    <?php include '../../views/includes/head.php'; ?>
    <?php include '../../views/includes/navbar.php'; ?>
    <section class="home-intro">
        <br/><br/><br/><br/><br/>
        <?php 
            if(!isset($_SESSION['username'])) { ?>
                <div class="display">
                  <a href="login_user.php" class="register-btn w3-margin w3-round-large">Register Now</a>
                  <a href="login_user.php" class="login-btn w3-margin w3-round-large">Log In</a>
                </div>
                <?php 
            }
            if(isset($_SESSION['username'])) {
                $user = new ViewData();
                $uid = $user->getUserId();
                $user->showTypeOfUser($uid);
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
          <a href="users/donation-listorg.php" class="w3-btn-donate w3-round-large" href="#" role="button">Donate</a>
          <i><p>All of the donations process will only be by the use of GCash.</p></i>
        </p>
    </div>
    <?php include '../../views/includes/footer.php'; ?>
    <?php include '../../views/includes/script.php'; ?>