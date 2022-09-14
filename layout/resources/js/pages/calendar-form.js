// CALENDAR FORM SCRIPT
'use strict';

$(document).ready(() => {

    // CALENDAR & APPOINTMENT
    const calendar = new Calendar($('.calendar table'), 2022, 8);
    const appointment = new Appointment($('.appointment'), appointmentSettings).generateAppointmentMap();

    calendar.setAppointment(appointment);

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

});