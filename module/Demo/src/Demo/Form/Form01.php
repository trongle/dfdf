<?php  
namespace Demo\Form;

use Zend\Form\Form;

class Form01 extends Form{

     public function __construct(){
          parent::__construct();

          $this->setAttributes(array(
               "method" => "post",
               "action" => "#",
               "class" => "form",
          ));

          //username
          $this->add(array(
               "name" => "username",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "placeholder" => "username",
               ),
               "options" => array(
                    "label" => "Username",
                    "label_options" => array(
                         "disable_html_escape" => false,
                    ),
               ),
          ));


          //password
          $this->add(array(
               "name" => "password",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "placeholder" => "Password",
               ),
               "options" => array(
                    "label" => "Password",
                    "label_options" => array(
                         "disable_html_escape" => false,
                    ),
               ),
          ));


          //repassword
          $this->add(array(
               "name" => "repassword",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "placeholder" => "repassword",
               ),
               "options" => array(
                    "label" => "Re-password",
                    "label_options" => array(
                         "disable_html_escape" => false,
                    ),
               ),
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
               case "username" :
                    return "Username";
                    break;
               case "password" :
                    return "Password";
                    break;
               case "repassword" :
                    return "Re-password";
                    break;
          }
     }
}
?>