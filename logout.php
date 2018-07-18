<?php
$_SESSION["id"] = NULL;

	session_destroy();

	header("location: index.php");
?>
