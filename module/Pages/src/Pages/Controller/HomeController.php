<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Pages for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Pages\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class HomeController extends AbstractActionController
{
    public function indexAction()
    {
    	$this->layout()->page = "home";
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /home/home/foo
        return array();
    }
}
