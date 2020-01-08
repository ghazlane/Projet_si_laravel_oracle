    <?php
    require_once ("Models/Brevet.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class BrevetRepository extends Connexion{

        /** Objet PDO d'accès à la BD */
        private $connexion;
        public function Ajouter(Brevet $brevet) {	
    	
    $Rq = "insert into declaration_brevet (DESCRIPTION_DMD, CATEGORIE_BREVET,NOM_BREVET,DOMAINE_BREVET, ID_DEMANDEUR,TYPE_DEMANDEUR, STATUT_DMD,DATE_DMD ) 
    values ('" . $brevet->getDescriptionDemande() . "','" . $brevet->getCategorieBrevet() . "','" . $brevet->getNomBrevet() . "','" .$brevet->getDomaineBrevet() . "','" . $brevet->getIdDemandeur() . "','" . $brevet->getTypeDemandeur() . "','" . $brevet->getStatusDemande() . "','" .$brevet->getDateDemande() . "')";
    	
    $connexion = $this->getConnexion(); 
    		$connexion->exec($Rq);
    		$connexion->exec("commit");
    }

    public function AccepterBrevetGu($id){
            $Rq = "update declaration_brevet set STATUT_DMD='Accepter' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

    public function TransmettreBrevetCir($id){
            $Rq = "update declaration_brevet set STATUT_RESP_GU='Demande accépter par le Guichet Unique', STATUT_DMD='En cours' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}
public function TransmettreBrevetPc($id){
            $Rq = "update declaration_brevet set STATUT_CIR='Demande accépter par le CIR', STATUT_DMD='En cours' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function RefuserBrevetGu($id){
            $Rq = "update declaration_brevet set STATUT_DMD='Non accepter' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function RefuserBrevetCir($id){
            $Rq = "update declaration_brevet set STATUT_DMD='Non accepter' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

    public function ListePretes(){
    $Rq = "select * from declaration_brevet where DECISION_FINALE IS NOT NULL and STATUT_DMD = 'En cours'"; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

    public function ListeAccepterParGU(){
    $Rq = "select * from declaration_brevet where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_RESP_GU='Demande accépter par le Guichet Unique' and STATUT_CIR IS NULL "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 
  
    public function ListeAccepterParGUEncours(){
    $Rq = "select * from declaration_brevet where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_CIR ='Demande accépter par le CIR' "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 

    public function Lister($statut) {
    if(!empty($statut)){
        if($statut == 'Encours') $Rq = "select * from declaration_brevet where STATUT_DMD = 'En cours'";
        else if($statut == 'Enattente') $Rq = "select * from declaration_brevet where STATUT_DMD = 'En attente' ";
        else $Rq = "select * from declaration_brevet where STATUT_DMD = 'Accepter' or  STATUT_DMD = 'Non accepter'";
    } 
    else $Rq = "select * from declaration_brevet ";
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }

    public function Rechercher($id){
    $Rq = "select * from declaration_brevet where id_dmd =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $row=$statement->fetch();
    return $row;
    }

    public function getInfoDemandeur($id_demande){
    $Rq = "select * from declaration_brevet where id_dmd = ".$id_demande;     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $row = $statement->fetch(); 
    if($row['TYPE_DEMANDEUR'] == 'professeur'){
        $Rq = "select * from professeur where CODE_PROF = '".$row['ID_DEMANDEUR']."'";
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $row = $statement->fetch(); 
        return array("nom"=> $row['NOM_PROF'], "prenom"=>$row['PRENOM_PROF']); 
    }else if($row['TYPE_DEMANDEUR'] == 'administratif'){
        $Rq = "select * from administratif where CODE_ADMIN = '".$row['ID_DEMANDEUR']."'";
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $row = $statement->fetch(); 
        return array("nom"=> $row['NOM_ADMIN'], "prenom"=>$row['PRENOM_ADMIN']); 
    }else if($row['TYPE_DEMANDEUR'] == 'chercheur'){
        $Rq = "select * from chercheur where CODE_CHER = '".$row['ID_DEMANDEUR']."'";
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $row = $statement->fetch(); 
        return array("nom"=> $row['NOM_CHER'], "prenom"=>$row['PRENOM_CHER']); 
    }
}

    public function Modifier(Brevet $brevet,$id){
    $Rq = "update declaration_brevet set DESCRIPTION_DMD='" . $brevet->getDescriptionDemande() . "', CATEGORIE_BREVET = '" . $brevet->getCategorieBrevet() . "', NOM_BREVET= '" . $brevet->getNomBrevet() . "', DOMAINE_BREVET = '" . $brevet->getDomaineBrevet() . "' where id_dmd =".$id;
        
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
    }


    
    public function Supprimer($id){
    $Rq = "delete from declaration_brevet where id_dmd =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->prepare($Rq);
    $statement->execute();
    }	
    }