<?php
/**
* 
*/
class Each_category_model extends CI_Model{
	public function connectEventsDB($category){
		# code...
		$query = "SELECT event_id, title, location, image_link, event_date FROM eventsDescription WHERE event_category = "."'".$category."'";
		$data = $this->db->query($query);
		if($data->result_array() != NULL && $data->num_rows() > 0){
			return $data->result_array();
		}
		else 
			return $data->result_array(); 
	}
}
?>