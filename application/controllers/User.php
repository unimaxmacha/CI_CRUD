<?php
	class User extends CI_Controller {

		public function __construct() {
			/* Call CI default constructor */
			parent::__construct();

			$this->load->helper('url');

			/* load model */
			$this->load->model('User_model');
		}

		/* Creating sign_up method */
		public function sign_Up()
		{
			$this->load->view('common/signUp');

			if($this->input->post('signUp')) {
				$data['name'] = $this->input->post('name');
				$data['username'] = $this->input->post('username');
				$data['email'] = $this->input->post('email');
				$data['password'] = $this->input->post('password');
				$data['phone'] = $this->input->post('phone');
				$data['gender'] = $this->input->post('gender');
				$data['address'] = $this->input->post('address');
				$data['country'] = $this->input->post('country');

				$user = $this->User_model->signUpUser($data);

				if($user > 0) {
					echo "Congrulation! you account created successfully.";
				} else {
					echo "Something error in signup record.";
				}

			}
		}
	}
?>