<?php 

class Professeur
{
	private $code_prof; 
	private $nom_prof; 
	private $prenom_prof; 
	private $date_naissance_prof; 
	private $email_prof; 
    private $mot_de_passe_prof;
    private $num_aff; 
	private $telephone_prof; 

	public function __construct($nom_prof , $prenom_prof , $date_naissance_prof , $email_prof , $mot_de_passe_prof , $num_aff , $telephone_prof)
	{ 
		$this->nom_prof = $nom_prof; 
		$this->prenom_prof = $prenom_prof; 
		$this->date_naissance_prof = $date_naissance_prof; 
		$this->email_prof = $email_prof; 
        $this->mot_de_passe_prof = $mot_de_passe_prof; 
        $this->num_aff = $num_aff;
		$this->telephone_prof = $telephone_prof; 
	}

	//setters;; 
	public function setCodeProf($code_prof){
		$this->code_prof = $code_prof; 
	}
	public function setNomProf($nom_prof){
		$this->nom_prof = $nom_prof; 
	}
	public function setPrenomProf($prenom_prof){
		$this->prenom_prof = $prenom_prof; 
	}
	public function setDateNaissanceProf($date_naissance_prof){
		$this->date_naissance_prof = $date_naissance_prof; 
	}
	public function setEmailProf($email_prof){
		$this->email_prof = $email_prof; 
	}
	public function setMotDePasseProf($mot_de_passe_prof){
		$this->mot_de_passe_prof = $mot_de_passe_prof; 
    }
    public function setNumAff($num_aff){
        $this->num_aff = $num_aff;
    }
	public function setTelephoneProf($telephone_prof){
		$this->telephone_prof = $telephone_prof; 
	}

	//getters;; 
	public function getCodeProf(){
		return $this->code_prof; 
	}
	public function getNomProf(){
		return $this->nom_prof; 
	}
	public function getPrenomProf(){
		return $this->prenom_prof; 
	}
	public function getDateNaissanceProf(){
		return $this->date_naissance_prof; 
	}
	public function getEmailProf(){
		return $this->email_prof; 
	}
	public function getMotDePasseProf(){
		return $this->mot_de_passe_prof; 
    }
    public function getNumAff(){
        return $this->num_aff;
    }
	public function getTelephoneProf(){
		return $this->telephone_prof; 
	}
}