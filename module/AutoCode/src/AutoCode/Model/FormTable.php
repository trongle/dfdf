<?php 

namespace AutoCode\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class FormTable extends AbstractTableGateway{
	protected $_tableGateway;

	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem($arrParam = null,$options = null){
		$result =   $this->_tableGateway->select(function(Select $select) use($arrParam){
			$select->columns(array( "id","name","content","user_id","created_date","description","status","attribute"))
				   ->join(array("u"=>"users"),
				   		  "u.id = forms.user_id",
				   		  array("username"=>"name"),
				   		  "left"
				   	)
				   ->order(array('forms.created_date ASC'));
		})->toArray();
	
		return $result;
	}

	public function getItemById($id = null,$options = null){
		if(!empty($id)){
			$result =   $this->_tableGateway->select(function(Select $select) use($id){
				$select->columns(array( "id","name","content","user_id","created_date","description","attribute","status"))
					   ->where->equalTo("id",$id);
			})->current();

			return $result;
		}
	}

	public function removeItem($id = null,$options = null){
		if(!empty($id)){
			$result =   $this->_tableGateway->delete(array('id' => $id ));

			return true;
		}

		return false;
	}

	public function saveForm($data = null,$options = null){
		if(!empty($data)){
			$insertData = $this->setData($data,$options);

			$this->_tableGateway->insert($insertData);

			return $this->_tableGateway->lastInsertValue;
		}
	}

	public function updateForm($data,$options = null){
		if(!empty($data)){

			$data['element'] = $this->setSerializeString($data['element']);
			$arr = unserialize($data['element']);

			//filter htmlTag
			foreach ($arr as $key => $value) {
				 $value['option']['nameLabel'] = htmlentities($value['option']['nameLabel']);
			}

			$insertData     = $this->setData($data,$options);
					
			$this->_tableGateway->update($insertData,array("id" => $data['formId']));
		}			
		
		return $this->_tableGateway->getLastInsertValue();
	}

	private function setData($data,$options = null){
		$insert    = array();
		$attribute = array();

        if($options['type'] == 'draf'){

			$attribute['id']     = $data['idForm'];
			$attribute['class']  = $data['classForm'];
			$attribute['method'] = $data['methodForm'];
			$attribute['action'] = $data['actionForm'];
			$attribute['entype'] = $data['entypeForm'];
			$attribute['other']  = $data['otherForm'];

			// data will add to database
			$insert['name']         = strip_tags($data['nameForm']);
			$insert['created_date'] = time(); 
			$insert['attribute'] 	= serialize($attribute); 
			$insert['status']       = 'draf';
			$insert['user_id']      = (int)($data['user_id']);
        }

        if($options['type'] == 'addElement'){
       
        	$attribute['id']     = $data[0]['idForm'];
			$attribute['class']  = $data[0]['classForm'];
			$attribute['method'] = $data[0]['methodForm'];
			$attribute['action'] = $data[0]['actionForm'];
			$attribute['entype'] = $data[0]['entypeForm'];
			$attribute['other']  = $data[0]['otherForm'];

			// data will add to database
			$insert['name']      = strip_tags($data[0]['nameForm']);
			$insert['content']   = trim($data['element']);
			$insert['attribute'] = serialize($attribute); 
			$insert['status']    = 'active';
        }
                  
        return $insert;
    }

    private function setSerializeString($elementString){
		$element = array();
		parse_str($elementString,$element);
		echo "<pre>";
		print_r($element);
		echo "</pre>";
		exit();

		foreach($element as $name => $ele){

			if(@key_exists("validateName",$ele)){
				$element[$name]['validate']['name']   = $ele['validateName'] ;
				unset($element[$name]['validateName']);
			}

			if(@key_exists("messageError",$ele)){
				foreach($ele['messageError'] as $validateName => $validateOption){
					foreach($validateOption as $constError => $messageError){
						parse_str($constError,$realConstError);	
						parse_str($messageError,$realMessageError);
		
						unset($ele['messageError'][$validateName][$constError]);
						$element[$name]['validate']['message'][$validateName][key($realConstError)] = str_replace("_"," ",key($realMessageError));
					}
				}
				unset($element[$name]['messageError']);
			}

			if(@key_exists("validateBreakChain",$ele)){
				$element[$name]['validate']['breakchain']   = $ele['validateBreakChain'] ;
				unset($element[$name]['validateBreakChain']);
			}

			if(@key_exists("validateOption",$ele)){
				// if(array_key_exists("regex",$ele["validateOption"])){
				// 	if(array_key_exists("pattern",$ele["validateOption"]["regex"])){
				// 		echo $ele["validateOption"]["regex"]["pattern"] ;
				// 		// parse_str($ele["validateOption"]["regex"]["pattern"],$ele["validateOption"]["regex"]["pattern"]);
				// 		$ele["validateOption"]["regex"]["pattern"] = utf8_decode($ele["validateOption"]["regex"]["pattern"]);
				// 	}	
				// }
				$element[$name]['validate']['option']   = $ele['validateOption'] ;
				unset($element[$name]['validateOption']);
			}

			if(@key_exists("filterName",$ele)){
				$element[$name]['filter']['name']   = $ele['filterName'] ;
				unset($element[$name]['filterName']);
			}

			if(@key_exists("filterOption",$ele)){
				$element[$name]['filter']['option']   = $ele['filterOption'] ;
				unset($element[$name]['filterOption']);
			}
			
		}
		echo "<pre>";
		print_r($element);
		echo "</pre>";
		exit();
		

		unset($element['filterElement']);
		unset($element['validateElement']);
		unset($element['nameElement']);

		return serialize($element);
	}
           
}
?>