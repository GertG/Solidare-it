<?php
namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * InscriptionController
 *
 * @author
 *
 * @version
 *
 */
class InscriptionController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
    	$this->layout()->page = "";
        return new ViewModel();
    }
    
    public function choiceAction()
    {
    	return new ViewModel();
    }
    
    public function individualAction()
    {
    	$viewModel = new ViewModel();
    	$viewModel->setTemplate('pages/inscription/inscription');
    	$viewModel->setVariable('isOrganisation', false);
    	return $viewModel;
    }
    
    public function organisationAction()
    {
    	$viewModel = new ViewModel();
    	$viewModel->setTemplate('pages/inscription/inscription');
    	$viewModel->setVariable('isOrganisation', true);
    	return $viewModel;
    }
    
}