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
                        position: "center",
                        icon: "success",
                        title: `${response.title}`,
                        showConfirmButton: false,
                        timer: 2000
                      });
                      setTimeout(function(){
                        window.location.href= base_url + 'modules/home/index.php';
                      }, 2500)
                }
            }
        });
    });
})