<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ContactController
 *
 * @author
 *
 * @version
 *
 */
class ContactController extends AbstractActionController
{

	public function init()
	{
		$this->layout()->page = "contact";
	}
	
    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
    	$this->init();
        return new ViewModel();
    }

    public function offerAction()
    {
    	$this->init();
    	return new ViewModel();
    }
    
    public function demandAction()
    {
    	$this->init();
    	return new ViewModel();
    }
    
    public function profileAction()
    {
    	$this->init();
    	return new ViewModel();
    }
    
    
}