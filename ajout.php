<?php
 require_once("bd.php");
$Reference=$_POST['Reference'];
	$mobile=$_POST['type_equipement'];
	$email=$_POST['detail_equipement'];


$sql="INSERT INTO equipement ( Reference, type_equipement, detail_equipement) VALUES ('$Reference','$mobile','$email')";

 $result=mysqli_query($conn,$sql);
 if ($result)  {
       
     echo "ajout de l'equipement est terminÃ©e avec sucÃ©es`";
} else {
       echo "impossible d'ajouter un equipement";
}
	  ?>

          
    