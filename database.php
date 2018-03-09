<?php
class Database
{
	//on a trois fonction dans cette classe
	// c'est une extenstion orienté object
	//etablir une connexion avec msql via l'extenstion pdo en php
	//on a besoin  4 information
    private static $dbName = 'gestion_maintenance';
    private static $dbHost = 'localhost' ;//adresse de serveur ou msql est installé :en travaille sur local
    private static $dbUsername = 'root';//nom d'utilsateur en local c'est root qui signifie racine en francais
    private static $dbUserPassword = '';//mot de passe de l'utilisateur
	
     //déclarer une variable objet dans la quel on recupérons nos information
	 //"$cont" isue de la classe pdo
    private static $cont  = null;
     	//Ceci est le constructeur de la base de données de classe
    public function __construct() {
        die('Impossible de se connecter au serveur MySQL');
    }
    //fonction qui permet de créer une connexion 
    public static function connect()
    {
      if ( null == self::$cont )
       {     //test la connexion dans try 

        try
        {
			//instation la pdo et créer l'object cont on a besoin de plusieurs 
			//information on va stocker les informations dans un variaable $cont
          self::$cont= new     PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
		//en recoit un message d'erreur getMessage
        catch(PDOException $e)
        {
			//Exception :: getMessage - Récupère le message de l'exception
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     //Déconnecter la base de données. Il définit simplement la connexion à NULL. 
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>

