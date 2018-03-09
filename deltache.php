
<?php //isset l'existance 
//empty vide ou pas + existe ou pas 
require'database.php';
if(!empty($_GET['id_tache'])){
$id= $_GET['id_tache'];
$pdo= Database::connect();
$sql="delete from  tache where id_tache=$id";
$pdo->query($sql);
Database::disconnect();
header("Location: supptache.php");

}
else{ 
header("Location: supptache.php");
}


?>