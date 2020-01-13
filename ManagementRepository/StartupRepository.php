<?php
require_once ("Models/Startup.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class StartupRepository extends Connexion {

    /** Objet PDO d'accès à la BD */

    private $connexion;
    

    public function Ajouter(Startup $startup) {	
	
    $Rq = "insert into startup (DESCRIPTION_DMD, LIEU_STARTUP , SERVICE_STARTUP , MONDAT_STARTUP , CAPITAL_STARTUP, ID_DEMANDEUR, TYPE_DEMANDEUR, DATE_DMD, STATUT_DMD) 
           values ('" . $startup->getDescriptionDemande() . "','" . $startup->getLieuStartup() . "','" . $startup->getServiceStartup() . "','" . $startup->getMondatStartup() . "','" . $startup->getCapitalStartup() . "','" . $startup->getIdDemandeur() . "','" . $startup->getTypeDemandeur() . "','" . $startup->getDateDemande(). "','" . $startup->getStatusDemande() . "')";
    $connexion = $this->getConnexion(); 
	$connexion->exec($Rq);
	$connexion->exec("commit");
}

public function TransmettreStartupCir($id){
    $Rq = "update startup set STATUT_RESP_GU='Demande accépter par le Guichet Unique', STATUT_DMD ='En cours' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function TransmettreStartupPc($id,$select){
             $Rq = "update startup set STATUT_CIR='Demande accépter par le CIR', STATUT_DMD='En cours' ,ID_PC =".$select['respPC']." where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function DemandePretPourCir(){
    $Rq = "select * from startup where RPS_PC IS NOT NULL and DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' ";
           $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}
public function setDecisionFinaleCir($id, $reponse){
     $Rq = "update startup set DECISION_FINALE = '".$reponse."' where id_dmd = ".$id; 
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");   
}

public function AccepterStartupGu($id){
    $Rq = "update startup set STATUT_DMD='Accepter' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}
public function RefuserStartupGu($id){
    $Rq = "update startup set STATUT_DMD='Non accepter' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function RefuserStartupCir($id){
            $Rq = "update startup set STATUT_DMD='Non accepter' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function ListePretes(){
    $Rq = "select * from startup where DECISION_FINALE IS NOT NULL and STATUT_DMD = 'En cours'"; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

public function ListeAccepterParGU(){
    $Rq = "select * from startup where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_RESP_GU='Demande accépter par le Guichet Unique' and STATUT_CIR IS NULL "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 
  
    public function ListeAccepterParGUEncours(){
    $Rq = "select * from startup where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_CIR ='Demande accépter par le CIR' "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 

public function Lister($statut) {
    if(!empty($statut)){
        if($statut == 'Encours') $Rq = "select * from startup where STATUT_DMD = 'En cours'";
        else if($statut == 'Enattente') $Rq = "select * from startup where STATUT_DMD = 'En attente' ";
        else $Rq = "select * from startup where STATUT_DMD = 'Accepter' or  STATUT_DMD = 'Non accepter'";
    } 
    else $Rq = "select * from startup ";    
            
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    
    }

    public function Details($id){
        $Rq = "select * from startup where id_dmd =".$id; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
        }
    
    public function Update(startup $startup){
        $Rq = "update startup set DESCRIPTION_DMD='" . $startup->getDescriptionDemande() . "', LIEU_STARTUP = '" . $startup->getLieuStartup() . "', SERVICE_STARTUP= '" . $startup->getServiceStartup() . "', MONDAT_STARTUP = '" . $startup->getMondatStartup() . "', CAPITAL_STARTUP = '" . $startup->getCapitalStartup() . "' where id_dmd =".$startup->getIdDmd();
            
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }

    public function getInfoDemandeur($id_demande){
        $Rq = "select * from startup where id_dmd = ".$id_demande;     
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
        
    public function Supprimer($id){
        $Rq = "delete from startup where id_dmd =".$id; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->prepare($Rq);
        $statement->execute();
        $connexion->exec("commit");
    }	

   public function listeDeclarationStartupClient($type_demandeur, $id_demandeur){
         $Rq = "select * from startup where TYPE_DEMANDEUR = '".$type_demandeur."' and ID_DEMANDEUR = '".$id_demandeur."'"; 
         $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }

    public function listeDeclarationStartupClientTraitees($type_demandeur, $id_demandeur){
        $Rq = "select * from startup where ( STATUT_DMD = 'Accepter' or STATUT_DMD = 'Non accepter' ) and TYPE_DEMANDEUR = '".$type_demandeur."' and ID_DEMANDEUR = '".$id_demandeur."'"; 
         $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }

    public function NouvelleStartupPoolsCompetences($id_pc){
    $Rq = "select * from startup where STATUT_CIR IS NOT NULL and STATUT_DMD = 'En cours' and DECISION_FINALE IS NULL and RPS_PC IS NULL and ID_PC = ".$id_pc; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 

public function setReponsePoolCompetences($id_dmd, $reponse){
    $Rq = "update startup set RPS_PC = '".$reponse."' where id_dmd = ".$id_dmd; 
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}


}