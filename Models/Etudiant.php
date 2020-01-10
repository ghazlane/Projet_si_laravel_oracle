<?php 

class Etudiant
{
	private $code_et; 
	private $nom_et; 
	private $prenom_et; 
	private $date_naissance_et; 
	private $email_et; 
    private $mot_de_passe_et;
    private $etablissement; 
	private $telephone_et; 

	public function __construct($nom_et , $prenom_et , $date_naissance_et , $email_et , $mot_de_passe_et , $etablissement , $telephone_et)
	{ 
		$this->nom_et = $nom_et; 
		$this->prenom_et = $prenom_et; 
		$this->date_naissance_et = $date_naissance_et; 
		$this->email_et = $email_et; 
        $this->mot_de_passe_et = $mot_de_passe_et; 
        $this->etablissement = $etablissement;
		$this->telephone_et = $telephone_et; 
	}

	//setters;; 
	public function setCodeEt($code_et){
		$this->code_et = $code_et; 
	}
	public function setNomEt($nom_et){
		$this->nom_et = $nom_et; 
	}
	public function setPrenomEt($prenom_et){
		$this->prenom_et = $prenom_et; 
	}
	public function setDateNaissanceEt($date_naissance_et){
		$this->date_naissance_et = $date_naissance_et; 
	}
	public function setEmailEt($email_et){
		$this->email_et = $email_et; 
	}
	public function setMotDePasseEt($mot_de_passe_et){
		$this->mot_de_passe_et = $mot_de_passe_et; 
    }
    public function setEtablissement($etablissement){
        $this->etablissement = $etablissement;
    }
	public function setTelephoneEt($telephone_et){
		$this->telephone_et = $telephone_et; 
	}

	//getters;; 
	public function getCodeEt(){
		return $this->code_et; 
	}
	public function getNomEt(){
		return $this->nom_et; 
	}
	public function getPrenomEt(){
		return $this->prenom_et; 
	}
	public function getDateNaissanceEt(){
		return $this->date_naissance_et; 
	}
	public function getEmailEt(){
		return $this->email_et; 
	}
	public function getMotDePasseEt(){
		return $this->mot_de_passe_et; 
    }
    public function getEtablissement(){
        return $this->etablissement;
    }
	public function getTelephoneEt(){
		return $this->telephone_et; 
	}
}