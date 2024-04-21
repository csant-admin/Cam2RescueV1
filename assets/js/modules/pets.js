$(document).ready(function(){
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
    };

    $(document).on('click', '.adopt', function(e){
        e.preventDefault();
        const id = $(this).data("id");
        const petName = $(this).attr("pet-name");
        $.ajax({
            url: base_url + 'modules/pet/backend.php',
            method: 'POST',
            data: {petID : id, petName : petName},
            dataType: 'json',
            success:function(response) {
                if(response.success) {
                    var details = response.data
                    $.each(details, function( keys, value){
                        console.log(value);
                        $('input[name="' + keys + '"]').val(value);
                    })
                    window.location.href=base_url + 'modules/adoption/adoption.php'
                } else {
                    console.log('failed')
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        })
    })
})