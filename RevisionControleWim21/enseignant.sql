CREATE TABLE enseignant (
  id INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(20) NOT NULL,
  prenom VARCHAR(20) NOT NULL,
  email VARCHAR(30) NOT NULL,
  bureau INT NOT NULL,
  PRIMARY KEY (id)
);