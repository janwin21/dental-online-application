// FORM SCRIPT
'use strict';

$(document).ready(() => {

    const calendar = new Calendar($('.calendar table'), 2022, 8);

    let date = calendar.getDate();
    let months = calendar.getMonths();

    // DATE class configuration
    Date.prototype.getDays= function(yyyy, monthIndex) {
        var d= new Date(yyyy, monthIndex + 1, 0);
        return d.getDate();
    }
    
    Date.prototype.getFirstDay= function(yyyy, monthIndex) {
        var d= new Date(yyyy, monthIndex, 1);
        return d.getDay();
    }

    calendar.generateCalendarArray();
    calendar.setDetails();
    calendar.setCurrentDate();

});