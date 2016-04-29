<?php

namespace Adminuser\Form;

use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\InputFilter\InputFilter;
use Zend\Validator\Db\NoRecordExists;
use Zend\Validator\NotEmpty;

class FormUserFilter3 extends InputFilter {

    protected $_field_text = [
        'form[myfullname]',
        'form[myphone]',
        'form[mypassword]',
        'form[myrepassword]',
        'form[myaddress]'

    ];
    
     protected $_field_select = [
        'form[mygender]',
        'form[mycity]',
        'form[myistrict]',
        'form[myward]',
        'form[myuserrole]'   
    ];

    public function init(array $options = null) {
        $exclude = null;
        $requirePassword = true;
        //danh cho edit
        if($options["id"] != null){
                $exclude = array(
                        "field" => "user_id",
                        "value" => $options["id"]
                );
              
                $requirePassword = false;
        }
        
        
        foreach ($this->_field_text as $field) {
            $this->add(array(
                'name' => $field,
                "validators" => array(
                    $this->checkEmpty()
                )
            ));
        }
        
        foreach ($this->_field_select as $field) {
            $this->add(array(
                'name' => $field,
                "validators" => array(
                    $this->checkEmptySelect()
                )
            ));
        }


        $this->add(array(
            'name' => 'form[myemail]',
            "validators" => array(
                $this->checkEmpty(),
                $this->checkExists('users', 'email',$exclude),
                $this->checkEmail()
            )
        ));
        
        $this->add(array(
            'name' => 'form[myrepassword]',
            'required' => $requirePassword,
            "validators" => array(
                array(
                        'name' => 'Identical',
                        'options' => array(
                            'token' => 'password',
                            'messages' => array(
                                \Zend\Validator\Identical::NOT_SAME => "Mật khẩu không khớp"
                            )
                        )
                )
                
            )
        ));
        
        $this->add(array(
            'name' => 'form[mypassword]',
            'required' => $requirePassword,
            "validators" => array(
                array(
                        "name" => "Regex",
                        "options" => array(
                                "pattern"  => "#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,15}$#",
                                "messages" => array(
                                        \Zend\Validator\Regex::NOT_MATCH => " phải có ít nhất 1 ký tự HOA,1 thường ,1 đặc biệt @,độ dài từ 8 đến 15 ký tự"
                                ),
                        )
                )
            )
        ));
        
        $this->add(array(
                'name' => 'form[mybirthdate]',
                'required' => false,
                'validators' => array(
                    array(
                        'name' => 'Date',
                        'options' => array(
                            'format' => 'd/m/Y',
                            'messages' => array(
                                        \Zend\Validator\Date::INVALID => 'Định dạng dd/mm/yyyy',
                                        \Zend\Validator\Date::INVALID_DATE => 'Định dạng dd/mm/yyyy',
                                        \Zend\Validator\Date::FALSEFORMAT => 'Định dạng dd/mm/yyyy',
                                )
                        )
                    )
                )
            )          
        );
        
        $this->add(array(
                'name' => 'form[myuserid]',
                'required' => false,
                'validators' => array(
                    array(
                        'name' => 'Digits',
                    )
                )
        ));
        
        
        
        
    }

    private function checkEmpty($breakChain = true) {

        return array(
            "name" => "NotEmpty",
            "options" => array(
                "messages" => array(
                    NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
                )
            ),
            "break_chain_on_failure" => $breakChain
        );
    }

    private function checkEmptySelect( $breakChain = true) {

        return array(
            'name' => 'GreaterThan',
            'options' => array(
                'min' => 1,
                'inclusive' => true,
                'messages' => array(
                            \Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE => 'Dữ liệu không được rỗng'
                ),
            ),
            "break_chain_on_failure" => $breakChain
        );
    }

    private function checkExists($table, $field,$exclude= null ,  $breakChain = true) {
        return array(
            "name" => "DbNoRecordExists",
            "options" => array(
                "table" => $table,
                "field" => $field,
                "adapter" => GlobalAdapterFeature::getStaticAdapter(),
                "exclude" => $exclude,
                "messages" => array(
                    NoRecordExists::ERROR_RECORD_FOUND => ucfirst($field) . " đã tồn tại"
                )
            ),
            "break_chain_on_failure" =>  $breakChain
        );
    }

    private function checkEmail() {
        return array(
            "name" => "EmailAddress",
            "options" => array(
                "messages" => array(
                    \Zend\Validator\EmailAddress::INVALID_FORMAT => "Email không hợp lệ",
                    \Zend\Validator\EmailAddress::INVALID_HOSTNAME => "Email không hợp lệ",
                    \Zend\Validator\EmailAddress::INVALID => "Email không hợp lệ",
                    \Zend\Validator\EmailAddress::DOT_ATOM => "Email không hợp lệ",
                )
            ),
            "break_chain_on_failure" => "true"
        );
    }

}

?>