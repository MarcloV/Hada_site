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
					<img src="img/photo_chat.jpg" alt="" class="circle responsive-img">
				</div>
				<p class="color-vert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, incidunt, culpa. Rem dolores illo itaque sunt tenetur minus molestiae qui aliquam saepe distinctio reiciendis ex nulla, hic maxime reprehenderit blanditiis. </p>
			</div>
		</div>

		<div class="col m9">
			<div class="card cont-resume">
				<div class="row center-align">
					<h5 id="h5-resume">ALIMENTATION</h5>
					<ul id="tabs-swipe-demo" class="tabs #f5f5f5 grey lighten-4">
						<li class="tab col s3"><a href="#test-swipe-1">STOCK 1</a></li>
						<li class="tab col s3"><a class="active" href="#test-swipe-2">NOURRITURE 2</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="col m8">
						<form class="bg-color-rouge" action="" method="post">
							<label for="">NOURRITURE</label>
							<input type="text" name="" value="">
							<label for="">DOSE JOURNALIERE</label>
							<input type="text" name="" value="">
							<label for="">STOCK</label>
							<input type="text" name="" value="">
							<button type="submit" name="button" class="waves-effect waves-light btn">CALCULER</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('.sidenav').sidenav({
				edge: 'right',
				draggable: 'true'
			});
		});

	</script>

</body>

</html>
