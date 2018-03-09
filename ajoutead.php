<?php
require_once("bd.php");
 
$id=$_GET['id_equipement'];
$name=$_GET['type_equipement'];
$mot=$_GET['detail_equipement'];
$m=$_GET['S1'];

$sql= "INSERT INTO `adminstration`(`user_id`, `user_name`, `motdepasse`) VALUES ('$id','$name','$mot')";

 $result=mysqli_query($conn,$sql);
 if ($result)  {
       
     echo "ajout de l'adminstration est terminee avec sucees`";
} else {
     echo "impossible d'ajouter un adminstration";
}
	  ?>

          
    