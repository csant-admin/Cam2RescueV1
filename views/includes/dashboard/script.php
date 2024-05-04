<script src="<?= BASE_URL ?>assets/js/jquery/library/jquery.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/sidebarmenu.js"></script>
<script src="<?= BASE_URL ?>assets/js/app.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/apexcharts.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/simplebar.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script> 
    var base_url = '<?php echo BASE_URL ?>'; 
</script>
<script src="<?= BASE_URL ?>assets/js/dashboard.js"></script>
<script src="<?= BASE_URL ?>assets/js/modules/dasboard.js"></script>
<script src="<?= BASE_URL ?>assets/js/modules/user.js"></script>

<script>
    function previewImages() {
        $('#imageInput').change(function() {
            $('#imagePreview').empty(); // Clear previous previews
            
            const files = this.files;
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                if (file) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const img = $('<img>').attr('src', e.target.result).css({'max-width': '300px', 'max-height': '300px'});
                        $('#imagePreview').append(img);
                    }
                    
                    reader.readAsDataURL(file);
                }
            }
        });
    }

    $(document).ready(function(){
        previewImages();
    })
</script>
      <div class="modal fade" id="postPetModal" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg mt-5" id="editModal">
              <div class="modal-content p-5">
                  <form id="postPetForm">
                      <div id="error-message-alert"></div>
                      <input type="hidden" class="form-input form-control form-control-lg" name="user_id">
                      <div class="row">
                          <label> Name </label>
                          <div class="col-md-6">
                              <input type="text" class="form-input form-control form-control-lg" name="Pet_Name">
                              <i class="fa fa-user fa-input-icon"></i>
                          </div>
                          <label> Gender </label>
                          <div class="col-md-6">
                                <select class="form-control form-control-lg" name="Pet_Gender">
                                  <option selected value="M">Male</option>
                                  <option selected value="F">Male</option>
                                </select>
                                <i class="fa fa-calendar fa-input-icon"></i>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label> Health Condition </label>
                              <select class="form-control form-control-lg" name="Pet_Condition">
                                  <option selected value="">Neutered</option>
                              </select>
                              <i class="fa fa-calendar fa-input-icon"></i>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <label class="lead"> Description </label>
                              <textarea id="Info" maxlength="500" class="form-control" rows="4" name="Pet_Description" required></textarea>
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
                      <div class="row mt-5">
                          <div class="d-flex justify-content-start">
                              <button type="submit" class="btn btn-primary btn-lg ml-2">Save Changes</button>
                              <button type="submit" class="btn btn-danger btn-lg ml-2">Cancel</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
        </body>
      </html> 