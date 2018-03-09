<?php
require_once("bd.php");
 
$name=$_POST['name'];
 $n=$_POST['username'];
 $p=$_POST['password'];

$sql= "INSERT INTO `utilisateur`( `name`, `user_name`,  `password` ) VALUES ('$name','$n','$p')";

 $result=mysqli_query($conn,$sql);
 if ($result)  {
       
 require_once('index.html'); 
} else {
     require_once('index.html');
}
	  ?>

          
    