<?php

$connect = mysqli_connect("localhost","root","","hada");

if ($connect) {

	$id_user = 1;
	$date = date("Y-m-d");
	$nom_alim = $_POST['nom_alim'];
	$stock = $_POST['stock'];
	$q_jour = $_POST['q_jour'];
	


	$insert = "INSERT INTO alimentation (id_user, date, nom_alim, stock, q_jour) VALUES ('$id_user', '$date', '$nom_alim', '$stock', '$q_jour')";

	$execute = mysqli_query($connect, $insert);
	
	if ($execute) {
			echo '<script>location.reload();</script>';
		} else {
			echo "<p>Ça a buggué</p>";
			echo("Error description: " . mysqli_error($connect));
		}
	
} else {
	echo 'Il y a eu une erreur ! Veuillez réessayer.';
}

?>
