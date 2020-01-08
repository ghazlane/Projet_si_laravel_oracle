<?php 
require_once ("Models/RspPoolCopetence.php");
require_once ("ManagementRepository/RespPoolCompetenceRepository.php");

/**
 * 
 */
class RespPoolCompetenceController
{
	private $respPoolCompetenceRepository;
    private $rspPoolCopetence;

	public function __construct()
	{
		$this->respPoolCompetenceRepository = new RespPoolCompetenceRepository();
	}

	public funCtion Ajouter($inputs){
		$this->rspPoolCopetence = new RspPoolCopetence($inputs['nom_rsp_pc'],$inputs['prenom_rsp_pc'],$inputs['date_naissance_rsp_pc'],$inputs['email_rsp_pc'],$inputs['password_rsp_pc'],$inputs['num_telephone_rsp_pc'],$inputs['id_rsp_pc']); 
		$this->respPoolCompetenceRepository->Ajouter($this->rspPoolCopetence); 
	}

	public function Lister(){
		return $this->respPoolCompetenceRepository->Lister(); 
	}

	public function Details($id){
		return $this->respPoolCompetenceRepository->Details($id); 
	}

	public function Update($inputs){
		$resultat =  $this->respPoolCompetenceRepository->Details($inputs['id_rsp_pc_2']);
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_rsp_pc'] == $row['MOT_DE_PASSE_PC']){
					$password = $inputs['new_password_rsp_pc']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_PC']; 

		$this->rspPoolCopetence = new RspPoolCopetence($inputs['nom_rsp_pc'],$inputs['prenom_rsp_pc'],$inputs['date_naissance_rsp_pc'],$inputs['email_resp_pc'],$password,$inputs['num_telephone_rsp_pc'],$inputs['id_rsp_pc']);
		$this->rspPoolCopetence->setIdRespPc($inputs['id_rsp_pc_2']) ; 
		$this->respPoolCompetenceRepository->Update($this->rspPoolCopetence); 
		return true; 
	}

	public funCtion Delete($id){
		$this->respPoolCompetenceRepository->Delete($id);
	}
}