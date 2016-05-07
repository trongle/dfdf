<?php 

namespace AutoCode\Model\Entity;

class Filter
{

	public $id;
	public $name;
	public $description;
	public $content;
	public $html_code;
	public $ordering;
	public $status;


	public function exchangeArray($data){
		
		$this->id          = (!empty($data['id']))        		? $data['id']      		:"";
		$this->name        = (!empty($data['name']))   			? $data['name']    		:"";
		$this->description = (!empty($data['description']))   	? $data['description']  :"";
		$this->content     = (!empty($data['content']))   	    ? $data['content']     	:"";
		$this->html_code   = (!empty($data['html_code']))   	? $data['html_code']    :"";
		$this->ordering    = (!empty($data['ordering']))   	    ? $data['ordering']     :"";
		$this->status      = (!empty($data['status']))   		? $data['status'] 		:"";
	
	}	
	public function getArrayCopy(){
		$arr = get_object_vars($this);
		return $arr;
	}

}
?>