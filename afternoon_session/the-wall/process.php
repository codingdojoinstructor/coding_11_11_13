<?php
session_start();
require_once('connection.php');

function logout()
{
	$_SESSION = array();
	session_destroy();
}

function register($connection, $post)
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
				case 'birthdate':
					$birthdate = explode('/',$value);
					if(!checkdate($birthdate[0], $birthdate[1], $birthdate[2]))
					{
						$_SESSION['error'][$name] = $name . ' is not a valid date';
					}
				break;
			}
		}	
	}

	if($_FILES['file']['error'] > 0)
	{
		$_SESSION['error']['file'] = "Error on file upload Return Code: ".$_FILES['file']['error'];
	}
	else
	{
		$directory = 'upload/';
		$file_name = $_FILES['file']['name'];
		$file_path = $directory.$file_name;
		if(file_exists($file_path))
		{
			$_SESSION['error']['file'] = $file_name.' already exists'; 
		}
		else
		{
			if(!move_uploaded_file($_FILES['file']['tmp_name'], $file_path))
			{
				$_SESSION['error']['file'] = $file_name." could not be saved";
			}
		}
	}

	if(!isset($_SESSION['error']))
	{
		$_SESSION['success_message'] = "Congratulations you are now a member!";

		$salt = bin2hex(openssl_random_pseudo_bytes(22)); 
		$hash = crypt($post['password'], $salt);

		$f_birthdate = $birthdate[2].'-'.$birthdate[0].'-'.$birthdate[1];
		$query = "INSERT INTO users (first_name, last_name, email, password, birthdate, file_path, created_at, updated_at)
				  VALUES('".$post['first_name']."', '".$post['last_name']."', '".$post['email']."', '".$hash."', '".$f_birthdate."', '".$file_path."', NOW(), NOW())";
		mysqli_query($connection, $query);

		$user_id = mysqli_insert_id($connection);
		$_SESSION['user_id'] = $user_id;

		header('Location: wall.php');
		exit;

	}
}

function login($connection, $post)
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
		$result = mysqli_query($connection, $query);
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
				header('Location: wall.php');
				exit;
			}
		}
	}
	header('Location: login.php');
	exit;
}

function post_message($connection, $post)
{
	if(empty($post['content']))
	{
		$_SESSION['error']['message'] = "You can't post a blank message!";
	}
	else
	{
		$sql = "INSERT INTO messages (user_id, content, created_at, updated_at) VALUES(".$_SESSION['user_id'].", '".$post['content']."', NOW(), NOW())";
		mysqli_query($connection, $sql);

		if(!mysqli_insert_id($connection))
		{
			$_SESSION['error']['message'] = "There was an error in posting your message";
		}
		else
		{
			$_SESSION['success'] = "Message posted successfully!";	
		}

	}

	header('Location: wall.php');
	exit;
}

function post_comment($connection, $post)
{
	if(empty($post['content']))
	{
		$_SESSION['error']['message'] = "You can't post a blank comment!";
	}
	else
	{
		$sql = "INSERT INTO comments (user_id, message_id, content, created_at, updated_at) VALUES(".$_SESSION['user_id'].", ".$post['message_id'].", '".$post['content']."', NOW(), NOW())";
		mysqli_query($connection, $sql);

		if(!mysqli_insert_id($connection))
		{
			$_SESSION['error']['message'] = "There was an error in posting your comment";
		}
		else
		{
			$_SESSION['success'] = "Comment posted successfully!";	
		}

	}

	header('Location: wall.php');
	exit;
}

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	register($connection, $_POST);
}
else if(isset($_POST['action']) && $_POST['action'] == 'login')
{
	login($connection, $_POST);
}
else if(isset($_POST['action']) && $_POST['action'] == 'post_message')
{
	post_message($connection, $_POST);
}
else if(isset($_POST['action']) && $_POST['action'] == 'post_comment')
{
	post_comment($connection, $_POST);
}
else if(isset($_GET['logout']))
{
	logout();
}

header('Location: index.php');

?>