<!doctype html>

<html>
<?php
	session_start();	?>
<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<?php
		require "infos.php"
	?>

	<div class="admin">
		<div class="row">
			<div class="col s12 m3 left">
				<div class="card card-grey">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<div class="col s12">
									<img src="img/562824_2759032017078_1554093599_n.jpg" alt="" class="responsive-img circle" />
									<h5 class="title-page">
										<?php echo $_SESSION['pseudo'] ?>
									</h5>
								</div>
							</div>
						</div>
						<div class="col s12 text-left grey lighten-5">
							<p class="teal-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quo consectetur, quas. Sunt, nisi eaque consequuntur
								esse eos et placeat.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 m9 center">

				<div id="card">
					<div class="front">
						<div class="card">
							<div class="row">
								<div class="col s12">

									<?php
								require_once 'settings.php';
								require_once 'connect.php';


								if (empty($_SESSION['id'])) {
									echo 'Error!';
								} else {
									$ssid = $_SESSION['id'];
									$recup_infos = "SELECT * FROM chats WHERE id_utilisateur = '$ssid'";
									$query = mysqli_query($connect, $recup_infos);
									while($line = mysqli_fetch_assoc($query)) 
									{
										$id_chat = $line['id'];
										$query_attributs = mysqli_query($connect, "SELECT attributs.nom AS nom, attribut_chat.valeur AS valeur FROM attribut_chat INNER JOIN attributs ON attributs.id = attribut_chat.id_attribut WHERE attribut_chat.id_chat = '$id_chat' AND attribut_chat.afficherdashbord='1'");
										?>
										<a href="profil_chat.php?id_chat=<?php echo $id_chat ?>">
											<div class="card horizontal card-cat">
												<div class="card-image">
													<img src="img/IMG_20170307_133743_071.jpg">
												</div>
												<div class="card-content">
													<p>
														<?php echo $line['nom'];?>
													</p>
													<ul>
														<?php
														while($attribut = mysqli_fetch_assoc($query_attributs)) {
															echo "<li>".$attribut['nom']." <span>".$attribut['valeur']."</span></li>";
														}
														?>
													</ul>
												</div>
											</div>
										</a>
									<?php }
								} ?>
									<button class="waves-effect waves-light btn" id="btn-flip">Ajouter un chat</button>
								</div>
							</div>
						</div>
					</div>

					<div class="back">
						<div class="card">
							<div class="row">
								<div class="col s12">
									<h5 class="title-page">Ajouter un chat</h5>
								</div>
								<form class="col s12 white">

									<div class="row">
										<div class="input-field col s12">
											<input id="name" type="text">
											<label for="name">Nom du chat</label>
										</div>
										<div class="input-field col s12">
											<input id="bd" type="text" class="datepicker">
											<label for="bd">Date de naissance</label>
										</div>
										<div class="input-field col s12">
											<input id="race" type="text">
											<label for="race">Race/Type</label>
										</div>
										<!-- ajout type de poil et couleur de robe -->
										<div class="input-field col s12">
											<input id="robe" type="text">
											<label for="race">Couleur de la robe</label>
										</div>
										<div class="input-field col s12">
											<p><label for="">Type de pelage</label></p>
											<p>
												<label>
												<input name="pelage" type="radio" checked />
												<span>Court</span>
											</label>
											</p>
											<p>
												<label>
												<input name="pelage" type="radio" checked />
												<span>Mi-long</span>
											</label>
											</p>
											<p>
												<label>
												<input name="pelage" type="radio" />
												<span>long</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Sexe</label></p>
											<p>
												<label>
												<input name="sexe" type="radio" checked />
												<span>Male</span>
											</label>
											</p>
											<p>
												<label>
												<input name="sexe" type="radio" />
												<span>Femelle</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Stérilisé</label></p>
											<p>
												<label>
												<input name="ster" type="radio"/>
												<span>Oui</span>
											</label>
											</p>
											<p>
												<label>
												<input name="ster" type="radio" checked/>
												<span>Non</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Identification</label></p>
											<p>
												<label>
												<input name="ide" type="radio" checked />
												<span>Tatouage</span>
											</label>
											</p>
											<p>
												<label>
												<input name="ide" type="radio" checked />
												<span>Puce</span>
											</label>
											</p>
											<p>
												<label>
												<input name="ide" type="radio" />
												<span>Non</span>
											</label>
											</p>
										</div>
										<div class="file-field input-field col s12">
										<p><label for="">Photo</label></p>
											<div class="btn">
												<span>Choisir un fichier</span>
												<input type="file">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text">
											</div>
										</div>

										<div class="col s12">
											<button class="waves-effect waves-light btn">Ajouter</button>
										</div>
									</div>

								</form>
								<button class="waves-effect waves-light btn" id="btn-unflip">Annuler</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<?php include "footer.php"?>

		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

		<script>
			$(document).ready(function () {
				$("#card").flip({
					trigger: 'manual'
				});

				$(document).on("click", "#btn-flip", function () {
					$(".back").css('visibility', 'visible');
					$(".front").css('visibility', 'hidden');
					$("#card").flip(true);

				});

				$(document).on("click", "#btn-unflip", function () {
					$(".front").css('visibility', 'visible');
					$(".back").css('visibility', 'hidden');
					$("#card").flip(false);

				});
			});

			$(document).ready(function () {
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
</body>

</html>