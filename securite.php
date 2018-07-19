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
						<h5 class="title-page">Sécurité</h5>
					</div>
				</div>
				<div class="row">
					<ul class="collapsible expandable">
						<li>
							<div class="collapsible-header">
								<h5>Affiche informative en cas de catastrophe</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
								<img src="img/securite/Affiche_animaux.jpg" alt="affichette pour indiquer la présence d'animaux">

							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5>Aliment dangereux</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
							<img src="img/securite/aliment_dangereux.jpg" alt="affichette representant les aliment courant dangereux">
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5>schéma d'un massage cardiaque</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
							<img src="img/securite/massage-cardiaque.jpg" alt="schéma explicatif d'un massage cardiaque sur un chien">
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5>Dépliant sur les intoxications possible qu'on trouve dans une maison</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
								<a href="img/securite/depliant-intoxication.pdf" target="_blank">Dépliant sur les intoxications divers qu'on trouve dans la maison</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var elem = document.querySelector('.collapsible.expandable');
		var instance = M.Collapsible.init(elem, {
			accordion: false
		});

	</script>

</body>

</html>
