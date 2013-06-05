<?php

abstract class Orsys_Model_Mapper_Abstract {
    /* @var $dbTable Zend_Db_Table_Abstract */
    protected $dbTable;
    protected $module;
    protected $entity;
            
            
    function __construct() {
        $strClass = get_class($this);
        $namespaces = explode('_', $strClass);
        
        $this->module = $namespaces[0];
        $this->entity = $namespaces[count($namespaces) - 1];
        $this->dbTable = $this->module . "_Model_DbTable_" . $this->entity;
        $this->dbTable = new $dbTable();
    }
    
     public function getAll() {
        $listEntities = array();
        
        $rowSet = $this->dbTable->fetchAll();
        foreach ($rowSet as $row) {
            $entityClass = $this->module . "_Model_" . $this->entity;
            $entity = new $entityClass();
            
            // Hydrator
            $hydrator = new Orsys_Hydrator_GetSet();
            $hydrator->populate($entity, $row);
            /*
            $formation->setId($row['id'])
                      ->setNom($row['nom'])
                      ->setPrix($row['prix']);
             * */
             
            $listEntities[] = $entity;
        }   
        return $listEntities;
    }

}

?>
