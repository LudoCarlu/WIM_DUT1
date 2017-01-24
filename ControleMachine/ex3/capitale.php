<?php
include('parametres.php.inc');

$db = new PDO("mysql:host=".$host.";dbname=".$bdd,$user,$password);
$sql = "SELECT * FROM capitale";
$stmt = $db->query($sql);
if(isset($_GET["id"])) {
  extract($_GET);
  $_POST["capitale"] = $_GET["id"];
}

?>

<!DOCTYPE html>
<html lang="fr">
  <meta charset= "utf-8" />
  <head>
    <title>Capitales</title>
  </head>
  <body>
    <h1>
    Capitales européenes
    </h1>
    <form method="post" action="capitale.php" >
      <table>
        <tr>
          <td><label>Choissisez une capitale</label></td>
            <td> 
              <select name="capitale">
                <?php foreach ($stmt as $capitale) : ?>
                
                <option value="<?php echo $capitale["id"]?>"><?php echo $capitale["nom"]?> </option>
                <?php endforeach; ?>
              </select>
            </td>
         </tr>
				<tr><td></td><td><input type="submit" value="Envoyer"/></td></tr>
      </table>
    </form>
    <?php if(isset($_POST["capitale"])) { ?>
    <?php 
    $sql2 = "SELECT * FROM capitale WHERE id = ".$_POST["capitale"]; 
    $stmt2 = $db->query($sql2);
    $resultat = $stmt2->fetch();
    ?>
    <h1><?php echo $resultat['nom']; ?></h1>
    <img src="<?php echo $resultat["image"];?>" alt="image" height="250" width="300"> 
    
    <?php
    $idcapitale = $resultat["id"];
    $min = "SELECT id1,id2,distance FROM distance WHERE id1!=id2 AND id1=$idcapitale ORDER BY distance ASC LIMIT 1";
    $stmt3 = $db->query($min);
    $mindist = $stmt3->fetch();
    $sqlnomcapitalemin = "SELECT * FROM capitale WHERE id=".$mindist["id2"];
    $stmt4 = $db->query($sqlnomcapitalemin);
    $nommindist = $stmt4->fetch();
    ?>
    <p>
      Capitale la plus proche :
      <ul>
        <li><a href="capitale.php?id=<?php echo $nommindist['id']; ?>" ><?php echo $nommindist["nom"]." : ".$mindist["distance"] ?></a></li>
      </ul>
    </p>
    
    <?php
    $max="SELECT id1,id2,distance FROM distance WHERE id1!=id2 AND id1=$idcapitale ORDER BY distance DESC LIMIT 1";
    $stmt4 = $db->query($max);
    $maxdist = $stmt4->fetch();
    $sqlnomcapitalemax = "SELECT * FROM capitale WHERE id=".$maxdist["id2"];
    $stmt5 = $db->query($sqlnomcapitalemax);
    $nommaxdist = $stmt5->fetch();
    ?>
    <p>
      Capitale la plus eloignee :
      <ul>
        <li><a href="capitale.php?id=<?php echo $nommaxdist['id']; ?>" ><?php echo $nommaxdist["nom"]." : ".$maxdist["distance"] ?></a></li>
      </ul>
    </p>
  
    <?php } //fin if ?>
    
    
  </body>
</html>