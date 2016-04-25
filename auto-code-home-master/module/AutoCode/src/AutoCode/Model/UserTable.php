<?php 

namespace AutoCode\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class UserTable extends AbstractTableGateway{
	protected $_tableGateway;
	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem($arrParam = null,$options = null){
		$result =   $this->_tableGateway->select(function(Select $select) use($arrParam){
			$select->columns(array( "id","name","email"))
				   ->order(array('ordering ASC'));
		})->toArray();
	
		return $result;
	}
        
    public function save($data,$option = null){
     
        if($option['task'] == 'add'){
                       
                $insertData = $this->setData($data,$option);
                
                $this->_tableGateway->insert($insertData);
        }
    }
                
                
                
    private function setData($data,$option){
        $insert = array();
        
        if($option['task'] == 'add'){
			$insert['password']     = md5($data['inputPassword']);
			$insert['created_date'] = time(); 
               
        }
        
		$insert['name']  = trim($data['inputName']);
		$insert['email'] = trim($data['inputEmail']);
                                
        return $insert;
    }
    
  

    public function deleteItem($id,$options = null){
        if(!empty($id)){
                $this->_tableGateway->delete(array("user_id"=>$id));
   	
                return true;
        }				

        return false;
	}

	public function getUserById($id,$options = null){
		return 	$this->_tableGateway->select(function(select $select) use($id){
	                $select->columns(array('fullname','gender','user_id','birthdate','email','phone','address','city_id','district_id','ward_id','user_role'))
	                            ->where(array("user_id"=>$id));
				})->current();
	}
}
?>