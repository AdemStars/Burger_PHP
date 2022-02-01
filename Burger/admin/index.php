<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="../CSS/style.css">
<?php require '../navbar.php'; ?>
    </head>
    <body>
      <!----- Le contenu--------------------------------------------------------------->
     <div class="container">
            <div class="row">
              <!-----------------------------LE TITRE + LE BOUTON LIENS VERS LA PAGE INSERT.PHP------------------------------------->
                <h1 class="text-warning"><strong>Liste des items  </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-dark">
                  <!----------------------------LE TABLEAU------------------------>
                  <thead>
                    <!---------------LA LIGNE DU HEAD----------->
                    <tr>
                      <!----------Colonne du HEAD-------------->
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <!---------Fermeture du HEAD du tableau------------------------------------->
                  <tbody>
                      <?php //-------------------- code PHP--------------------------------------------------------------
                          //---------------------Votre commentaire
                        require 'database.php';
                         //---------------------Votre commentaire.
                        $db = Database::connect();
                          //---------------------Votre commentaire
                                                      
                        $post = $db->query('SELECT items.id, items.name,items.image,items.price,items.description,categories.name AS category
                        FROM categories,items
                        WHERE items.category=categories.id');
                        $post->setFetchMode(PDO::FETCH_ASSOC);
                        $resultats=$post->fetchAll();
                        //---------------------Votre commentaire
                       Database::disconnect();
                        foreach($resultats as $item) 
                        {
                            echo '<tr>';
                            echo '<td>'. $item['name'] . '</td>';
                            echo '<td>'. $item['description'] . '</td>';
                              //---------------------Votre commentaire
                            echo '<td>'. number_format($item['price'], 2, '.', '') . '</td>';
                            echo '<td>'. $item['category'] . '</td>';
                            echo '<td width=300>';
                             //---------------------Votre commentaire
                            echo '<a class="btn btn-warning" href="view.php?id='.$item['id'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo ' ';
                              //---------------------Votre commentaire
                            echo '<a class="btn btn-primary" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo ' ';
                              //---------------------Votre commentaire
                            echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
        <!------------------------------END CONTENU --------------------------------------------->

    </body>
    </html>
