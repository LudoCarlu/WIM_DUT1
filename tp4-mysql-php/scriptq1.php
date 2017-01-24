<!DOCTYPE html>
<html lang="fr">
  <meta charset= "latin1" />
  <head>
  <title>SCRIPT1</title>
  </head>
  
  <body>
    <h1>
      Ajouter des artistes
    </h1>
    <form method="get" action="scriptq1.php">
      Nom <input type="text" name="nom">
      Prenom <input type="text" name="prenom">
      Annee <input type="text" name="anneeNaiss">
      <input type="submit" value="Submit" Ajouter>
      <?php
      $link = mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
      if(!$link){
        die ("<p> connexion impossible </p>");
      }
     
      if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["anneeNaiss"])) {
        extract($_GET);
        $requete = "INSERT INTO Artiste(nom,prenom,anneeNaiss) VALUES ('".$nom."','".$prenom."','".$anneeNaiss."')";
        //echo $requete;
        $insert = mysqli_query($link,$requete);
      }
      
      ?>
    </form>
    <h1>
      Liste des artistes
    </h1>
    <table border = 1>
    <tr> 
      <th> Artiste </th> 
      <th> Annee de naissance </th>
    </tr> 
    <?php
      $res = mysqli_query($link,"SELECT nom,prenom,anneeNaiss FROM Artiste");
      if ($res){
        while($artiste = mysqli_fetch_assoc($res)){
          echo "<tr>"; 
          echo "<td>".$artiste['prenom']." ".$artiste['nom']."</td>";
          echo "<td>".$artiste['anneeNaiss']."</td>";
          echo "</tr>";
        }
      }
      else {
        die("<p> Erreur dans l'execution de la requete </p>");
      }
      mysqli_close($link);     
    ?>
    </table>
        
  </body>
</html>
