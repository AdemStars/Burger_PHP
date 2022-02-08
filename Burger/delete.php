<?php
     
    require 'database.php';
    $db=Database::connect();
    $db->query('DELETE FROM items WHERE items.id ='.$_GET['id'].'');
      header('Location: admin.php');
  exit();

?>

