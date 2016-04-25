<?php

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
    private $disableHtml;
    private $optionLabel;
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
        $authenticate = $this->getServiceLocator()->get('MyAuth');
        $auth         = $authenticate->_authen;
        $user_id      = '';

        if(!$auth->hasIdentity()){
            $this->redirect()->toRoute("home");
        }else{
            $userInfo = $auth->getIdentity();
        }


        $validateTable = $this->getServiceLocator()->get('ValidateTable');
        $filterTable   = $this->getServiceLocator()->get('FilterTable');

        $viewModel =  new ViewModel([
            'validateElement' => $validateTable->listItem(),
            'filterElement'   => $filterTable->listItem(),
            'userInfo'        => $userInfo
        ]);

        $viewModel->setTemplate("auto-code/form/edit-form.phtml");
        return $viewModel;
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

    public function createCodeAction(){
        if($this->request->isXmlHttpRequest()){

            $post        = $this->filterPost($this->request->getPost()); 
            $nameElement = str_replace(".wrapper-","",$post->selector); 
            $post        = $post->element[$nameElement];

            //
            $this->attribute          = $post['attribute'];
            $this->option             = $post['option'];

            //validate
            $this->validateName       = isset($post['validateName'])? $post['validateName'] : '';
            $this->validateOption     = isset($post['validateOption'])? $post['validateOption'] : '';
            $this->validateBreakChain = isset($post['validateBreakChain'])? $post['validateBreakChain'] : '';
            
            //filter
            $this->filterName       = isset($post['filterName'])? $post['filterName'] : '';
            $this->filterOption     = isset($post['filterOption'])? $post['filterOption'] : '';

            $this->setValue($post);          
            
            // Create input code 
            echo $code = $this->createInputCode($post);

            echo '<div class="hide">superman</div>';

            // Create filter and Validate code         
            
            echo $codeFilterAndValidate = $this->openCode() . $this->name
                                                .$this->createFilterCode() . $this->createValidateCode()
                                        . $this->closeCode() ;  

            return $this->response;
        }else{
            $authenticate = $this->getServiceLocator()->get('MyAuth');
            $auth         = $authenticate->_authen;

            if($auth->hasIdentity()){
                $id            = $this->params()->fromRoute("id");
                $formTable     = $this->getServiceLocator()->get("FormTable");

                $infoForm          = $formTable->getItemById($id);
                $infoForm->content = unserialize($infoForm->content);

                $codeInput             = '';
                $codeValidateAndFilter = '';
                foreach($infoForm->content as $nameElement => $infoElement){
                    //
                    $this->attribute          = $infoElement['attribute'];
                    $this->option             = $infoElement['option'];

                    //validate
                    $this->validateName       = isset($infoElement['validate']['name'])? $infoElement['validate']['name'] : '';
                    $this->validateOption     = isset($infoElement['validate']['option'])? $infoElement['validate']['option'] : '';
                    $this->validateBreakChain = isset($infoElement['validate']['breakchain'])? $infoElement['validate']['breakchain'] : '';
                    
                    //filter
                    $this->filterName       = isset($infoElement['filter']['name'])? $infoElement['filter']['name'] : '';
                    $this->filterOption     = isset($infoElement['filter']['option'])? $infoElement['filter']['option'] : '';

                    $this->setValue($infoElement);

                    $codeInput             .= $this->createCommentString($nameElement,'','') . $this->createInputCode($infoElement,'','');
                    if( !empty($this->createFilterCode()) || !empty($this->createValidateCode()) ){     
                        $codeValidateAndFilter .= $this->createCommentString($nameElement,'','') . $this->openCode('') . $this->name . $this->createFilterCode() . $this->createValidateCode() . $this->closeCode('');
                    }
                }

                $viewModel = new ViewModel();

                $viewModel->setVariables(array(
                    "infoForm"              => $infoForm,
                    'codeInput'             => $this->createAttributeFormString($infoForm->attribute) . $codeInput,
                    'codeValidateAndFilter' => $codeValidateAndFilter,
                ));

                return $viewModel;
                
            }else{
                $this->redirect()->toRoute("home");
            }
        }
                       
    }
    
    private function createAttributeFormString($attributeForm = null){
        $code = '';
        
        if(!empty($attributeForm)){
            $attributeForm = unserialize($attributeForm);
   
            $code   = '<span class="php-variable">$this</span><span class="php-plain">->setAttributes</span><span class="php-plain">(</span><span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
            $code   .=  empty($attributeForm['id'])?         '' : self::setSpace(1).'"id" <span class="php-plain">=></span> "' . $attributeForm['id'] . '"<span class="php-plain">,</span><br/>';
            $code   .=  empty($attributeForm['class'])?      '' : self::setSpace(1).'"class" <span class="php-plain">=></span> "' . $attributeForm['class'] . '"<span class="php-plain">,</span><br/>';
            $code   .=  empty($attributeForm['method'])?     '' : self::setSpace(1).'"method" <span class="php-plain">=></span> "' . $attributeForm['method'] . '"<span class="php-plain">,</span><br/>';
            $code   .=  $attributeForm['entype'] == 'empty'? '' : self::setSpace(1).'"entype" <span class="php-plain">=></span> "' . $attributeForm['entype'] . '"<span class="php-plain">,</span><br/>';
            $code   .=  empty($attributeForm['action'])?     '' : self::setSpace(1).'"action" <span class="php-plain">=></span> "' . $attributeForm['action'] . '"<span class="php-plain">,</span><br/>';
            $code   .= '<span class="php-plain">));</span>';
        }

        return $code;
    }

    private function createCommentString($nameInput = null, $tagOpen = "<code>" , $tagClose = "</code>"){
        return "<br/><br/>" . $tagOpen . "<span class='php-comment'>//" . $nameInput . "</span>" . $tagClose . "<br/>";
    }

    private function createValidateCode(){
        $codeValidate = '';

        if(count($this->validateName) > 0 && !empty($this->validateName)){
            $codeValidate   .= $this->openValidate()
                                . $this->createValidateString()
                            . $this->close() ;
        }

        return $codeValidate;
    }

    private function createFilterCode(){
        $codeFilter = '';

        if(count($this->filterName) > 0 && !empty($this->filterName)){
            $codeFilter = $this->openFilter()
                            . $this->createFilterString()
                        . $this->close();
        }

        return $codeFilter;
    }

    private function createInputCode($post = null,$openTag = "<code>",$closeTag = "</code>"){
        $code = $this->openCode($openTag) . $this->name . $this->type . $this->required ;

                if($this->checkAttribute() == true){
                    $code   .= $this->openAttribute()
                                . $this->class . $this->id . $this->placeholder . $this->value . $this->otherAttributes
                            . $this->close();
                }

                if($this->checkOption() == true){
                    $code   .= $this->openOption() 
                                . $this->nameLabel . $this->labelAttributeString() . $this->createOptionLabelString() . $this->createSelectBoxString($post)
                            .$this->close();
                }

        $code .= $this->closeCode($closeTag);

        return $code;
    }

    private function filterPost($post = null){
        if(!empty($post)){
            $parse_str       = '';
            parse_str($post['element'],$parse_str);
            $post['element'] = $parse_str;

            unset($post->element['nameElement']);
            unset($post->element['validateElement']);
            unset($post->element['filterElement']);
        }

        return $post;
    }

    private function openValidate(){
        return $this->setSpace() . '"validators" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
    }

    private function openFilter(){
        return $this->setSpace() . '"filters" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>';
    }

    private function createValidateString(){
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

    private function createFilterString(){
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
    
    private function labelAttributeString(){
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
            $this->type     = empty($post["type"])? '' :self::setSpace().'"type" <span class="php-plain">=></span> "'.$post["type"].'"<span class="php-plain">,</span><br/>';
            $this->name     = empty($post["name"])? '' :self::setSpace().'"name" <span class="php-plain">=></span> "'.$post['name'].'"<span class="php-plain">,</span><br/>';
            $this->required = empty($post['required'])? self::setSpace().'"required" <span class="php-plain">=></span> false,<br/>' :self::setSpace().'"required" <span class="php-plain">=></span> true,<br/>';
            
            //attribute
            $this->class           = empty($this->attribute['class'])? '' : self::setSpace(2).'"class" <span class="php-plain">=></span> "' . $this->attribute['class'] . '"<span class="php-plain">,</span><br/>';
            $this->id              = empty($this->attribute['id'])? '' : self::setSpace(2).'"id" <span class="php-plain">=></span> "' . $this->attribute['id'] . '"<span class="php-plain">,</span><br/>';
            $this->placeholder     = empty($this->attribute['placeholder'])? '' : self::setSpace(2).'"placeholder" <span class="php-plain">=></span> "' . $this->attribute['placeholder'] . '"<span class="php-plain">,</span><br/>';
            $this->value           = empty($this->attribute['value'])? '' : self::setSpace(2).'"value" <span class="php-plain">=></span> "' . $this->attribute['value'] . '"<span class="php-plain">,</span><br/>';
            $this->otherAttributes = $this->setArrayPair('attribute');
            
            //options
            $this->nameLabel    = empty($this->option['nameLabel'])? '' : self::setSpace(2).'"label" <span class="php-plain">=></span> "' . $this->option['nameLabel'] . '"<span class="php-plain">,</span><br/>';
            $this->classLabel   = empty($this->option['classLabel'])? '' : self::setSpace(3).'"class" <span class="php-plain">=></span> "' . $this->option['classLabel'] . '"<span class="php-plain">,</span><br/>';
            $this->forLabel     = empty($this->option['forLabel'])? '' : self::setSpace(3).'"for" <span class="php-plain">=></span> "' . $this->option['forLabel'] . '"<span class="php-plain">,</span><br/>';
            $this->disableHtml  = empty($this->option['disableHtml'])? self::setSpace(3).'"disable_html_escape" <span class="php-plain">=></span> false,<br/>' : self::setSpace(3).'"disable_html_escape" <span class="php-plain">=></span> true,<br/>';
            $this->optionLabel = $this->setArrayPair('optionLabel');
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

    private function createSelectBoxString($post = null){
        $this->setValueSelectBox();

        $selectOption = null;

        if($post["type"] == 'select'){
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

    private function createOptionLabelString($post = null){
        if(!empty($this->disableHtml) || !empty($this->optionLabel)){
            return self::setSpace(2).'"label_options" <span class="php-plain">=></span> <span class="php-keyword">array</span><span class="php-plain">(</span><br/>' 
                                        . $this->disableHtml . $this->optionLabel
                                    . self::setSpace(2).'<span class="php-plain">),</span><br/>';
        }else{
            return null;
        }
    }

    private  function openCode($tag = '<code>'){
        return $tag . '<span class="php-variable">$this</span><span class="php-plain">->add</span><span class="php-plain">(</span><span class="php-keyword">array</span><span class="php-plain">(</span><br/>' ;
    }

    private  function closeCode($closeTag = '</code>'){
        return '<span class="php-plain">));</span>' . $closeTag . '<br/>';
    }

    private function setArrayPair($type = null){
        $xhtml    = '';
        
        if(!empty($type)){
            if(!empty($this->attribute['attr']) && $type == "attribute"){
                $attrs = explode(',', $this->attribute['attr']);
                    
                foreach($attrs as $attr){
                    $attr  = trim($attr);
                    $attr  = explode(':',$attr);
                    $xhtml .=  self::setSpace(2).'"' . @$attr[0] . '" <span class="php-plain">=></span> "' . @$attr[1] . '"<span class="php-plain">,</span><br/>';
                }
                return $xhtml;
            }

            if(!empty($this->option['optionLabel']) && $type == 'optionLabel'){
                $attrs = explode(',', $this->option['optionLabel']);
                    
                foreach($attrs as $attr){
                    $attr  = trim($attr);
                    $attr  = explode(':',$attr);
                    $xhtml .=  self::setSpace(3).'"' . @$attr[0] . '" <span class="php-plain">=></span> "' . @$attr[1] . '"<span class="php-plain">,</span><br/>';
                }
                return $xhtml;
            }
        }
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
