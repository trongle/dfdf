<?php
namespace AutoCode\Controller;

use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class FormController extends AbstractActionController
{
	public function indexAction(){
		$authenticate = $this->getServiceLocator()->get('MyAuth');
		$auth         = $authenticate->_authen;

		if($auth->hasIdentity()){
			$userInfo  = $authenticate->_authen->getIdentity();
			$formTable = $this->getServiceLocator()->get("FormTable");
			$listForm  = $formTable->listItem();
		}else{
			$this->redirect()->toRoute("home");
		}

		return new ViewModel([
			"userInfo" => $userInfo,
			"listForm" => $listForm
		]);
	}

	public function addFormDrafAction(){
		if($this->request->isXmlHttpRequest()){
			$formTable      = $this->getServiceLocator()->get("FormTable");
			$idFormInserted = $formTable->saveForm($this->request->getPost(),['type' => 'draf']);

			echo $idFormInserted;
			return $this->response;
		}
	}

	public function addFormAction(){
		if($this->request->isXmlHttpRequest()){
			$data = array(
				"element" => $this->setSerializeString($this->request->getPost('element')), 
				"formId"  => $this->request->getPost('formId')
			);

			$formTable = $this->getServiceLocator()->get("FormTable");
			$formTable->updateForm($data,['type' => 'addElement']);

			return $this->response;
		}
	}

	public function editFormAction(){
		$authenticate = $this->getServiceLocator()->get('MyAuth');
		$auth         = $authenticate->_authen;

		if($auth->hasIdentity()){
			$userInfo  = $authenticate->_authen->getIdentity();
			$id        = $this->params()->fromRoute("id");
			$formTable = $this->getServiceLocator()->get("FormTable");

			$infoForm = $formTable->getItemById($id);
			$infoForm->content = unserialize($infoForm->content);
		
			$viewModel = new ViewModel();
			$viewModel->setVariables(array(
				"infoForm"    => $infoForm,
				'typeDisplay' => 'editForm',
				'userInfo'    => $userInfo
			));

			$viewModel->setTemplate("auto-code/index/index.phtml");

			return $viewModel;
			
		}else{
			$this->redirect()->toRoute("home");
		}

	}

	private function setSerializeString($elementString){
		$element = array();
		parse_str($elementString,$element);
		unset($element['validateElement']);
		unset($element['filterElement']);

		$content = array(
			$element['nameElement'] => $element
		);

		return  serialize($content);
	}
}
?>