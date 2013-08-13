<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    public function indexAction()
    {
      return new viewModel();
    }

    public function addAction()
    {
      return new viewModel();
    }

    public function editAction()
    {
      return new viewModel();
    }

    public function deleteAction()
    {
      return new viewModel();
    }
}