<?php

class Startup{
private $id_dmd;
private $date_dmd;
private $status_dmd;
private $status_respo_gu; 
private $status_cir; 
private $responsable_pc; 
private $description_dmd; 
private $lieu_startup;   
private $service_startup;   
private $mandat_startup;  
private $capital_startup;  
private $id_cir; 
private $id_pc;
private $id_respo_pc; 
private $id_administratif; 
private $id_demandeur; 
private $type_demandeur;


public function __construct ($lieu_Startup, $service_Startup, $mandat_startup, $capital_startup, $description_dmd) {
	$this->setLieuStartup($lieu_Startup);
	$this->setServiceStartup($service_Startup);
	$this->setMondatStartup($mandat_startup);
	$this->setCapitalStartup($capital_startup); 
	$this->setDescriptionDemande($description_dmd); 
}

//setters
public function setIdDmd($id_dmd){
	$this->id_dmd = $id_dmd; 
}
public function setIdCir ($id_cir) {
	$this->id_cir =$id_cir;
}
public function setIdPc ($id_pc) {
	$this->id_pc =$id_pc;
}
public function setIdRespoPc ($id_respo_pc) {
	$this->id_respo_pc =$id_respo_pc;
}
public function setIdAdministratif ($id_administratif) {
	$this->id_administratif =$id_administratif;
}
public function setIdDemandeur ($id_demandeur) {
	$this->id_demandeur =$id_demandeur;
}
public function setTypeDemandeur($type_demandeur){
	$this->type_demandeur =$type_demandeur;
}
public function setIdDemande ($id_dmd) {
	$this->id_dmd =$id_dmd;
}
public function setDateDemande ($date_dmd) {
	$this->date_dmd =$date_dmd;
}
public function setStatusDemande ($status_dmd) {
	$this->status_dmd =$status_dmd;
}
public function setStatusRespoGu ($status_respo_gu) {
	$this->status_respo_gu =$status_respo_gu;
}
public function setStatusCir ($status_cir) {
	$this->status_cir =$status_cir;
}
public function setResponsablePc ($responsable_pc) {
	$this->responsable_pc =$responsable_pc;
}
public function setLieuStartup($lieu_Startup) {
	$this->lieu_Startup =$lieu_Startup;
}
public function setServiceStartup($service_Startup) {
	$this->service_Startup =$service_Startup;
}
public function setMondatStartup($mandat_startup) {
	$this->mandat_startup =$mandat_startup;
}
public function setCapitalStartup($capital_startup) {
	$this->capital_startup =$capital_startup;
}
public function setDescriptionDemande ($description_dmd) {
	$this->description_dmd =$description_dmd;
}


//getters
public function getIdDmd(){
	return $this->id_dmd;
}
public function getIdCir () {
	return $this->id_cir;
}
public function getIdPc () {
	return $this->id_pc;
}
public function getIdRespoPc () {
	return $this->id_respo_pc;
}
public function getIdAdministratif () {
	return $this->id_administratif;
}
public function getIdDemandeur () {
	return $this->id_demandeur;
}
public function getTypeDemandeur(){
	return $this->type_demandeur;
}
public function getIdDemande () {
	return $this->id_dmd;
}
public function getDateDemande () {
	return $this->date_dmd ;
}
public function getStatusDemande () {
	return $this->status_dmd;
}
public function getStatusRespoGu () {
	return $this->status_respo_gu;
}
public function getStatusCir () {
	return $this->status_cir;
}
public function getResponsablePc () {
	return $this->responsable_pc;
}
public function getLieuStartup () {
	return $this->lieu_Startup;
}
public function getServiceStartup () {
	return $this->service_Startup;
}
public function getMondatStartup () {
	return $this->mandat_startup ;
}
public function getCapitalStartup () {
	return $this->capital_startup;
}
public function getDescriptionDemande () {
	return $this->description_dmd ;
}
}