<?php 

/**
 * Bootstrap du module Core
 * 
 * @category    App1
 * @package     Core
 * @desc        Bootstrap du module Core
 * @author      jb <jb@ipformation-lyon.com>
 *  
 */
class Core_Bootstrap extends Zend_Application_Module_Bootstrap
{
    
    protected function _initPlugins()
    {
       // $fc = Zend_Controller_Front::getInstance();
       // $fc->registerPlugin(new Core_Plugin_Auth());
      // $fc = Zend_Controller_Front::getInstance();
     //  $fc->registerPlugin(new Core_Plugin_Acl());
    }
    
    protected function _initAcl()
    {
    	$fc = Zend_Controller_Front::getInstance();
    	$fc->registerPlugin(new Core_Plugin_Acl(), 90);
    	
    	/*$acl = new Zend_Acl();
    	$acl->allow('guest', 'default::auth::login', 'access');*/
    }
}