<?php

class Each_category extends CI_Controller {

	public function index($category)
	{
		if($category == 'technology'){
			$data['category'] = 'Technology';
		}
		else if($category == 'education'){
			$data['category'] = 'Education';
		}
		else if($category == 'career'){
			$data['category'] = 'Career';
		}
		else if($category == 'fashion'){
			$data['category'] = 'Fashion';
		}
		else if($category == 'others'){
			$data['category'] = 'Other Events';
		}
		$this->load->view('each_category',$data);
	}
}
?>
