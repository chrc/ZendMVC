<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author Administrateur
 */
class Application_Model_Personne {
    
    protected $prenom;
    protected $nom;
    
    function __construct($prenom = "", $nom = "") {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

}

?>
