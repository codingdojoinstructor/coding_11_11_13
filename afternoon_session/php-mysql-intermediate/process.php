<?php
session_start();
require_once('conn.php');

if(isset($_POST['action']) && $_POST['action'] == 'news')
{
	foreach ($_POST as $name => $value)
	{
		$better_name = str_replace('_', ' ', $name);
		$better_name = ucwords($better_name);
		
		if($name == 'topics')
			continue;
		if(empty($value))
		{
			$_SESSION['error'][$name] = $better_name . ' cannot be blank';
		}
		else
		{
			if($name == 'email')
			{
				if(!filter_var($value, FILTER_VALIDATE_EMAIL))
				{
					$_SESSION['error'][$name] = 'Email is incorrect';
				}
			}	
		}
	}

	if ($_FILES["file"]["error"] > 0)
	{
		$_SESSION['error']['file'] = "Error on file upload Return Code: " . $_FILES["file"]["error"];
	}
	else
	{    
		$directory = "upload/";
		$file_name = $_FILES["file"]["name"];
		$file_path = $directory . $file_name;
		if (file_exists($file_path))
		{
			$_SESSSION['error']['file'] = $file_name . " already exists. ";
		}
		else
		{
			if(!move_uploaded_file($_FILES["file"]["tmp_name"], $file_path))
			{
				$_SESSION['error']['message'] = $file_name." could not be saved";
			}
		}
	}

	if(!isset($_SESSION['error']))
	{
		$sql = "INSERT INTO students (first_name, last_name, email, pic_url, created_at, updated_at) VALUES('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$file_path."', NOW(), NOW())";
		mysqli_query($con, $sql);
		$user_id = mysqli_insert_id($con);

		if($user_id)
		{
			$sql = "INSERT INTO topics_has_students (topics_id, students_id) VALUES ";
			foreach($_POST['topics'] as $topic_id)
			{	
				$sql .= "(".$topic_id.", ".$user_id.")".(end($_POST['topics']) == $topic_id ? '' : ',');
			}

			mysqli_query($con, $sql);
			$topics_id = mysqli_insert_id($con);
			
			$_SESSION['message'] = 'You have successfully registered for our Newsletter!';
		}
		else
		{
			$_SESSION['error']['user'] = "Error in creating user";
		}	
	}

	header('Location: index.php');
}

?>