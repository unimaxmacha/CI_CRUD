<?php
	
	class RegisterEmployee extends CI_Controller {

		public function __construct()
		{
			// call codeIgniter's default Constructor
			parent::__construct();

			//load database library manually
			$this->load->database();

			//load helper url library
			$this->load->helper('url');

			//load EmployeeModel
			$this->load->model('EmployeeModel');

		}


		public function registerEmployee()
		{
			//load registration view form
			$this->load->view('emp/registerEmployee');

			//check submit button
			if($this->input->post('save'))
			{
				//get form's data and store in local variable
				$data['first_name'] = $this->input->post('first_name');
				$data['last_name'] = $this->input->post('last_name');
				$data['email'] = $this->input->post('email');
				$data['mobile'] = $this->input->post('mobile');

				//call saverecords method of EmployeeModel and pass variables as parameter
				$this->EmployeeModel->saveEmpRecords($data);
				redirect('registerEmployee/listEmployee');

			}
		}


		public function listEmployee()
		{
			$data['empData'] = $this->EmployeeModel->listAllEmployeeRecords();
			$this->load->view('emp/listEmployee', $data);
		}


		public function viewEmployeeDetail()
		{
			$id = $this->input->get('id');
			$data['showEmpDetail'] = $this->EmployeeModel->displayrecordsById($id);

			$this->load->view('emp/viewEmployee', $data);
		}


		public function updateEmployeeDetail()
		{
			$id=$this->input->get('id');
			$data['empDetail'] = $this->EmployeeModel->displayrecordsById($id);

			$this->load->view('emp/updateEmployee', $data);

			if($this->input->post('update'))
			{
				$firstname = $this->input->post('fname');
				$lastname = $this->input->post('lname');
				$email = $this->input->post('email');
				$mobile = $this->input->post('mobile');

				$this->EmployeeModel->editEmployeeDetail($firstname, $lastname, $email, $mobile, $id);
				redirect('registerEmployee/listEmployee');
			}
		}
		

		public function delecteEmpRecord()
		{
			$id = $this->input->get('id');
			$this->EmployeeModel->deleteEmployeeRecord($id);
			redirect('registerEmployee/listEmployee');
		}
	}
?>