<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>



			<div class="row">
				<div class="col m3 s12">
					<div class="card card-grey">
						<div id="col1">
							<br>
							<img src="img/562824_2759032017078_1554093599_n.jpg" class="responsive-img circle">
							<br>
							<p>{{user.pseudo}}</p>
							<br>
						</div>
						<p>{{user.description}}</p>
					</div>
					<!--fin col1-->
				</div>



				<div class="col m9 s12" id="col2">
					<div class="card card-grey">
						<div class="row">
							<div class="col s12">
								<h5 class="title-page">Mon compte</h5>
							</div>
							<div class="col s12">
								<ul class="collection">
									<li class="collection-item"><br><br>
										<div>Nom</div>
									</li>
									<li class="collection-item"><br>
										<div>Prenom</div>
									</li>
									<li class="collection-item"><br>
										<div>Email<a href="#!" class="secondary-content"><i class="material-icons">edit</i></a></div>
									</li>
									<li class="collection-item"><br>
										<div>Nouveau mot de passe<a href="#!" class="secondary-content"><i class="material-icons">edit</i></a></div>
									</li>
									<li class="collection-item"><br>
										<div>Confirmation nouveau de mot de passe<a href="#!" class="secondary-content"><i class="material-icons">edit</i></a></div>
									</li>
								</ul>
							</div>
							<!--button enregistrer modifications-->
							<div class="col s12 center-align">
								<a class="btn" href="#">enregistrer modifications</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<!--fin col2-->
			</div>

			<!--fin row-->

</body>

</html>
