<?php 
namespace AutoCode\Form;

use Zend\Form\Form;

class FormUser extends Form{
	public function __construct(){
		parent::__construct();
                                
		$this->setAttributes(
			array(
				"action"  => "#",
				"method"  => "post",
				"class"   => "form-signin",
				"name"    => "loginForm",
			)
		);


		$this->add(array(
		     "name" => "inputEmail",
		     "type" => "text",
		     "required" => false,
		     "attributes" => array(
					"class"       => "form-control",
					"id"          => "inputEmail",
					"placeholder" => "Email address",
		     ),
		     "options" => array(
		          "label" => "Email address",
		          "label_attributes" => array(
						"class" => "sr-only",
						"for"   => "inputEmail",
		          ),
		     ),
		));

		$this->add(array(
		     "name" => "inputCsrf",
		     "type" => "csrf",
		     "options" => array(
		          "csrf_options" => array(
		          		"timeout" => 600
		          	)
		     ),
		));

		$this->add(array(
		     "name" => "inputName",
		     "type" => "text",
		     "required" => false,
		     "attributes" => array(
					"class"       => "form-control",
					"id"          => "inputName",
					"placeholder" => "Name",
		     ),
		     "options" => array(
		          "label" => "Name",
		          "label_attributes" => array(
						"class" => "sr-only",
						"for"   => "inputName",
		          ),
		     ),
		));

		$this->add(array(
			"name"       => "inputPassword",
			"type"       => "password",
			"required"   => false,
			"attributes" => array(
					"class"       => "form-control",
					"id"          => "inputPassword",
					"placeholder" => "Password",
		     ),
		     "options" => array(
		          "label" => "Password",
		          "label_attributes" => array(
						"class" => "sr-only",
						"for"   => "inputPassword",
		          ),
		     ),
		));

		$this->add(array(
			 "name"     => "inputRepassword",
			 "type"     => "password",
			 "required" => false,
		     "attributes" => array(
					"class"       => "form-control",
					"id"          => "inputRepassword",
					"placeholder" => "Re-password",
		     ),
		     "options" => array(
		          "label" => "Re-password",
		          "label_attributes" => array(
						"class" => "sr-only",
						"for"   => "inputRepassword",
		          ),
		     ),
		));

		$this->add(array(
		     "name" => "dangnhap",
		     "type" => "button",
		     "required" => false,
		     "attributes" => array(
		          "class" => "btn btn-lg btn-primary btn-block",
		          "id" => "dangnhap",
		          "type" => "button",
		     ),
		     "options" => array(
		          "label" => "Đăng nhập",
		     ),
		));

		$this->add(array(
		     "name" => "dangky",
		     "type" => "button",
		     "required" => false,
		     "attributes" => array(
		          "class" => "btn btn-lg btn-warning btn-block",
		          "id" => "dangky",
		          "type" => "button",
		     ),
		     "options" => array(
		          "label" => "Đăng ký",
		     ),
		));

		$this->add(array(
		     "name" => "back",
		     "type" => "button",
		     "required" => false,
		     "attributes" => array(
		          "class" => "btn btn-lg btn-warning btn-block hide",
		          "id" => "back",
		          "type" => "button"
		     ),
		     "options" => array(
		     	  "label" => "<span class='glyphicon glyphicon-chevron-left'></span>",
		     	  "label_options" => array(
		     	  		'disable_html_escape' => "true",
		     	  )	
		     )
		));

	}

	public function showError(){
		if(empty($this->getMessages())) return false;

		$error = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
		foreach($this->getMessages() as $key=>$val){
			$error .= sprintf('<p><b>%s : </b>%s</p>',ucfirst($this->convertToPrettyName($key)),current($val));
		}
		$error .= '</div>';
		return $error;
	}

	private function convertToPrettyName($fieldName) {
             switch($fieldName){
                case "inputName" :
                    return "Name";
                    break;
                case "inputEmail":
                    return "Email";
                    break;
                case "inputPassword":
                    return "password";
                    break;
                case "inputRepassword":
                    return "re-password";
                    break;
            }
        }
	
}
?>