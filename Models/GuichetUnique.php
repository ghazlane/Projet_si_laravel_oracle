<?php 

class GuichetUnique
{
	private $id_gu; 
	private $nom_gu; 
	private $prenom_gu; 
	private $date_naissance; 
	private $email; 
	private $motDePasse; 
	private $telephone; 

	public function __construct($nom_gu, $prenom_gu,$date_naissance, $email,$motDePasse,$telephone)
	{ 
		$this->nom_gu = $nom_gu; 
		$this->prenom_gu = $prenom_gu; 
		$this->date_naissance = $date_naissance; 
		$this->email = $email; 
		$this->motDePasse = $motDePasse; 
		$this->telephone = $telephone; 
	}

	//setters;; 
	public function setIdGu($id_gu){
		$this->id_gu = $id_gu; 
	}
	public function setNomGu($nom_gu){
		$this->nom_gu = $nom_gu; 
	}
	public function setPrenomGu($prenom_gu){
		$this->prenom_gu = $prenom_gu; 
	}
	public function setDateNaissance($date_naissance){
		$this->date_naissance = $date_naissance; 
	}
	public function setEmail($email){
		$this->email = $email; 
	}
	public function setMotDePasse($motDePasse){
		$this->motDePasse = $motDePasse; 
	}
	public function setTelephone($telephone){
		$this->telephone = $telephone; 
	}

	//getters;; 
	public function getIdGu(){
		return $this->id_gu; 
	}
	public function getNomGu(){
		return $this->nom_gu; 
	}
	public function getPrenomGu(){
		return $this->prenom_gu; 
	}
	public function getDateNaissance(){
		return $this->date_naissance; 
	}
	public function getEmail(){
		return $this->email; 
	}
	public function getMotDePasse(){
		return $this->motDePasse; 
	}
	public function getTelephone(){
		return $this->telephone; 
	}
}