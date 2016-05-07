<?php 
namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class CityController extends AbstractActionController{
	public function indexAction(){
	
		if($this->request->isXmlHttpRequest()){
			$tableCity     =  $this->getServiceLocator()->get("CityTable");
			$tableDistrict =  $this->getServiceLocator()->get("DistrictTable");
			$tableWard     =  $this->getServiceLocator()->get("WardTable");
			
			$listCity     = $tableCity->listItem();
			$listDistrict = $tableDistrict->listItem();
			$listWard     = $tableWard->listItem();
			
			return new JsonModel([
				'listCity'     => $listCity,
				'listDistrict' => $listDistrict,
				'listWard'     => $listWard
			]);
		}

		echo "Not permission";

		return $this->response;	
	}	

}
?>