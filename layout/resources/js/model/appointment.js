// APPOINTMENT MODEL
'use strict';

function Appointment(parent, settings) {
    this.parent = parent;
    this.settings = settings;

    this.generateAppointmentMap = () => {
        let appointment_map = []; // format { date: [{}] }
        let tempArr = [];

        this.settings.forEach(setting => {

            if(!tempArr.includes(setting.date)) {
                tempArr.push(setting.date);
                appointment_map[setting.date] = [ setting ];
            } else {
                appointment_map[setting.date].push(setting);
            }

        });

        this.appointment_map = appointment_map;

        return this;
    }

    this.getAppointmentMap = () => { return this.appointment_map };

    // templates
    this.templateHeader = `<!-- Appointed User Lists -->
        <p class="roboto ms-2 fs-xs weight-600 text-grayish">Appointed Patients</p>
    `;

    this.templates = `<!-- Patient Appointed Item -->
        <a class="btn btn-light w-100 text-start shadow-none my-2 bg-calendar-{{ color }} hover-to-grayish" href="{{ route }}">
            <div class="row m-0 px-2 py-3">
                <h2 class="col-2 m-0 p-0 anton">LU</h2>
                <p class="col-10 m-0 p-0 roboto text-wrap fs-sm">{{ name }} 
                    <br><strong class="text-secondary fs-xs open-sans">{{ date }}</strong>
                    <br><strong class="text-secondary fs-xs open-sans">{{ startTime }}-{{ endTime }}</strong>
                    {{ done }}
                </p>
            </div>
        </a>
    `;

    this.emptyTemplate = `<!-- Empty Appointed Items -->
        <div class="btn bg-light-grayish w-100 text-start shadow-none my-2 hover-to-grayish" href="#">
            <div class="row m-0 px-2 py-3">
                <p class="col-10 m-0 p-0 roboto text-wrap fs-sm"><i class="fa-solid fa-hourglass me-3"></i>No Appointment Available</p>
            </div>
        </div>
    `;

    this.setDetails = appoint => {
        let text = '';

        if(appoint != 0)
            this.getAppointmentMap()[appoint].forEach(data => {
                let { route, name, done, color, date, startTime, endTime } = data;
                
                text += this.templates
                    .replace('{{ route }}', route)
                    .replace('{{ color }}', color)
                    .replace('{{ name }}', name)
                    .replace('{{ date }}', date)
                    .replace('{{ done }}', done ? '<br><br><strong class="fs-xs"><i class="fa-solid fa-check me-2"></i>DONE</strong>' : '')
                    .replace('{{ startTime }}', startTime)
                    .replace('{{ endTime }}', endTime);
            });

        this.parent.html(this.templateHeader + ((appoint != 0) ? text : this.emptyTemplate));
    };
}