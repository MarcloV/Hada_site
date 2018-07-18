<?php
require_once 'settings.php';
require_once 'connect.php';

	if (empty($_SESSION['id'])) {
		echo 'Error!';
	} else {
		$ssid = $_SESSION['id'];
		$recup_infos = "SELECT pseudo FROM utilisateur WHERE id = '$ssid'";
		$query = mysqli_query($connect, $recup_infos);
		$checkinfos =  mysqli_fetch_array($query);
		$_SESSION['pseudo'] = $checkinfos['pseudo'];
	}
?>
