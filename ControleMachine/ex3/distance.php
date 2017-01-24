<?php
include('parametres.php.inc');

$db = new PDO("mysql:host=".$host.";dbname=".$bdd,$user,$password);
$sql = "SELECT DISTINCT nom, id1, id2, distance FROM capitale JOIN distance ON (id=id1 || id=id2) ORDER BY nom DESC ";
$resultat = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="fr">
  <meta charset= "utf-8" />
  <head>
    <title>Distances</title>
  </head>
  <body>
    <h1>
     Distances
    </h1>
    <table>
      <?php foreach($resultat as $res) :?>
      <tr><td><?php echo $res["nom"] ?></td><td><?php echo $res["distance"] ?></td></tr>
      <?php endforeach; ?>
      
    </table>
    
    
  </body>
</html>