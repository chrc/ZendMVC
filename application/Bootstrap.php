<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
    
    protected function _initTranslate() {
        
        // On lance l'objet de traduction en lui passant les fichiers de langues
	$translate = new Zend_Translate(array( 
            'adapter' => 'array',
            'content' => APPLICATION_PATH . '/../resources/languages',
            'locale' => 'fr',
            'scan' => Zend_Translate::LOCALE_DIRECTORY
        ));
        
        Zend_Validate_Abstract::setDefaultTranslator($translate);
                
    }

}

