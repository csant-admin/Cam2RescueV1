$(document).ready(function(){
    $('#form-login').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData($(this)[0]);
        $.ajax({
            url: base_url + 'modules/login/backend.php',
            method: 'post',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "OK"
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href= base_url + 'modules/home/index.php';
                        }
                      });
                }
            }
        });
    });
})