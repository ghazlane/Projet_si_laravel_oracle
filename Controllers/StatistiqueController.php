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
}