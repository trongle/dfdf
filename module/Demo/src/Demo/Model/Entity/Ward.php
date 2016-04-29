<?php

namespace Demo\Model\Entity;

class Ward
{

	public $ward_id;
	public $ward_name;
                public $district_id;

	public function exchangeArray($data){		
		$this->ward_id   = (!empty($data['ward_id']))     ? $data['ward_id']      :"";
		$this->ward_name = (!empty($data['ward_name']))   ? $data['ward_name']    :"";
                                $this->district_id = (!empty($data['district_id']))   ? $data['district_id']    :"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>