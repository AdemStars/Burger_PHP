<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="/CSS/style.css">
<?php require '/navbar.php'; ?>
    </head>
<body>  

<?php
// define variables and set to empty values
$nom = $description = $prix = $categorie = $image ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = test_input($_POST["name"]);
  $description = test_input($_POST["desc"]);
  $prix = test_input($_POST["price"]);
  $categorie = test_input($_POST["categorie"]);
  $image =test_input($_FILES["image"]["name"]);
  $imagePath = '../img/'. basename($image);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
        echo "Il y a eu une erreur lors de l'upload.\n";
    } else {
        echo "ok";
    } }
//------------------------------------------------------------------------

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

<h2 class="text-warning">Inserer un élément</h2>
<form enctype="multipart/form-data" action="insert.php" method="POST">  
  Nom: <input type="text" name="name">
  <br><br>
  Decription: <input type="text" name="desc">
  <br><br>
  Prix: <input type="number" name="price">
  <br><br>
 <label for="pet-select">Catégorie:</label>

<select name="categorie" id="pet-select">
    <option value="">--Choisir--</option>
    <option value="Menu">Menu</option>
    <option value="Buger">Burger</option>
    <option value="Snack">Snack</option>
    <option value="Salade">Salade</option>
    <option value="Boisson">Boisson</option>
    <option value="Dessert">Dessert</option>
</select>
    <br><br>
  <label for="image">Select image:</label>
  <input type="file" id="image" name="image"><!--le nom du fichier dans la methode post-->
    <br><br>
  <button type="submit">Envoyer au serveur</button>
  <br><br>


</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nom;
echo "<br>";
echo $description;
echo "<br>";
echo $prix;
echo "<br>";
echo $categorie;
?>

</body>
</html>
