<?php
require_once 'settings.php';
require_once 'connect.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$spass=password_hash($pass,PASSWORD_BCRYPT);
$select="SELECT * FROM users WHERE email ='$email'";
$execute=mysqli_query($connect,$select);
$check_email=mysqli_num_rows($execute);
if($check_email==1){
  echo "<h2> This email is registered </h2>";

}else{
  $query= "INSERT INTO users ( email,password)  VALUES ('$email','$spass')";
  $result= mysqli_query($connect,$query);
  if ($result) {
  echo "<h2> Registation sucessful, Thanks!!!</h2>";
  }else{
    echo "<h2> Registation failed</h2>";
  }
}



 ?>
