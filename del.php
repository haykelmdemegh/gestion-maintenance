<?php 

/// if($_SERVER['REQUEST_METHOD']=='GET'){
 //Getting values 
 $id = $_GET['id_equipement'];

 //Creating sql query

 
require_once('bd.php');


// sql to delete a record
 $sql = "Delete FROM equipement WHERE  id_equipement=".$id."";

$result=mysqli_query($conn,$sql);
      if ($result)  {
       
   require_once('supprimer.php'); 
} else {
    require_once('supprimer.php'); 	 
}	 
 
/// }
?>