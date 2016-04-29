<?php
namespace Adminuser\Form;

use Adminuser\Form\FormUserFilter;
use Zend\Form\Form;

class FormUser extends Form{
	public function __construct($tableGroup){
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
			"name" => "fullname",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"                => "myFullName",
				"placeholder" => "Vui lòng nhập Họ và Tên ",
			),
			"options" => array(
				"label" => "Họ và Tên ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myFullName"
				),
			)	
		));


                //email
		$this->add(array(
			"type" => "text",
			"name" => "email",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myEmail",
				"placeholder" => "Vui lòng nhập Email",
			),
			"options" => array(
				"label" => "Email ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myEmail"
				),
            		)	
		));

                // Giới tính
		$this->add(array(
			"type" => "select",
			"name" => "gender",
			"required" => true,
			"attributes" => array(
                                                            "id"    => "myGender",
                                                            "class" => "form-control round-input",  
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
                                                                    "for"   => "myGender"
                                                            )
			)	
		));

		//ngay sinh
		$this->add(array(
			"type" => "text",
			"name" => "birthdate",
                                                "required" => false,
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myBirthDate",
				"placeholder" => "Vui lòng nhập Ngày sinh",
			),
			"options" => array(
				"label" => "Ngày sinh ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myBirthDate"
				),
			)	
		));

		//so dien thoai
		$this->add(array(
			"type" => "text",
			"name" => "phone",	
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myPhoneNumber",
				"placeholder" => "Vui lòng nhập số điện thoại",
			),
			"options" => array(
				"label" => "Số điện thoại ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myPhoneNumber"
				),
			)	
		));

                                //password
                                $this->add(array(
                                        "type" => "password",
                                        "name" => "password",
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
			"name" => "repassword",
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
			"name" => "address",
			"attributes" => array(
				"class"       => "form-control round-input",
				"id"          => "myAddress",
				"placeholder" => "Lưu ý: Chỉ nhập số nhà và tên đường",
			),
			"options" => array(
				"label"            => "Số nhà, tên đường ",
				"label_attributes" => array(
					"class" => "col-lg-2 col-sm-2 control-label",
					"for"   => "myAddress"
				),
			)	
		));

	    //tỉnh
		$this->add(array(
			"type" => "select",
			"name" => "city_id",
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
					"for"   => "city"
				)
			)	
		));
 
        //quận
		$this->add(array(
			"type" => "select",
			"name" => "district_id",
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
					"for"   => "district"
				)
			)	
		));

                //xã
		$this->add(array(
			"type" => "select",
			"name" => "ward_id",
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
					"for"   => "ward"
				)
			)	
		));

		//group
		$this->add(array(
			"type" => "select",
			"name" => "role_list",
			"attributes" => array(
				"id"       => "userRoleList",
				"class"    => "form-control round-input sumoselect",
				"multiple" => "multiple",
			),
			"options" => array(
				"value_options" => $tableGroup->itemInSelectBox(),
				"label" => "Group",
				"label_attributes" => array(
					"class" => "col-lg-2 control-label",
					"for"   => "role_list"
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
			"name" => "user_id",
			"type" => "hidden"
		));

	}

	public function showError(){
		if(empty($this->getMessages())) return false;

		$error = '<div class="alert alert-danger" role="alert">';
		foreach($this->getMessages() as $key=>$val){
			$error .= sprintf('<p><b>%s : </b>%s</p>',ucfirst($this->convertToPrettyName($key)),current($val));
		}
		$error .= '</div>';
		
		return $error;
	}
        
        private function convertToPrettyName($fieldName) {
             switch($fieldName){
                case "fullname" :
                    return "Họ và tên";
                    break;
                case "email":
                    return "Email";
                    break;
                case "gender":
                    return "Giới tính";
                    break;
                case "birthdate":
                    return "Ngày sinh";
                    break;
                case "phone":
                    return "Số điện thoại";
                    break;
                case "password":
                    return "Mật khẩu";
                    break;
                case "repassword":
                    return "Mật khẩu nhập lại";
                    break;
                case "address":
                    return "Địa chỉ";
                    break;
                case "city_id":
                    return "Tỉnh / Thành";
                    break;
                case "district_id":
                    return "Quận / Huyện";
                    break;
                case "ward_id":
                    return "Phường / Xã";
                    break;
                case "role_list":
                    return "Nhóm";
                    break;
            }
        }
}
?>