<?php


include_once("database.php");
	if(isset($_GET['submit'])&&!empty($_GET)){
		
		$user_name=$_GET["username"];
		$password=$_GET["password"];
		$pdo = Database::connect();  
	    $sql="select * from utilisateur where user_name='$user_name' and password='$password'";
	 	if(count($pdo->query($sql)) !=0)
	 	{ 	
		    foreach ($pdo->query($sql) as $row) {
		    
		  			if($row['type'] == "technicien"){
		  				 require_once('technicien.php');
	
		  			}else{
		  				 require_once('administration.php');
	
		  			} 
		     
			}
		}else{
			echo('no');
		}
			Database::disconnect();
	}
	  
?> 