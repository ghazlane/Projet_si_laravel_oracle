<?php
require_once ("Models/Formation.php");
require_once ("ManagementRepository/ConnexionRepository.php");

class FormationRepository extends Connexion {

    /** Objet PDO d'accès à la BD */

    private $connexion;
    

    public function Ajouter(Formation $formation) {	
	
    $Rq = "insert into lancement_formation (DESCRIPTION_DMD, SUJET_FORMATION , THEME_FORMATION , NOMBRE_PARTICIPANTS , PLAN_FORMATION, ID_DEMANDEUR, TYPE_DEMANDEUR) 
           values ('" . $formation->getDescriptionDemande() . "','" . $formation->getSujetFormation() . "','" . $formation->getThemeFormation() . "','" . $formation->getNombreParticipants() . "','" . $formation->getPlanFormation() . "','" . $formation->getIdDemandeur() . "','" . $formation->getTypeDemandeur() . "')";
    
    $connexion = $this->getConnexion(); 
	$connexion->exec($Rq);
	$connexion->exec("commit");
}

<<<<<<< HEAD
    public function Lister() {
        if(!empty($statut)){
            if($statut == 'Encours') $Rq = "select * from lancement_formation where STATUT_DMD = 'En cours'";
            else if($statut == 'Enattente') $Rq = "select * from lancement_formation where STATUT_DMD = 'En attente'";
            else $Rq = "select * from lancement_formation where STATUT_DMD = 'Acceptée' or  STATUT_DMD = 'Non acceptée'";
        } 
        else $Rq = "select * from lancement_formation ";     
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;    
=======
public function TransmettreFormationCir($id){
    $Rq = "update lancement_formation set STATUT_RESP_GU='Demande accépter par le Guichet Unique', STATUT_DMD ='En cours' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function TransmettreFormationPc($id){
            $Rq = "update lancement_formation set STATUT_CIR='Demande accépter par le CIR', STATUT_DMD='En cours' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function AccepterFormationGu($id){
    $Rq = "update lancement_formation set STATUT_DMD='Accepter' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}
public function RefuserFormationGu($id){
    $Rq = "update lancement_formation set STATUT_DMD='Non accepter' where id_dmd =".$id;
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function RefuserFormationCir($id){
            $Rq = "update lancement_formation set STATUT_DMD='Non accepter' where id_dmd =".$id;
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
}

public function ListePretes(){
    $Rq = "select * from lancement_formation where DECISION_FINALE IS NOT NULL and STATUT_DMD = 'En cours'"; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

public function ListeAccepterParGU(){
    $Rq = "select * from lancement_formation where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_RESP_GU='Demande accépter par le Guichet Unique' and STATUT_CIR IS NULL "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 
  
    public function ListeAccepterParGUEncours(){
    $Rq = "select * from lancement_formation where DECISION_FINALE IS NULL and STATUT_DMD = 'En cours' and STATUT_CIR ='Demande accépter par le CIR' "; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
} 

public function Lister($statut) {
    if(!empty($statut)){
        if($statut == 'Encours') $Rq = "select * from lancement_formation where STATUT_DMD = 'En cours'";
        else if($statut == 'Enattente') $Rq = "select * from lancement_formation where STATUT_DMD = 'En attente' ";
        else $Rq = "select * from lancement_formation where STATUT_DMD = 'Accepter' or  STATUT_DMD = 'Non accepter'";
    } 
    else $Rq = "select * from lancement_formation ";    
            
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
    }

    public function Details($id){
        $Rq = "select * from lancement_formation where id_dmd =".$id; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
        }
    
    public function Update(Formation $formation){
        $Rq = "update lancement_formation set DESCRIPTION_DMD='" . $formation->getDescriptionDemande() . "', SUJET_FORMATION = '" . $formation->getSujetFormation() . "', THEME_FORMATION= '" . $formation->getThemeFormation() . "', NOMBRE_PARTICIPANTS = '" . $formation->getNombreParticipants() . "', PLAN_FORMATION = '" . $formation->getPlanFormation() . "' where id_dmd =".$formation->getIdDmd();
            
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }
        
    public function Supprimer($id){
        $Rq = "delete from lancement_formation where id_dmd =".$id; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->prepare($Rq);
        $statement->execute();
        $connexion->exec("commit");
    }	

<<<<<<< HEAD
    public function getInfoDemandeur($id_demande){
        $Rq = "select * from lancement_formation where id_dmd = ".$id_demande;     
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $row = $statement->fetch(); 
        if($row['TYPE_DEMANDEUR'] == 'professeur'){
            $Rq = "select * from professeur where CODE_PROF = '".$row['ID_DEMANDEUR']."'";
=======
        public function getInfoDemandeur($id_demande){
            $Rq = "select * from lancement_invention where id_dmd = ".$id_demande;     
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
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

<<<<<<< HEAD
        
    public function TransmettreFormationnCir($id){
        $Rq = "update lancement_formation set STATUT_RESP_GU='Demande accéptée par le Guichet Unique', STATUT_DMD='En cours' where id_dmd =".$id;
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }

    public function TransmettreFormationPool($id){
        $Rq = "update lancement_formation set STATUT_RESP_CIR='Demande accéptée par le Responsable CIR', STATUT_DMD='En cours' where id_dmd =".$id;
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }

    public function RefuserFormationGu($id){
        $Rq = "update lancement_formation set STATUT_DMD='Non acceptée' where id_dmd =".$id;
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }

    public function ListePretes(){
        $Rq = "select * from lancement_formation where DECISION_FINALE IS NOT NULL and STATUT_DMD = 'En cours'"; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
    }
    public function ListeNouvelleDecalarationFormationRspPoolCompetences($id_pc){
        $Rq = "select * from lancement_formation where STATUT_CIR IS NOT NULL and STATUT_DMD = 'En cours' and DECISION_FINALE IS NULL and RPS_PC IS  NULL and ID_PC = ".$id_pc; 
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
    } 

    public function setReponsePoolCompetences($id_dmd, $reponse){
        $Rq = "update lancement_formation set RPS_PC = '".$reponse."' where id_dmd = ".$id_dmd; 
                $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }

    public function AccepterFormationGu($id){
        $Rq = "update lancement_formation set STATUT_DMD='Acceptée' where id_dmd =".$id;
        $connexion = $this->getConnexion(); 
                $connexion->exec($Rq);
                $connexion->exec("commit");
    }
}
=======

    
>>>>>>> 2b7bb2681db31c24961557c07953360d70855526
