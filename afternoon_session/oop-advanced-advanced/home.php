<?php
session_start();
require_once('Users.php');

if(!isset($_SESSION['user_id']))
{
	header('Location: login.php');
	exit;
}

$users = new Users($_GET['id']);
$user = $users->get_user();
if(isset($_GET['add_id']))
{
	$users->add_friend($_SESSION['user_id'], $_GET['add_id']);
}

$friends = $users->show_friends($_GET['id']);
$user_list = $users->list_users();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<a href="process_forms.php?logout=1">Logout</a>
	<p>Hello <?=$user['first_name'] ?>!</p>
	<p><?=$user['email'] ?></p>
			<?php
			if(!!$friends)
			{
			?>
	<h2>List of Friends</h2>
	<table>
		<thead>
			<th>Name</th>
			<th>Email</th>
		</thead>
		<tbody>
			<?php
				foreach($friends as $friend)
				{
					echo '<tr>';
					echo '<td>'.$friend['full_name'].'</td>';
					echo '<td>'.$friend['email'].'</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
		<?php
			}
		?>
	<h2>List of Users on Friend Finder</h2>
	<table>
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
				foreach($user_list as $user)
				{
					echo '<tr>';
					echo '<td>'.$user['full_name'].'</td>';
					echo '<td>'.$user['email'].'</td>';
					if($user['friend'])
					{
						echo '<td>Friend</td>';
					}
					else
					{
						echo '<td><a href="home.php?id='.$_SESSION['user_id'].'&add_id='.$user['id'].'">Add as Friend</a></td>';
					}
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</body>
</html>