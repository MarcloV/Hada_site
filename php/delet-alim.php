<?php

$connect = mysqli_connect("localhost","root","","hada");

if ($connect) {
	$id = $_POST['id'];
	
	$query = "DELETE FROM alimentation WHERE id='$id'";
	
	$result = mysqli_query($connect, $query);
		if ($result==FALSE) {
			echo "Il y a eu une erreur ! Veuillez réessayer.";
		} else {
			echo '<script>location.reload();</script>';
		}
	
} else {
	echo 'Il y a eu une erreur ! Veuillez réessayer.';
}


?>
