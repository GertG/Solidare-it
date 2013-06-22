<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * FaqController
 *
 * @author
 *
 * @version
 *
 */
class FaqController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        $this->layout()->page = "faq";
        return new ViewModel();
    }
    
    
}