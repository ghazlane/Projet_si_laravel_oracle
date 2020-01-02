<?php

class Formation{
private $id_dmd;
private $date_dmd;
private $status_dmd;
private $status_respo_gu; 
private $status_cir; 
private $responsable_pc; 
private $description_dmd; 
private $sujet_formation;   
private $theme_formation;   
private $nombre_participants;  
private $plan_formation;  
private $id_cir; 
private $id_pc;
private $id_respo_pc; 
private $id_administratif; 
private $id_demandeur; 
private $type_demandeur;


public function __construct ($sujet_formation, $theme_formation, $nombre_participants, $plan_formation, $description_dmd) {
	$this->setSujetFormation($sujet_formation);
	$this->setThemeFormation($theme_formation);
	$this->setNombreParticipants($nombre_participants);
	$this->setPlanFormation($plan_formation); 
	$this->setDescriptionDemande($description_dmd); 
}

//setters
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
public function setSujetFormation($sujet_formation) {
	$this->sujet_formation =$sujet_formation;
}
public function setThemeFormation($theme_formation) {
	$this->theme_formation =$theme_formation;
}
public function setNombreParticipants($nombre_participants) {
	$this->nombre_participants =$nombre_participants;
}
public function setPlanFormation($plan_formation) {
	$this->plan_formation =$plan_formation;
}
public function setDescriptionDemande ($description_dmd) {
	$this->description_dmd =$description_dmd;
}
//getters
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
public function getSujetFormation () {
	return $this->sujet_formation;
}
public function getThemeFormation () {
	return $this->theme_formation;
}
public function getNombreParticipants () {
	return $this->nombre_participants ;
}
public function getPlanFormation () {
	return $this->plan_formation;
}
public function getDescriptionDemande () {
	return $this->description_dmd ;
}
}