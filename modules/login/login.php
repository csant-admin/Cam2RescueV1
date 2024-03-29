<?php include '../../views/includes/head.php'; ?>
<?php include '../../views/includes/navbar.php'; ?>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?php echo BASE_URL . 'assets/images/img/model20.png' ?>"
            class="img-fluid shadow-lg rounded" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form id="form-login">
                <div id="success-message-container"></div>
                <div id="error-message-container"></div>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                    <img src="<?php echo BASE_URL . 'assets/images/img/logo3.png' ?>" width="45" alt="" class="d-inline-block align-middle mr-2">
                    <span class="text-uppercase font-weight-bold">Cam2Rescue</span>
                </div>
                <br/>
                <!-- Email input -->
                <div class="form-input mb-5">
                    <input type="text" name="username" id="usr" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                    <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                </div>

                <!-- Password input -->
                <div class="form-input mb-4">
                    <input type="password" name="password" id="pwd" class="form-control form-control-lg" placeholder="Enter password" />
                    <!-- <label class="form-label" for="form3Example4">Password</label> -->
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                        Remember me
                    </label>
                    </div>
                    <a href="recover_psw.php" class="text-body">Forgot password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" value="Login" class="btn btn-button btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;"> Login </button>
                    <p class="fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="users/registration.php"
                        class="link-danger">Register</a></p>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
<?php include '../../views/includes/script.php'; ?>