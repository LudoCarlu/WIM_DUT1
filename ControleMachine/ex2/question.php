<?php

if (isset($_COOKIE['langue'])) {
  $langue = $_COOKIE['langue'];
  if ($langue == "francais") {
    echo "Comment vas-tu ?";
  }
  if ($langue == "anglais") {
    echo "How do you do ?";
  }
  if ($langue == "espagnol") {
    echo "¿ Cómo estás ?";
  }
}
else {
  echo "Pas de cookie langue aller dans langue.html";
}

?>