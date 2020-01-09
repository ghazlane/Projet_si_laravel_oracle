<?php 
require_once ("Models/Chercheur.php");
require_once ("ManagementRepository/ChercheurRepository.php");


class ChercheurController
{
	private $chercheurRepository;
    private $chercheur;

	public function __construct()
	{
		$this->chercheurRepository = new ChercheurRepository();
	}

	public funCtion Ajouter($inputs){
		$this->chercheur = new Chercheur($inputs['nom_cher'],$inputs['prenom_cher'],$inputs['date_naissance_cher'],$inputs['email_cher'],$inputs['password_cher'],$inputs['theme_recherche'],$inputs['telephone_cher']); 
		$this->chercheurRepository->Ajouter($this->chercheur); 
	}

	public function Lister(){
		return $this->chercheurRepository->Lister(); 
	}

	public function Details($code){
		return $this->chercheurRepository->Details($code); 
	}

	public function Update($inputs){
		$resultat =  $this->chercheurRepository->Details($inputs['code_cher']); 
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_cher'] == $row['MOT_DE_PASSE_CHER']){
					$password = $inputs['new_password_cher']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_CHER']; 

		$this->chercheur = new Chercheur($inputs['nom_cher'],$inputs['prenom_cher'],$inputs['date_naissance_cher'],$row['email_cher'],$password,$inputs['theme_recherche'],$inputs['telephone_cher']);
		$this->chercheur->setCodecher($row['CODE_CHER']) ; 
		$this->chercheurRepository->Update($this->chercheur); 
		return true; 
	}

	public funCtion Delete($code){
		$this->chercheurRepository->Delete($code);
	}
}