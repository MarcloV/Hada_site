<?php


$id = $_POST['id_chat'];

$connect = mysqli_connect("localhost","root","","hada");



$id_nouveau_chat = $id;

//on enleve les en=lements du tableau qui ne sont pas des attributs
$attributs = array_filter($_POST, function($k) {
 return strpos($k, "attribut_") !== false;
}, ARRAY_FILTER_USE_KEY);


foreach ($attributs as $key => $value){
 $id_attribut = str_replace("attribut_","",$key);
 $query_attribut= "UPDATE attribut_chat SET valeur = '$value' WHERE id_chat = $id_nouveau_chat AND id_attribut = $id_attribut";
 $result = mysqli_prepare($connect,$query_attribut);
 $ok=mysqli_stmt_execute($result);
	if ($ok) {
		header("location: ../profil_chat.php?id_chat=$id");
	}
}

?>



