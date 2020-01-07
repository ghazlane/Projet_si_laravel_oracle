<?php 

class ResponsableCir
{
	private $id_cir; 
	private $nom_cir; 
	private $prenom_cir; 
	private $date_naissance; 
	private $email; 
	private $motDePasse; 
	private $telephone; 

	public function __construct($nom_cir, $prenom_cir,$date_naissance, $email,$motDePasse,$telephone)
	{ 
		$this->nom_cir = $nom_cir; 
		$this->prenom_cir = $prenom_cir; 
		$this->date_naissance = $date_naissance; 
		$this->email = $email; 
		$this->motDePasse = $motDePasse; 
		$this->telephone = $telephone; 
	}

	//setters;; 
	public function setIdCir($id_cir){
		$this->id_cir = $id_cir; 
	}
	public function setNomCir($nom_cir){
		$this->nom_cir = $nom_cir; 
	}
	public function setPrenomCir($prenom_cir){
		$this->prenom_cir = $prenom_cir; 
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
	public function getIdCir(){
		return $this->id_cir; 
	}
	public function getNomCir(){
		return $this->nom_cir; 
	}
	public function getPrenomCir(){
		return $this->prenom_cir; 
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