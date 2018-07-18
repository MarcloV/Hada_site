<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="calendar">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<ul class="tabs">
						<li class="tab col s3"><a href="#test1">Chat 1</a></li>
						<li class="tab col s3"><a class="active" href="#test2">Chat 2</a></li>

					</ul>
					<div id='calendar' class="grey lighten-4"></div>
				</div>
			</div>
		</div>
	</div>

	<!--Calendar-->
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/fr.js'></script>
	<script>
		$(document).ready(function() {
			var viewCal;
			if ($(window).width() < 992) {
				viewCal = 'listWeek';
			} else {
				viewCal = 'month';
			}

			$('#calendar').fullCalendar({
				locale: 'fr',
				defaultDate: '2018-03-12',
				editable: false,
				defaultView: viewCal,
				eventLimit: true, // allow "more" link when too many events
				events: [{
						title: 'All Day Event',
						start: '2018-03-01'
					},
					{
						title: 'Long Event',
						start: '2018-03-07',
						end: '2018-03-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2018-03-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2018-03-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2018-03-11',
						end: '2018-03-13'
					},
					{
						title: 'Meeting',
						start: '2018-03-12T10:30:00',
						end: '2018-03-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2018-03-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2018-03-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2018-03-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2018-03-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2018-03-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2018-03-28'
					}
				]
			});

			$('.fc-right button').addClass('waves-effect waves-light btn');
			$('.fc-right button').removeClass('fc-prev-button fc-button fc-state-default fc-corner-left');
		});

	</script>


	<?php include "footer.php"?>
</body>

</html>
