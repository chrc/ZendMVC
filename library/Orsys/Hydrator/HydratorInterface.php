<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Administrateur
 */
interface Orsys_Hydrator_HydratorInterface {
    
    public function populate(array $array, $obj);
        
    public function toArray($obj);
}

?>
