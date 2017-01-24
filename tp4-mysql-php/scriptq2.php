<!DOCTYPE html>
<html lang="fr">
  <meta charset= "latin1" />
  <head>
  <title>SCRIPT2</title>
  </head>
  
  <body>
    <h1>
      Ajouter des films
    </h1>
    
    <?php
    //Connexion a la base
    $link = mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
    if(!$link){
      die ("<p> connexion impossible </p>");
    }
    ?>
    <form method="get" action="scriptq2.php">
      <?php
      $genre = mysqli_query($link,"SELECT DISTINCT genre FROM Film");
      $pays = mysqli_query($link,"SELECT DISTINCT codePays FROM Film");
      $real = mysqli_query($link,"SELECT DISTINCT A.nom,A.prenom,A.idArtiste,F.idMes FROM Film F JOIN Artiste A WHERE A.idArtiste = F.idMes");
      ?>
      Nom <input type="text" name="nom"> <br/>
      Genre <select name="genre"> 
      <?php
      if ($genre){
        while($a = mysqli_fetch_assoc($genre)){
          echo "<option>".$a['genre']."</option>";
        }
      }
      else {
        die("<p> Erreur dans l'execution de la requete </p>");
      }
      ?>
      </select>
      <br/>
      
      Pays <select name="pays">
      <?php
      if ($pays){
        while($b= mysqli_fetch_assoc($pays)){
          echo "<option>".$b['codePays']."</option>";
        }
      }
      else {
        die("<p> Erreur dans l'execution de la requete </p>");
      }
      ?> 
      </select>
      <br/>
      Realisateur <select name ="realisateur"> <br/>
      <?php
      if ($real){
        while($c= mysqli_fetch_assoc($real)){
          // Dans le option mettre une value de lid du realisateur et la recup plus tard
          echo "<option>".$c['nom']." ".$c['prenom']."</option>";
        }
      }
      else {
        die("<p> Erreur dans l'execution de la requete </p>");
      }
      ?>
      </select>
      <br/>
      
      Resume <textarea cols=30 rows=3 name ="resume"></textarea><br/>
      Annee <input type="text" name ="annee"> <br/>
      <input type="submit" value="Submit" Ajouter> <br/>
      
      <?php
      if(isset($_GET["nom"]) && isset($_GET["genre"]) && isset($_GET["pays"]) && isset($_GET["realisateur"]) && isset($_GET["resume"])
        && isset($_GET["annee"])) {
        extract($_GET);
        //echo $realisateur;
        $requete = "INSERT INTO Film(titre,annee,genre,resume,codePays) VALUES ('".$nom."','".$annee."','".$genre."','".$resume."','".$pays."')";
        echo $requete;
        $insert = mysqli_query($link,$requete);
      }
      
      ?>
    </form>
    <h1>
      Liste des films
    </h1>
    <table border = 1>
    <tr> 
      <th> Titre </th> 
      <th> Genre </th>
    </tr> 
    <?php
      $res = mysqli_query($link,"SELECT titre,genre,idMes FROM Film");
      if ($res){
        while($film = mysqli_fetch_assoc($res)){
          echo "<tr>"; 
          echo "<td>".$film['titre']."</td>";
          echo "<td>".$film['genre']."</td>";
          echo "<td>".$film['idMes']."</td>";
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
