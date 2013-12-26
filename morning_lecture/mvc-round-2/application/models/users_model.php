<?php

class Users_model extends CI_Model {

	public function get_users()
	{
		$sql = "SELECT * FROM users";
		$query = $this->db->query($sql);

		foreach($query->result() as $row)
		{
			$data[] = $row;
		}

		return $data;
	}

	public function get_user($id)
	{
		$data = '';

		$sql = "SELECT * FROM users WHERE id = ?";
		$query = $this->db->query($sql, array($id));
		if($query->num_rows() > 0)
		{
			$data = $query->row();
		}

		return $data;
	}
}

?>