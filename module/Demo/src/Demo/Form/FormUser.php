<?php  
namespace Demo\Form;

use Zend\Form\Form;

class FormUser extends Form{

     public function __construct(){
        parent::__construct();

		$this->setAttributes(array(
		     "id" => "myForm",
		     "class" => "form-horizontal",
		     "method" => "post",
		     "action" => "#",
		     "role" => "myForm",
		     "name" => "myForm",
		));

		//fullname
		$this->add(array(
		     "name" => "fullname",
		     "type" => "text",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myFullName",
		          "placeholder" => "Vui lòng nhập Họ và Tên",
		     ),
		     "options" => array(
		          "label" => "Họ và Tên",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "fullname",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//email
		$this->add(array(
		     "name" => "email",
		     "type" => "text",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myEmail",
		          "placeholder" => "Vui lòng nhập Email",
		     ),
		     "options" => array(
		          "label" => "Email",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "email",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//gender
		$this->add(array(
		     "name" => "gender",
		     "type" => "select",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myGender",
		     ),
		     "options" => array(
		          "label" => "Giới tính",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "gender",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		          "value_options" => array(
		               "0" => "Vui lòng chọn giới tính",
		               "1" => "Nam",
		               "2" => "Nử",
		          ),
		     ),
		));


		//birthdate
		$this->add(array(
		     "name" => "birthdate",
		     "type" => "text",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myBirthDate",
		          "placeholder" => "Vui lòng nhập Ngày sinh",
		     ),
		     "options" => array(
		          "label" => "Ngày sinh",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "birthdate",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//phone
		$this->add(array(
		     "name" => "phone",
		     "type" => "text",
		     "required" => false,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myPhoneNumber",
		          "placeholder" => "Vui lòng nhập số điện thoại",
		     ),
		     "options" => array(
		          "label" => "Số điện thoại",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "phone",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//password
		$this->add(array(
		     "name" => "password",
		     "type" => "password",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myPassword",
		          "placeholder" => "Vui lòng nhập mật khẩu",
		     ),
		     "options" => array(
		          "label" => "Mật khẩu",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "password",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//repassword
		$this->add(array(
		     "name" => "repassword",
		     "type" => "password",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "myRePassword",
		          "placeholder" => "Vui lòng nhập lại mật khẩu",
		     ),
		     "options" => array(
		          "label" => "Nhập lại mật khẩu",
		          "label_attributes" => array(
		               "class" => "col-lg-2 col-sm-2 control-label",
		               "for" => "repassword",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		     ),
		));


		//city_id
		$this->add(array(
		     "name" => "city_id",
		     "type" => "select",
		     "required" => true,
		     "attributes" => array(
		          "id" => "city",
		          "class" => "form-control round-input",
		     ),
		     "options" => array(
		     	  'disable_inarray_validator' => true,
		          "label" => "Tỉnh / Thành",
		          "label_attributes" => array(
		               "class" => "col-lg-2 control-label",
		               "for" => "city",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		          "value_options" => array(
		               "0" => "Vui lòng chọn Tỉnh / Thành",
		          ),
		     ),
		));


		//district_id
		$this->add(array(
		     "name" => "district_id",
		     "type" => "select",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "district",
		     ),
		     "options" => array(
		     	  'disable_inarray_validator' => true,
		          "label" => "Quận / Huyện",
		          "label_attributes" => array(
		               "class" => "col-lg-2 control-label",
		               "for" => "district",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		          "value_options" => array(
		               "0" => "Vui lòng chọn Quận / Huyện",
		          ),
		     ),
		));


		//ward_id
		$this->add(array(
		     "name" => "ward_id",
		     "type" => "select",
		     "required" => true,
		     "attributes" => array(
		          "class" => "form-control round-input",
		          "id" => "ward",
		     ),
		     "options" => array(
		     	  'disable_inarray_validator' => true,
		          "label" => "Phường / Xã",
		          "label_attributes" => array(
		               "class" => "col-lg-2 control-label",
		               "for" => "ward",
		          ),
		          "label_options" => array(
		               "disable_html_escape" => false,
		          ),
		          "value_options" => array(
		               "0" => "Vui lòng chọn Phường / Xã",
		          ),
		     ),
		));

		//ok
		$this->add(array(
		     "name" => "ok",
		     "type" => "submit",
		     "required" => false,
		     "attributes" => array(
		          "class" => "btn btn-info",
		          "value" => "Hoàn tất",
		     ),
		));


		//user_id
		$this->add(array(
		     "name" => "user_id",
		     "type" => "hidden",
		     "required" => true,
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


     private function convertToPrettyName($fieldName){
          switch($fieldName){
               case "fullname" :
                    return "Họ và Tên";
                    break;
               case "email" :
                    return "Email";
                    break;
               case "gender" :
                    return "Giới tính";
                    break;
               case "birthdate" :
                    return "Ngày sinh";
                    break;
               case "phone" :
                    return "Số điện thoại";
                    break;
               case "password" :
                    return "Mật khẩu";
                    break;
               case "repassword" :
                    return "Nhập lại mật khẩu";
                    break;
               case "city_id" :
                    return "Tỉnh / Thành";
                    break;
               case "district_id" :
                    return "Quận / Huyện";
                    break;
               case "ward_id" :
                    return "Phường / Xã";
                    break;
               case "role_list" :
                    return "Group";
                    break;
          }
     }
}
?>