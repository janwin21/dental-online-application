// TRANSFORMATION SCRIPT
'use strict';

$(document).ready(() => {

    const containerWrapper = $('.container-wrapper');
    const medicalForm = $('.medical-form')[0];
    const form = $('.form-transformation')[0];

    $(document).scroll(() => {
        if(medicalForm)
            if(medicalForm.getBoundingClientRect().y < 0) containerWrapper.addClass('dashboard-transformation');
            else containerWrapper.removeClass('dashboard-transformation');
        
        if(form)
            if(form.getBoundingClientRect().y < 0) containerWrapper.addClass('dashboard-transformation');
            else containerWrapper.removeClass('dashboard-transformation');
    });

});