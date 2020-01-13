<?php
//require_once 'Requete.php';
require_once ("Models/Etablissement.php");
require_once ("ManagementRepository/EtablissementRepository.php");
class EtablissementController {
   
    private $etablissementRepository;
    private $etablissement; 

    
    public function __construct(){
        $this->etablissementRepository = new EtablissementRepository();
    }
        
        
    //actions
    public function Ajouter($inputs){
        $this->etablissement = new Etablissement($inputs['nom'],$inputs['nb_ense'],$inputs['nb_cher'],$inputs['nb_fil'],$inputs['id_pn']); 
        $this->etablissementRepository->Ajouter($this->etablissement); 
    }

    public function Lister(){
        return $this->etablissementRepository->Lister(); 
        
    }

    public function Detail($id){
        $row = $this->etablissementRepository->Rechercher($id); 
        return $row;
    }


    public function Modifier($inputs,$id){
        $this->etablissement = new Etablissement($inputs['nom'],$inputs['nb_ense'],$inputs['nb_cher'],$inputs['nb_fil'],$inputs['id_pn']); 
        $this->etablissementRepository->Modifier($this->etablissement,$id); 
    }

    public function Supprimer($id){
        $this->etablissementRepository->Supprimer($id); 
    }

    
}