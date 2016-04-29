<?php 

namespace Adminuser\Model\Entity;

class Group
{

	public $group_id;
	public $group_name;

	public function exchangeArray($data){
		
		$this->group_id   = (!empty($data['group_id']))     ? $data['group_id']      :"";
		$this->group_name = (!empty($data['group_name']))   ? $data['group_name']    :"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>