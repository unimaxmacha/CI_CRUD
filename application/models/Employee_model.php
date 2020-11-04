<?php
	class Employee_model extends CI_Model {

		public function __construct()
		{
			/* load database library manually */
			$this->load->database();
		}

		/* create insert function */
		function saveEmployee($data) 
		{
			$this->db->insert('employee', $data);
			return $this->db->insert_id();
		}


		/* create fetch function of employee */
		function display_allEmployee()
		{
			$query = $this->db->query("SELECT * FROM employee");
			//$query = $this->db->get('employee');
            return $query->result_array();
		}


		/* create get_EmployeeById function to update employee */
		function get_EmployeeById($id)
		{
			$query = $this->db->query("SELECT * FROM employee WHERE id = '".$id."'");
			return $query->result_array();
		}


		/* create update_EmployeeById funcion for employee update */
		function update_EmployeeById($first_name, $last_name, $email, $id) 
		{
			/**
			$query = $this->db->query("UPDATE employee SET 
				first_name = '$first_name',
				last_name = '$last_name',
				email = '$email'
				WHERE id = '$id'
			");
			*/
			$this->db->where('id', $id);
			$this->db->update('employee', array('first_name'=>$first_name, 'last_name'=>$last_name, 'email'=>$email));
		}


		/* create deleteEmployeeByID function to delete employee record */
		function deleteEmployeeById($id)
		{
			//$this->db->query("DELETE FROM employee WHERE id='".$id."'");
			$this->db->where('id', $id);
			$this->db->delete('employee');
		}
	}
?>