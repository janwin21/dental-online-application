// FORM SCRIPT
'use strict';

function Calendar(parent, year, month) {
    this.parent = parent;
    this.year = year;
    this.month = month;

    this.daySize = 7;
    this.date = new Date();
    this.months = [ "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December"];

    this.generateCalendarArray = () => {

        // generate an array for calendar data
        let calendar_arr = [];
        let row = [];

        for(let i = 1; i <= this.getDays(); i++) {
    
            if(calendar_arr.length == 0 && row.length < this.getFirstDay()) {
                row.push(0);
                i--;
            } else {
                row.push(i);
            }
    
            if(row.length % this.daySize == 0) {
                calendar_arr.push(row.splice(0, row.length));
            }
            
        }

        // insert the remaining elements
        if(row.length != 0) {
            for(let i = row.length; i < this.daySize; i = row.length) {
                row.push(0);
            }

            calendar_arr.push(row.splice(0, row.length));
        }
        
        this.calendar_arr = calendar_arr;

    }

    this.getDate = () => { return this.date; };
    this.getMonths = () => { return this.months; };

    // get the days from specific year & month 
    this.getDays = () => { return this.date.getDays(this.year, this.month); };
    this.getDaysOfPrevMonth = () => { return this.date.getDays(this.year, this.month - 1); };

    // get the first day from specific year & month (day_index)
    this.getFirstDay = () => { return this.date.getFirstDay(this.year, this.month); };
    
    this.getGenerateCalendarArray = () => { return this.calendar_arr };

    // setting templates and details
    this.tdTemplate = `<td class="text-center">
        <a class="text-dark roboto btn btn-light hover-to-grayish px-3 py-4 rounded shadow-none" href="#">
            {{ dd }}
        </a>
    </td>`;

    this.setDetails = () => {
       
        this.calendar_arr.forEach((arr, index) => {

            let tdText = '';
            let count = 0;
            const map = arr.reduce((cnt, cur) => (cnt[cur] = cnt[cur] + 1 || 1, cnt), {});
            
            arr.forEach((element, i) => {
                
                tdText += this.tdTemplate
                    .replace('{{ dd }}', (element != 0) ? element : 
                        (index == 0) ? (this.getDaysOfPrevMonth() - map[0] + 1 + i) : ++count);

                console.log(this.year == this.date.getFullYear() && element == this.date.getDate());
            });

            this.parent.html(`${ this.parent.html() }<tr>${ tdText }</tr>`);

        });

    };

    this.setCurrentDate = () => {
        $('.date-p').text(
            `${this.months[this.date.getMonth()]}, ${this.date.getDate()} ${this.date.getFullYear()}`
        );
    };

}