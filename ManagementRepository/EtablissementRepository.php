    <?php
    require_once ("Models/Etablissement.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class EtablissementRepository extends Connexion{

        /** Objet PDO d'accès à la BD */
        private $connexion;
        public function Ajouter(Etablissement $etablissement) {	
    	
    $Rq = "insert into etablissement (NOM_ETAB,NB_ENSE_ETAB,NB_CHER_ETAB,NB_FIL_ETAB,ID_PN) values ('".$etablissement->getNomEtab()."','".$etablissement->getNbEnseEtab()."','".$etablissement->getNbCherEtab()."','".$etablissement->getNbFilEtab()."','".$etablissement->getIdPn()."')";
    	
    $connexion = $this->getConnexion(); 
    		$connexion->exec($Rq);
    		$connexion->exec("commit");
    }

    public function Lister() {   
    $Rq = "select * from etablissement,point_nodal  where etablissement.id_pn = point_nodal.id_pn ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }


   public function Rechercher($id){
    $Rq = "select * from etablissement,point_nodal  where etablissement.id_pn = point_nodal.id_pn and id_etab =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $row=$statement->fetch();
    return $row;
    }

    public function Modifier(Etablissement $etablissement,$id){
    $Rq = "update etablissement set NOM_ETAB='" . 
    $etablissement->getNomEtab(). "', NB_ENSE_ETAB = '" . 
    $etablissement->getNbEnseEtab(). "', NB_CHER_ETAB = '" . 
    $etablissement->getNbCherEtab(). "', NB_FIL_ETAB = '" . 
    $etablissement->getNbFilEtab(). "', ID_PN = '" . 
    $etablissement->getIdPn(). "' where id_etab =".$id;
        
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
    }


    
    public function Supprimer($id){
    $Rq = "delete from etablissement where id_etab =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->prepare($Rq);
    $statement->execute();
    }

    }

