<?php

class Enseignant {
  public $id,$nom,$prenom,$email,$bureau;
  
  public function __construct($id,$nom,$prenom,$email,$bureau) {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->bureau = $bureau;
  }
  public function __toString() {
    return "id = ".$this->id." nom = ".$this->nom." prenom = ".$this->prenom." email = ".$this->email." bureau = ".$this->bureau;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setPrenom( $p ) {
    $this->prenom = $p;
  }
  
  public function PartageLeBureau($nom,$prenom) {
    include 'param.inc.php';
    $requete = "SELECT * FROM enseignant WHERE nom ='$nom' and prenom='$prenom'";
    $stmt = $pdo->prepare($requete);
    $res = $stmt->execute();
    
    if ($res = $stmt->fetch()) {
      if ($res['bureau'] == $this->bureau) {
        echo "<p>".$this->prenom." ".$this->nom." partage le meme bureau que ".$prenom." ".$nom."</p>";
        return true;
      }
      else {
        echo "<p>".$this->prenom." ".$this->nom." ne partage pas le meme bureau que ".$prenom." ".$nom."</p>";
        return false;
      }
    }
  }
  
  
  
}
/*$monsieur = new Enseignant (1,"Troqui","Prenom","email@u-pec.fr",1);
echo $monsieur."<br>";
echo $monsieur->getEmail()."<br>";
$monsieur->setPrenom("Pierrot");
echo $monsieur."<br>";

$ok = $monsieur->PartageLeBureau("Monnerat","Denis");
echo $ok."<br>";*/

?>