<?php
class PointNodal{

private $id_pn;
private $nom_pn;
private $nb_ense_pn; 
private $nb_cher_pn; 


public function __construct ($nom_pn,$nb_ense_pn, $nb_cher_pn) {
$this->setNomPn($nom_pn);
$this->setNbEnsePn($nb_ense_pn);
$this->setNbCherPn($nb_cher_pn);

 
}

//setters
public function setIdPn($id_pn) {
	$this->id_pn =$id_pn;
}
public function setNomPn ($nom_pn) {
	$this->nom_pn =$nom_pn;
}
public function setNbCherPn ($nb_cher_pn) {
	$this->nb_cher_pn =$nb_cher_pn;
}
public function setNbEnsePn ($nb_ense_pn) {
	$this->nb_ense_pn =$nb_ense_pn;
}





//getters
public function getIdPn () {
	return $this->id_pn;
}
public function getNomPn () {
	return $this->nom_pn;
}
public function getNbCherPn () {
	return $this->nb_cher_pn ;
}
public function getNbEnsePn () {
	return $this->nb_ense_pn ;
}

}