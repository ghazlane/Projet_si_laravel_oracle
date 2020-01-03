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

public function Lister() {
      
    $Rq = "select * from lancement_formation ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    
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

        public function getInfoDemandeur($id_demande){
            $Rq = "select * from declaration_invention where id_dmd = ".$id_demande;     
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
    }