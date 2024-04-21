
<?php 

    session_start();

    include '../../views/includes/head.php';
    include '../../views/includes/navbar.php';

?>
<section class="vh-100">
    <div class="container mt-4 mb-4">
        <div class="col-md-12">
            <div class="card rounded shadow mt-5">
                <div class="card-body">
                    <div class="card-header p-4 rounded shadow">
                        <h3>Adoption Form</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="row mb-4">
                                <div class="col text-center">
                                    <div class="step active">
                                        <div class="step-number">1</div>
                                        <div class="step-title">Personal Information</div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="step">
                                        <div class="step-number">2</div>
                                        <div class="step-title">Occupation</div>
                                        <div class="step-connector"></div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="step">
                                        <div class="step-number">3</div>
                                        <div class="step-title">Schedule</div>
                                        <div class="step-connector"></div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="step">
                                        <div class="step-number">4</div>
                                        <div class="step-title">Other Information</div>
                                        <div class="step-connector"></div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="step">
                                        <div class="step-number">5</div>
                                        <div class="step-title">Summary</div>
                                        <div class="step-connector"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="multi-step-adoption-form">
                            <div id="step-1" class="step-content">
                                <h3 class="mt-2 mb-5">Step 1: Personal Information</h3>
                                <input type="hidden" class="form-control form-control-lg m-2" placeholder="First name..." name="Adoption_PetId" readonly>
                                <input type="hidden"class="form-control form-control-lg m-2" placeholder="First name..." name="Adoption_PetName" readonly>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="lead"> First Name</label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="First name..." name="Adoption_Firstname" readonly>
                                        <i class="fa fa-user fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="lead"> Last Name </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Last name..." name="Adoption_Lastname" readonly>
                                        <i class="fa fa-user fa-input-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Email </label>
                                        <input type="email" class="form-control form-control-lg m-2" placeholder="Email" name="Adoption_Username" readonly>
                                        <i class="fa fa-envelope fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Phone </label>
                                        <input type="tel" class="form-control form-control-lg m-2" placeholder="Phone" name="Adoption_Contact" readonly>
                                        <i class="fa fa-envelope fa-input-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Barangay </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Barangay" name="Adoption_Barangay" readonly>
                                        <i class="fa fa-map-marker fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="lead"> City </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="City" name="Adoption_City" readonly>
                                        <i class="fa fa-map-marker fa-input-icon"></i>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-button next-step">Next</button>
                            </div>

                            <!-- Step 2: Contact Information -->
                            <div id="step-2" class="step-content" style="display: none;">
                                <h3 class="mt-2 mb-5">Step 2: Occupation</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="lead"> Job Title </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Job Title..." name="Job_Title">
                                        <i class="fa fa-info fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="lead"> Conpany Name </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Company Name..." name="Company_Name">
                                        <i class="fa fa-info fa-input-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Net Income </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Monthly Net Income..." name="Net_Income">
                                        <i class="fa fa-dollar fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Job Set-up </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Job Setup..." name="Job_Setup">
                                        <i class="fa fa-info fa-input-icon"></i>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-button prev-step">Previous</button>
                                <button type="button" class="btn btn-button next-step">Next</button>
                            </div>

                            <div id="step-3" class="step-content" style="display: none;">
                                <h3 class="mt-2 mb-5">Step 3: Schedule</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="lead"> Visit Date</label>
                                        <input type="text" id="visit-date" class="form-control form-control-lg m-2" placeholder="Visit Date..." name="Visit_Date">
                                        <i class="fa fa-calendar fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="lead"> Visit Time </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Visit Time..." name="Visit_Time">
                                        <i class="fa fa-clock fa-input-icon"></i>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-button prev-step">Previous</button>
                                <button type="button" class="btn btn-button next-step">Next</button>
                            </div>
                            <div id="step-4" class="step-content" style="display: none;">
                                <h3 class="mt-2 mb-5">Step 4: Other Information</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="lead">Personal Home Set-up</label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Home Setup..." name="Home_Setup">
                                        <i class="fa fa-user fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="lead"> Gated </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Gated..." name="Gated">
                                        <i class="fa fa-user fa-input-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Transparency </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Family Awarnes" name="Fam_Awareness">
                                        <i class="fa fa-envelope fa-input-icon"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="lead"> Do you have pet currently </label>
                                        <input type="text" class="form-control form-control-lg m-2" placeholder="Do you have pet..." name="Owned_Pet">
                                        <i class="fa fa-envelope fa-input-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="lead"> Reason For Adoption </label>
                                        <textarea id="Info" maxlength="1000" class="form-control" rows="4" name="Reason" required></textarea>
                                        <i class="fa fa-file-word fa-input-icon-text-area"></i>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-button prev-step">Previous</button>
                                <button type="button" class="btn btn-button next-step" id="show-summary">Next</button>
                            </div>
                            <div id="step-5" class="step-content" style="display: none">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <h3 class="mt-2 mb-5">Step 5: Summary</h3>
                                    </div>
                                    <div class="card-body mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span>
                                                    <img src="<?= BASE_URL ?>assets/images/img/logo3.png" class="fa-images-logo">
                                                    <h1 class="lead">Cam2Rescue</h1>
                                                </span>  
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p> Adoption ID : </p> -->
                                                <p> Date : <?php echo date('F j, Y'); ?> </p>
                                                <p id="Adoption_PetName"> Pet Name: </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="card">
                                                <div class="card-header bg-warning">
                                                    <h3 class="text-white">Persional Information</h3>
                                                </div>
                                                <div class="card-body mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p id="Name"> Name : </p>
                                                            <p id="Address"> Address: </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p id="Phone"> Phone : </p>
                                                            <p id="Email"> Email : </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="card">
                                                <div class="card-header bg-warning">
                                                    <h3 class="text-white">Occupation</h3>
                                                </div>
                                                <div class="card-body mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p id="Company">Company Name: </p>
                                                            <p id="Job_Title">Job Title: </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p id="Job_Setup">Job Setup: </p>
                                                            <p id="Net_Income">Net Income: </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="card">
                                                <div class="card-header bg-warning">
                                                    <h3 class="text-white">Booked Schedule</h3>
                                                </div>
                                                <div class="card-body mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p id="Sch_date"> Date : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p id="Sch_time"> Time : </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="card">
                                                <div class="card-header bg-warning">
                                                    <h3 class="text-white"> Addional Information</h3>
                                                </div>
                                                <div class="card-body mb-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p id="Home_Setup"> Home Setup : </p>
                                                            <p id="Gated"> Gated : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p id="Fam_Awareness"> Transparency : </p>
                                                            <p id="Own_Pet"> Do you have pet currently : </p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p id="Reason"> Reason For Adoption : </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content start mt-4">
                                            <button type="button" class="btn btn-button prev-step m-2 ">Previous</button>
                                            <button type="submit" class="btn btn-button m-2">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../../views/includes/script.php'; ?>
<script>
    $(document).ready(function() {
        var adoptionData = JSON.parse(localStorage.getItem('adoptionData'));
        $.each(adoptionData, function(key, value) {
            console.log(value)
            $('input[name="' + key + '"]').val(value);
        });
        localStorage.removeItem('adoptionData');
    })
</script>