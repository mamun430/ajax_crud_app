<?php

class Car_model extends CI_model{
	public function create($formArray){
		
        $this->db->insert('car_models', $formArray); 
        $id = $this->db->insert_id(); 
	}

	// This method will retuen all records from car_models table
	public function all(){
		$result = $this->db
		            ->order_by('id', 'ASC')
		            ->get('car_models')
		            ->result_array();

		//SELECT * FROM car)models order by id ASC
		return $result;            
	}

	function getRow($id){
		$this->db->where('id', $id);
        $this->db->get('car_models');
	}
}
?>