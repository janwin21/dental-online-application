// DASHBOARD SCRIPT
'use strict';

$(document).ready(() => {

    const containerWrapper = $('.container-wrapper');
    const medicalForm = $('.medical-form')[0];

    $(document).scroll(() => {
        if(medicalForm.getBoundingClientRect().y < 0) containerWrapper.addClass('dashboard-transformation');
        else containerWrapper.removeClass('dashboard-transformation');
    });

});