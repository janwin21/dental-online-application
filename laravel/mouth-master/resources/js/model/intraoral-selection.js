// INTRAORAL SELECTION MODEL
'use strict';

export default function IntraoralSelection(parent, settings) {
    this.parent = parent;
    this.settings = settings;

    this.template = `<!-- Intraoral Selection Template -->
        <div class="col-3 p-1">
            <button type="button" class="intraoral-btn btn btn-light m-0 p-0 shadow-none w-100" data-acronym="{{ acronym }}" data-name="{{ name }}">
                <div class="text-center rounded px-2 pb-1 mt-0 shadow">
                    <h3 class="anton mx-0 py-2 p-0">{{ acronym }}</h3>
                    <p class="intraoral-name roboto m-0 mb-1 p-0 fs-xs">{{ name }}</p>
                </div>
            </button>
        </div>
    `;

    this.setDetails = () => {
        let { conditions, restorations, surgeries } = this.settings;
        this.setDetail(conditions, 0);
        this.setDetail(restorations, 1);
        this.setDetail(surgeries, 2);

        return $('.intraoral-btn');
    };

    this.setDetail = (elements, index) => {
        let templateText = '';

        elements.forEach(element => {
            let { acronym, name } = element;
            templateText += this.template
                .replaceAll('{{ acronym }}', acronym)
                .replaceAll('{{ name }}', name);
        });

        this.parent.eq(index).html(templateText);
    };

    this.setInput = input => { this.input = input; }
    this.setValue = value => { 
        if(this.input) this.input.val(value); 
    }
};