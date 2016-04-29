<?php

namespace Demo\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class GroupTable extends AbstractTableGateway{
	protected $_tableGateway;
	
	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}
        
                public function listItem($arrParam = null,$options = null){
		$result =   $this->_tableGateway->select(function(Select $select) {
			$select->columns(array( "group_id","group_name"))
                                                            ->where(array('status' => 1));  
		});
	
		return $result;
	}
        
                public function itemInSelectBox($arrParam = null,$options = null){   
                        $result    = $this->listItem();
                
                        if(!empty($result)){
                                foreach($result as $row){
                                        $item[$row->group_id] = $row->group_name;
                                }
                        }
	
                        return $item;
	}
}
?>