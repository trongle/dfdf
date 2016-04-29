<?php

namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{

    public function indexAction()
    {
       	$table    =  $this->getServiceLocator()->get("UserTable");
	
		$items    =  $table->listItem();	

		return new ViewModel(array(
			"items"           => $items,
		));
    }  

    public function addAction(){
    	
    }

}
