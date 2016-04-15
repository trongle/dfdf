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
//filter
    private $filterName;
    private $filterOption;

    public function indexAction()
    {
        $validateTable = $this->getServiceLocator()->get('ValidateTable');
        $filterTable   = $this->getServiceLocator()->get('FilterTable');

        return new ViewModel([
            'validateElement' => $validateTable->listItem(),
            'filterElement'   => $filterTable->listItem()
        ]);
    }
    
    public function loadTemplateAction(){   
        if($this->request->isXmlHttpRequest()){
            $type = $this->params()->fromQuery('type');

            if($type == 'validate'){
                $fileName = $this->params()->fromQuery('fileName');
                if(file_exists(PATH_PUBLIC . 'html/validate/' . $fileName)){
                    $template = file_get_contents(PATH_PUBLIC . 'html/validate/' . $fileName);
                }else{
                    $template = 'no';
                }
            }else if($type == 'filter'){
                $fileName = $this->params()->fromQuery('fileName');
                if(file_exists(PATH_PUBLIC . 'html/filter/' . $fileName)){
                    $template = file_get_contents(PATH_PUBLIC . 'html/filter/' . $fileName);
                }else{
                    $template = 'no';
                }
            }
            
            return new JsonModel(array(
                'template' => $template
            ));
        }else{
            echo "not permission";
        }   
    }

    public function validateAction(){
        if($this->request->isXmlHttpRequest()){
            // echo "<pre>";
            // print_r($this->request->getPost());
            // echo "</pre>";
            $post        = $this->request->getPost();
            $nameElement = $post['nameElement']; 

            //inputName
            $this->attribute          = $post[$nameElement]['attribute'];
            $this->option             = $post[$nameElement]['option'];

            //validate
            $this->validateName       = isset($post[$nameElement]['validateName'])? $post[$nameElement]['validateName'] : '';
            $this->validateOption     = isset($post[$nameElement]['validateOption'])? $post[$nameElement]['validateOption'] : '';
            $this->validateBreakChain = isset($post[$nameElement]['validateBreakChain'])? $post[$nameElement]['validateBreakChain'] : '';
            
            //filter
            $this->filterName       = isset($post[$nameElement]['filterName'])? $post[$nameElement]['filterName'] : '';
            $this->filterOption     = isset($post[$nameElement]['filterOption'])? $post[$nameElement]['filterOption'] : '';

            $this->setValue($post);          
            
            // Create input code 
            $code = $this->openCode() . $this->name . $this->type . $this->required ;

                if($this->checkAttribute() == true){
                    $code   .= $this->openAttribute()
                                . $this->class . $this->id . $this->placeholder . $this->value . $this->otherAttributes
                            . $this->close();
                }

                if($this->checkOption() == true){
                    $code   .= $this->openOption() 
                                . $this->nameLabel . $this->labelAttribute() . $this->createStringSelectBox($post)
                            .$this->close();
                }

            $code .= $this->closeCode();

            echo $code;
            
            echo '<div class="hide">superman</div>';

            // Create filter code 
            $codeFilter = '';
            if(count($this->filterName) > 0 && !empty($this->filterName)){
                $codeFilter = $this->openFilter()
                                . $this->createStringFilter()
                            . $this->close();
            }

            // Create validate code 
            $codeValidate = '';
            if(count($this->validateName) > 0 && !empty($this->validateName)){
                $codeValidate   .= $this->openValidate()
                                    . $this->createStringValidate()
                                . $this->close() ;
            }
            
            $codeFilterAndValidate  = $this->openCode() . $this->name
                                        .$codeFilter . $codeValidate
                                    . $this->closeCode() ;  

            echo $codeFilterAndValidate;

            return $this->response;
        }
                       
    }

    private function openValidate(){
        return $this->setSpace() . '"validators" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
    }

    private function openFilter(){
        return $this->setSpace() . '"filters" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
    }

    private function createStringValidate(){
        $codeValidate = '';
        foreach($this->validateName as $validate){
            $codeValidate   .= $this->setSpace(2) . '<span class="php-keyword">array</span><span class="php-plain">(</span><br/>'
                . $this->setSpace(3) . '"name" <span class="php-plain">=></span> "' . $this->validateName[$validate] . '"<span class="php-plain">,</span><br/>'
                . $this->validateOptionString(strtolower($validate))
                . $this->createBreakChainString($validate)
            . $this->close(2);
        }

        return $codeValidate;
    }

    private function createStringfilter(){
        $codeFilter = '';
        foreach($this->filterName as $filter){
            $codeFilter   .= $this->setSpace(2) . '<span class="php-keyword">array</span><span class="php-plain">(</span><br/>'
                . $this->setSpace(3) . '"name" <span class="php-plain">=></span> "' . $this->filterName[$filter] . '"<span class="php-plain">,</span><br/>'
                . $this->filterOptionString(strtolower($filter))
            . $this->close(2);
        }

        return $codeFilter;
    }

    private function validateOptionString($validateName){
        $codeValidate = '';
        if(isset($this->validateOption[$validateName]) && count($this->validateOption[$validateName]) > 0){
                $codeValidateOption = '';
                foreach($this->validateOption[$validateName] as $name => $value){
                    if($value == 'on') $value = "true";
                    if(empty($value)) continue;
                    $codeValidateOption   .= $this->setSpace(4) . '"' . $name . '" <span class="php-plain">=></span> "' . $value . '"<span class="php-plain">,</span><br/>';
                    
                }
                if(!empty(trim($codeValidateOption))){
                    $codeValidate   .= $this->setSpace(3) . '"options" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
                        $codeValidate .= $codeValidateOption;
                    $codeValidate   .= $this->close(3);       
                }
        }

        return $codeValidate;
    }

    private function filterOptionString($filterName){
        $codeFilter = '';
        if(isset($this->filterOption[$filterName]) && count($this->filterOption[$filterName]) > 0){
                $codeFilterOption = '';
                foreach($this->filterOption[$filterName] as $name => $value){
                    if($value == 'on') $value = "true";
                    if(empty($value)) continue;
                    $codeFilterOption   .= $this->setSpace(4) . '"' . $name . '" <span class="php-plain">=></span> "' . $value . '"<span class="php-plain">,</span><br/>';
                    
                }
                if(!empty(trim($codeFilterOption))){
                    $codeFilter   .= $this->setSpace(3) . '"options" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
                        $codeFilter .= $codeFilterOption;
                    $codeFilter   .= $this->close(3);       
                }
        }

        return $codeFilter;
    }

    private function createBreakChainString($validateName){
        $breakChain = 'false';
        if(!empty($this->validateBreakChain) && isset($this->validateBreakChain[$validateName])){
            $breakChain = 'true';
        }

        return $this->setSpace(3) . '"break_chain_on_failure" <span class="php-plain">=></span> "' . $breakChain . '"<br/>';
    }

    private function openAttribute(){
        return self::setSpace().'"attributes" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
    }

    private function openOption(){
        return self::setSpace().'"options" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>' ;
    }

    private function close($level = 1){
        return self::setSpace($level).'<span class="php-plain">),</span><br/>';
    }
    
    private function labelAttribute(){
        if(!empty($this->classLabel) || !empty($this->forLabel)){
            return self::setSpace(2).'"label_attributes" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>' 
                                    . $this->classLabel . $this->forLabel
                                    . self::setSpace(2).'<span class="php-plain">),</span><br/>';
        }else{
            return null;
        }
    }

    private function setValue($post = null){
        if(!empty($post)){

            $this->type     = empty($post["typeElement"])? '' :self::setSpace().'"type" <span class="php-plain">=></span> "'.$post["typeElement"].'"<span class="php-plain">,</span><br/>';
            $this->name     = empty($post["nameElement"])? '' :self::setSpace().'"name" <span class="php-plain">=></span> "'.$post['nameElement'].'"<span class="php-plain">,</span><br/>';
            $this->required = empty($post['requiredElement'])? self::setSpace().'"required" <span class="php-plain">=></span> false,<br/>' :self::setSpace().'"required" <span class="php-plain">=></span> true,<br/>';
            
            //attribute
            $this->class           = empty($this->attribute['class'])? '' : self::setSpace(2).'"class" <span class="php-plain">=></span> "' . $this->attribute['class'] . '"<span class="php-plain">,</span><br/>';
            $this->id              = empty($this->attribute['id'])? '' : self::setSpace(2).'"id" <span class="php-plain">=></span> "' . $this->attribute['id'] . '"<span class="php-plain">,</span><br/>';
            $this->placeholder     = empty($this->attribute['placeholder'])? '' : self::setSpace(2).'"placeholder" <span class="php-plain">=></span> "' . $this->attribute['placeholder'] . '"<span class="php-plain">,</span><br/>';
            $this->value           = empty($this->attribute['value'])? '' : self::setSpace(2).'"value" <span class="php-plain">=></span> "' . $this->attribute['value'] . '"<span class="php-plain">,</span><br/>';
            $this->otherAttributes = $this->setOtherAttributes();
            
            //options
            $this->nameLabel  = empty($this->option['nameLabel'])? '' : self::setSpace(2).'"label" <span class="php-plain">=></span> "' . $this->option['nameLabel'] . '"<span class="php-plain">,</span><br/>';
            $this->classLabel = empty($this->option['classLabel'])? '' : self::setSpace(3).'"class" <span class="php-plain">=></span> "' . $this->option['classLabel'] . '"<span class="php-plain">,</span><br/>';
            $this->forLabel   = empty($this->option['forLabel'])? '' : self::setSpace(3).'"for" <span class="php-plain">=></span> "' . $this->option['forLabel'] . '"<span class="php-plain">,</span><br/>';
        }
    }

    private static function setSpace($level = 1){

        return str_repeat('&nbsp;',$level * 5);
    }

    private function setValueSelectBox(){
        $this->emptyOption = empty($this->option['emptyOption'])? '' : self::setSpace(2).'"empty_option" <span class="php-plain">=></span> "' . $this->option['emptyOption'] . '"<span class="php-plain">,</span><br/>';                
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

                $selectOption .= self::setSpace(2).'"value_option" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';

                foreach($this->valueOption as $key => $val){
                    $selectOption .= self::setSpace(3).'"'. $val .'" <span class="php-plain">=></span> "' . $this->nameOption[$key] . '"<span class="php-plain">,</span><br/>';
                }

                $selectOption .= self::setSpace(2).'<span class="php-plain">),</span><br/>' ;
            }
        }

        return $selectOption;
    }

    private  function openCode($tag = '<code>'){
        return $tag . '<span class="php-variable">$this</span><span class="php-plain">->add</span><span class="php-plain">(</span><span class="php-keyword">array</span><span class="php-plain">(</span><br/>' ;
    }

    private  function closeCode($closeTag = '</code>'){
        return '<span class="php-plain">));</span>' . $closeTag . '<br/>';
    }

    private function setOtherAttributes(){
        $xhtml    = '';
        
        if(!empty($this->attribute['attr'])){
            $attrs = explode(',', $this->attribute['attr']);
                
            foreach($attrs as $attr){
                $attr  = trim($attr);
                $attr  = explode(':',$attr);
                $xhtml .=  self::setSpace(2).'"' . @$attr[0] . '" <span class="php-plain">=></span> "' . @$attr[1] . '"<span class="php-plain">,</span><br/>';
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
