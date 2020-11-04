<?php
	class Employee extends CI_Controller {

		public function __construct(){
			/* Call CI default constructor */
			parent::__construct();

			$this->load->helper('url');
			/* load Model */
			$this->load->model('Employee_model');
		}


		/* Creating insert method */
		public function savedata()
		{
			/* load registration view form */
			$this->load->view('pages/employee/Create');

			/* Check submit button */
			if($this->input->post('create')) {
				$data['first_name'] = $this->input->post('first_name');
				$data['last_name'] = $this->input->post('last_name');
				$data['email'] = $this->input->post('email');

				$employee=$this->Employee_model->saveEmployee($data);

				if($employee>0) {
					//$data['fetchEmployee']=$this->Employee_model->display_allEmployee();
					//echo "Record Save Successfully";
					redirect('/employee/displayAllEmployee');
					// header('location:http://localhost/2020/ciTutorial/studentstutorial/employee/displayAllEmployee/');
				} else {
					echo "Insert Error!";
				}
			}
		}


		/* Creating displayAllEmployee method */
		public function displayAllEmployee()
		{
			$data['fetchEmployee']=$this->Employee_model->display_allEmployee();

			$this->load->view('pages/employee/list', $data);
		}


		/* Create updateEmployee method */
		public function updateEmployee()
		{
			$id = $this->input->get('id');
			$data['getEmpId'] = $this->Employee_model->get_EmployeeById($id);

			$this->load->view('pages/employee/update', $data);

			if($this->input->post('updateEmp'))
			{
				$first_name = $this->input->post('first_name');
				$last_name = $this->input->post('last_name');
				$email = $this->input->post('email');

				$this->Employee_model->update_EmployeeById($first_name, $last_name, $email, $id);
				//echo "Data updated successfully !";

				redirect('/employee/displayAllEmployee');
			}
		}

		/* create viewEmployee method to view employee details */
		public function viewEmployee() 
		{
			$id = $this->input->get('id');
			$data['getEmpId'] = $this->Employee_model->get_EmployeeById($id);

			$this->load->view('pages/employee/view', $data);
		}


		/* Create deleteEmployee method */
		public function deleteEmployee() 
		{
			$id = $this->input->get('id');
			$this->Employee_model->deleteEmployeeById($id);
			redirect('/employee/displayAllEmployee');
		}

	}

?>