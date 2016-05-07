<?php

namespace Demo\Controller;

use Demo\Form\FormUserFilter;
use Zend\Form\FormInterface;
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
    			"items"  => $items,
    		));
    }  
    //password : @Abc1234
    public function addAction(){
      $id    = $this->params('id');
      $table = $this->getServiceLocator()->get("UserTable"); 
     
      $user  = $table->getUserById($id);

      $form = $this->getServiceLocator()->get('FormElementManager')->get("formDemoUser");

      if(empty($user)){//kiem tra add hay edit
        $options = [  'task' => 'add' ];        
        $message = 'User đã được thêm thành công !';
      }else{
        $options = [ 'task' => 'edit' ];
        $message = 'User đã được sửa thành công !';
        $form->bind($user);// dua du lieu vao form
        $form->setInputFilter(new FormUserFilter(array("id"=>$id )));//gui id qua formUSerFilter cho edit
      }//end

      // lay du lieu city,district,ward dua ra ngoai view
      $options['tableWard']     = $this->getServiceLocator()->get("WardTable");
      $options['tableCity']     = $this->getServiceLocator()->get("CityTable");
      $options['tableDistrict'] = $this->getServiceLocator()->get('DistrictTable');
      
      if($this->request->isPost()){//xu ly khi du lieu duoc post
        $form->setData($this->request->getPost());
        if($form->isValid()){
          $data      =   $form->getData(FormInterface::VALUES_AS_ARRAY);
        
          $tableUser =   $this->getServiceLocator()->get("UserTable");

          $tableUser->save($data,$options);

          $this->flashMessenger()->addMessage($message);

          $this->redirect()->toRoute('demo_user');
        }
      }//end


      $viewModel =  new ViewModel();
        
      $viewModel->setVariables([
          'form'   => $form,
          'action' => $options['task'],
          'user'   => $user
      ]);
      return $viewModel;
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
        
        return $this->redirect()->toRoute('demo_user');
    }

}
