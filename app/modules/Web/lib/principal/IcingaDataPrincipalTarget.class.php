<?php

class IcingaDataPrincipalTarget extends AppKitPrincipalTarget {
	protected $securityDefinition = array();
	protected $api_mapping_fields = array ();

	public function getApiMappingFields() {
		return $this->api_mapping_fields;
	}
	
	public function getSecurityDefinition() {
		return $this->securityDefinition;
	}
	
	protected function setApiMappingFields(array $a) {
		$this->api_mapping_fields = $a;
	}
	
	public function getApiMappingField($field) {
		if (array_key_exists($field, $this->api_mapping_fields)) {
			return $this->api_mapping_fields[$field];
		}
		
		return null;
	}
	
	public function getMapArray(array $arr) {
		$p = array ();
		foreach ($arr as $k=>$v) {
			$p[] = sprintf('${%s} = \'%s\'', $this->getApiMappingField($k), $v);
		}
		
		return '('. join(' AND ', $p). ')';
	}
	
	public function getCustomMap() {
		return false;
	}
	
}

?>