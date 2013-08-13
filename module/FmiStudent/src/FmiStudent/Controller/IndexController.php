<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace FmiStudent\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function changeAction()
    {
        $viewModel = new ViewModel();
        $this->layout('layout/FmiStudent');//add into module.config
        return $viewModel;
    }
    public function jsAjaxAction()
    {
        $viewModel = new ViewModel();
        $this->layout('layout/FmiStudent');//add into module.config
        return $viewModel;
    }    
    public function serviceAjaxAction()
    {
           $viewModel = new ViewModel();
           $viewModel->setTerminal(true);
           return $viewModel;
    }
    public function serviceJsonAction()
    {
        $viewModel = new ViewModel(array('data' => array(
        'firstParam'  => 'Value1',
        'secondParam'  => 'Value2',
        )));
        $viewModel->setTerminal(true);//terminal
        return $viewModel;

    }

    
}
