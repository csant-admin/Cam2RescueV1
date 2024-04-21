        <script src="<?php echo BASE_URL . 'assets/js/jquery/library/jquery.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            var base_url = '<?php echo BASE_URL ?>'
        </script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/register.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/login.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/adoption.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/pets.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/jquery/library/my_jquery.js'; ?>"></script>
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

            function loadPets(page) {
                console.log('testpetsjs')
                $.ajax({
                    url: base_url + 'modules/pet/backend.php',
                    type: 'GET',
                    data: {page: page},
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $('#petList').html(response.pets); 
                        $('#pagination').html(response.pagination);
                    }
                });
            }

            $(document).ready(function(){
                previewImages();
                loadPets();
            })
        </script>
        <script>
            flatpickr("#dob #visit-date", {
                altInput: true, 
                altFormat: "F j, Y", 
                dateFormat: "Y-m-d", 
                maxDate: new Date() 
            });
        </script>
    </body>
</html>