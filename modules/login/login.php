<?php include '../../views/includes/head.php'; ?>
<?php include '../../views/includes/navbar.php'; ?>
<section>
    <div class="container mt-3 mb-3">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="card rounded-lg shadow mt-5">
                <div class="card-body">
                    <div class="card-header p-4 rounded shadow mb-3">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo BASE_URL . 'assets/images/img/model20.png' ?>"
                                class="img-fluid shadow-lg rounded" alt="Sample image">
                            </div>
                            <div class="col-md-6">
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
                                <div class="form-group row">
                                    <label> Username </label>
                                    <input type="text" name="username" id="username" class="form-control form-control-lg m-2 pl-1"
                                    placeholder="Enter a valid email address" />
                                    <i class="fa fa-envelope fa-input-icon"></i>
                                    <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                                </div>

                                <!-- Password input -->
                                <div class="row">
                                    <label> Password </label>
                                    <input type="password" name="password" id="pwd" class="form-control form-control-lg m-2" placeholder="Enter password" />
                                    <!-- <label class="form-label" for="form3Example4">Password</label> -->
                                    <i class="fa fa-key fa-input-icon"></i>
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

                                <div class="text-center text-lg-start mt-4">
                                    <button type="submit" value="Login" class="btn btn-button btn-lg"> Login </button>
                                    <p class="fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?php echo BASE_URL ?>modules/register/register.php"
                                        class="link-danger">Register</a></p>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../../views/includes/script.php'; ?>