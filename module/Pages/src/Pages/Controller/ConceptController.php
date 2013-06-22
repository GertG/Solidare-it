<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ConceptController
 *
 * @author
 *
 * @version
 *
 */
class ConceptController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
    	$this->layout()->page = "concept";
        return new ViewModel();
    }
    
    
}