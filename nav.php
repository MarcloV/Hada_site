<!--NAVBAR UP-->

<nav class="grey darken-2">
	<div class="nav-wrapper">
		<div class="row">
			<div class="col s12">
				<a href="#" class="brand-logo"><img src="img/logo-w.png" alt=""></a>
				<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</div>
	</div>
</nav>

<!--NAVBAR RIGHT-->
<div id="slide-out" class="sidenav">
	<div class="side-header">
		<a href="#" data-target="slide-out" class="sidenav-close"><i class="material-icons">close</i></a><br/>
		<a href="account2.php">Mon compte</a><br/>
		<a href="parameters.php">Paramètres</a><br/>
		<a href="">Déconnexion</a>
	</div>
	<div class="side-content">
			<div class="bloc-chat">
				<ul>
					<li class="li-chat">
						<a href="profil_chat.php">
							<img src="img/IMG_20170307_133743_071.jpg" alt="" class="photo-chat"><p>Ada</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="link">
				<ul>
					<li>
						<a href="sante.php">Santé</a>
					</li>
					<li>
						<a href="alimentation.php">Alimentation</a>
					</li>
					<li>
						<a href="hygiene.php">Hygiène</a>
					</li>
					<li>
						<a href="securite.php">Securité</a>
					</li>
					<li>
						<a href="calendar.php">Calendrier</a>
					</li>
					<li>
						<a href="">Veterinaires</a>
					</li>
					<li>
						<a href="">Cat Sitters</a>
					</li>
					<li>
						<a href="">Forum</a>
					</li>
				</ul>
			</div>
		</a>
	</div>
</div>

<!--SCRIPT NAVBAR RIGHT-->
<script>
	$(document).ready(function() {
		$('.sidenav').sidenav({
			edge: 'right',
			draggable: 'true'
		});
	});

</script>
