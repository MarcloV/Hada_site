<?php
	session_start();	?>

<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">		
		<div class="col s12">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12">
						<h5 class="title-page">SANTE</h5>
					</div>
					<div class="col s12">
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#chat">Santé des chats</a></li>
							<li class="tab col s3"><a href="#info">Informations</a></li>
						</ul>
					</div>

					<div class="col s12">
						<div class="col s12 grey lighten-4" id="chat">
							<?php include 'php/poid-chat.php'?>
							<canvas id="myChart" width="400" height="120"></canvas>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
							<script>
								var ctx = document.getElementById("myChart").getContext('2d');
								var myChart = new Chart(ctx, {
									type: 'line',
									data: {
										labels: <?php echo $j_dates ?>,
										datasets: <?php echo $j_chats ?>
									},
									options: {
										spanGaps: true,
										scales: {
											yAxes: [{
												ticks: {
													beginAtZero: true
												}
											}]
										}
									}
								});

							</script>

							<table>
								<tr>
									<td><label for="">Poids</label><input type="text" id="poid"></td>
									<td><label for="date">Date</label><input id="date" type="text" class="datepicker" value="<?php echo date('d/m/Y'); ?>"></td>
									<td><label>Chat</label>
									<select id="chat_select">
									<?php $connect = mysqli_connect("localhost","root","","hada");
										$id_user = 1;
										if ($connect) {
											$data_chats = "SELECT * FROM chats WHERE id_utilisateur = '$id_user'";
											$que_chats = mysqli_query($connect, $data_chats);
											if ($que_chats != FALSE) {
												while($row_chat = mysqli_fetch_assoc($que_chats)) {
										?>
											<option value="<?php echo $row_chat['id']; ?>"><?php echo $row_chat['nom']; ?></option>
										<?php }
											}
										} else { echo 'Il y a eu une erreur. Veuillez réessayer !'; } ?>
										</select>
									</td>
									<td><button class="btn waves-effect waves-light" id="ajout-poid">Ajouter une mesure</button></td>
								</tr>
							</table>
							<div id="result"></div>
							<div id="result"></div>
							<!--<div class="divider"></div>-->
						</div>
						<div class="col s12 grey lighten-4" id="info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi cupiditate sapiente voluptates iste officia fuga blanditiis saepe unde necessitatibus quis facere dolor eius illum, ducimus ea? Accusantium, placeat, nam.
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('.tabs').tabs({
				swipeable: true
			});

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
		});
	</script>

	<script>
		$(document).ready(function() {
			$('#ajout-poid').click(function() {
				$.ajax({
					url: "php/form-poid-chat.php",
					data: {
						date: $('#date').val(),
						poid: $('#poid').val(),
						val: $('#chat_select').val()
					},
					type: "POST",
					success: function(data) {
						$('#result').html(data);
					}
				});
			});
		});
			
			$(document).ready(function() {
				$('select').formSelect();
			});

	</script>

		<script>
			$(document).ready(function() {
				$('.sidenav').sidenav({
					edge: 'right',
					draggable: 'true'
				});
			});

		</script>

		<?php include "footer.php"?>
</body>

</html>
