<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/AutoCode for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AutoCode\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $validateTable   = $this->getServiceLocator()->get('ValidateTable');
        
        $validateElement = $validateTable->listItem();

        return new ViewModel([
            'validateElement' => $validateElement
        ]);
    }
    
    public function loadTemplateAction(){   
        if($this->request->isXmlHttpRequest()){
            $fileName = $this->params()->fromQuery('fileName');
            if(file_exists(PATH_PUBLIC . 'html/' . $fileName)){
                $templateValidate = file_get_contents(PATH_PUBLIC . 'html/' . $fileName);
            }else{
                $templateValidate = 'no';
            }
            
            return new JsonModel(array(
                'template' => $templateValidate
            ));
        }else{
            echo "not permission";
        }   
    }

   
}
