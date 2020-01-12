    <?php
    require_once ("Models/ResponsableCir.php");
    require_once ("ManagementRepository/ConnexionRepository.php");
    class ResponsableCirRepository extends Connexion{
private $connexion;
 

    public function Ajouter(ResponsableCir $responsableCir){
        $Rq = "insert into responsable_cir (NOM_CIR, PRENOM_CIR,DATE_NAISSANCE_CIR,EMAIL_CIR, MOT_DE_PASSE_CIR,TELEPHONE_CIR) values ('" . $responsableCir->getNomCir() . "','" . $responsableCir->getPrenomCir() . "','" . $responsableCir->getDateNaissance() . "','" . $responsableCir->getEmail() . "','" . $responsableCir->getMotDePasse() . "','" . $responsableCir->getTelephone() . "')";
        $connexion = $this->getConnexion(); 
        $connexion->exec($Rq);
        $connexion->exec("commit");
    }

    public function Lister(){
        $Rq = "select * from responsable_cir ";     
        $connexion = $this->getConnexion(); 
        $statement = $connexion->query($Rq);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
    }

    public function Details($id){
    $Rq = "select * from responsable_cir where id_CIR = ".$id;     
    $connexion = $this->getConnexion(); 
    $statement = $connexion->query($Rq);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}

    public function Update(ResponsableCir $responsableCir){
        $Rq = "update responsable_cir set NOM_CIR='" . $responsableCir->getNomCir() . "', PRENOM_CIR = '" . $responsableCir->getPrenomCir() . "', DATE_NAISSANCE_CIR= '" . $responsableCir->getDateNaissance() . "', MOT_DE_PASSE_CIR = '" . $responsableCir->getMotDePasse() . "', TELEPHONE_CIR = '" . $responsableCir->getTelephone() . "' where id_CIR =".$responsableCir->getIdCir();
            $connexion = $this->getConnexion(); 
            $connexion->exec($Rq);
            $connexion->exec("commit");
    }

    public funCtion Delete($id){
        $Rq = "delete from responsable_cir where id_CIR = ".$id;     
        $connexion = $this->getConnexion(); 
        $statement = $connexion->prepare($Rq);
        $statement->execute();
        $connexion->exec("commit");
    }

    }