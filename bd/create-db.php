<?php
$connect = mysqli_connect("localhost","root","","hada");
$query='CREATE DATABASE `hada`';

mysqli_query($connect,$query);

$query="CREATE TABLE IF NOT EXISTS `users` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `photo` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";
mysqli_query($connect,$query);
