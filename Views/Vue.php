<?php

class Vue {

    /** Nom du fichier associ� � la vue */
    private $fichier;

    public function __construct($view) {
              
        $this->fichier = "Views\\" . $view . ".php";
    }

    
    public function generer(array $donnees) {
	
		if (file_exists($this->fichier)) {
            // Rend les �l�ments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // D�marrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son r�sultat est plac� dans le tampon de sortie
            require $this->fichier;
            // Arr�t de la temporisation et renvoi du tampon de sortie
            $contenu= ob_get_clean();
            include  ("navrar_template.php");
            //include  ("templateAfterConnexion.php");
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
	
	}
    public function genererHome(){
        include("template.php");
    }

    public function genererPageSansTemplate(){
        include  ($this->fichier);
    }
}
