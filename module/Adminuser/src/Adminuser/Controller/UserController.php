<?php

namespace Adminuser\Controller;

use Zend\Validator;
use My\Validator\Validate;
use Zend\Form\FormInterface;
use Adminuser\Form\FormUser2;
use Adminuser\Form\FormUser3;
use Zend\View\Model\ViewModel;
use Adminuser\Form\FormUserFilter;
use Adminuser\Form\FormUserFilter2;
use Adminuser\Form\FormUserFilter3;
use Zend\Mvc\Controller\AbstractActionController;

class UserController extends AbstractActionController{
	public function indexAction(){
		$table    =  $this->getServiceLocator()->get("UserTable");
	
		$items    =  $table->listItem();	

		return new ViewModel(array(
			"items"           => $items,
		));
	}
                
                //Abc@123456
	public function addAction(){
 
	}
        
    public function destroyAction(){
            $id   =   $this->params('id',false);
            if($id){
                    $table    =  $this->getServiceLocator()->get("UserTable");
                    
                    if($table->deleteItem($id)){
                            $message = "Các phần tử đã được xóa";
                    }
            }
            $this->flashMessenger()->addMessage($message);
            
            return $this->redirect()->toRoute('home');
    }
    
    private function getNameInputs(FormInterface $form = null ,$options = null){
            $nameInputs = array();
            
            if(!empty($form) ){
                    foreach($form->getElements() as $key => $val){
                            $nameInputs[$key] = $key;
                    }

            }
            
            return $nameInputs;
    }
    
    private function IsDiffName(array $nameInputs ,array $data){
            $result = array();
        
            if(count($nameInputs) > 0 && count(data) > 0){
                    $result = array_diff_key($nameInputs, $data);
                  
                    if(count($result) <= 1){
                            return false;
                    }
            }
            
            return true;
    }
        


}
?>