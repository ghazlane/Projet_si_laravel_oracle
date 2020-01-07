<?php 
require_once ("Models/RspPoolCopetence.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class RespPoolCompetenceRepository extends Connexion
{
	private $connexion;

	public function Ajouter(RspPoolCopetence $rspPoolCopetence){
		$Rq = "insert into Responsable_pc (NOM_RESP_PC , PRENOM_RESP_PC,EMAIL_RESP_PC ,DATE_NAISSANCE_PC, MOT_DE_PASSE_PC ,TELEPHONE_PC,ID_PC) values ('" . $rspPoolCopetence->getNomRpsPc() . "','" . $rspPoolCopetence->getPrenomRpsPc() ."','" . $rspPoolCopetence->getEmailRpsPc() . "','" . $rspPoolCopetence->getDateNaissanceRpsPc() ."','" . $rspPoolCopetence->getMotDePasseRpsPc() . "','" . $rspPoolCopetence->getTelephoneRpsPc() . "','" . $rspPoolCopetence->getIdPc() ."')";
		/*
		$Rq = "insert into Responsable_pc (NOM_RESP_PC , PRENOM_RESP_PC ,DATE_NAISSANCE_PC ,EMAIL_RESP_PC , MOT_DE_PASSE_PC ,TELEPHONE_PC,ID_PC) values ('" . $rspPoolCopetence->getNomRpsPc() . "','" . $rspPoolCopetence->getPrenomRpsPc() . "','" . $rspPoolCopetence->getDateNaissanceRpsPc() . "','" . $rspPoolCopetence->getEmailRpsPc() . "','" . $rspPoolCopetence->getMotDePasseRpsPc() . "','" . $rspPoolCopetence->getTelephoneRpsPc() . "','" . $rspPoolCopetence->getIdPc() ."')";
		*/
		$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
	}

	public function Lister(){
	 	$Rq = "select * from Responsable_pc, pool_competences where pool_competences.ID_PC = Responsable_pc.ID_PC ";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	return $statement;
	}

	public function Details($id){
    $Rq = "select * from Responsable_pc where ID_RESP_PC = ".$id;     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

	public function Update(RspPoolCopetence $rspPoolCopetence){
		$Rq = "update Responsable_pc set NOM_RESP_PC='" . $rspPoolCopetence->getNomRpsPc() . "', PRENOM_RESP_PC = '" . $rspPoolCopetence->getPrenomRpsPc() . "', DATE_NAISSANCE_PC= '" . $rspPoolCopetence->getDateNaissanceRpsPc() . "', MOT_DE_PASSE_PC = '" .$rspPoolCopetence->getMotDePasseRpsPc(). "', TELEPHONE_PC = '" . $rspPoolCopetence->getTelephoneRpsPc() . "' , ID_PC = '".$rspPoolCopetence->getIdPc() ."' where ID_RESP_PC =".$rspPoolCopetence->getIdRespPc();
    		$connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
	}

	public funCtion Delete($id){
		$Rq = "delete from Responsable_pc where ID_RESP_PC = ".$id;     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->prepare($Rq);
    	$statement->execute();
   	 	$connexion->exec("commit");
	}

}

