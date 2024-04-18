$(document).ready(function(){

    function loadUsers(page) {
        $.ajax({
            url: base_url + 'modules/user/backend.php',
            type: 'GET',
            data: {page: page},
            dataType: 'json',
            success: function(response) {
                $('#userList').html(response.users); 
                $('#pagination').html(response.pagination);
            }
        });
    }

    loadUsers(1);

    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        loadUsers(page);
    });


    $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        $('.bd-edit-modal-lg').modal('show');
        $.ajax({
            url : base_url + 'modules/user/backend.php',
            method: 'POST',
            data: { action: 'editUserFetchDetails', userID : id},
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    var user_detail = response.data
                    $.each(user_detail, function( keys, value){
                        $('input[name="' + keys + '"]').val(value);
                    })
                } else {
                    console.log('failed')
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        })
    });

    $(document).on('submit', '#editDataForm', function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        formData.append('action', 'editData');
        console.log(formData);
        Swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
            allowOutsideClick: false 
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'modules/user/backend.php',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success) {
                            Swal.fire({
                                title: "Updated!",
                                text:  `${response.msg}`,
                                icon: "success"
                            });
                            setTimeout(function(){
                                window.location.reload();
                            }, 500)
                        } else {
                            var message = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>ERROR!</strong> ${response.msg}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>`
                            $('#error-message-alert').html(message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                })
            }
        });
    });

    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You wont be able to revert this",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
            allowOutsideClick: false 
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'modules/user/backend.php',
                    method: 'POST',
                    data: { action : 'deleteUser', userID : id },
                    dataType: 'json',
                    success: function(response){
                        if(response.success) {
                            Swal.fire({
                                title: "Deleted!",
                                text:  `${response.msg}`,
                                icon: "success"
                            });
                            setTimeout(function(){
                                window.location.reload();
                            }, 500)
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
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                })
            }
        });
    });

    $(document).on('click', '.activate-deactivate', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        const status = $(this).data('status');
        console.log(id);
        console.log(status);
        Swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
            allowOutsideClick: false 
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'modules/user/backend.php',
                    method: 'POST',
                    data: { action : 'updateUserStatus', userID : id, account_status : status },
                    dataType: 'json',
                    success: function(response){
                        if(response.success) {
                            Swal.fire({
                                title: `${response.title}`,
                                text:  `${response.msg}`,
                                icon: "success"
                            });
                            setTimeout(function(){
                                window.location.reload();
                            }, 1000)
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
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                })
            }
        });
    })
});
