<?php
require_once 'settings.php';
require_once 'connect.php';


	if (empty($_SESSION['id'])) {
		echo 'Error!';
	} else {
		$ssid = $_SESSION['id'];
		$recup_infos = "SELECT nom FROM chats WHERE id_utilisateur = '$ssid'";
		$query = mysqli_query($connect, $recup_infos);
	}


if ($query != FALSE) {
/*var_dump($query);*/
while($line = mysqli_fetch_assoc($query)) {
		$_SESSION['nom'] = $checkinfos['nom'];
?>
