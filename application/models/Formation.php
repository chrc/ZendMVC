<?php


class Application_Model_Formation {
    
   protected $id; 
   protected $nom;
   protected $prix;

   private $formateur;
   
   /**
    * Association avec les stagiaires
    * @var array
    */
   private $stagiaires = array();
   
   public function __construct($nom = "", $prix = 0) {
       $this->nom = $nom;
       $this->prix = $prix;
   }
   
   public function getNom() {
       return $this->nom;
   }
   
   public function setNom($nom) {
       $this->nom = $nom;
       return $this;
   }
   
   public function getFormateur() {
       return $this->formateur;
   }

   public function setFormateur(type $formateur) {
       $this->formateur = $formateur;
   }

   public function addStagiaire(Personne $statgiaire) {
       $this->stagiaires[] = $statgiaire;
       return $this;
   }
   
   public function getStagiaires() {
       return $this->stagiaires;
   }
   
   public function getPrix() {
       return $this->prix;
   }

   public function setPrix($prix) {
       $this->prix = $prix;
       return $this;
   }


   public function getId() {
       return $this->id;
   }

   public function setId($id) {
       $this->id = $id;
       return $this;
   }


}

?>
