<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">

		<div class="center-align col s6">
			<div class="card card-grey">
				<div class="row">
					<div class="col s12">
						<div id="col1">
							<br>
							<img src="img/220x220.png" class="responsive-img circle">
							<br>
							<h3>{{user.pseudo}}</h3>
							<br>
						</div>
						<p>{{user.description}}</p>
					</div>
				</div>
			</div>
		</div>
		<!--fin col1-->

		<div class="col s6">
			<div class="row">
				<div class="col s12">
					<div class="card card-blue">
						<div class="row">
							<div class="col s12">
								<h5 class="title-page">Mon compte</h5>
							</div>
							<div class="col s12">
								<ul class="collection">
									<li class="collection-item">
										<div class="input-field">
											<input disabled value="{{user.nom}}" id="disabled" type="text" class="validate">
											<label for="disabled">Nom</label>
										</div>
									</li>
									<li class="collection-item">
										<div class="input-field">
											<input disabled value="{{user.prenom}}" id="disabled" type="text" class="validate">
											<label for="disabled">Prenom</label>
										</div>
									</li>
									<li class="collection-item">
										<div class="input-field">
											<input placeholder="Placeholder" id="email" type="text" class="validate">
											<label for="email">Email</label>
										</div>

									</li>
									<li class="collection-item">
										<div class="input-field">
											<input placeholder="Placeholder" id="mdp" type="text" class="validate">
											<label for="mpd">Mot de passe</label>
										</div>
									</li>
									<li class="collection-item">
										<div class="input-field">
											<input placeholder="Placeholder" id="mdp_confirm" type="text" class="validate">
											<label for="mdp_confirm">Mot de passe</label>
										</div>
									</li>
								</ul>
							</div>
							<div class="col s12s center-align">
								<a class="btn-small" href="#">editer informations</a>
								<a class="btn-small" href="#">enregistrer modifications</a>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<!--fin col2-->
		</div>
		<!--fin row-->
	</div>

</body>

</html>
