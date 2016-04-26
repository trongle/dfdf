<?php  
namespace Demo\Form;

use Zend\InputFilter\InputFilter;

class FormContactFilter extends InputFilter{

     public function __construct() {
		//username
		$this->add(array(
		     "name" => "username",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "break_chain_on_failure" => "true",
		               "options" => array(
							"messages" => array(
								\Zend\Validator\NotEmpty::IS_EMPTY => "Dữ liệu không được rỗng"
							)
						),
		          ),
		     ),
		));


		//usermail
		$this->add(array(
		     "name" => "usermail",
		     "validators" => array(
		          array(
		               "name" => "EmailAddress",
		               "break_chain_on_failure" => "true"
		          ),
		          array(
		               "name" => "NotEmpty",
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//subject
		$this->add(array(
		     "name" => "subject",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));


		//message
		$this->add(array(
		     "name" => "message",
		     "validators" => array(
		          array(
		               "name" => "NotEmpty",
		               "break_chain_on_failure" => "true"
		          ),
		     ),
		));
     }
}
?>