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

	public function demandeTraiterParMois($mois, $annee){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."'";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ; 
	}

	public function demandeNonAccepterParMois($mois, $annee){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Non accepter'";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Non accepter'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Non accepter'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ; 
	}


public function demandeAccepterParMois($mois, $annee){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Accepter'";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Accepter'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where to_char(DATE_REPONSE, 'MM') = '".$mois."' and to_char(DATE_REPONSE, 'YYYY') = '".$annee."' and STATUT_DMD ='Accepter'";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ; 
	}

	public function nombreDeamndeTraitePcById($id){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where id_pc = ".$id." and REPONSE_PC IS NOT NULL";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where id_pc = ".$id." and REPONSE_PC IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where id_pc = ".$id." and RPS_PC IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ; 
	}

	public function nombreDeamndeTraiteByCirByIdCir($id){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where id_cir = ".$id." and STATUT_CIR IS NOT NULL";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where id_cir = ".$id." and STATUT_CIR IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where id_cir = ".$id." and STATUT_CIR IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ; 
	}

	public function nombreDeamndeTraiteByGuByIdGu($id){
		$connexion = $this->getConnexion(); 
        $total = 0 ;
		$Rq = "select count(*) as nbr from declaration_invention where id_gu = ".$id." and STATUT_RESP_GU IS NOT NULL";
		$connexion = $this->getConnexion(); 
    	$statement = $connexion->query($Rq);
    	$statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from declaration_brevet where id_gu = ".$id." and STATUT_RESP_GU IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR']; 

    	$Rq = "select count(*) as nbr from lancement_formation where id_gu = ".$id." and STATUT_RESP_GU IS NOT NULL";
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
    	$nombre = $statement->fetch();
    	$total += $nombre['NBR'];
    	 
    	return $total ;
	}
}