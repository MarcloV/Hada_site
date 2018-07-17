<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">
		<div class="col m3 #f5f5f5 grey lighten-4 card">
			<div class="row">
				<div class="col m12 center-align">
					<h6>INFO ALIMENTATION GENERALE</h6>
					<img src="img/IMG_20170307_133743_071.jpg" alt="" class="circle responsive-img">
				</div>
				<p class="color-vert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, incidunt, culpa. Rem dolores illo itaque sunt tenetur minus molestiae qui aliquam saepe distinctio reiciendis ex nulla, hic maxime reprehenderit blanditiis. </p>
			</div>
		</div>

		<div class="col m9">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12">
						<h5 class="title-page">ALIMENTATION</h5>
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#stock">Gestion des stocks</a></li>
							<li class="tab col s3"><a href="#nourriture">Informations</a></li>
						</ul>

						<div id="stock" class="col s12 grey lighten-4">
							<form action="" method="post">
								<table>
									<tr>
										<td style="padding:10px">
											<label for="">Nourriture</label>
											<input type="text" name="" value="">
										</td>
										<td style="padding:10px">
											<label for="">Dose journalière</label>
											<input type="text" name="" value="">
										</td>
										<td style="padding:10px">
											<label for="">Stock</label>
											<input type="text" name="" value="">
										</td>
										<td style="padding:10px">
											<button type="submit" name="button" class="waves-effect waves-light btn">CALCULER</button>
										</td>
									</tr>
								</table>
							</form>
						</div>

						<div id="nourriture" class="col s12 red">
							Test 2
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
		});

	</script>

</body>

</html>
