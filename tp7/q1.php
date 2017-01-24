<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;
  
  function __construct($id,$nom,$prenom) {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
  }
  function __toString() {
    return $this->id." ".$this->prenom." ".$this->nom;
  }
  public function getPrenom() {
    return $this->prenom;
  }
  public function getNom() {
    return $this->nom;
  }
  public function setPrenom($p) {
    $this->prenom = $p;
  }
  public function setNom($n) {
    $this->nom = $n;
  }
}
$personne = new personne(1,"Carlu","Ludovic");
echo $personne;
?>