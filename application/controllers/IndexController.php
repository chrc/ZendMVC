<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
    }

    public function indexAction() {
        $heure = date("H:i:s");
        
        $nbAleas = array();
        
        for ($i=0; $i<5; $i++) {
            $nbAleas[] = mt_rand(0, 100);
        }
        
        $this->view->heure = $heure;
        $this->view->nbAleas = $nbAleas;
    }


}

