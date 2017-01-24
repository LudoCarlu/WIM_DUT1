<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title> Formulaire </title>
  </head>
  <body>
    <?php
    if(isset($_POST["operande1"]) && isset($_POST["operande2"])){
      $operande1 = $_POST["operande1"];
      $operande2 = $_POST["operande2"];
      $operation = $_POST["operation"];
      if (is_numeric($operande1) == true && is_numeric($operande2) == true){
        if ($operation == "-") {
          $res = $operande1-$operande2;
          echo "$operande1 $operation $operande2 = $res";
        }
        if ($operation == "+"){
          $res = $operande1+$operande2;
          echo "$operande1 $operation $operande2 = $res";
        }
        if($operation == "/"){
          if($operande2 == 0){
            $res = "Impossible";
            echo "$operande1 $operation $operande2 = $res";
          }
          else {
            $res = $operande1/$operande2;
            echo "$operande1 $operation $operande2 = $res";
          }
        }
        if ($operation == "*"){
          $res = $operande1*$operande2;
          echo "$operande1 $operation $operande2 = $res";
        }
      }
    }
    ?>
    <form method="post" action="ex3.php" >      
      Operande 1: 
      <input type="text" name="operande1" value="<?php if (isset($res)) echo $res; ?>" required >
      <select name="operation" value="+">
        <OPTION> + </OPTION>
        <OPTION> - </OPTION>
        <OPTION> / </OPTION>
        <OPTION> * </OPTION>
       </select>
      Operande 2: 
      <input type="text" name="operande2" required>
      <input type="submit" value="Submit" Soumettre>
    </form>
  </body>
</html>