<?php

namespace Demo\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class DistrictTable extends AbstractTableGateway{
	protected $_tableGateway;
	
	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem(){
		$result =   $this->_tableGateway->select(function(Select $select){
							$select->columns(array("district_name","district_id","city_id"))
								   ->order(array("ordering ASC"));
					})->toArray();

		return $result;
	}
        
                public function listItemById($id){
		$result =   $this->_tableGateway->select(function(Select $select) use($id){
							$select->columns(array("district_name","district_id","city_id"))
                                                                                                                            ->where(array("district_id" => $id ));
					})->current();

		return $result;
	}

}
?>