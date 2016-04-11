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

    public function validateAction(){
        // $str = '$this->add(array(
        //             "type" => "text",
        //             "name" => "name",
        //             "required" => false,
                    // "attributes" => array(
                    //     "class"       => "form-control",
                    //     "id"          => "name",
                    //     "placeholder" => "Enter name",
                    // ),
        //             "options" => array(
        //                 "label" => "Name",
        //                 "label_attributes" => array(
        //                     "class" => "col-sm-3 control-label",
        //                     "for"   => "name"
        //                 ),
        //             )   
        //         ));';
        
        // echo "<pre>";
        // print_r($this->request->getPost());
        // echo "</pre>";
        if($this->request->isXmlHttpRequest()){
            
            $post        = $this->request->getPost();
            $nameElement = $post['nameElement'];   
            $attribute   = $post[$nameElement]['attribute'];
            $option      = $post[$nameElement]['option'];

            $xhtml    = '';
            $type     = empty($post["typeElement"])? '' : str_repeat('&nbsp;',5).'"type" => "'.$post["typeElement"].'",<br/>';
            $name     = empty($post["nameElement"])? '' : str_repeat('&nbsp;',5).'"name" => "'.$post['nameElement'].'",<br/>';
            $required = empty($post['requiredElement'])? str_repeat('&nbsp;',5).'"required" => false,<br/>' : str_repeat('&nbsp;',5).'"required" => true,<br/>';
           //attribute
            $class       = empty($attribute['class'])? '' : str_repeat('&nbsp;',10).'"class" => "' . $attribute['class'] . '",<br/>';
            $id          = empty($attribute['id'])? '' : str_repeat('&nbsp;',10).'"id"          => "' . $attribute['id'] . '",<br/>';
            $placeholder = empty($attribute['placeholder'])? '' : str_repeat('&nbsp;',10).'"placeholder" => "' . $attribute['placeholder'] . '",<br/>';
            $value       = empty($attribute['value'])? '' : str_repeat('&nbsp;',10).'"value" => "' . $attribute['value'] . '",<br/>';
           //options
            $nameLabel  = empty($option['nameLabel'])? '' : str_repeat('&nbsp;',10).'"label" => "' . $option['nameLabel'] . '",<br/>';
            $classLabel = empty($option['classLabel'])? '' : str_repeat('&nbsp;',15).'"class" => "' . $option['classLabel'] . '",<br/>';
            $forLabel   = empty($option['forLabel'])? '' : str_repeat('&nbsp;',15).'"for" => "' . $option['forLabel'] . '",<br/>';
           
            if(!empty($attribute['attr'])){
                $attrs = explode(',', $attribute['attr']);
                
                foreach($attrs as $attr){
                    $attr  = trim($attr);
                    $attr  = explode(':',$attr);
                    $xhtml .=  str_repeat('&nbsp;',10).'"' . $attr[0] . '" => "' . $attr[1] . '",<br/>';
                }
            }
            
            
            $validateString = '$this->add(array(<br/>' . $name . $type . $required;
            if(!empty($class) || !empty($id) || !empty($placeholder) || !empty($value) || !empty($xhtml)){
               
                $validateString .=  str_repeat('&nbsp;',5).'"attributes" => array(<br/>'
                                        . $class . $id . $placeholder . $value . $xhtml
                                    . str_repeat('&nbsp;',5).'),<br/>';
            }

            if(!empty($nameLabel)){
               
                $validateString .=  str_repeat('&nbsp;',5).'"options" => array(<br/>' . $nameLabel;

                if(!empty($classLabel) || !empty($forLabel)){
                    $validateString .=  str_repeat('&nbsp;',10).'"label_attributes" => array(<br/>' 
                                    . $classLabel . $forLabel
                                    . str_repeat('&nbsp;',10).'),<br/>';
                }

                $validateString .= str_repeat('&nbsp;',5).'),<br/>';
            }

            $validateString .= '));<br/>';

            echo $validateString;

            return $this->response;
        }
                       
    }

   
}
