<?php
require_once 'settings.php';
require_once 'connect.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$spass=password_hash($pass,PASSWORD_BCRYPT);
$select="SELECT * FROM utilisateur WHERE email ='$email'";
$execute=mysqli_query($connect,$select);
$check_email=mysqli_num_rows($execute);

$response = array();

if($check_email==1){
  $response["success"] = false;
  $response["message"] = "cet email est deja utilisé.";
}else{
  $query= "INSERT INTO utilisateur (email,password)  VALUES ('$email','$spass')";
  $result= mysqli_query($connect,$query);
  if ($result) {
    $response["success"] = true;
    $response["message"] = "Votre inscription est terminée, veuillez vous connecter";
  }else{
    $response["success"] = false;
    $response["message"] = "Echec de l'inscription (" . mysqli_error($connect) . ")";
  }
}

echo json_encode($response);

 ?>
