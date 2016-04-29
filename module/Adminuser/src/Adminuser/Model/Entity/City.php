<?php 

namespace Adminuser\Model\Entity;

class City
{

	public $city_id;
	public $city_name;

	public function exchangeArray($data){		
		$this->city_id   = (!empty($data['city_id']))     ? $data['city_id']      :"";
		$this->city_name = (!empty($data['city_name']))   ? $data['city_name']    :"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>