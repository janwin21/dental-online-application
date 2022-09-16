// MODAL SCRIPT
'use strict';

$(document).ready(() => {

    const modal = $('.modal-section');

    modal.hide();
    modal.removeClass('fade');
    
    $('.close-btn, .cancel-btn').click(() => {
        modal.fadeOut(500, () => { 
            modal.find('.GET, .POST').addClass('d-none');
        });
    });

    $('.modal-trigger').click(event => {
        const { src, title, paragraph, color, btn, target } = event.currentTarget.dataset;
        const modalHeader = modal.find('.modal-header-box');
        const modalBody = modal.find('.modal-body');
        const modalFooter = modal.find('.modal-footer button[type=submit]');

        modalHeader.removeClass('bg-success');
        modalHeader.removeClass('bg-danger');
        modalHeader.removeClass('bg-warning');

        modalHeader.find('.close-btn').removeClass('bg-success');
        modalHeader.find('.close-btn').removeClass('bg-danger');
        modalHeader.find('.close-btn').removeClass('bg-warning');

        modalHeader.find('.close-btn').addClass(color);
        modalHeader.addClass(color);

        modalHeader.find('h5').text(title);
        modalBody.find('p').text(paragraph);

        modalFooter.removeClass('bg-success');
        modalFooter.removeClass('bg-danger');
        modalFooter.removeClass('bg-warning');

        modalFooter.addClass(color);
        modalFooter.text(btn);
        modalFooter.closest('form').attr('action', src);

        //console.log($(`#${target}`)[0])
        $(`.${target}`).removeClass('d-none');

        modal.fadeIn(500);
    });

});