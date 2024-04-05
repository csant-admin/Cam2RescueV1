$(document).ready(function(){
    $('#register-user').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData($(this)[0]);
        $.ajax({
            url: base_url + 'modules/register/backend.php',
            method: 'post',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    Swal.fire({
                        title: "Successful",
                        text: `${response.msg}`,
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "OK"
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href= base_url + 'modules/login/login.php';
                        }
                      });
                } else {
                    Swal.fire({
                        text: `${response.msg}`,
                        allowOutSideClick: false,
                        showClass: {
                          popup: `
                            animate__animated
                            animate__fadeInUp
                            animate__faster
                          `
                        },
                        hideClass: {
                          popup: `
                            animate__animated
                            animate__fadeOutDown
                            animate__faster
                          `
                        }
                      });
                }
            }
        });
    });
})