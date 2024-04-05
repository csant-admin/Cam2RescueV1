<?php include '../../views/includes/head.php'; ?>
<?php include '../../views/includes/navbar.php'; ?>
<section class="vh-100">
    <div class="container-fluid">
        <div class="card p-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h6><strong>Note: </strong></h6>
                        <h6 class="lead" style="margin-bottom: 3rem">&#160 Make sure all the datails you have provided is accurate, true 
                            and detailed so that it will be easier for the rescuer to rescue the pet. Posting fraud 
                            information may lead to blocking of your account.
                        </h6>
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label> Location </label>
                                <input type="text" name="location" class="form-control form-control-lg m-2" placeholder="Enter Location" required>
                                <i class="fa fa-map-marker fa-input-icon"></i>
                            </div>
                            <div class="col-md-6">
                                <label> Pet </label>
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
                                <label class="lead">Pet condition?</label>
                                <select name="option" class="form-select form-control form-control-lg m-2" name="type_of_pet" required>
                                    <option selected >Select</option>
                                    <option value="severe" class="lead">Severe</option>
                                    <option value="with mild injury" class="lead">Mild</option>
                                    <option value="pure stray" class="lead">Others</option>
                                </select>
                                <i class="fa fa-info fa-input-icon"></i>
                            </div>
                            <div class="col-md-6">
                                <label> Phone </label>
                                <input type="text" name="phone" class="form-control form-control-lg m-2" placeholder="Phone" required>
                                <i class="fa fa-phone fa-input-icon"></i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label> Description </label>
                                <textarea id="Info" maxlength="500" placeholder="Description" class="form-control " rows="4" name="description" required></textarea>
                                <div id="count">500 Characters remaining</div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label class="mr-2">Upload Pet Image:</label>
                            <input type="file" name="file[]" multiple>
                        </div>
                        <div class="col-10 text-center mt-3">
                            <button type="submit" name="submit" class="btn btn-primary form-control form-control-lg m-2 p-2">Post Rescue</button>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-5 m-1"></div>
                        <div class="col-md-5 m-1">
                            <div class="image-preview" id="imagePreview">
                                <img src="" alt="Image Preview" class="image-preview__image">
                                <span class="image-preview__default-text">Image Preview</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include '../../views/includes/script.php'; ?>