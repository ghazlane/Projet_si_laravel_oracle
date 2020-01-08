<?php 

class RspPoolCopetence
{
	private $id_resp_pc; 
	private $nom_resp_pc; 
	private $prenom_resp_pc; 
	private $date_naissance_resp_pc; 
	private $email_resp_pc; 
	private $motDePasse_resp_pc; 
	private $telephone_resp_pc; 
	private $id_pc; 

	public function __construct($nom_resp_pc, $prenom_resp_pc,$date_naissance_resp_pc, $email_resp_pc,$motDePasse_resp_pc,$telephone_resp_pc, $id_pc)
	{ 
		$this->nom_resp_pc = $nom_resp_pc; 
		$this->prenom_resp_pc = $prenom_resp_pc; 
		$this->date_naissance_resp_pc = $date_naissance_resp_pc; 
		$this->email_resp_pc = $email_resp_pc; 
		$this->motDePasse_resp_pc = $motDePasse_resp_pc; 
		$this->telephone_resp_pc = $telephone_resp_pc;
		$this->id_pc = $id_pc;  
	}

	//setters;; 
	public function setIdRespPc($id_resp_pc){
		$this->id_resp_pc = $id_resp_pc; 
	}
	public function setNomRpsPc($nom_resp_pc){
		$this->nom_resp_pc = $nom_resp_pc; 
	}
	public function setPrenomRpsPc($prenom_resp_pc){
		$this->prenom_resp_pc = $prenom_resp_pc; 
	}
	public function setDateNaissanceRpsPc($date_naissance_resp_pc){
		$this->date_naissance_resp_pc = $date_naissance_resp_pc; 
	}
	public function setEmailRpsPc($email_resp_pc){
		$this->email_resp_pc = $email_resp_pc; 
	}
	public function setMotDePasseRpsPc($motDePasse_resp_pc){
		$this->motDePasse_resp_pc = $motDePasse_resp_pc; 
	}
	public function setTelephoneRpsPc($telephone_resp_pc){
		$this->telephone_resp_pc = $telephone_resp_pc; 
	}
	public function setIdPc($id_pc){
		$this->id_pc = $id_pc; 
	}

	//getters;; 
	public function getIdPc(){
		return $this->id_pc; 
	}
	public function getIdRespPc(){
		return $this->id_resp_pc; 
	}
	public function getNomRpsPc(){
		return $this->nom_resp_pc; 
	}
	public function getPrenomRpsPc(){
		return $this->prenom_resp_pc; 
	}
	public function getDateNaissanceRpsPc(){
		return $this->date_naissance_resp_pc; 
	}
	public function getEmailRpsPc(){
		return $this->email_resp_pc; 
	}
	public function getMotDePasseRpsPc(){
		return $this->motDePasse_resp_pc; 
	}
	public function getTelephoneRpsPc(){
		return $this->telephone_resp_pc; 
	}
}