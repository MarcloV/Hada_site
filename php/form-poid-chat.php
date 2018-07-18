<?php

$connect = mysqli_connect("localhost","root","","hada");

if ($connect) {
	$id_chat = 1;
	$poid = $_POST['poid'];
	$date = $_POST['date'];
	$r_date = date_format(date_create_from_format('d/m/Y', $date), 'Y-m-d');
	
	$insert = "INSERT INTO poids (id_chat, poid, date) VALUES ('$id_chat', '$poid', '$r_date')";

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