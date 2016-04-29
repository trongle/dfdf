<?php 

namespace Adminuser\Model\Entity;

class District
{

	public $district_id;
	public $district_name;
                public  $city_id;

        public function exchangeArray($data){		
		$this->district_id   = (!empty($data['district_id']))     ? $data['district_id']      :"";
		$this->district_name = (!empty($data['district_name']))   ? $data['district_name']    :"";
                                $this->city_id = (!empty($data['city_id']))   ? $data['city_id']    :"";
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>