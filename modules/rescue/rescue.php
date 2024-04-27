<?php include '../../views/includes/head.php'; ?>
<?php include '../../views/includes/navbar.php'; ?>
<section>
    <div class="container">
        <div class="card rounded shadow-lg mt-5">
            <div class="card-body">
                <div class="card-header p-4 rounded shadow mb-3">
                    <h3>Rescue Form</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h6><strong>Note: </strong></h6>
                        <h6 class="lead" style="margin-bottom: 3rem;"> Make sure all the datails you have provided is accurate, true 
                            and detailed so that it will be easier for the rescuer to rescue the pet. Posting fraud 
                            information may lead to blocking of your account.
                        </h6>
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="lead"> Location </label>
                                <input type="text" name="location" class="form-control form-control-lg m-2" placeholder="Enter Location" required>
                                <i class="fa fa-map-marker fa-input-icon"></i>
                            </div>
                            <div class="col-md-6">
                                <label class="lead"> Pet </label>
                                <select class="form-select form-control form-control-lg m-2" name="type_of_pet" required>
                                    <option selected class="lead">Pet Type</option>
                                    <option value="dog" class="lead">Dog</option>
                                    <option value="cat" class="lead">Cat</option>
                                </select>
                                <i class="fa fa-info fa-input-icon"></i>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="lead">Pet Condition</label>
                                <select name="option" class="form-select form-control form-control-lg m-2" name="type_of_pet" required>
                                    <option selected >Select</option>
                                    <option value="severe" class="lead">Severe</option>
                                    <option value="with mild injury" class="lead">Mild</option>
                                    <option value="pure stray" class="lead">Others</option>
                                </select>
                                <i class="fa fa-info fa-input-icon"></i>
                            </div>
                            <div class="col-md-6">
                                <label class="lead"> Phone </label>
                                <input type="text" name="phone" class="form-control form-control-lg m-2" placeholder="Phone" required>
                                <i class="fa fa-phone fa-input-icon"></i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="lead"> Description </label>
                                <textarea id="Info" maxlength="500" class="form-control" rows="4" name="description" required></textarea>
                                <i class="fa fa-file-word fa-input-icon-text-area"></i>
                                <div id="count">500 Characters remaining</div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label class="lead">Upload Pet Image:</label>
                            <input class="form-control m-2" type="file" name="file[]" id="imageInput" accept="image/*" multiple>
                            <i class="fa fa-file fa-input-icon"></i>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <div class="image-preview" id="imagePreview">
                                <img src="" alt="Image Preview" class="image-preview__image">
                                <span class="image-preview__default-text">Image Preview</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-start mt-4">
                            <div class="col-md-4">
                                <button type="submit" name="submit" class="btn-button btn-lg">Post Rescue</button>
                            </div>
                        <div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include '../../views/includes/script.php'; ?>