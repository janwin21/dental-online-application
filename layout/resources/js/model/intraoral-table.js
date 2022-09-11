// INTRAORAL TABLE SCRIPT
'use strict';

function IntraoralTable(parent, settings) {
    this.parent = parent;
    this.settings = settings;

    this.template = `<!-- Intraoral Template -->
        <td class="p-0 text-center">
            <img class="intraoral-tooth mt-1" src="../images/intraoral/intraoral-{{ type }}.png" alt="">
            <input readonly class="intraoral-input fs-xs p-1 w-100 text-center weight-600 roboto border boder-1 border-secondary mt-1" type="text" name="intraoral_{{ index }}">
            <p class="roboto fs-xs weight-600 mb-4">{{ no }}</p>
        </td>
    `;

    this.reverseTemplate = `<!-- Intraoral Reverse Template -->
        <td class="p-0 text-center">
            <p class="roboto fs-xs weight-600 mb-0 mt-4">{{ no }}</p>
            <input readonly class="intraoral-input fs-xs p-1 w-100 text-center weight-600 roboto border boder-1 border-secondary mb-1" type="text" name="intraoral_{{ index }}">
            <img class="intraoral-tooth mb-1" src="../images/intraoral/intraoral-{{ type }}.png" alt="">
        </td>
    `;

    this.setDetails = () => {

        let rowText = '';

        this.settings.forEach(setting => {

            let intraoralText = '';

            setting.data.forEach((d, i) => {
                const { type, no } = d;

                if(type !== 'empty')
                    intraoralText += ((!setting.isReversed) ? this.template : this.reverseTemplate)
                        .replace('{{ type }}', type)
                        .replace('{{ index }}', i)
                        .replace('{{ no }}', no);
                else 
                    intraoralText += '<td></td>';

            });

            rowText += `<tr>${intraoralText}</tr>`;
        });

        this.parent.html(rowText);
    }

}