<?php

class FormationController extends Zend_Controller_Action {
    
    /**
     * @var Zend_Controller_Request_Http
     */
    protected $_request;
    
    /* @var $mapper Application_Model_Mapper_Formation */
    protected $mapper = null;

    public function init() {
        $this->mapper = new Application_Model_Mapper_Formation();
    }

    public function indexAction() {
        $this->view->Formations = $this->mapper->getAll();
        
        $flashMessenger = $this->getHelper('FlashMessenger');
        /* @var $flashMessenger Zend_Controller_Action_Helper_FlashMessenger */
        if ($flashMessenger->hasMessages()) {
            $listMessage = $flashMessenger->getMessages();
            $message = $listMessage[0];
            $this->view->message = $message;   
        }
    }

    public function ajouterAction() {
        $form = new Application_Form_Formation();
        
        if ($this->_request->isPost()) {
            $data = $this->_request->getPost();
            if ($form->isValid($data)) {
                $formation = new Application_Model_Formation();
                $formation->setNom($form->getValue('nom'))
                        ->setPrix($form->getValue('prix'));
                $this->mapper->add($formation);
                
                $flashMessenger = $this->getHelper('FlashMessenger');
                /* @var $flashMessenger Zend_Controller_Action_Helper_FlashMessenger */
                $flashMessenger->addMessage('La formation a bien été insérée.');
                
                $redirector = $this->getHelper('Redirector');
                /* @var $redirector Zend_Controller_Action_Helper_Redirector */
                $redirector->gotoRouteAndExit(array('action' => 'index'), 'default');
            }
        }
        
        $this->view->form = $form;
    }

    public function supprimerAction() {
        // action body
    }

    public function detailsAction() {
        $id = (int )$this->getParam('id');
        if ($id == 0) {
            throw new Zend_Controller_Router_Exception('Il faut spécifier un ID !', 404);
        }
        
        $formation = $this->mapper->getById($id);
        if (!$formation->getId()) {
            throw new Zend_Controller_Router_Exception("Cet ID n'existe pas !", 404);
        }
        
        $this->view->Formation = $formation;
    }

    public function modifierAction() {
        // action body
    }


}









