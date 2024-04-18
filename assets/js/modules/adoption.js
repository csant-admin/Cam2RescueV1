// $(document).ready(function(){
//     var currentStep = 1;
    
//     $('.next-step').click(function(){
//         $('#step-' + currentStep).hide();
//         $('.step').eq(currentStep).removeClass('active');
//         currentStep++;
//         $('#step-' + currentStep).show();
//         $('.step').eq(currentStep - 1).addClass('active');
//     });

//     $('.prev-step').click(function(){
//         $('#step-' + currentStep).hide();
//         $('.step').eq(currentStep - 1).removeClass('active');
//         currentStep--;
//         $('#step-' + currentStep).show();
//         $('.step').eq(currentStep - 1).addClass('active');
//     });
// });
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
});