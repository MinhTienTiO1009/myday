<?php
include 'Model/sukien.php';
?>

    <div id='calendar'></div>
    <script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js
"></script>
    <script>
        const sukiens = <?php echo json_encode($sukien) ?>

        const events = sukiens.map(sukien => ({
            title: sukien.TenSK,
            start: sukien.ThoiGian,
        }))
        
        console.log(events);
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today addNewButton', // Add your custom button name here
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                customButtons: {
                    addNewButton: {
                        text: 'Add New',
                        click: function() {
                            // Handle the click event of the custom button
                            // You can open a modal, redirect to another page, etc.
                            window.location.href = "./view/Sukien/themmoi.php";
                        }
                    }
                },
                // eventContent: {
                //     domNodes: events
                // },
                events: events

            });
            calendar.render();
        });
    </script>
