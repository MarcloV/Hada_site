<?php

session_start();

$id_utilisateur = $_SESSION['id'];
$nom = $_POST['nom'];
$connect = mysqli_connect("localhost","root","","hada");

$query_chat= "INSERT  INTO chats (nom,id_utilisateur) VALUES ('$nom','$id_utilisateur')";
$result = mysqli_prepare($connect,$query_chat);
$ok=mysqli_stmt_execute($result);

$id_nouveau_chat = mysqli_insert_id($connect);

//on enleve les en=lements du tableau qui ne sont pas des attributs
$attributs = array_filter($_POST, function($k) {
  return strpos($k, "attribut_") !== false;
}, ARRAY_FILTER_USE_KEY);


foreach ($attributs as $key => $value){
  $id_attribut = str_replace("attribut_","",$key);
  $query_attribut= "INSERT  INTO attribut_chat(id_chat,id_attribut,valeur,afficherdashbord) VALUES ('$id_nouveau_chat','$id_attribut','$value',0)";
  $result = mysqli_prepare($connect,$query_attribut);
  $ok=mysqli_stmt_execute($result);
}
if($ok){
	header("location: admin.php");
}

?>
