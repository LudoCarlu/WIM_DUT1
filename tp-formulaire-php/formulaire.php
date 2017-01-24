<?php
extract($_POST);

if ($sexe == "homme"){
  $sexe2 = "Monsieur";
}
if ($sexe == "femme"){
  $sexe2 = "Madame";
}
$nom = strtolower ($nom);
$nom = ucfirst ($nom);
$prenom = strtolower ($prenom);
$prenom = ucfirst ($prenom);

echo "Bonjour $sexe2 $prenom $nom";

?>