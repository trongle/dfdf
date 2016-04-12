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
    private $type;
    private $name;
    private $required;
//attribute
    private $attribute;
    private $class;
    private $id;
    private $placeholder;
    private $value;
    private $otherAttributes;

//option
    private $option;
    //label
    private $nameLabel;
    private $classLabel;
    private $forLabel;
    //select box
    private $emptyOption;
    private $valueOption;
    private $nameOption;
//validator
    private $validateName;
    private $validateOption;
    private $validateBreakChain;

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
        // $this->add(array(
        //     'name'    => "my-email",
        //     "filters" =>array(
        //         array( "name" => "StringToUpper" ),
        //         array( "name" => "StringTrim" ),
        //         array( "name" => "PregReplace",
        //                "options" => array(
        //                     "pattern" => "#[\d]#",
        //                     "replacement" => "."
        //                 )
        //         )
        //     ),
            // "validators" => array(
            //     array(
            //         "name" => "NotEmpty",
            //         "options" => array(
            //             "messages" => array(
            //                 \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng"
            //             )
            //         ),
            //         "break_chain_on_failure" => "true"
            //     ),
        //         array(
        //             "name" => "StringLength",
        //             "options" => array(
        //                 "min" => "3",
        //                 "max" => "10",
        //                 "messages" => array(
        //                     \Zend\Validator\StringLength::TOO_SHORT => "Số ký tự phải lớn hơn hoặc bằng %min%",
        //                     \Zend\Validator\StringLength::TOO_LONG => "Số ký tự phải nhỏ hơn hoặc bằng %max%",
        //                 )
        //             )
        //         ),
        //         array(
        //             "name" => "EmailAddress",
        //         )
                
        //     )
            
        // ));
        
        echo "<pre>";
        print_r($this->request->getPost());
        echo "</pre>";

        if($this->request->isXmlHttpRequest()){
            
            $post        = $this->request->getPost();
            $nameElement = $post['nameElement']; 

            $this->attribute          = $post[$nameElement]['attribute'];
            $this->option             = $post[$nameElement]['option'];
            $this->validateName       = isset($post[$nameElement]['validateName'])? $post[$nameElement]['validateName'] : '';
            $this->validateOption     = isset($post[$nameElement]['validateOption'])? $post[$nameElement]['validateOption'] : '';
            $this->validateBreakChain = isset($post[$nameElement]['validateBreakChain'])? $post[$nameElement]['validateBreakChain'] : '';
            
            $this->setValue($post);          
            
            // Create input code 
            $code = $this->openCode() . $this->name . $this->type . $this->required ;

                if($this->checkAttribute() == true){
                    $code .=    $this->openAttribute()
                                    . $this->class . $this->id . $this->placeholder . $this->value . $this->otherAttributes
                                . $this->close();
                }

                if($this->checkOption() == true){
                    $code .=    $this->openOption() 
                                    . $this->nameLabel . $this->labelAttribute() . $this->createStringSelectBox($post)
                                .$this->close();
                }

            $code .= $this->closeCode();

            echo $code;

            // Create validate code 
            $codeValidate = '';
            if(count($this->validateName) > 0 && !empty($this->validateName)){
                $codeValidate = $this->openCode() . $this->name
                                    . $this->openValidate()
                                        . $this->createStringValidate()
                                    . $this->close()
                                . $this->closeCode();
            }
            echo '<hr/>';
            echo $codeValidate;

            return $this->response;
        }
                       
    }

    private function openValidate(){
        return $this->setSpace() . '"validators" => array(<br/>';
    }

    private function createStringValidate(){
        $codeValidate = '';
        foreach($this->validateName as $validate){
            $codeValidate   .= $this->setSpace(2) . 'array(<br/>'
                . $this->setSpace(3) . '"name" => "' . $this->validateName[$validate] . '",<br/>'
                . $this->validateOptionString(strtolower($validate))
                . $this->createBreakChainString($validate)
            . $this->close(2);
        }

        return $codeValidate;
    }

    private function validateOptionString($validateName){
        $codeValidate = '';
        if(isset($this->validateOption[$validateName]) && count($this->validateOption[$validateName]) > 0){
            $codeValidate   .= $this->setSpace(3) . '"options" => array(<br/>';
                $codeValidateOption = '';
                foreach($this->validateOption[$validateName] as $name => $value){
                    if($value == 'on') $value = "true";
                    $codeValidateOption   .= $this->setSpace(4) . '"' . $name . '" => "' . $value . '",<br/>';
                    
                }
                $codeValidate .= $codeValidateOption;
            $codeValidate   .= $this->close(3);       
        }

        return $codeValidate;
    }

    private function createBreakChainString($validateName){
        $breakChain = 'false';
        if(!empty($this->validateBreakChain) && isset($this->validateBreakChain[$validateName])){
            $breakChain = 'true';
        }

        return $this->setSpace(3) . '"break_chain_on_failure" => "' . $breakChain . '"<br/>';
    }

    private function openAttribute(){
        return self::setSpace().'"attributes" => array(<br/>';
    }

    private function openOption(){
        return self::setSpace().'"options" => array(<br/>' ;
    }

    private function close($level = 1){
        return self::setSpace($level).'),<br/>';
    }
    
    private function labelAttribute(){
        if(!empty($this->classLabel) || !empty($this->forLabel)){
            return self::setSpace(2).'"label_attributes" => array(<br/>' 
                                    . $this->classLabel . $this->forLabel
                                    . self::setSpace(2).'),<br/>';
        }else{
            return null;
        }
    }

    private function setValue($post = null){
        if(!empty($post)){

            $this->type     = empty($post["typeElement"])? '' :self::setSpace().'"type" => "'.$post["typeElement"].'",<br/>';
            $this->name     = empty($post["nameElement"])? '' :self::setSpace().'"name" => "'.$post['nameElement'].'",<br/>';
            $this->required = empty($post['requiredElement'])? self::setSpace().'"required" => false,<br/>' :self::setSpace().'"required" => true,<br/>';
            
            //attribute
            $this->class           = empty($this->attribute['class'])? '' : self::setSpace(2).'"class" => "' . $this->attribute['class'] . '",<br/>';
            $this->id              = empty($this->attribute['id'])? '' : self::setSpace(2).'"id" => "' . $this->attribute['id'] . '",<br/>';
            $this->placeholder     = empty($this->attribute['placeholder'])? '' : self::setSpace(2).'"placeholder" => "' . $this->attribute['placeholder'] . '",<br/>';
            $this->value           = empty($this->attribute['value'])? '' : self::setSpace(2).'"value" => "' . $this->attribute['value'] . '",<br/>';
            $this->otherAttributes = $this->setOtherAttributes();
            
            //options
            $this->nameLabel  = empty($this->option['nameLabel'])? '' : self::setSpace(2).'"label" => "' . $this->option['nameLabel'] . '",<br/>';
            $this->classLabel = empty($this->option['classLabel'])? '' : self::setSpace(3).'"class" => "' . $this->option['classLabel'] . '",<br/>';
            $this->forLabel   = empty($this->option['forLabel'])? '' : self::setSpace(3).'"for" => "' . $this->option['forLabel'] . '",<br/>';
        }
    }

    private static function setSpace($level = 1){

        return str_repeat('&nbsp;',$level * 5);
    }

    private function setValueSelectBox(){
        $this->emptyOption = empty($this->option['emptyOption'])? '' : self::setSpace(2).'"empty_option" => "' . $this->option['emptyOption'] . '",<br/>';                
        $this->valueOption = empty($this->option['valueOption'])? '' :  $this->option['valueOption'];                
        $this->nameOption  = empty($this->option['nameOption'])? '' :  $this->option['nameOption'];                
        
    }

    private function createStringSelectBox($post = null){
        $this->setValueSelectBox();

        $selectOption = null;

        if($post["typeElement"] == 'select'){
            $selectOption = $this->emptyOption ; 
            
            if(!empty($this->valueOption) && !empty($this->nameOption) ){
                $this->valueOption = explode(',',$this->valueOption);
                $this->nameOption  = explode(',',$this->nameOption);

                $selectOption .= self::setSpace(2).'"value_option" => array(<br/>';

                foreach($this->valueOption as $key => $val){
                    $selectOption .= self::setSpace(3).'"'. $val .'" => "' . $this->nameOption[$key] . '",<br/>';
                }

                $selectOption .= self::setSpace(2).'),<br/>' ;
            }



        }

        return $selectOption;
    }

    private  function openCode($tag = '<code>'){
        return $tag . '$this->add(array(<br/>' ;
    }

    private  function closeCode($closeTag = '</code>'){
        return '));' . $closeTag . '<br/>';
    }

    private function setOtherAttributes(){
        $xhtml    = '';
        
        if(!empty($this->attribute['attr'])){
            $attrs = explode(',', $this->attribute['attr']);
                
            foreach($attrs as $attr){
                $attr  = trim($attr);
                $attr  = explode(':',$attr);
                $xhtml .=  self::setSpace(2).'"' . $attr[0] . '" => "' . $attr[1] . '",<br/>';
            }
        }

        return $xhtml;
    }

    private function checkAttribute(){
        if(!empty($this->class) || !empty($this->id) || 
            !empty($this->placeholder) || !empty($this->value) || !empty($this->otherAttributes)){
            return true;
        }else{
            return false;
        }
    }

    private function checkOption(){
        if(!empty($this->nameLabel) || !empty($this->classLabel) || !empty($this->forLabel) || 
            !empty($this->nameOption) || !empty($this->valueOption) || !empty($this->EmptyOption)){
            return true;
        }else{
            return false;
        }
    }

   
}
