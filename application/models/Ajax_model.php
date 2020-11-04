<?php
	class Ajax_model extends CI_Model{

		public function saveData($data)
		{
			$this->load->database();
			if($this->db->insert('student', $data))
			{
				return 1;
			} else {
				return 0;
			}
		}
	}
?>