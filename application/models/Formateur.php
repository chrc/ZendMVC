<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formateur
 *
 * @author Administrateur
 */
class Application_Model_Formateur extends Personne {
    
    protected $specialite;
    
    private $formation;
    
    public function __construct($prenom = "", $nom = "", $specialite = "") {
        parent::__construct($prenom, $nom);
        $this->specialite = $specialite;
    }
    
    public function getSpecialite() {
        return $this->specialite;
    }
    
    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
        return $this;
    }
    
    public function getFormation() {
        return $this->formation;
    }

    public function setFormation($formation) {
        $this->formation = $formation;
    }


    
}

?>
