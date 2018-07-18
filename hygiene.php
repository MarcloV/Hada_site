<!doctype html>

<html>

<?php include "header.php"?>

<body class="colacc-co">

	<?php include "nav.php"?>

	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				<h3 style="text-align: center">Hygiéne</h3>
			</div>
		</div>
		<div class="row">
			<ul class="collapsible expandable">
				<li>
					<div class="collapsible-header">
						<h5>Brossage </h5>
					</div>
					<div class="collapsible-body" id="fondAccordeon">
						<!-- fond pardéfaut est le bleu du site, je l'ai changer dans le style.css en gris clair-->
						<span>Lorem ipsum dolor sit amet.</span>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<h5>Toilettage/Bain</h5>
					</div>
					<div class="collapsible-body" id="fondAccordeon">
						<span>Lorem ipsum dolor sit amet.</span>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<h5>Quel type de litiére ?</h5>
					</div>
					<div class="collapsible-body" id="fondAccordeon">
						<span>Lorem ipsum dolor sit amet.</span>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<h5>Soin des Griffes et oreilles </h5>
					</div>
					<div class="collapsible-body" id="fondAccordeon">
						<span>Lorem ipsum dolor sit amet.</span>
					</div>
				</li>
			</ul>
		</div>
	</div>



	<script type="text/javascript">
		var elem = document.querySelector('.collapsible.expandable');
		var instance = M.Collapsible.init(elem, {
			accordion: false
		});

	</script>

	<?php include "footer.php"?>
</body>

</html>
