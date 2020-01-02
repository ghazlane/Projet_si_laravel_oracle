<?php

class Vue {

    /** Nom du fichier associé à la vue */
    private $fichier;

    public function __construct($view) {
              
        $this->fichier = "Views\\" . $view . ".php";
    }

    
    public function generer(array $donnees) {
	
		if (file_exists($this->fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son résultat est placé dans le tampon de sortie
            require $this->fichier;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            $contenu= ob_get_clean();
			include  ("navrar_template.php");
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
	
	}
}
