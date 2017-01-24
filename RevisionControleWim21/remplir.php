<?php
  include 'param.inc.php';
  $stmt = $pdo->prepare("INSERT INTO enseignant (nom, prenom, email, bureau) VALUES (:nom, :prenom, :email, :bureau)");
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':bureau', $bureau);
    
  $nom = 'Monnerat';
  $prenom = 'Denis';
  $email = 'monnerat@u-pec.fr';
  $bureau = 114;
  $stmt->execute();

  $nom = 'Loukianov';
  $prenom = 'Oleg';
  $email = 'oleg.loukianov@u-pec.fr';
  $bureau = 114;
  $stmt->execute();

  $nom = 'Cegielski';
  $prenom = 'Patrick';
  $email = 'cegielski@u-pec.fr';
  $bureau = 112;
  $stmt->execute();

  $nom = 'Renaud';
  $prenom = 'Marie-Hélène';
  $email = 'marie-helene.renaud@u-pec.fr';
  $bureau = 113;
  $stmt->execute();

  $nom = 'Hernandez';
  $prenom = 'Luc';
  $email = 'luc.hernandez@u-pec.fr';
  $bureau = 111;
  $stmt->execute();

  $nom = 'Crouan-Veron';
  $prenom = 'Patricia';
  $email = 'crouan@u-pec.fr';
  $bureau = 113;
  $stmt->execute();

  $nom = 'Valarcher';
  $prenom = 'Pierre';
  $email = 'valarcher@u-pec.fr';
  $bureau = 114;
  $stmt->execute();

  $nom = 'Gervais';
  $prenom = 'Fréderic';
  $email = 'frederic.gervais@u-pec.fr';
  $bureau = 113;
  $stmt->execute();





?>


