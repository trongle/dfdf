<?php 

namespace AutoCode\Model;

use AutoCode\Model\Entity\Form;
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
			if($options['type'] == 'addElement'){
				$data['element'] = $this->setSerializeString($data['element']);

				$insertData     = $this->setData($data,$options);
						
				$this->_tableGateway->update($insertData,array("id" => $data['formId']));
			}else if($options['type'] == 'changeName'){
				
				$options['oldName'] = $data['oldName'];
				$options['newName'] = $data['newName'];
				$data['element'] = $this->setSerializeString($data['element'],$options);

				$this->_tableGateway->update(array('content' => $data['element']),array("id" => $data['formId']));
			}
			
		}			
		
		return $this->_tableGateway->getLastInsertValue();
	}

	public function getFormById($id,$options = null){
		$result = '';

		if(!empty($id)){
			$result = $this->_tableGateway->select(function(Select $select) use($id){
				$select->columns(array("content","description","created_date","user_id","status","name","attribute"))
						->where->equalTo("id",$id);
			})->current();
		}

		return $result;
	}

	public function makeClone(Form $formCode = null,$options = null){
		if(!empty($formCode)){
			$formCode = $formCode->getArrayCopy();
			if(preg_match("#\(\d+\)#imU",$formCode['name'],$matches)){//khong phai ban clone dau tien
				preg_match("#\d+#m",$matches[0],$numberOfClone);//get 2 in (2)
				$formCode['name'] = str_replace($matches[0],"(" . ++$numberOfClone[0] . ")",$formCode['name'] );//repalce (1) => (2);
				
			}else{// la ban clone dau tien
				$formCode['name'] = $formCode['name']."(1)";
			}
			
			$this->_tableGateway->insert($formCode);

			return $this->_tableGateway->lastInsertValue;
		}
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

    private function setSerializeString($elementString,$options = null){
		$elementString = rawurldecode($elementString);
		parse_str($elementString,$element);  		

		 //xu ly rename
        foreach($element['renameInfo'] as $oldName => $newName){
            if(!empty($newName) && $newName != $oldName){// neu co doi ten 
                $element[$newName] = $element[$oldName];
                $element[$newName]['name'] = $newName;
                unset($element[$oldName]); //xoa element oldname
            }//end
        }

    	if($options['type'] == 'changeName'){
			$oldName                   = $options['oldName']; 
			$newName                   = $options['newName']; 
			$element[$newName]         = $element[$oldName];
			$element[$newName]['name'] = $newName;
			unset($element[$oldName]);
    	}
	
		foreach($element as $name => $ele){

			if(@key_exists("validateName",$ele)){
				$element[$name]['validate']['name']   = $ele['validateName'] ;
				unset($element[$name]['validateName']);
			}

			if(@key_exists("messageError",$ele)){
			
				$element[$name]['validate']['message'] = $ele['messageError'];
				unset($element[$name]['messageError']);
			}

			if(@key_exists("validateBreakChain",$ele)){
				$element[$name]['validate']['breakchain']   = $ele['validateBreakChain'] ;
				unset($element[$name]['validateBreakChain']);
			}

			if(@key_exists("validateOption",$ele)){
		
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

		unset($element['filterElement']);
		unset($element['validateElement']);
		unset($element['nameElement']);
		unset($element['renameInfo']);
		unset($element['convertInput']);

		return serialize($element);
	}
           
}
?>