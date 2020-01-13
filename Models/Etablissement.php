<?php
class Etablissement{

private $id_etab;
private $nom_etab;
private $nb_ense_etab; 
private $nb_cher_etab; 
private $nb_fil_etab; 
private $id_pn; 


public function __construct ($nom_etab,$nb_ense_etab, $nb_cher_etab,$nb_fil_etab,$id_pn) {
$this->setNomEtab($nom_etab);
$this->setNbEnseEtab($nb_ense_etab);
$this->setNbCherEtab($nb_cher_etab);
$this->setNbFilEtab($nb_fil_etab);
$this->setIdPn($id_pn);

}

//setters
public function setIdEtab($id_etab) {
	$this->id_etab =$id_etab;
}
public function setNomEtab($nom_etab) {
	$this->nom_etab =$nom_etab;
}
public function setNbCherEtab ($nb_cher_etab) {
	$this->nb_cher_etab =$nb_cher_etab;
}
public function setNbEnseEtab ($nb_ense_etab) {
	$this->nb_ense_etab =$nb_ense_etab;
}
public function setNbFilEtab ($nb_fil_etab) {
	$this->nb_fil_etab =$nb_fil_etab;
}
public function setIdPn($id_pn) {
	$this->id_pn =$id_pn;
}





//getters
public function getIdEtab() {
	return $this->id_etab ;
}
public function getNomEtab() {
	return $this->nom_etab ;
}
public function getNbCherEtab() {
	return $this->nb_cher_etab ;
}
public function getNbEnseEtab() {
	return $this->nb_ense_etab ;
}
public function getNbFilEtab() {
	return $this->nb_fil_etab ;
}
public function getIdPn() {
	return $this->id_pn ;


 }}