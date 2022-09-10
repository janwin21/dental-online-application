// TRANSFORMATION SCRIPT
'use strict';

$(document).ready(() => {

    const containerWrapper = $('.container-wrapper');
    const medicalForm = $('.medical-form')[0];
    const occupation = $('.occupation-transformation')[0];

    $(document).scroll(() => {
        if(medicalForm)
            if(medicalForm.getBoundingClientRect().y < 0) containerWrapper.addClass('dashboard-transformation');
            else containerWrapper.removeClass('dashboard-transformation');
        
        if(occupation)
            if(occupation.getBoundingClientRect().y < 0) containerWrapper.addClass('dashboard-transformation');
            else containerWrapper.removeClass('dashboard-transformation');
    });

});