<?php

if(isset($_FILES['image']))
{
    $id_chat = $_POST['idchat'];
		$link = basename($_FILES['image'] ['name']);

		$dossier = '../img/photoschats/';
    $fichier = basename($_FILES['image'] ['name']);
    if(move_uploaded_file($_FILES['image'] ['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
         echo 'Upload effectué avec succès !';
					echo "<script>window.location.assign('../profil_chat.php?id_chat=$id_chat')</script>";
				// Connexion à la base de données
				try
				{
				$connect = mysqli_connect("localhost","root","","hada");
				}
				catch(Exception $e)
				{
							 die('Erreur : '.$e->getMessage());
				}

				// Insertion du message à l'aide d'une requête préparée
				$insert = "INSERT INTO photos_chats (lien, id_chat) VALUES('$link', '$id_chat')";
			
				$execute = mysqli_query($connect, $insert);
			
			if ($execute) {
		} else {
			echo "<p>Ça a buggué</p>";
			echo("Error description: " . mysqli_error($connect));
		}
    }
    else //Sinon (la fonction renvoie FALSE).
    {
         echo 'Echec de l\'upload !';
    }
}





?>
