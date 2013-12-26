<?php
require_once('Database.php');

class Process extends Database
{
	public function logout()
	{
		$_SESSION = array();
		session_destroy();
	}

	public function register($post)
	{
		foreach ($post as $name => $value) 
		{
			if(empty($value))
			{
				$_SESSION['error'][$name] = "sorry, " . $name . " cannot be blank";
			}
			else
			{
				switch ($name) {
					case 'first_name':
					case 'last_name':
						if(is_numeric($value))
						{
							$_SESSION['error'][$name] = $name . ' cannot contain numbers';
						}
					break;
					case 'email':
						if(!filter_var($value, FILTER_VALIDATE_EMAIL))
						{
							$_SESSION['error'][$name] = $name . ' is not a valid email';
						}
					break;
					case 'password':
						$password = $value;
						if(strlen($value) < 5)
						{
							$_SESSION['error'][$name] = $name . ' must be greater than 5 characters';
						}
					break;
					case 'confirm_password':
						if($password != $value)
						{
							$_SESSION['error'][$name] = 'Passwords do not match';
						}
					break;
				}
			}	
		}

		if(!isset($_SESSION['error']))
		{
			$_SESSION['success_message'] = "Congratulations you are now a member!";

			$salt = bin2hex(openssl_random_pseudo_bytes(22)); 
			$hash = crypt($post['password'], $salt);

			$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
					  VALUES('".$post['first_name']."', '".$post['last_name']."', '".$post['email']."', '".$hash."', NOW(), NOW())";
			mysqli_query($this->connection, $query);

			$user_id = mysqli_insert_id($this->connection);
			$_SESSION['user_id'] = $user_id;

			header('Location: home.php?id='.$user_id);
			exit;

		}
	}

	public function login($post)
	{
		if(empty($post['email']) || empty($post['password']))
		{
			$_SESSION['error']['message'] = "Email or Password cannot be blank";
		}
		else
		{
			$query = "SELECT id, password
					  FROM users
					  WHERE email = '".$post['email']."'";
			$result = mysqli_query($this->connection, $query);
			$row = mysqli_fetch_assoc($result);

			if(empty($row))
			{
				$_SESSION['error']['message'] = 'Could not find Email in database';
			}
			else
			{
				if(crypt($post['password'], $row['password']) != $row['password'])
				{
					$_SESSION['error']['message'] = 'Incorrect Password';
				}
				else
				{
					$_SESSION['user_id'] = $row['id'];
					header('Location: home.php?id='.$row['id']);
					exit;
				}
			}
		}
		header('Location: login.php');
		exit;
	}

}


?>