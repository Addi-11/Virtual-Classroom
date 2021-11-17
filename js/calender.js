console.log("calender script");
$('#calendar').calendar({
    type: "date",
    initialDate: new Date(),
    eventDates: [{

            date: new Date(),
            message: 'Show me in light purple',
            class: 'inverted purple'
        },
        {
            date: new Date('2021-11-22'),
            message: 'Show me in green',
            class: 'green'
        }
    ]
});