$(document).ready(function() {

    function loadAdoptionRequest(page) {
      $.ajax({
        url: base_url + 'modules/dashboard/viewDashboard.php',
        type: 'GET',
        data: {page: page},
        dataType: 'json',
        success:function(response) {
          $('#adoptionTbl').html(response.adoption);
          $('#pagination').html(response.pagination);
        }
      })
    }

    loadAdoptionRequest(1);

    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        console.log('test');
        var page = $(this).data('page');
        loadAdoptionRequest(page);
    });

    $('#postPetForm').on('submit', function(e) {
        e.preventDefault();
        const formdata = new FormData($(this)[0]);
        $.ajax({
            url: base_url + 'modules/dashboard/viewDashboard.php',
            method: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(response) {
                if(response.success) {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: `${response.msg}`,
                        showConfirmButton: false,
                        timer: 1500
                      });
                } else {
                    Swal.fire({
                        title: `${response.msg}`,
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
            },
            error:function(error) {

            }
        })
    })

});