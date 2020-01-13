<?php 
require_once ("Models/ResponsableCir.php");
require_once ("ManagementRepository/StatistiqueRepository.php");

/**
 * 
 */
 
class StatistiqueController
{
	private $statistiqueRepository;

	public function __construct()
	{
		$this->statistiqueRepository = new StatistiqueRepository();
	}

	public function getNombreTotalDemandeStatus($etat){
		return $this->statistiqueRepository->getNombreTotalDemandeStatus($etat); 
	}

	public function pourcentageDemande($etat){
		return $this->statistiqueRepository->pourcentageDemande($etat);  
	}

	public function demandeTraiterParMois($mois, $annee){
		return $this->statistiqueRepository->demandeTraiterParMois($mois, $annee); 
	}

	public function demandeNonAccepterParMois($mois, $annee){
		return $this->statistiqueRepository->demandeNonAccepterParMois($mois, $annee);
	}	
	public function demandeAccepterParMois($mois, $annee){
		return $this->statistiqueRepository->demandeAccepterParMois($mois, $annee);
	}

	public function nombreDeamndeTraitePcById($id){
		return $this->statistiqueRepository->nombreDeamndeTraitePcById($id); 
	}

}