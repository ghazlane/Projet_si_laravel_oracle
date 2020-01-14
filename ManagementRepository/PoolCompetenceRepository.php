    <?php
    require_once ("Models/PoolCompetence.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class PoolCompetenceRepository extends Connexion{

        /** Objet PDO d'accès à la BD */
        private $connexion;
        public function Ajouter(PoolCompetence $poolCompetence) {	
    	
    $Rq = "insert into pool_Competences (NOM_PC,FONC_PC,DATE_CREATION) values ('".$poolCompetence->getNomPC()."','".$poolCompetence->getFonctionnalitePc()."','".$poolCompetence->getDateCreationPC()."')";
    $connexion = $this->getConnexion(); 
    		$connexion->exec($Rq);
    		$connexion->exec("commit");
    }

    public function Lister() {   
    $Rq = "select * from pool_Competences ";     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
    }


   public function Rechercher($id){
    $Rq = "select * from pool_Competences where id_pc =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $row=$statement->fetch();
    return $row;
    }

    public function Modifier(PoolCompetence $poolCompetence,$id){
    $Rq = "update pool_Competences set NOM_PC='" . 
    $poolCompetence->getNomPc(). "', FONC_PC = '" . 
    $poolCompetence->getFonctionnalitePc(). "' where id_pc =".$id;
        
    $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
    }


    
    public function Supprimer($id){
    $Rq = "delete from Pool_Competences where id_pc =".$id; 
    $connexion = $this->getConnexion(); 
    $statement = $connexion->prepare($Rq);
    $statement->execute();
    }

    }

