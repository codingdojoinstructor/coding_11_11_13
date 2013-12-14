<?php
	session_start();
	require_once('connection.php');

	function comment_form($message_id)
	{
		$comment_form = '<form action="process.php" method="post">
							<input type="hidden" name="action" value="post_comment">
							<input type="hidden" name="message_id" value="'.$message_id.'">
							<textarea name="content" cols="40" rows="2"></textarea>
							<input type="submit" value="Post Comment!">
						</form>';

		return $comment_form;		
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Wall E</title>
</head>
<body>
	<h1>The Wall - E</h1>
	<?php
		if(isset($_SESSION['error']))
		{
			foreach ($_SESSION['error'] as $error) {
				echo '<p style="color:red">'.$error.'</p>';
			}
		}
		else if(isset($_SESSION['success']))
		{
			echo '<p style="color:green">'.$_SESSION['success'].'</p>';
		}
	?>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="post_message">
		<textarea name="content" cols="30" rows="10"></textarea>
		<input type="submit" value="Post Message">
	</form>
	<?php
		$sql = "SELECT messages.id AS message_id, messages.content AS message_content, messages.created_at AS message_created, comments.created_at AS comment_created, comments.content AS comment_content, u1.file_path AS message_pic, CONCAT(u1.first_name, ' ', u1.last_name) AS message_full_name, u2.file_path AS comment_pic, CONCAT(u2.first_name, ' ', u2.last_name) AS comment_full_name
				FROM messages
				JOIN users AS u1 ON messages.user_id = u1.id
				LEFT JOIN comments ON messages.id = comments.message_id
				LEFT JOIN users AS u2 ON comments.user_id = u2.id
				ORDER BY messages.created_at DESC, comments.created_at ASC";

		$result = mysqli_query($connection, $sql);
		$num_rows = mysqli_num_rows($result);

		$prev_message = '';

		while($row = mysqli_fetch_assoc($result))
		{
			if($row['message_id'] != $prev_message)
			{
				if($prev_message)
				{
					echo comment_form($row['message_id']);
				}
				echo '<div>';
				echo '<h5><img width="50" src="'.$row['message_pic'].'">'.$row['message_full_name'].' wrote a message at '.date('D M j g:i:s:u', strtotime($row['message_created'])).'</h5>';
				echo '<p>'.$row['message_content'].'</p>';
				echo '</div>';
			}

			if($row['comment_content'] != '')
			{
				echo '<div>';
				echo '<h6><img width="25" src="'.$row['comment_pic'].'">'.$row['comment_full_name'].' commented at '.date('D M j g:i:s:u', strtotime($row['comment_created'])).'</h6>';
				echo '<p>'.$row['comment_content'].'</p>';
				echo '</div>';
			}
			?>
			<?php
			$prev_message = $row['message_id'];
		}

		if($num_rows)
		{
			echo comment_form($row['message_id']);
		}
	?>
</body>
</html>
<?php
unset($_SESSION['error'], $_SESSION['success']);
?>