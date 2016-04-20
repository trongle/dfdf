<?php

namespace AutoCode\Form;

use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\InputFilter\InputFilter;
use Zend\Validator\Csrf;

class FormUserFilter extends InputFilter {
	public function __construct($type = null){
		$requireRepassword = true;
		$requireName       = true;
		$requirePassword   = true;
		$requireEmail      = true;

		if($type == "login"){
			$requireRepassword = false;
			$requireName       = false;

			$this->add(array(
			"name"       => "inputEmail",
			"required"   => $requireEmail,
			"validators" => array(
					  array(
			              	"name" => "NotEmpty",
							"options" => array(
								"messages" => array(
									\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
								)
							),
							"break_chain_on_failure" => "true"
			          ),
			          array(
			               "name" => "EmailAddress",
			               "options" => array(
								"messages" => array(
									\Zend\Validator\EmailAddress::INVALID_FORMAT   => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::INVALID_HOSTNAME => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::INVALID          => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::DOT_ATOM         => "Email không hợp lệ",
								)
							),
			               "break_chain_on_failure" => "true"

			          ),
			     ),
			));
		}else{
			$this->add(array(
			"name"       => "inputEmail",
			"required"   => $requireEmail,
			"validators" => array(
					  array(
			              	"name" => "NotEmpty",
							"options" => array(
								"messages" => array(
									\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
								)
							),
							"break_chain_on_failure" => "true"
			          ),
			          array(
			               "name" => "EmailAddress",
			               "options" => array(
								"messages" => array(
									\Zend\Validator\EmailAddress::INVALID_FORMAT   => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::INVALID_HOSTNAME => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::INVALID          => "Email không hợp lệ",
									\Zend\Validator\EmailAddress::DOT_ATOM         => "Email không hợp lệ",
								)
							),
			               "break_chain_on_failure" => "true"

			          ),
			          array(
							"name" => "DbNoRecordExists",
							"options" => array(
								"table"   => "users",
								"field"   => "email",
								"adapter" => GlobalAdapterFeature::getStaticAdapter(),
								"messages" => array(
									\Zend\Validator\Db\NoRecordExists::ERROR_RECORD_FOUND => "Email đã tồn tại"
								)
							),
							"break_chain_on_failure" => "true"
					  ),
			     ),
			));
		}

		$this->add(array(
			"name"       => "inputPassword",
			"required"   => $requirePassword,
			"validators" => array(
		          array(
		              	"name" => "NotEmpty",
						"options" => array(
							"messages" => array(
								\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
							)
						),
						"break_chain_on_failure" => "true"
		          ),
		   //	array(
					// "name" => "Regex",
					// "options" => array(
					// 	"pattern"  => "#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,15}$#",
					// 	"messages" => array(
					// 		\Zend\Validator\Regex::NOT_MATCH => "password phải có ít nhất 1 ký tự HOA,1 thường ,1 đặc biệt @,một số 1"
					// 	),
					// ),
					// "break_chain_on_failure" => "true"
					// ),
					array(
						"name" => "StringLength",
						"options" => array(
							"min"  => "6",
							"max"  => "15",
							"messages" => array(
								\Zend\Validator\StringLength::TOO_SHORT => "mật khẩu phải có ít nhất 8 ký tự",
								\Zend\Validator\StringLength::TOO_LONG  => "mật khẩu phải ngắn hơn 15 ký tự",
							),
						),
						"break_chain_on_failure" => "true"
					),
		     ),
		));


		


		$this->add(array(
			"name"       => "inputName",
			"required"   => $requireName,
			"validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
						   "messages" => array(
									\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
								)
						),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));



		$this->add(array(
			"name"       => "inputRepassword",
			"required"   => $requireRepassword,
			"validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "options" => array(
							"messages" => array(
								\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng",
							)
						),
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "Identical",
		               "options" => array(
		                    "token" => "inputPassword",
		                    'messages' => array(
                                \Zend\Validator\Identical::NOT_SAME => "Mật khẩu không khớp"
                            )
		               ),
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));
	}
}
?>