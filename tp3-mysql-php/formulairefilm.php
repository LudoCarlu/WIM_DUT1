<!DOCTYPE html>
<html lang="fr">
  <meta charset= "latin1" />
  <head>
  <title>FILMS CHOIX PHP</title>
  </head>
  <body>
   <legend> Films </legend>
   <form method="get" action="formulairefilm.php" > 
     <select name="realisateur" value="Hitchcock"> <!-- Pourquoi Hitchcock comme valeur ? -->
     <?php
      $link = mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
      if(!$link){
        die ("<p> connexion impossible </p>");
      }
      $res = mysqli_query($link,"SELECT DISTINCT A.nom 
      FROM Film F JOIN Artiste A WHERE A.idArtiste = F.idMes");
      if ($res){
        while($film = mysqli_fetch_assoc($res)){
          echo "<option>".$film['nom']."</option>";
        }
      }
      else {
        die("<p> Erreur dans l'execution de la requete </p>");
      }
      mysqli_close($link);   
    ?>
    </select>
   <input type="submit" value="Submit" Chercher>
   </form>
   <table border = 1>
   <tr> 
     <th> Titre </th> 
     <th> Annee </th>
     <th> Genre </th>
     <th> Realisateur </th>
   </tr>
     <!-- Il n'est pas nécessaire de se reconnecter, mieux vaut utiliser une seule connection et la réutiliser pendant tout le programmes -->
   <?php
    if(isset($_GET["realisateur"])){
     $realisateur = $_GET["realisateur"];
     
     $link = mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu"); 
    
     if(!$link){
       die ("<p> connexion impossible </p>");
     }
     $res = mysqli_query($link,"SELECT F.titre,F.annee,F.genre,A.prenom,A.nom 
     FROM Film F JOIN Artiste A WHERE A.idArtiste = F.idMes");
     if ($res){
       while($film = mysqli_fetch_assoc($res)){
           if($realisateur == $film['nom']){
             echo "<tr>";
             echo "<td>".$film['titre']."</td>";
             echo "<td>".$film['annee']."</td>";
             echo "<td>".$film['genre']."</td>";
             echo "<td>".$film['prenom']." ".$film['nom'];
             echo "</tr>";
         }
       }
     }
     else {
       die("<p> Erreur dans l'execution de la requete </p>");
     }
     mysqli_close($link);
    }
   ?>
   </table>
  </body>
<html>
  
  <!-- 
Le code est un peu brouillon et désordonné même si dans l'ensemble, il reste assez simple de compréhension
Cependant, Le programme ne fonctionne pas, aucun film ne s'affiche même après sélection d'un artiste.
La liste déroulante s'affiche tout de même.
Les commits ici sont un peu plus nombreux et permettent de suivre l'avancement du fichier contrairement à l'exercice précédent.
Note : 4,5/8 a)1/4 b)3/4 

Note globale : 11.5/20
-->
