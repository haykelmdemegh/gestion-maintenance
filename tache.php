<?php
//acce a la bd
require_once("bd.php");

//récupere les paramétres
//ajouter un nouveau produit

     $nom=$_GET["T2"];
	 $prenom=$_GET["D1"];
	 $email=$_GET["T1"];
	
	
$sql="INSERT INTO `tache`( `contenu_tache`, `dest_tache`, `date_limitee`) VALUES (' $nom','$prenom','$email')";
   $result=mysqli_query($conn,$sql);
      if ($result)  {
       
     echo "ajout de tache est terminée avec sucées ";
} else {
     echo "no";
}

	 
?>