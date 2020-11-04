<?php
	class Upload extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}


		public function index()
		{
			$this->load->view('fileupload/uploadFile', array('error' => ' '));
		}


		public function do_upload()
		{
			$config['upload_path'] 		= './uploads/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 2000;
			$config['max_width']		= 2048;
			$config['max_height']		= 1024;

			$this->load->library('upload', $config);

			if( !$this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('fileupload/uploadFile', $error);
			} 
			else {
				$data = array('upload_data' => $this->upload->data());
				//$this->load->view('fileupload/uploadSuccess', $data);
				echo "file successfully uploaded";
			}
		}
	}
?>