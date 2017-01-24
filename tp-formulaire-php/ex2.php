<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title> Formulaire </title>
  </head>
  <body>
    <?php
    
    
    if(isset($_POST["table"])){
      $table = $_POST["table"];
      echo "<h1> Table de $table </h1>";
      for($i=0; $i<=10;$i=$i+1){
        $res = $i * $table;
        echo "$i x $table = $res <br/>";
      }
      echo "<br/>";
    }
    ?>
    <form method="post" action="ex2.php" >
      Table: <br/>
      <input type="text" placeholder="table" name="table" required >
      <br/>
      <input type="submit" value="Submit" Soumettre>
    </form>
  </body>
</html>