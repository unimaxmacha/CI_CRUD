<?php
	class MySite extends CI_Controller {

		public function index()
		{
			$data = array(
		        'title' => 'ようこそ',
		        'heading' => 'This is heading of the page.',
		        'message' => 'ページ内容はここから開始すると思います。'
			);

			//$this->load->view('common/header');
			$this->load->view('pages/about', $data);
			//$this->load->view('common/footer');
		}
	}
?>


