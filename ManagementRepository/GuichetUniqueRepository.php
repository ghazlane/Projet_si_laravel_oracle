<?php 
require_once ("Models/GuichetUnique.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class GuichetUniqueRepository extends Connexion
{
	private $connexion;

	public function Ajouter(GuichetUnique $guichetUnique){
		$Rq = "insert into guichet_unique (NOM_GU, PRENOM_GU,DATE_NAISSANCE_GU,EMAIL_GU, MOT_DE_PASSE_GU,TELEPHONE_GU) values ('" . $guichetUnique->getNomGu() . "','" . $guichetUnique->getPrenomGu() . "','" . $guichetUnique->getDateNaissance() . "','" . $guichetUnique->getEmail() . "','" . $guichetUnique->getMotDePasse() . "','" . $guichetUnique->getTelephone() . "')";
		$connexion = $this->getConnexion(); 
		$connexion->exec($Rq);
		$connexion->exec("commit");
	}

	public function Lister(){
	 	$Rq = "select * from guichet_unique ";     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	return $statement;
	}

	public function Details($id){
    $Rq = "select * from guichet_unique where id_gu = ".$id;     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

	public function Update(GuichetUnique $guichetUnique){
		$Rq = "update guichet_unique set NOM_GU='" . $guichetUnique->getNomGu() . "', PRENOM_GU = '" . $guichetUnique->getPrenomGu() . "', DATE_NAISSANCE_GU= '" . $guichetUnique->getDateNaissance() . "', MOT_DE_PASSE_GU = '" . $guichetUnique->getMotDePasse() . "', TELEPHONE_GU = '" . $guichetUnique->getTelephone() . "' where id_gu =".$guichetUnique->getIdGu();
    		$connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
	}

	public funCtion Delete($id){
		$Rq = "delete from guichet_unique where id_gu = ".$id;     
    	$connexion = $this->getConnexion(); 
    	$statement = $connexion->prepare($Rq);
    	$statement->execute();
   	 	$connexion->exec("commit");
	}


}

