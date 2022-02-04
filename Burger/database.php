<?php
class Database
{
    // private satatic: les variable n'appartiennent pas à l'instance appartiennent a class DATABASE.
    private static $dbHost = "localhost"; // ip de la DB
    private static $dbName = "burgeradi"; // Nom de la DB
    private static $dbUsername = "SERVER"; // User de la DB
    private static $dbUserpassword = "admin"; // PASSWORD de la DB
    private static $connection = null; // type de connection de la DB
    
    //fonction pour se connecter à la base de données function public accessible par tout le monde.
    //static car elle appartient à la classe database et non au instances
    public static function connect() // connexion
    {
        if(self::$connection == null) 
        {
            try
            {
                //SELF:: je suis dans la classe et je souhaite acceder à un élément static
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {    //annuler la connexion
        self::$connection = null;
    }

}
// on peut acceder à la methode connect car elle est public non private. 
Database::connect();
?>
