<?php
require_once 'settings.php';
require_once 'connect.php';

if ($connect) {
	if (isset($_POST['email']) && isset($_POST['mdp'])) {
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];
		//$cookie = $_POST['cookie'];

		$verif_infos = "SELECT password, id FROM utilisateur WHERE email = '$email'";
		$query = mysqli_query($connect, $verif_infos);
		$checkmail = mysqli_num_rows($query);

		if ($checkmail == 1) {
			$checkinfos =  mysqli_fetch_array($query);

			$verif_mdp = $checkinfos['password'];
			$ssid = $checkinfos['id'];

			if (password_verify($mdp, $verif_mdp)) {
				session_start();
				$_SESSION['id'] = $ssid;
				echo "<script>window.location.assign('admin.php')</script>";
			} else {
				echo "Adresse email ou mot de passe incorrect";
			}

		} else {
			echo "Adresse email ou mot de passe incorrect";
		}
	} else {
		echo "Ça a buggué, déso 2 !";
	}

} else {
	die('La connexion à échoué, déso ! '.mysqli_connect_error());
}


?>
