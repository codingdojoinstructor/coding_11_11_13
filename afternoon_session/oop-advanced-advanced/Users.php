<?php
require_once('Database.php');

class Users extends Database
{
	public $id;

	public function __construct($id)
	{
		parent::__construct();

		$this->id = $id;
	}

	public function get_user()
	{
		$sql = "SELECT first_name, email FROM users WHERE id = ".$this->id;
		$query = mysqli_query($this->connection, $sql);

		return mysqli_fetch_assoc($query);
	}

	public function list_users()
	{
		$sql = "SELECT CONCAT(users.first_name, ' ', users.last_name) AS full_name, users.email, users.id, friends.user_id AS friend
				FROM users
				LEFT JOIN friends ON friends.friend_id = users.id AND friends.user_id = ".$this->id."
				WHERE users.id != ".$this->id;


		$query = mysqli_query($this->connection, $sql);

		while($row = mysqli_fetch_assoc($query))
		{
			$data[] = $row;
		}

		return $data;
	}

	public function show_friends($user_id)
	{
		$data = false;

		$sql = "SELECT CONCAT(friend.first_name, ' ', friend.last_name) AS full_name, friend.email
				FROM users
				JOIN friends ON users.id = friends.user_id
				JOIN users AS friend ON friend.id = friends.friend_id
				WHERE friends.user_id = ".$user_id;
		$query = mysqli_query($this->connection, $sql);
		while($row = mysqli_fetch_assoc($query))
		{
			$data[] = $row;
		}

		return $data;
	}

	public function check_friend($user_id, $friend_id)
	{
		$sql = "SELECT * FROM friends WHERE user_id = ".$user_id." AND friend_id = ".$friend_id;
		$query = mysqli_query($this->connection, $sql);
		$row = mysqli_fetch_assoc($query);
		$friend = empty($row);

		return $friend;
	}

	public function add_friend($user_id, $friend_id)
	{
		$new_friend = $this->check_friend($user_id, $friend_id);

		if($new_friend)
		{
			$sql = "INSERT INTO friends (user_id, friend_id) VALUES(".$user_id.", ".$friend_id."), (".$friend_id.", ".$user_id.")";
			$query = mysqli_query($this->connection, $sql);	
		}
	}
}

?>