<?php

namespace App;
?>

<a href="../../index.php">Accueil </a>
<h1> Ajouter une voiture</h1>
<form action="../../index.php?action=create" method="post">

<input type="text" name="immat">
  <label for="html">Immat</label><br>

  <input type="text" name="marque">
  <label for="html">Marque</label><br>

   <input type="text" name="modele">
  <label for="html">Modele</label><br>

  <input type="text" name="color">
  <label for="html">Couleur</label><br>

  <input type="text" name="dateDeProduction">
  <label for="css">Date de production</label><br>
  
  <input type="submit" name ="submit"  value="Ajouter">

</form>

  <h1> Supprimer voiture de la bdd</h1>
<form action="../../index.php?action=delete" method="post">

<input type="text" name="immat">
  <label for="html">Immat</label><br>

  
  <input type="submit" name ="submit" value="Supprimer">
 
</form>
