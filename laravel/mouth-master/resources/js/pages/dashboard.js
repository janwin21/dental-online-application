// DASHBOARD SCRIPT
'use strict';

import IntraoralTable from '../model/intraoral-table';

$(document).ready(() => {
    
    new IntraoralTable($('.intraoral table'), intraoralSettings).setDetails();

});