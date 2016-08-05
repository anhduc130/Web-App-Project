<?php

class Each_category extends CI_Controller {

	public function index($category)
	{
		if($category == 'technology'){
			$data['category'] = 'Công nghệ';
		}
		else if($category == 'education'){
			$data['category'] = 'Giáo dục';
		}
		$this->load->view('each_category',$data);
	}
}
?>
