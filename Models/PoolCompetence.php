<?php
class PoolCompetence{

private $id_pc;
private $nom_pc;
private $date_creation_pc; 
private $fonctionnalite_pc; 
private $id_gu; 


public function __construct ($nom_pc,$fonctionnalite_pc, $date_creation_pc) {
$this->setNomPc($nom_pc);
$this->setFonctionnalitePc($fonctionnalite_pc);
$this->setDateCreationPc($date_creation_pc);
 
//$this->setIdGU($id_gu); 
}

//setters
public function setIdPc($id_pc) {
	$this->id_pc =$id_pc;
}
public function setNomPc ($nom_pc) {
	$this->nom_pc =$nom_pc;
}
public function setDateCreationPc ($date_creation_pc) {
	$this->date_creation_pc =$date_creation_pc;
}
public function setFonctionnalitePc ($fonctionnalite_pc) {
	$this->fonctionnalite_pc =$fonctionnalite_pc;
}
public function setIdGU($id_gu){
	$this->id_gu =$id_gu;
}





//getters
public function getIdPc () {
	return $this->id_pc;
}
public function getNomPc () {
	return $this->nom_pc;
}
public function getDateCreationPc () {
	return $this->date_creation_pc;
}
public function getFonctionnalitePc () {
	return $this->fonctionnalite_pc;
}
public function getIdGU(){
	return $this->id_gu;
}

}