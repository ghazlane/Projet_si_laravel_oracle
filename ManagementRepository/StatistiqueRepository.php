 <?php
    require_once ("ManagementRepository/ConnexionRepository.php");


class StatistiqueRepository extends Connexion{
	private $connexion;

	public function getNombreTotalDemandeStatus($etat){
        $connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where STATUT_DMD = '".$etat."'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 
    	
    	$Rq = "select count(*) as nbr from declaration_brevet where STATUT_DMD = '".$etat."'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where STATUT_DMD = '".$etat."'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	return $total;  
	}

	public function nombreTotalDemande(){
		 $connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 
    	
    	$Rq = "select count(*) as nbr from declaration_brevet";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	return $total;  
	}

	public function pourcentageDemande($etat){
		$total = $this->getNombreTotalDemandeStatus($etat);
		$totalDemande = $this->nombreTotalDemande(); 
		return  intval(($total/$totalDemande)*100); 
	}
}