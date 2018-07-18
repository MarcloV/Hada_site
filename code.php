<?php
require_once 'settings.php';
require_once 'connect.php';
if (!$connect) {
	//echo 'La connexion à échoué, déso !';
	die('La connexion à échoué, déso ! '.mysqli_connect_error());
} else {
	echo 'Ça marche \o/';
}
?>