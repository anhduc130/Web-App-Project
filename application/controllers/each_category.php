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
		else if($category == 'career'){
			$data['category'] = 'Nghề nghiệp';
		}
		else if($category == 'fashion'){
			$data['category'] = 'Thời trang';
		}
		else if($category == 'others'){
			$data['category'] = 'Những events khác';
		}
		$this->load->view('each_category',$data);
	}
}
?>
