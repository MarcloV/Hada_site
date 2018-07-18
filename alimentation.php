<!doctype html>

<html>
<?php
	session_start();	?>
<?php include "header.php"?>
<body>
	<?php include "nav.php"?>
	<div class="row">
		<div class="col s12 m3">
			<div class="card grey lighten-4">
				<div class="row">
					<div class="col m12 center-align">
						<h6>INFO ALIMENTATION GENERALE</h6>
						<img src="img/IMG_20170307_133743_071.jpg" alt="" class="circle responsive-img">
					</div>
					<p class="color-vert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, incidunt, culpa. Rem dolores illo itaque sunt tenetur minus molestiae qui aliquam saepe distinctio reiciendis ex nulla, hic maxime reprehenderit blanditiis. </p>
				</div>
			</div>
		</div>
		<div class="col s12 m9">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12">
						<h5 class="title-page">ALIMENTATION</h5>
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#stock">Gestion des stocks</a></li>
							<li class="tab col s3"><a href="#nourriture">Informations</a></li>
						</ul>
						<div id="stock" class="col s12 grey lighten-4" style="text-align:center">
							<?php
$connect = mysqli_connect("localhost","root","","hada");
if ($connect) {
	$id_user = 1;
	$recup_infos = "SELECT * FROM alimentation WHERE id_user = '$id_user'";
	$query = mysqli_query($connect, $recup_infos);

	if ($query != FALSE) {
		/*var_dump($query);*/
		while($line = mysqli_fetch_assoc($query)) {
		$date = date_create($line['date']);
		$jj = date_create(date("Y-m-d"));
		$nb_jour = date_diff($date, $jj );
		$jour = $nb_jour->format('%R%a');
		$stok = $line['stock']/$line['q_jour'];
		$stock = $jour*$stok;
		$reelstock = $line['stock'] - $stock;
?>
		<table>
			<tr>
				<td style="padding:10px">
					<label for="">Nourriture</label>
					<input type="text" name="" value="<?php echo $line['nom_alim'] ?>" disabled>
				</td>
				<td style="padding:10px">
					<label for="">Stock</label>
					<input type="number" name="" value="<?php echo $line['stock'] ?>" disabled>
				</td>
				<td style="padding:10px">
					<label for="">Dose journalière</label>
					<input type="number" name="" value="<?php echo $line['q_jour'] ?>" disabled>
				</td>
				<td style="padding:10px">
					<label for="">Stock restant</label>
					<input type="number" name="" value="<?php echo $reelstock ?>" disabled>
				</td>
				<td><button type="submit" class="waves-effect waves-light btn grey" name="<?php echo $line['id'] ?>" id="delete"><i class="material-icons">delete</i></button></td>
			</tr>
		</table>
<?php }
	} else {
		echo 'Il y a eu une erreur ! Veuillez réessayer.';
	}
} else {
	echo 'Il y a eu une erreur ! Veuillez réessayer.';
}
?>



								<form action="" onsubmit="return false">
									<table>
										<tr>
											<td style="padding:10px">
												<label for="">Nourriture</label>
												<input type="text" name="" id="nom_alim">
											</td>
											<td style="padding:10px">
												<label for="">Stock</label>
												<input type="number" name="" id="stok">
											</td>
											<td style="padding:10px">
												<label for="">Dose journalière</label>
												<input type="number" name="" id="q_jour">
											</td>
											<td style="padding:10px">
												<button type="submit" name="action" class="waves-effect waves-light btn" id="calcul">Ajouter</button>
											</td>
										</tr>
									</table>
								</form>
								<div id="result"></div>
						</div>

						<div id="nourriture" class="col s12 red">
							Test 2
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>

	<script>
		$(document).ready(function() {
			$('.tabs').tabs({
				swipeable: true
			});
		});
	</script>

	<script>
		$(document).ready(function() {
			$('#calcul').click(function() {
				$.ajax({
					url: "php/calc-alim.php",
					data: {
						nom_alim: $('#nom_alim').val(),
						stock: $('#stok').val(),
						q_jour: $('#q_jour').val()
					},
					type: "POST",
					success: function(data) {
						$('#result').html(data);
					}
				});
			});
			$('#delete').click(function() {
				var id_line = $(this).attr('name');
				console.log(id_line);
				$.ajax({
					url: "php/delet-alim.php",
					data: {
						id: id_line
					},
					type: "POST",
					success: function(data) {
						$('#result').html(data);
					}
				});
			});
		});
	</script>
<?php include "footer.php"?>
</body>

</html>
