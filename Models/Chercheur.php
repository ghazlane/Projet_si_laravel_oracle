<?php 

class Chercheur
{
	private $code_Cher; 
	private $nom_Cher; 
	private $prenom_Cher; 
	private $date_naissance_Cher; 
	private $email_Cher; 
    private $mot_de_passe_Cher;
    private $theme_recherche; 
	private $telephone_Cher; 

	public function __construct($nom_Cher , $prenom_Cher , $date_naissance_Cher , $email_Cher , $mot_de_passe_Cher , $theme_recherche , $telephone_Cher)
	{ 
		$this->nom_Cher = $nom_Cher; 
		$this->prenom_Cher = $prenom_Cher; 
		$this->date_naissance_Cher = $date_naissance_Cher; 
		$this->email_Cher = $email_Cher; 
        $this->mot_de_passe_Cher = $mot_de_passe_Cher; 
        $this->theme_recherche = $theme_recherche;
		$this->telephone_Cher = $telephone_Cher; 
	}

	//setters;; 
	public function setCodeCher($code_Cher){
		$this->code_Cher = $code_Cher; 
	}
	public function setNomCher($nom_Cher){
		$this->nom_Cher = $nom_Cher; 
	}
	public function setPrenomCher($prenom_Cher){
		$this->prenom_Cher = $prenom_Cher; 
	}
	public function setDateNaissanceCher($date_naissance_Cher){
		$this->date_naissance_Cher = $date_naissance_Cher; 
	}
	public function setEmailCher($email_Cher){
		$this->email_Cher = $email_Cher; 
	}
	public function setMotDePasseCher($mot_de_passe_Cher){
		$this->mot_de_passe_Cher = $mot_de_passe_Cher; 
    }
    public function setThemeRecherche($theme_recherche){
        $this->theme_recherche = $theme_recherche;
    }
	public function setTelephoneCher($telephone_Cher){
		$this->telephone_Cher = $telephone_Cher; 
	}

	//getters;; 
	public function getCodeCher(){
		return $this->code_Cher; 
	}
	public function getNomCher(){
		return $this->nom_Cher; 
	}
	public function getPrenomCher(){
		return $this->prenom_Cher; 
	}
	public function getDateNaissanceCher(){
		return $this->date_naissance_Cher; 
	}
	public function getEmailCher(){
		return $this->email_Cher; 
	}
	public function getMotDePasseCher(){
		return $this->mot_de_passe_Cher; 
    }
    public function getThemeRecherche(){
        return $this->theme_recherche;
    }
	public function getTelephoneCher(){
		return $this->telephone_Cher; 
	}
}