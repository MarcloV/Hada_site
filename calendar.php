<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="calendar">
		<div class="row">
			<div class="col s12">
				<div id="card">

					<div class="front">
						<div class="card card-blue">
							<div class="row">
								<div class="col s12">
									<h5 class="title-page">Calendrier</h5>
									<div class="grey lighten-4">
										<div class="row">
											<div class="col s12" style="text-align:center">
												<div id='calendar' class="grey lighten-4"></div>
												<a class="waves-effect waves-light btn" id="btn-flip">Ajouter un évènement</a>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
					<div class="back">
						<div class="card card-blue">
							<div class="row" style="text-align:center;">
								<div class="col s12">
									<h5 class="title-page">Ajouter un évènement</h5>
								</div>
								<form class="col s12 white" style="margin-bottom:40px;">
									<div class="input-field col s12">
										<div class="input-field col s12">
											<input id="titre_ev" type="text">
											<label for="titre_ev">Titre</label>
										</div>
										<div class="input-field col s12">

											<select multiple>
												<option value="1" selected>Chat 1</option>
												<option value="2">Chat 2</option>
												<option value="3">Chat 3</option>
											</select>
											<label>Chat</label>
										</div>
										<div class="input-field col s12">
											<input id="date" type="text" class="datepicker">
											<label for="date">Date</label>
										</div>
										<div class="input-field col s12">
											<input type="text" class="timepicker">
											<label for="date">Heure</label>
										</div>
									</div>
								</form>
								<button class="waves-effect waves-light btn" id="btn-unflip">Annuler</button>&nbsp;&nbsp;<button class="waves-effect waves-light btn">Ajouter</button>
							</div>
						</div>
					</div>
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
			$(document).ready(function() {
				$('.modal').modal();
			});

			var viewCal;
			if ($(window).width() < 992) {
				viewCal = 'listWeek';
			} else {
				viewCal = 'month';
			}

			$('#calendar').fullCalendar({
				locale: 'fr',
				editable: false,
				defaultView: viewCal,
				eventLimit: true, // allow "more" link when too many events
				events: "php/events.php"

			});

			$('.fc-right button').addClass('waves-effect waves-light btn');
			$('.fc-right button').removeClass('fc-prev-button fc-button fc-state-default fc-corner-left');
		});

	</script>

	<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

	<script>
		$(document).ready(function() {
			$("#card").flip({
				trigger: 'manual'
			});

			$(document).on("click", "#btn-flip", function() {
				$(".back").css('visibility', 'visible');
				$(".front").css('visibility', 'hidden');
				$("#card").flip(true);
			});

			$(document).on("click", "#btn-unflip", function() {
				$(".front").css('visibility', 'visible');
				$(".back").css('visibility', 'hidden');
				$("#card").flip(false);

			});
		});

		$(document).ready(function() {
			$('.datepicker').datepicker({
				format: 'dd/mm/yyyy',
				i18n: {
					months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
					monthsShort: ['Jan.', 'Fév.', 'Mar.', 'Avr.', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
					weekdays: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
					weekdaysShort: ["Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
				},
				yearRange: 20
			});

			$('.timepicker').timepicker({
				twelveHour: false
			});

			$(document).ready(function() {
				$('select').formSelect();
			});
		});

	</script>

    <?php include "footer.php"?>
</body>

</html>
