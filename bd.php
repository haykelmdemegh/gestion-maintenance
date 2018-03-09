<?php
//connection a la base de donneé
//root:privilége par défaut modi, supp, ajout:administration de la bd

$conn=mysqli_connect('localhost','root','','gestion_maintenance');
if(!$conn){
die("connection failed".mysqli_connect_error());

}
?>