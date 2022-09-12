// FORM SCRIPT
'use strict';

$(document).ready(() => {

    const calendar = new Calendar($('.calendar table'), 2022, 8);

    let date = calendar.getDate();
    let months = calendar.getMonths();

    // DATE class configuration
    Date.prototype.getDays= function(year, monthIndex) {
        var d = new Date(year, parseInt(monthIndex) + 1, 0);
        return d.getDate();
    }
    
    Date.prototype.getFirstDay= function(year, monthIndex) {
        var d = new Date(year, parseInt(monthIndex), 0);
        return d.getDay();
    }

    calendar.generateCalendarArray();
    calendar.setDetails();
    calendar.setCurrentDate();
    calendar.setAnchorEvent();

    $('.year-btn').click(event => {
        calendar.incrementYear(event.currentTarget.dataset.value);
    });

    $('.month-btns').click(event => {
        calendar.setMonth(event.currentTarget.dataset.index);
    });

    console.log('January', new Date(2022, 1, 0).getDate());
    console.log('February', new Date(2022, 2, 0).getDate());

});