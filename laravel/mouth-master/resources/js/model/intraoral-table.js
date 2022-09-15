// INTRAORAL TABLE MODEL
'use strict';

export default function IntraoralTable(parent, settings) {
    this.parent = parent;
    this.settings = settings;

    this.template = `<!-- Intraoral Template -->
        <td class="p-0 text-center">
            <img class="intraoral-tooth mt-1" src="{{ image_route }}" alt="">
            <input readonly class="intraoral-input fs-xs p-1 w-100 text-center weight-600 roboto border boder-1 border-secondary mt-1" type="text" name="intraoral_{{ index }}" value="{{ value }}">
            <p class="roboto fs-xs weight-600 mb-4">{{ no }}</p>
        </td>
    `;

    this.reverseTemplate = `<!-- Intraoral Reverse Template -->
        <td class="p-0 text-center">
            <p class="roboto fs-xs weight-600 mb-0 mt-4">{{ no }}</p>
            <input readonly class="intraoral-input fs-xs p-1 w-100 text-center weight-600 roboto border boder-1 border-secondary mb-1" type="text" name="intraoral_{{ index }}" value="{{ value }}">
            <img class="intraoral-tooth mb-1" src="{{ image_route }}" alt="">
        </td>
    `;

    this.setDetails = () => {

        let rowText = '';
        let count = 1;
        
        this.settings.forEach(setting => {

            let intraoralText = '';

            setting.data.forEach(d => {
                const { type, no, route } = d;

                if(type !== 'empty') {
                    intraoralText += ((!setting.isReversed) ? this.template : this.reverseTemplate)
                        .replace('{{ type }}', type)
                        .replace('{{ index }}', count)
                        .replace('{{ no }}', no)
                        .replace('{{ image_route }}', route)
                        .replace('{{ value }}', d.value ? d.value : '');

                    count++;
                } else 
                    intraoralText += '<td></td>';

            });

            rowText += `<tr>${intraoralText}</tr>`;
        });

        this.parent.html(rowText);
    }

}