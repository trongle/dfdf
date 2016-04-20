<?php 

namespace AutoCode\Model\Entity;

class Form
{

	public $id;
	public $name;
	public $content;
	public $status;
	public $user_id;
	public $created_date;
	public $description;


	public function exchangeArray($data){
		
		$this->id           = (!empty($data['id']))        		? $data['id']     :"";
		$this->name         = (!empty($data['name']))   		? $data['name']   :"";
		$this->description  = (!empty($data['description']))   	? $data['description']  :"";
		$this->created_date = (!empty($data['created_date']))   ? $data['created_date']  :"";
		$this->user_id      = (!empty($data['user_id']))   	  	? $data['user_id']  :"";
		$this->status       = (!empty($data['status']))   		? $data['status']  :"";
		$this->content      = (!empty($data['content']))   		? $data['content']  :"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>