    <?php
    require_once ("Models/PointNodal.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class PointNodalRepository extends Connexion{

        /** Objet PDO d'accès à la BD */
        private $connexion;
        public function Ajouter(PointNodal $pointNodal) {	
    	
    $Rq = "insert into point_nodal (NOM_PN,NB_ENSE,NB_CHER) values ('".$pointNodal->getNomPn()."','".$pointNodal->getNbEnsePn()."','".$pointNodal->getNbCherPn()."')";
    	
    $connexion = $this->getConnexion(); 
    		$connexion->exec($Rq);
    		$connexion->exec("commit");
    }

    public function Lister() {   
    $Rq = "select * from point_nodal ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }


   public function Rechercher($id){
    $Rq = "select * from point_nodal where id_pn =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    return $statement->fetch();
    }

    public function Modifier(PointNodal $pointNodal,$id){
    $Rq = "update point_nodal set NOM_PN='" . 
    $pointNodal->getNomPn(). "', NB_ENSE = '" . 
    $pointNodal->getNbEnsePn(). "', NB_CHER = '" . 
    $pointNodal->getNbCherPn(). "' where id_pn =".$id;
        
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
    }


    
    public function Supprimer($id){
    $Rq = "delete from point_nodal where id_pn =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->prepare($Rq);
    $statement->execute();
    }

    }

