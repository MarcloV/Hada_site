<!doctype html>

<html>


<?php
	session_start();
	?>

<?php include "header.php"?>



<body>



	<?php include "nav.php"?>

	<?php
		$chat = $_POST['id_chat'];
	
		$arr_inf = array('null','null','null','null','null','null','null','null','null');
	
		$connect = mysqli_connect("localhost","root","","hada");
	
		if ($connect) {
			
		$recup_name = "SELECT nom FROM chats WHERE id = '$chat'";
		$query = mysqli_query($connect, $recup_name);
			
			while($line = mysqli_fetch_assoc($query)) {
				$nom_chat = $line['nom'];
				
				$recup_infos = "SELECT * FROM attribut_chat WHERE id_chat = '$chat'";
				$query_inf = mysqli_query($connect, $recup_infos);
				
				while($line = mysqli_fetch_assoc($query_inf)) {
					array_splice($arr_inf, $line['id_attribut'], 0, $line['valeur']);

				}
			
	?>

		<div class="row">
			<div class="col s12">
				<div class="card card-blue">
					<div class="row">
						<div class="col s12 m6 offset-m3">
							<h5 class="title-page">Modifier le profil de
								<?php echo $nom_chat ?>
							</h5>
						</div>
					</div>
					<div class="row">
						<form class="col s12 white" action="php/modif-chat.php" method="post" >

									<div class="row">
									<input type="text" name="id_chat" value="<?php echo $chat?>" style="display:none">
										<div class="input-field col s12">
											<input name="attribut_0" id="bd" type="text" class="datepicker" value="<?php if ($arr_inf[0] != 'null') { echo $arr_inf[0]; }?>">
											<label for="bd">Date de naissance</label>
										</div>
										<div class="input-field col s12">
											<input name="attribut_1" id="race" type="text"value="<?php if ($arr_inf[1] != 'null') { echo $arr_inf[1]; }?>">
											<label for="race">Race/Type</label>
										</div>
										<!-- ajout type de poil et couleur de robe -->
										<div class="input-field col s12">
											<input name="attribut_3" id="robe" type="text" value="<?php if ($arr_inf[3] != 'null') { echo $arr_inf[2]; }?>">
											<label for="race">Couleur de la robe</label>
										</div>
										<div class="input-field col s12">
											<p><label for="">Type de pelage</label></p>
											<p>
												<label>
												<input name="attribut_4"  type="radio" value="court" <?php if ($arr_inf[4] == 'court')  { echo 'checked'; }?>/>
												<span>Court</span>
											</label>
											</p>
											<p>
												<label>
												<input name="attribut_4"  type="radio" value="milong" <?php if ($arr_inf[4] == 'milong')  { echo 'checked'; }?>/>
												<span>Mi-long</span>
											</label>
											</p>
											<p>
												<label>
												<input name="attribut_4"  type="radio" value="long" <?php if ($arr_inf[4] == 'long')  { echo 'checked'; }?>/>
												<span>long</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Sexe</label></p>
											<p>
												<label>
												<input name="attribut_5" type="radio" value="M" <?php if ($arr_inf[5] == 'M')  { echo 'checked'; }?> />
												<span>Male</span>
											</label>
											</p>
											<p>
												<label>
												<input name="attribut_5" type="radio" value="F" <?php if ($arr_inf[5] == 'F')  { echo 'checked'; }?>/>
												<span>Femelle</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Stérilisé</label></p>
											<p>
												<label>
												<input name="attribut_6"  type="radio" value="OUI" <?php if ($arr_inf[6] == 'OUI')  { echo 'checked'; }?>/>
												<span>Oui</span>
											</label>
											</p>
											<p>
												<label>
												<input nname="attribut_6"  type="radio" value="NON" <?php if ($arr_inf[6] == 'NON')  { echo 'checked'; }?>/>
												<span>Non</span>
											</label>
											</p>
										</div>
										<div class="input-field col s12">
											<p><label for="">Identification</label></p>
											<p>
												<label>
												<input name="attribut_7"  type="radio" value="tatouage "<?php if ($arr_inf[7] == 'tatouage')  { echo 'checked'; }?>/>
												<span>Tatouage</span>
											</label>
											</p>
											<p>
												<label>
												<input name="attribut_7"  type="radio" value="puce" <?php if ($arr_inf[7] == 'puce')  { echo 'checked'; }?>/>
												<span>Puce</span>
											</label>
											</p>
											<p>
												<label>
												<input name="attribut_7"  type="radio" value="NON" <?php if ($arr_inf[7] == 'NON')  { echo 'checked'; }?>/>
												<span>Non</span>
											</label>
											</p>
										</div>
										<!--<div class="file-field input-field col s12">
										<p><label for="">Photo</label></p>
											<div class="btn">
												<span>Choisir un fichier</span>
												<input type="file">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text">
											</div>
										</div>-->

										<div class="col s12">
											<button type='submit' class="waves-effect waves-light btn">Modifier</button>
										</div>
									</div>

								</form>
					</div>
				</div>
			</div>
		</div>

		<?php
			}
	}
	?>


		<script type="text/javascript">
			var elem = document.querySelector('.collapsible.expandable');
			var instance = M.Collapsible.init(elem, {
				accordion: false
			});

		</script>

</body>

</html>
