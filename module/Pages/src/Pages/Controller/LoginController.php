<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * LoginController
 *
 * @author
 *
 * @version
 *
 */
class LoginController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
    	$this->layout()->page = "";
        return new ViewModel();
    }
    
    
}