<?php
extract($_POST);

echo "<h1> Reponses </h1>";
$score = 0;
for($i=1; $i<=$nbq ; $i=$i+1){
  if(isset($_POST["question$i"])){
    if($_POST["question$i"] == "vrai"){
      echo "Question $i = Bonne reponse <br/>";
      $score=$score+1;
    }
    else {
      echo "Question $i = Mauvaise reponse <br/>";
    }
  }
  else {
    echo "Question $i = Pas de reponse <br/>";
  }
}
echo "<h1> Score : $score </h1> <br/>";

?>