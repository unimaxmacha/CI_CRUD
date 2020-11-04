<?php
	class AjaxController extends CI_Controller {

		public function index()
		{
			$this->load->helper('url');
			$this->load->view('pages/ajaxexample/ajaxform');
		}


		public function savedata()
		{
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'course' => $this->input->post('course')
			);

			$this->load->model('Ajax_model');
			$result = $this->Ajax_model->saveData($data);
			if($result)
			{
				echo 1;
			} else
			{
				echo 0;
			}
		}
	}
?>