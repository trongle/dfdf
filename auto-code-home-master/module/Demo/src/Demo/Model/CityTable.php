<?php

namespace Demo\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class CityTable extends AbstractTableGateway{
	protected $_tableGateway;
	
	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listOptionOfSelect(){
		$result =   $this->_tableGateway->select(function(Select $select){
							$select->columns(array("city_name","city_id"))
								   ->order(array("ordering ASC"));
					})->toArray();
		$arr = [];

		if(!empty($result)){	
			foreach($result as $item){
				$arr[$item['city_id']] = $item['city_name'];
			}
		}

		return $arr;
	}

	public function listItem(){
		$result =   $this->_tableGateway->select(function(Select $select){
							$select->columns(array("city_name","city_id"))
								   ->order(array("ordering ASC"));
					})->toArray();

		return $result;
	}
        
                
                public function listItemById($id){
		$result =   $this->_tableGateway->select(function(Select $select) use($id){
							$select->columns(array("city_name","city_id"))
                                                                                                                            ->where(array("city_id" => $id ));
					})->current();

		return $result;
	}

}
?>