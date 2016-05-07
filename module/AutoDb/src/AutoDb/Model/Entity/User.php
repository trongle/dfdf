<?php 

namespace AutoCode\Model\Entity;

class User
{

	public $id;
	public $name;
	public $email;
	public $password;

	public function exchangeArray($data){
		
		$this->id    = (!empty($data['id']))        ? $data['id']     :"";
		$this->name  = (!empty($data['name']))   	? $data['name']   :"";
		$this->email = (!empty($data['email']))   	? $data['email']  :"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>