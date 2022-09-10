// FORM SCRIPT
'use strict';

$(document).ready(() => {

    const date = new Date();
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    $('.form-control-left, .form-control-right').click(event => {
        const target = $(event.currentTarget);

        if(isChecked(target)) colorClass(target, target.hasClass('form-control-left'));
        if(isChecked(target)) colorClass(target, target.hasClass('form-control-right'));
    });

    const isChecked = target => { return target.find('input[type=radio]').is(':checked'); };
    
    const colorClass = (target, next) => { 
        let parent = target.addClass('bg-success text-light').parent()

        if(next) parent = parent.next();
        else parent = parent.prev();

        parent.children().removeClass('bg-success text-light');
    };

    // set the current date
    $('.date-p').text(`${months[date.getMonth()]}, ${date.getDate()} ${date.getFullYear()}`);

});