    <?php
    require_once ("Models/Brevet.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class BrevetRepository extends Connexion{

        /** Objet PDO d'accès à la BD */
        private $connexion;
        public function Ajouter(Brevet $brevet) {	
    	
    $Rq = "insert into declaration_brevet (DESCRIPTION_DMD, CATEGORIE_BREVET,NOM_BREVET,DOMAINE_BREVET, ID_DEMANDEUR, TYPE_DEMANDEUR ) values ('" . $brevet->getDescriptionDemande() . "','" . $brevet->getCategorieBrevet() . "','" . $brevet->getNomBrevet() . "','" . $brevet->getDomaineBrevet() . "','" . $brevet->getIdDemandeur() . "','" . $brevet->getTypeDemandeur() . "')";
    	
    $connexion = $this->getConnexion(); 
    		$connexion->exec($Rq);
    		$connexion->exec("commit");
    }

    public function Lister() {   
    $Rq = "select * from declaration_brevet ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }

    	
    }