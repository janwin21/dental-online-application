// INTRAORAL FORM SCRIPT
'use strict';

import IntraoralTable from '../model/intraoral-table';
import IntraoralSelection from '../model/intraoral-selection';

$(document).ready(() => {

    const intraoralAcronym = $('.intraoral-acronym');
    const intraoralName = $('.intraoral-name');

    new IntraoralTable($('.intraoral table'), intraoralSettings).setDetails();
    
    const intraoralSelection = new IntraoralSelection($('.navigation-section .row'), legendSettings);
    const intraoralBtns = intraoralSelection.setDetails();

    intraoralBtns.on('mouseover', event => {
        let { acronym, name } = event.currentTarget.dataset;
        intraoralAcronym.text(acronym);
        intraoralName.text(name);
    });

    intraoralBtns.on('click', event => {
        let { acronym } = event.currentTarget.dataset;
        intraoralSelection.setValue(acronym);
    });

    let intraoralInputs = $('.intraoral-input');

    intraoralInputs.on('click', event => {
        let input = $(event.currentTarget);

        intraoralInputs.addClass('border-secondary border-1').removeClass('border-success border-2');
        input.addClass('border-success border-2');

        intraoralSelection.setInput(input);
    });

});