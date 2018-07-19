<!doctype html>

<html>
<?php
session_start();

?>
<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<?php
	require_once 'settings.php';
	require_once 'connect.php';

	$chat_selection = -1;

	if(!empty($_GET['id_chat']))
		$chat_selection = $_GET['id_chat'];

	if (empty($_SESSION['id'])) {
		echo 'Error!';
	} else {
		$chats = array();

		$ssid = $_SESSION['id'];
		$recup_infos = "SELECT * FROM chats WHERE id_utilisateur = '$ssid'";
		$query = mysqli_query($connect, $recup_infos);
		while($line = mysqli_fetch_assoc($query)) 
		{
			$id_chat = $line['id'];
			$chat = array();

			$chat["nom"] = $line["nom"];
			
			$query_attributs = mysqli_query($connect, "SELECT attributs.nom AS nom, attribut_chat.valeur AS valeur FROM attribut_chat INNER JOIN attributs ON attributs.id = attribut_chat.id_attribut WHERE attribut_chat.id_chat = '$id_chat'");

			$attributs = array();
			while($attr = mysqli_fetch_assoc($query_attributs)) {
				$attributs[$attr['nom']] = $attr['valeur'];
			}
			$chat['attributs'] = $attributs;

			$query_maladies = mysqli_query($connect, "SELECT pathologie.nom AS nom FROM chat_pathologie INNER JOIN pathologie ON pathologie.id = chat_pathologie.id_pathologie WHERE chat_pathologie.id_chat = '$id_chat'");

			$maladies = array();
			while($maladie = mysqli_fetch_assoc($query_maladies)) {
				$maladies[] = $maladie['nom'];
			}
			$chat['maladies'] = $maladies;

			$chats[$id_chat] = $chat;
		}
	} ?>

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
						<h5 class="title-page">Resume</h5>
					</div>
					<div class="col s12">
						<ul class="tabs tab-chats">
							<?php 
							foreach ($chats as $key => $chat) {
								if($key == $chat_selection) {
									echo "<li class=\"tab col s3\"><a class=\"active\" href=\"#chat-".$key."\">".$chat['nom']."</a></li>";
								}
								else {
									echo "<li class=\"tab col s3\"><a href=\"#chat-".$key."\">".$chat['nom']."</a></li>";
								}
							}
							?>
						</ul>
					

						<?php 
							foreach ($chats as $key => $chat) { ?>
								<div id="chat-<?php echo $key ?>" class="col s12 grey lighten-4">
								<div class="row">
									<div class="col s12">
										<div class="section color-vert">
											<h5>Attributs</h5>
											<ul>
												<?php 
													foreach ($chat['attributs'] as $nom => $valeur) {
														echo "<li>$nom : $valeur</li>";
													}
												?>
											</ul>
										</div>
										<div class="divider"></div>
										<div class="section color-vert">
											<h5>Maladies</h5>
											<ul>
												<?php 
													foreach ($chat['maladies'] as $nom) {
														echo "<li>$nom</li>";
													}
												?>
											</ul>
										</div>
										<div class="divider"></div>
										<div class="section color-rouge">
											<div class="card" id="popup" style="margin:auto">
												<ul class="collapsible">
													<li>
														<div class="collapsible-header"><i class="material-icons">filter_drama</i>NOTIFICATIONS</div>
														<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('.tabs').tabs();
		});
	</script>

</body>

</html>
