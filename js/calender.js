console.log("calender script");
$('#calendar').calendar({
    type: "date",
    initialDate: new Date(),
    eventDates: [{

            date: new Date(),
            message: 'Today',
            class: 'teal'
        },
        {
            date: new Date('2021-11-21'),
            message: 'School Festival',
            class: 'green'
        }
    ]
});