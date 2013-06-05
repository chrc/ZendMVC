<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formation
 *
 * @author Administrateur
 */
class Application_Model_Mapper_Formation extends Orsys_Model_Mapper_Abstract {
   
    /**
     * 
     * @param int $id
     * @return Zend_Db_Table_Row_Abstract
     */
    public function getById($id) {
        $row = $this->dbTable->fetchRow(array('id = ?' => $id));
        $formation = new Application_Model_Formation();
            $formation->setId($row['id'])
                      ->setNom($row['nom'])
                      ->setPrix($row['prix']);
        return $formation;
    }
    
    public function add(Application_Model_Formation $formation) {
        $id = $this->dbTable->insert(array(
            'nom' => $formation->getNom(),
            'prix' => $formation->getPrix()
        ));
        $formation->setId($id);
    }
    
}

?>
