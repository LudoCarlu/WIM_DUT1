<?php
  include 'param.inc.php';
  extract($_POST);
  if (isset($nom) && isset($prenom) && isset($email) && isset($bureau)) {
    $stmt = $pdo->prepare("INSERT INTO enseignant (nom, prenom, email, bureau) VALUES (:nom, :prenom, :email, :bureau)");
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':bureau', $bureau, PDO::PARAM_STR);
    $stmt->execute();
    
  }
?>