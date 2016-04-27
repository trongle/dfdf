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

    public function removeAction(){
        $id      = $this->params()->fromRoute('id');
        $message = '';
        
        if(!empty($id)){
            $formTable = $this->getServiceLocator()->get("FormTable");
            if($formTable->removeItem($id)){
                $message = 'Đã xóa Form thành công !';
            }
        }
        
        $this->flashMessenger()->addMessage($message);

        return $this->redirect()->toRoute('form');
    }

	public function addFormAction(){
		if($this->request->isXmlHttpRequest()){
			$data = array(
				$this->request->getPost(),
				"element" => $this->request->getPost('element'), 
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
			$userInfo      = $authenticate->_authen->getIdentity();
			$id            = $this->params()->fromRoute("id");
			$formTable     = $this->getServiceLocator()->get("FormTable");
			$validateTable = $this->getServiceLocator()->get('ValidateTable');
			$filterTable   = $this->getServiceLocator()->get('FilterTable');

			$infoForm = $formTable->getItemById($id);
			$infoForm->content = unserialize($infoForm->content);
		
			$viewModel = new ViewModel();
			$viewModel->setVariables(array(
				'validateElement' => $validateTable->listItem(),
				'filterElement'   => $filterTable->listItem(),
				"infoForm"        => $infoForm,
				'userInfo'        => $userInfo
			));

			return $viewModel;
			
		}else{
			$this->redirect()->toRoute("home");
		}
	}
}
?>