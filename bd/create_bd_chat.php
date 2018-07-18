<?php
$connect = mysqli_connect("localhost","root","","hada");

 $query= "CREATE TABLE `chats` (
    `id` int(60) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(200) NOT NULL,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";

mysqli_query($connect,$query);
?>
