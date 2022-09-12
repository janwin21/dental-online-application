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
    
            if(calendar_arr.length == 0 && row.length <= this.getFirstDay()) {
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
        <button class="date-a roboto btn btn-{{ color }} {{ css }} hover-to-grayish px-3 py-4 rounded shadow-none" data-year="{{ yyyy }}" data-month="{{ mm }}" data-date="{{ dd }}">
            {{ dd }}
        </button>
    </td>`;

    this.tableHeader = `
        <tr>
            <th class="text-center"><p class="text-success roboto">SUN</p></th>
            <th class="text-center"><p class="text-success roboto">MON</p></th>
            <th class="text-center"><p class="text-success roboto">TUE</p></th>
            <th class="text-center"><p class="text-success roboto">WED</p></th>
            <th class="text-center"><p class="text-success roboto">THU</p></th>
            <th class="text-center"><p class="text-success roboto">FRI</p></th>
            <th class="text-center"><p class="text-success roboto">SAT</p></th>
        </tr>
    `;

    this.yearDisplay = $('.year-display');

    this.setDetails = () => {

        this.yearDisplay.find('h2').html(this.year);
        
        let trText = '';
       
        this.calendar_arr.forEach((arr, index) => {

            let tdText = '';
            let count = 0;
            const map = arr.reduce((cnt, cur) => (cnt[cur] = cnt[cur] + 1 || 1, cnt), {});
            
            arr.forEach((element, i) => {

                const today = this.year == this.date.getFullYear() && element == this.date.getDate();

                const date = (element != 0) ? element : (index == 0) ? 
                    (this.getDaysOfPrevMonth() - map[0] + 1 + i) : ++count;
                
                const month = (element != 0) ? this.month : (index == 0) ? this.month - 1 : this.month + 1;
                
                if(map[0] != this.daySize) tdText += this.tdTemplate
                    .replaceAll('{{ dd }}', (date.toString().length == 2) ? date : `0${date}`)
                    .replace('{{ yyyy }}', this.year)
                    .replace('{{ mm }}', month)
                    .replace('{{ color }}', today ? 'success' : 'light')
                    .replace('{{ css }}', today ? 'text-light' : (element != 0) ? 'text-dark' : 'text-danger');

            });
            
            trText += `<tr>${ tdText }</tr>`;

        });
        
        this.parent.html(this.tableHeader + trText);

    };

    this.setCurrentDate = () => { 
        this.date = new Date(); 
        this.displayDate() 
    };

    this.setDate = (year, month, date) => { 
        this.date = new Date(year, month, date); 
        this.displayDate() 
    };

    this.setAnchorEvent = () => {
        $('.date-a').click(event => {
            let { year, month, date } = event.currentTarget.dataset;
            this.setDate(parseInt(year), parseInt(month), parseInt(date));
        });
    };

    this.displayDate = () => {
        let month = this.months[this.date.getMonth()];
        let date = this.date.getDate();
        let year = this.date.getFullYear();

        $('.date-p').text(
            `${month}, 
            ${(date.toString().length == 2) ? date : `0${date}`} 
            ${year}`
        );
    }

    this.incrementYear = (value) => { 
        this.year += parseInt(value);
        this.generateCalendarArray();
        this.setDetails();
        this.setAnchorEvent();
    };

    this.setMonth = (index) => { 
        this.month = parseInt(index);
        this.generateCalendarArray();
        this.setDetails();
        this.setAnchorEvent();
    };

}