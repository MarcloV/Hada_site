<?php

/*$id_user = $_SESSION['id'];*/ 

$id_user = 1;

// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=hada', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }

// liste des événements
 $json = array();

 // requête qui récupère les événements
 $requete = "SELECT * FROM evenement WHERE id_user = '$id_user'";

 // exécution de la requête
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 
 // envoi du résultat au success
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 
?>
