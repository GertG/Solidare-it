<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * NewsController
 *
 * @author
 *
 * @version
 *
 */
class NewsController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
    	$this->layout()->page = "news";
        return new ViewModel();
    }
    
    
}