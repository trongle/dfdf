<?php
namespace Adminuser\Form;

use Adminuser\Form\FormUserFilter;
use Zend\Form\Form;

class FormUser3 extends Form{
    
                public $_user = null;
                
	public function __construct($tableGroup,$user){
		parent::__construct();
               
		$this->setAttributes(
			array(
				"action"  => "#",
				"method"  => "POST",
				"class"   => "form-horizontal",
				"role"    => "myForm",
				"name"    => "myForm",
				"id"      => "myForm",
			));
		//name
		$this->add(array(
			"type" => "text",
			"name" => "form[myfullname]",
                                                
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"                => "myFullName",
				"placeholder" => "Vui lòng nhập Họ và Tên ",
                                                                "value" => $user['fullname'],
			),
			"options" => array(
				"label" => "Họ và Tên ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myfullname"
				),
			)	
		));


                                //email
		$this->add(array(
			"type" => "text",
			"name" => "form[myemail]",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myEmail",
				"placeholder" => "Vui lòng nhập Email",
                                                                 "value" => $user['email'],
			),
			"options" => array(
				"label" => "Email ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myemail"
				),
            		)	
		));

                                // Giới tính
		$this->add(array(
			"type" => "select",
			"name" => "form[mygender]",
			"required" => true,
			"attributes" => array(
                                                            "id"    => "myGender",
                                                            "class" => "form-control round-input",  
                                                             "value" => $user['gender'],
                                                             "selected" => true
                                                        ),
                                                "options" => array(  
                                                                    "value_options" => array(
                                                                    "0"  => "Vui lòng chọn giới tính",
                                                                    "1"  => "Nam",
                                                                    "2"  => "Nử"
                                                            ),
                                                            "label" => "Giới tính ",
                                                            "label_attributes" => array(
                                                                    "class" => "col-lg-2 col-sm-2 control-label",
                                                                    "for"   => "mygender"
                                                            )
			)	
		));

		//ngay sinh
		$this->add(array(
			"type" => "text",
			"name" => "form[mybirthdate]",
                                                "required" => false,
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myBirthDate",
				"placeholder" => "Vui lòng nhập Ngày sinh",
                                                                'value' => $user['birthdate']
			),
			"options" => array(
				"label" => "Ngày sinh ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "mybirthdate"
				),
			)	
		));

		//so dien thoai
		$this->add(array(
			"type" => "text",
			"name" => "form[myphone]",	
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myPhoneNumber",
				"placeholder" => "Vui lòng nhập số điện thoại",
                                                                'value' => $user['phone']
			),
			"options" => array(
				"label" => "Số điện thoại ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myphone"
				),
			)	
		));

                                //password
                                $this->add(array(
                                        "type" => "password",
                                        "name" => "form[mypassword]",
                                        "attributes" => array(
                                                "class"       => "form-control round-input",
                                                "id"          => "myPassword",
                                                "placeholder" => "Vui lòng nhập mật khẩu",
                                        ),
                                        "options" => array(
                                                "label"            => "Mật khẩu ",
                                                "label_attributes" => array(
                                                        "class" => "col-lg-2 col-sm-2 control-label",
                                                        "for"   => "myPassword"
                                                ),
                                        )	
                                ));

		//re-password
                                $this->add(array(
			"type" => "password",
			"name" => "form[myrepassword]",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myRePassword",
				"placeholder" => "Vui lòng nhập lại mật khẩu",
			),
			"options" => array(
                                                                "token"          => "myPassword",
				"label"           => "Nhập lại mật khẩu ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myRePassword"
				),
			)	
		));

		//address
                $this->add(array(
			"type" => "text",
			"name" => "form[myaddress]",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myAddress",
				"placeholder" => "Lưu ý: Chỉ nhập số nhà và tên đường",
                                                                 'value' => $user['address']
			),
			"options" => array(
				"label"            => "Số nhà, tên đường ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myaddress"
				),
			)	
		));

	    //tỉnh
		$this->add(array(
			"type" => "select",
			"name" => "form[mycity]",
			"attributes" => array(
				"id"    => "city",
				"class" => "form-control round-input"
			),
			"options" => array(
                                                                "value_options" => array(
                                                                        "0"  => "Vui lòng chọn Tỉnh /  Thành",
                                                                ),
				"label" => "Tỉnh / Thành ",
				"label_attributes" => array(
					"class" => "col-lg-2 control-label",
					"for"   => "mycity"
				)
			)	
		));
 
        //quận
		$this->add(array(
			"type" => "select",
			"name" => "form[mydistrict]",
			"attributes" => array(
				"id"    => "district",
				"class" => "form-control round-input"
			),
			"options" => array(
                                                                "value_options" => array(
                                                                        "0"  => "Vui lòng chọn Quận /  Huyện",
                                                                ),
				"label" => "Quận / Huyện ",
				"label_attributes" => array(
					"class" => "col-lg-2 control-label",
					"for"   => "mydistrict"
				)
			)	
		));

                //xã
		$this->add(array(
			"type" => "select",
			"name" => "form[myward]",
			"attributes" => array(
				"id"    => "ward",
				"class" => "form-control round-input"
			),
			"options" => array(
                                                                "value_options" => array(
                                                                        "0"  => "Vui lòng chọn Phường /  Xã",
                                                                ),
				"label" => "Phường / Xã ",
				"label_attributes" => array(
					"class" => "col-lg-2 control-label",
					"for"   => "myward"
				)
			)	
		));

		//group
		$this->add(array(
			"type" => "select",
			"name" => "form[myuserrole]",
			"attributes" => array(
				"id"       => "userRoleList",
				"class"    => "form-control round-input sumoselect",
				"multiple" => "multiple",
                                                                "value" => $user['role_list'],
                                                                "selected" => true
			),
			"options" => array(
                                                               "value_options" => $tableGroup->itemInSelectBox(),
				"label" => "Group",
				"label_attributes" => array(
					"class" => "col-lg-2 control-label",
					"for"   => "myuserrole"
				)
			)	
		));


		//submit
		$this->add(array(
			"type" => "submit",
			"name" => "ok",
			"attributes" => array(
				"class"       => "btn btn-info",
				"value"       => "Hoàn tất"
			),	
		));
                
                                //user_id
                                $this->add(array(
			"name" => "form[myuserid]",
			"type" => "hidden",
                                                "attributes" => array(
				"value"       => $user['user_id']
			),
		));

	}

	public function showError(){
		if(empty($this->getMessages())) return false;

		$error = '<div class="alert alert-danger" role="alert">';
		foreach($this->getMessages() as $key=>$val){
			$error .= sprintf('<p><b>%s : </b>%s</p>',$this->convertToPrettyName($key),current($val));
		}
		$error .= '</div>';
		
		return $error;
	}
        
        private function convertToPrettyName($fieldName) {
             switch($fieldName){
                case "form[myfullname]" :
                    return "Họ và tên";
                    break;
                case "form[myemail]":
                    return "Email";
                    break;
                case "form[mygender]":
                    return "Giới tính";
                    break;
                case "form[mybirthdate]":
                    return "Ngày sinh";
                    break;
                case "form[myphone]":
                    return "Số điện thoại";
                    break;
                case "form[mypassword]":
                    return "Mật khẩu";
                    break;
                case "form[myrepassword]":
                    return "Mật khẩu nhập lại";
                    break;
                case "form[myaddress]":
                    return "Địa chỉ";
                    break;
                case "form[mycity]":
                    return "Tỉnh / Thành";
                    break;
                case "form[mydistrict]":
                    return "Quận / Huyện";
                    break;
                case "form[myward]":
                    return "Phường / Xã";
                    break;
                case "form[myuserrole]":
                    return "Nhóm";
                    break;
             }
        }
        
}
?>