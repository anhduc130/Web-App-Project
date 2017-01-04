<?php

class Each_category extends CI_Controller {

	public function index($category)
	{
		$data['category'] = $category;
		if($category == 'technology'){
			$data['displayCategory'] = 'Công nghệ';
		}
		else if($category == 'education'){
			$data['displayCategory'] = 'Giáo dục';
		}
		else if($category == 'career'){
			$data['displayCategory'] = 'Nghề nghiệp';
		}
		else if($category == 'fashion'){
			$data['displayCategory'] = 'Thời trang';
		}
		else if($category == 'others'){
			$data['displayCategory'] = 'Những events khác';
		}
		$this->load->view('each_category',$data);
	}

	/**
	*	
	*/
	public function loadEvents($category){
		$data_array = array();
		$this->load->model('each_category_model');
		$data_array = $this->each_category_model->connectEventsDB($category);
		echo json_encode($data_array);
	}
}
?>
