<?php
namespace AutoCode\Controller;

use Zend\Form\FormInterface;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;
use AutoCode\Form\FormUserFilter;
use Zend\Mvc\Controller\AbstractActionController;

class UserController extends AbstractActionController
{
	function loginAction(){
		$form         = $this->getServiceLocator()->get('FormElementManager')->get('FormUser');
		$errorAuth    = null;
		$authenticate = $this->getServiceLocator()->get('MyAuth');
		if($authenticate->_authen->hasIdentity()) $this->redirect()->toRoute('form');

		$form->setInputFilter(new FormUserFilter("login"));
		if($this->request->isPost()){
			$form->setData($this->request->getPost());
	
			if($form->isValid()){
				$data              = $form->getData();

				$checkAuthenticate = $authenticate->login($data);
				if($checkAuthenticate){
					$this->redirect()->toRoute("form");
				}else{
					$errorAuth = $authenticate->getMessages();
				}
			}
		}

		return new ViewModel([
			'form'      => $form,
			"errorAuth" => $errorAuth,
			'flag'      => 'login'
		]);
	}

	function signupAction(){
		if($this->request->isPost()){
			$form      = $this->getServiceLocator()->get('FormElementManager')->get('FormUser');
			
			$tableUser = $this->getServiceLocator()->get("UserTable");
			
			$user      = '';

			$form->setData($this->request->getPost());
			if(empty($user)){
                $options = [ 'task' => 'add' ];
            
                $message = 'User đã được thêm thành công !';
            }

			if($form->isValid()){
				$data      =   $form->getData(FormInterface::VALUES_AS_ARRAY);
								
				$tableUser->save($data,$options);
				
				$this->flashMessenger()->addMessage($message);
				
				$this->redirect()->toRoute('home');
			}
		}

		$viewModel = new ViewModel();
		$viewModel->setTemplate('auto-code/user/login.phtml');
		return $viewModel->setVariables([
			'form' => $form,
			'flag' => 'signup'
		]);
	}

	public function logoutAction(){
		$authenticate = $this->getServiceLocator()->get('MyAuth');
		$authenticate->logout();

		$this->redirect()->toRoute('home');
	}
}
?>