<?php 
require_once ("Models/GuichetUnique.php");
require_once ("ManagementRepository/GuichetUniqueRepository.php");

/**
 * 
 */
class GuichetUniqueController
{
	private $guichetUniqueRepository;
    private $guichetUnique;

	public function __construct()
	{
		$this->guichetUniqueRepository = new GuichetUniqueRepository();
	}

	public funCtion Ajouter($inputs){
		$this->guichetUnique = new GuichetUnique($inputs['nom_gu'],$inputs['prenom_gu'],$inputs['date_naissance_gu'],$inputs['email_gu'],$inputs['password_gu'],$inputs['num_telephone_gu']); 
		$this->guichetUniqueRepository->Ajouter($this->guichetUnique); 
	}

	public function Lister(){
		return $this->guichetUniqueRepository->Lister(); 
	}

	public function Details($id){
		return $this->guichetUniqueRepository->Details($id); 
	}

	public function Update($inputs){
		$resultat =  $this->guichetUniqueRepository->Details($inputs['id_gu']); 
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_gu'] == $row['MOT_DE_PASSE_GU']){
					$password = $inputs['new_password_gu']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_GU']; 

		$this->guichetUnique = new GuichetUnique($inputs['nom_gu'],$inputs['prenom_gu'],$inputs['date_naissance_gu'],$row['EMAIL_GU'],$password,$inputs['num_telephone_gu']);
		$this->guichetUnique->setIdGu($row['ID_GU']) ; 
		$this->guichetUniqueRepository->Update($this->guichetUnique); 
		return true; 
	}

	public funCtion Delete($id){
		$this->guichetUniqueRepository->Delete($id);
	}
}