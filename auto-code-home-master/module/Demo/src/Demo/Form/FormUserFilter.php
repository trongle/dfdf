<?php  
namespace Demo\Form;

use Zend\InputFilter\InputFilter;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;

class FormUserFilter extends InputFilter{

     public function __construct($options = null) {
		$exclude         = null;
		$requirePassword = true;
        //danh cho edit
        if($options["id"] != null){
            $exclude = array(
                "field" => "user_id",
                "value" => $options["id"]
            );
          
            $requirePassword = false;
        }

		//fullname
		$this->add(array(
		     "name" => "fullname",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//email
		$this->add(array(
		     "name" => "email",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "EmailAddress",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\EmailAddress::INVALID => "Email không hợp lệ",
		                          \Zend\Validator\EmailAddress::INVALID_FORMAT => "Email không hợp lệ",
		                          \Zend\Validator\EmailAddress::INVALID_HOSTNAME => "Email không hợp lệ",
		                          \Zend\Validator\EmailAddress::DOT_ATOM => "Email không hợp lệ",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "DbNoRecordExists",
		               "options" => array(
							"table"    => "users",
							"field"    => "email",
							"exclude"  => $exclude,
							"adapter"  => GlobalAdapterFeature::getStaticAdapter(),
							"messages" => array(
		                          \Zend\Validator\Db\NoRecordExists::ERROR_NO_RECORD_FOUND => "Đã tồn tại",
		                          \Zend\Validator\Db\NoRecordExists::ERROR_RECORD_FOUND => "Đã tồn tại",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//gender
		$this->add(array(
		     "name" => "gender",
		     "validators" => array(
		          array(
		               "name" => "GreaterThan",
		               "options" => array(
		                    "min" => "1",
		                    "inclusive" => "true",
		                    "messages" => array(
		                          \Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));

		//birthdate
		$this->add(array(
		     "name" => "birthdate",
		     "validators" => array(
		          array(
		               "name" => "Date",
		               "options" => array(
		                    "format" => "d/m/Y",
		                    "messages" => array(
		                          \Zend\Validator\Date::INVALID => "'Định dạng dd/mm/yyyy",
		                          \Zend\Validator\Date::INVALID_DATE => "'Định dạng dd/mm/yyyy",
		                          \Zend\Validator\Date::FALSEFORMAT => "'Định dạng dd/mm/yyyy",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//phone
		$this->add(array(
		     "name" => "phone",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//password
		$this->add(array(
			"name"       => "password",
			"required"   => $requirePassword,
			"validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "Regex",
		               "options" => array(
		                    "pattern" => "#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,15}$#",
		                    "messages" => array(
		                          \Zend\Validator\Regex::NOT_MATCH => "phải có ít nhất 1 ký tự HOA,1 thường ,1 đặc biệt @,độ dài từ 8 đến 15 ký tự",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//repassword
		$this->add(array(
			"name"       => "repassword",
			'required'   => $requirePassword,
			"validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
		                    "messages" => array(
		                          \Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "Identical",
		               "options" => array(
		                    "token" => "password",
		                    "messages" => array(
		                          \Zend\Validator\Identical::NOT_SAME => "Mật khẩu không khớp",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//city_id
		$this->add(array(
		     "name" => "city_id",
		     "required" => false,
		     "validators" => array(
		          array(
		               "name" => "GreaterThan",
		               "options" => array(   
		                    "min" => "1",
		                    "inclusive" => "true",
		                    "messages" => array(
		                          \Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//district_id
		$this->add(array(
		     "name" => "district_id",
		     "validators" => array(
		          array(
		               "name" => "GreaterThan",
		               "options" => array(
		                    "min" => "1",
		                    "inclusive" => "true",
		                    "messages" => array(
		                          \Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//ward_id
		$this->add(array(
		     "name" => "ward_id",
		     "validators" => array(
		          array(
		               "name" => "GreaterThan",
		               "options" => array(
		                    "min" => "1",
		                    "inclusive" => "true",
		                    "messages" => array(
		                          \Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE => "Dữ liệu không được rỗng",
		                    ),
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));

		//user_id
		$this->add(array(
		     "name" => "user_id",
		     "required" => false,
		     "validators" => array(
		          array(
		               "name" => "Digits",
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));
     }
}
?>