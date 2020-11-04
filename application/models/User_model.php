<?php
	class User_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}


		function signUpUser($data)
		{
			$this->db->insert('ci_users', $data);
			return $this->db->insert_id();
		}
	}
?>