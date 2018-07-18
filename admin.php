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
			<div class="col s12 m2 left">
				<div class="card">
					<div class="row">
						<div class="col s12 col-pp">
							<div class="row">
								<div class="col m12 s4"><img src="img/562824_2759032017078_1554093599_n.jpg" alt="" class="pp">
								</div>
								<div class="col m12 s8 valign-wrapper">
									<h5 class="pseudo"><?php echo $_SESSION['pseudo'] ?></h5>
								</div>
							</div>
						</div>
						<div class="col s12 text-left grey lighten-5">
							<p class="teal-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quo consectetur, quas. Sunt, nisi eaque consequuntur esse eos et placeat.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m10 center">
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
										while($line = mysqli_fetch_assoc($query)) {
								
								?>
										<a href="#">
								<div class="card horizontal card-cat">
									<div class="card-image">
										<img src="img/IMG_20170307_133743_071.jpg">
									</div>
									<div class="card-content">
										<p><?php echo $line['nom'];?></p>
									</div>
								</div>
							</a>
						<?php }
						}
						?>


							<a class="waves-effect waves-light btn">Ajouter un chat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include "footer.php"?>
</body>

</html>
