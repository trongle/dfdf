<?php

namespace Demo\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class WardTable extends AbstractTableGateway{
	protected $_tableGateway;
	
	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem(){
		$result =   $this->_tableGateway->select(function(Select $select){
							$select->columns(array("ward_name","ward_id","district_id"))
								   ->order(array("ordering ASC"));
					})->toArray();

		return $result;
	}
        
                public function listItemById($id){
		$result =   $this->_tableGateway->select(function(Select $select) use($id){
							$select->columns(array("ward_name","ward_id","district_id"))
                                   ->where(array("ward_id" => $id ));
					})->current();

		return $result;
	}

}
?>