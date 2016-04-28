<?php  
namespace Demo\Form;

use Zend\InputFilter\InputFilter;

class Form01Filter extends InputFilter{

     public function __construct() {
		//username
		$this->add(array(
		     "name" => "username",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//password
		$this->add(array(
		     "name" => "password",
		     "validators" => array(
		          array(
		               "name" => "Regex",
		               "options" => array(
		               		"pattern"  => "#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,15}$#",
		                    "messages" => array(
		                          \Zend\Validator\Regex::NOT_MATCH => "phải có ít nhất 1 ký tự HOA,1 thường ,1 đặc biệt @,một số 1",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "StringLength",
		               "options" => array(
		                    "min" => "5",
		                    "max" => "18",
		                    "messages" => array(
		                          \Zend\Validator\StringLength::TOO_SHORT => "Phải lớn hơn 5 ký tự",
		                          \Zend\Validator\StringLength::TOO_LONG => "Phải nhỏ hơn 18 ký tự",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//repassword
		$this->add(array(
		     "name" => "repassword",
		     "validators" => array(
		          array(
		               "name" => "Identical",
		               "options" => array(
		                    "token" => "password",
		                    "messages" => array(
		                          \Zend\Validator\Identical::NOT_SAME => "Mật khẩu không hợp lệ",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));
     }
}
?>