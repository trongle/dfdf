<?php 
namespace Adminuser\Model;

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
			$select->columns(array( "user_id","fullname","birthdate","gender","email","phone","address" ))
				   ->join(array("g" => "groups"),
				   		  "users.user_role = g.group_id",
				   		  array("group_name" => "group_name"),
				   		  $select::JOIN_LEFT
				   	);
		})->toArray();
	
		return $result;
	}
        
                public function save($data,$option = null){
                 
                        if($option['task'] == 'add'){
                                       
                                $insertData = $this->setData($data,$option);
                                
                                $this->_tableGateway->insert($insertData);
                        }
                        
                        if($option['task'] == 'edit'){
                           
                                $insertData = $this->setData($data,$option);
//                                echo "<pre>";
//                                print_r($insertData);
//                                echo "</pre>";exit();
                                $where = [
                                        'user_id' => $data['user_id']
                                ];
                                        
                                $this->_tableGateway->update($insertData,$where);
                        }
                }
                
                
                
                private function setData($data,$option){
                                $insert = array();
                                
                                
                                if($option['task'] == 'edit'){
                                        if(!empty($data['password'])){
                                                $insert['password'] = md5($data['password']);
                                                $insert['updated_date']    = time(); 
                                        }
                                }
                                
                                if($option['task'] == 'add'){
                                        $insert['password'] = md5($data['password']);
                                        $insert['created_date']    = time(); 
                                       
                                }
                                
                                $insert['fullname']   = trim($data['fullname']);
                                $insert['phone']      = (int)$data['phone'];
                                $insert['address']   =  trim($data['address']);
                                $insert['city_id']      = (int)$data['city_id'];
                                $insert['district_id'] = (int)$data['district_id'];
                                $insert['ward_id']   = (int)$data['ward_id'];
                                $insert['email']       = trim($data['email']);
                                $insert['user_role'] = implode(",", $data['role_list']);
                                $insert['is_actived']  = 1;             
                                $insert['gender']    = (int)$data['gender'];
                                $insert['birthdate'] =  $this->convertDate($data['birthdate']);
                                $insert['full_address'] = $this->getFullAddress($insert,$option);
                                                        
                                return $insert;
                }
                
                private function getFullAddress($insert,$option){
                        $objWard    = $option['tableWard']->listItemById($insert['ward_id']);
                        $objDistrict  = $option['tableDistrict']->listItemById($insert['district_id']);
                        $objCity       = $option['tableCity']->listItemById($insert['city_id']);
                        
                        return $insert['address'] . ',' . $objWard->ward_name . ', ' . $objDistrict->district_name . ', ' . $objCity->city_name;
                }
                
                private function convertDate($date){
                        list($day, $month, $year) = explode('/', $date);
                        return mktime(0, 0, 0, $month, $day, $year);
                }
                
                public function getUserById($id,$options = null){
		return 	$this->_tableGateway->select(function(select $select) use($id){
                                                                        $select->columns(array('fullname','gender','user_id','birthdate','email','phone','address','city_id','district_id','ward_id','user_role'))
                                                                                    ->where(array("user_id"=>$id));
			})->current();
	}
        
                public function deleteItem($id,$options = null){
                        if(!empty($id)){
                                $this->_tableGateway->delete(array("user_id"=>$id));
                   	
                                return true;
                        }				
		
                        return false;
	}
                
      
}
?>