<?php
	class EmployeeModel extends CI_Model {

		function saveEmpRecords($data)
		{
			//$query = "INSERT INTO employee VALUES('$fname', '$lname', '$email', '$mobile')";
			//$this->db->query($query);
			$this->db->insert('employee', $data);
			return $this->db->insert_id();

		}
		

		function listAllEmployeeRecords()
		{
			//$query = $this->db->query("SElECT * FROM employee");
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('employee');
			return $query->result();
		}


		function displayrecordsById($id)
		{
			//$query=$this->db->query("select * from users where user_id='".$id."'");
			//return $query->result();
			$query=$this->db->query("SELECT * FROM employee WHERE id='".$id."'");
			return $query->result();
		}


		function editEmployeeDetail($firstname, $lastname, $email, $mobile, $id)
		{

			$this->db->where('id', $id);
			$this->db->update('employee',array('first_name'=>$firstname, 'last_name'=>$lastname, 'email'=>$email, 'mobile'=>$mobile));
			if($update)
			{
				return true;
			} else {
				return false;
			}
		}


		function deleteEmployeeRecord($id)
		{
			//$this->db->query("DELETE FROM employee WHERE id='".$id."'");
			$this->db->where('id', $id);
			$this->db->delete('employee');
		}
	}
?>