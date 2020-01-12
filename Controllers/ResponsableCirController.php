<?php 
require_once ("Models/ResponsableCir.php");
require_once ("ManagementRepository/ResponsableCirRepository.php");

/**
 * 
 */
 
class ResponsableCirController
{
	private $responsableCirRepository;
    private $responsableCir;

	public function __construct()
	{
		$this->responsableCirRepository = new ResponsableCirRepository();
	}

	public funCtion Ajouter($inputs){
		$this->responsableCir = new ResponsableCir($inputs['nom_cir'],$inputs['prenom_cir'],$inputs['date_naissance_cir'],$inputs['email_cir'],$inputs['password_cir'],$inputs['num_telephone_cir']); 
		$this->responsableCirRepository->Ajouter($this->responsableCir); 
	}

	public function Lister(){
		return $this->responsableCirRepository->Lister(); 
	}

	public function Details($id){
		return $this->responsableCirRepository->Details($id); 
	}

	public function Update($inputs){
		$resultat =  $this->responsableCirRepository->Details($inputs['id_cir']); 
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_cir'] == $row['MOT_DE_PASSE_CIR']){
					$password = $inputs['new_password_cir']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_CIR']; 

		$this->responsableCir = new ResponsableCir($inputs['nom_cir'],$inputs['prenom_cir'],$inputs['date_naissance_cir'],$row['EMAIL_CIR'],$password,$inputs['num_telephone_cir']);
		$this->responsableCir->setIdCir($row['ID_CIR']) ; 
		$this->responsableCirRepository->Update($this->responsableCir); 
		return true; 
	}

	public funCtion Delete($id){
		$this->responsableCirRepository->Delete($id);
	}
}