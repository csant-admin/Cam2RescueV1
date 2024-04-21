$(document).ready(function(){
    var currentStep = 1;
    
    $('.next-step').click(function(){
        $('#step-' + currentStep).hide();
        $('.step').eq(currentStep - 1).removeClass('active');
        currentStep++;
        $('#step-' + currentStep).show();
        $('.step').eq(currentStep - 1).addClass('active');
    });

    $('.prev-step').click(function(){
        $('#step-' + currentStep).hide();
        $('.step').eq(currentStep - 1).removeClass('active');
        currentStep--;
        $('#step-' + currentStep).show();
        $('.step').eq(currentStep - 1).addClass('active');
    });

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
                    localStorage.setItem('adoptionData', JSON.stringify(details));
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

    $(document).on('click', '#show-summary', function(e){
        e.preventDefault();
        const form = document.getElementById('multi-step-adoption-form');
        const formData = new FormData(form);
        $('#Adoption_PetName').html('<p> Pet Name : '+ formData.get('Adoption_PetName') + '</p>');
        $('#Name').html('<p> Name : '+ formData.get('Adoption_Firstname') + ' ' + formData.get('Adoption_Lastname')+ '</p>');
        $('#Address').html('<p> Address : ' + formData.get('Adoption_Barangay') + ' ' + formData.get('Adoption_City') + '</p>');
        $('#Phone').html('<p> Phone Number : '+ formData.get('Adoption_Contact') + '</p>');
        $('#Email').html('<p> Email : '+ formData.get('Adoption_Username') + '</p>');
        $('#Company').html('<p> Company : '+ formData.get('Company_Name') + '</p>');
        $('#Job_Title').html('<p> Job Title : '+ formData.get('Job_Title') + '</p>');
        $('#Job_Setup').html('<p> Job Setup : '+ formData.get('Job_Setup') + '</p>');
        $('#Net_Income').html('<p> Net Income : '+ formData.get('Net_Income') + '</p>');
        $('#Sch_date').html('<p> Schedule Date : '+ formData.get('Visit_Date') + '</p>');
        $('#Sch_time').html('<p> Schedule Time : '+ formData.get('Visit_Time') + '</p>');
        $('#Home_Setup').html('<p> Home Setup : '+ formData.get('Home_Setup') + '</p>');
        $('#Gated').html('<p> Is Your Home Gated ? : '+ formData.get('Gated') + '</p>');
        $('#Fam_Awareness').html('<p> Is Your Family Aware ? : '+ formData.get('Fam_Awareness') + '</p>');
        $('#Own_Pet').html('<p> Do You Have a Pet ? : '+ formData.get('Owned_Pet') + '</p>');
        $('#Reason').html('<p> Reason : '+ formData.get('Reason') + '</p>');
    });

    $(document).on('submit', '#multi-step-adoption-form', function(e) {
        e.preventDefault();
        const formdata = new FormData($(this)[0]);
        $.ajax({
            url: base_url + 'modules/adoption/backend.php',
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
                        title: "Your work has been saved",
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
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        })
    })
    
});