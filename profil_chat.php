<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">
		<div class="col s12 m3">
			<div class="card card-grey">
				<div class="row">
					<div class="col s12 center-align">
						<h6>PHOTO CHAT</h6>
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="circle responsive-img">
					</div>
					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img">
					</div>
					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img"> </div>

					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img">
					</div>
					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img"> </div>

					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img">
					</div>
					<div class="col s6">
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="responsive-img"> </div>
				</div>
			</div>
		</div>

		<div class="col s12 m9">
			<div class="card card-blue">
				<div class="row">

					<div class="col s12">
						<h5 class="title-page">Fiche d'identité du chat</h5>
					</div>
					<div class="col s12">
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#chat-1">Chat 1</a></li>
							<li class="tab col s3"><a href="#chat-2">Chat 2</a></li>
							<li class="tab col s3"><a href="#chat-3">Chat 3</a></li>
						</ul>


						<div class="grey lighten-4">
							<div class="row">
								<div class="col s12">
									<div class="section color-vert">
										<h5>Information générale</h5><!-- avec le nom/date de naissance/sexe/ identification/ peu etre lien de parenté plut tard  -->
										<p>blabla</p>

									</div>
									<div class="divider"></div>
									<div class="section color-vert">
										<h5>Aspect du chat</h5><!-- race ou son type/ type de pelage/couleur de robe -->
										<p>lolo</p>
									</div>
									<div class="divider"></div>
									<div class="section color-vert">
										<h5>Donnée médicale</h5><!-- stérilisé/maladie: chronique ou non ? -->
										<p>Stuff</p>
									</div>
									<div class="divider"></div>
									<div class="section color-rouge">
										<div class="card" id="popup" style="margin:auto">
											<ul class="collapsible">
												<li> 
													<div class="collapsible-header"><i class="material-icons">filter_drama</i>NOTIFICATIONS</div>
													<div class="collapsible-body"><span>
													<?php select * from evenements where date >= now() ?><!--requete pour afficher les evenements futur dans les notif par exemple -->
													<?php echo $_POST["nom"] ?>
													</span></div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
