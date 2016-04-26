<?php

namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('FormElementManager')->get("FormContact");

	    if($this->request->isPost()){
	       	$form->setData($this->request->getPost());
	        if($form->isValid()){
	            $data = $form->getData();
	        }
	    }

	    return new ViewModel([
	          "form" => $form
	    ]);
    }   
}
