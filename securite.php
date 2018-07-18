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
								<h5>titre 1</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
								<!-- fond pardéfaut est le bleu du site, je l'ai changer dans le style.css en gris clair-->
								<span>Lorem ipsum dolor sit amet.</span>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5>titre 2</h5>
							</div>
							<div class="collapsible-body" id="fondAccordeon">
								<span>Lorem ipsum dolor sit amet.</span>
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
