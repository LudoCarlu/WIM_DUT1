<!DOCTYPE html>
<html lang="fr">
  <meta charset= "latin1" />
  <head>
  <title>FILMS PHP</title>
  </head>
  
  <body>
    <table border = 1>
    <tr> 
      <th> Titre </th> 
      <th> Annee </th>
      <th> Genre </th>
      <th> Realisateur </th>
    </tr> 
    <?php
      //$link = mysqli_connect("sql7.freemysqlhosting.net","sql7117991","3crauH9nCF","sql7117991");
      $link = mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
     
      if(!$link){
        die ("<p> connexion impossible </p>");
      }
      $res = mysqli_query($link,"SELECT F.titre,F.annee,F.genre,A.prenom,A.nom FROM Film F JOIN Artiste A WHERE A.idArtiste = F.idMes");
      if ($res){
        while($film = mysqli_fetch_assoc($res)){
          echo "<tr>";
          echo "<td>".$film['titre']."</td>";
          echo "<td>".$film['annee']."</td>";
          echo "<td>".$film['genre']."</td>";
          echo "<td>".$film['prenom']." ".$film['nom'];
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

<!-- Le code est assez claire, pas de superflu.
Le programme fonctionne bien.
Cependant, il m'a été compliqué de trouver le repository.
Il faudrait avoir des noms plus clairs et utilisés des underscores pour séparer les mots. ex "tp3_mysql_php" au lieu de "tp3mysqlphp"
Les commits ne sont pas faits de manière incrémentatives, c'est à dire qu'il n'y a souvent que un commit lors de la création et un commit lors de la fin.
Note : 7.5/8 a)4/4 b)2.5/4 + un point bonus artistique pour les borders des tableaux

-->