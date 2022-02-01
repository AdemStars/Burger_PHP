<?php
    $serveur = "localhost";
    $login = "SERVER";
    $pass = "admin";
    $db ="burgeradi";
try{
        $connexion = new PDO("mysql:host=$serveur;dbname=$db", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connexion à la base de donnees';
        
        $sql = 'SELECT * FROM items' ;
        $items;
 
        $post = $connexion->query($sql);
        $items=$post->fetchAll();
    }
 
  catch(PDOException $e){
      echo 'Echec de la connexion' .$e->getMessage();
  }

?>