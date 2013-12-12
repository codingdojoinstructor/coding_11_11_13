<?php
session_start();
require_once('conn.php');

if(isset($_SESSION['error']))
{
	foreach($_SESSION['error'] as $error)
	{
		echo '<p style="color:red">'.$error.'</p>';
	}
}
else if(isset($_SESSION['message']))
{
	echo '<p style="color:green">'.$_SESSION['message'].'</p>';
}
?>
<form action="process.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="news">
	<input type="text" name="first_name" placeholder="Enter First Name">
	<input type="text" name="last_name" placeholder="Enter Last Name">
	<input type="text" name="email" placeholder="Enter Email">
	<input type="file" name="file">
	<?php
	$sql = "SELECT id, name FROM topics";
	$result = mysqli_query($con, $sql);
	echo '<p>Select your topics of interest!</p>';
	while($row = mysqli_fetch_assoc($result))
	{
	?>
		<input type="checkbox" name="topics[]" value="<?=$row['id'] ?>"><?=$row['name'] ?></br>	
	<?php
	}

	?>
	<input type="submit" value="Sign Up!">
</form>
<h2>See Topics Other Students are Interested in!</h2>
<?php
$sql = "SELECT students.pic_url, CONCAT(students.first_name, ' ', students.last_name) AS full_name, students.email, topics.name AS topic
		FROM students
		LEFT JOIN topics_has_students ON students.id = topics_has_students.students_id
		LEFT JOIN topics ON topics_has_students.topics_id = topics.id
		ORDER BY topic ASC";

$result = mysqli_query($con, $sql);

$prev_topic = '';
while($row = mysqli_fetch_assoc($result))
{	
	if($prev_topic != $row['topic'])
	{
		echo '<h3>'.$row['topic'].'</h3>';
	}

	echo '<div style="display:inline-block; margin-left:10px;">';
	echo '<img width="200" src="'.$row['pic_url'].'" >';
	echo '<p>'.$row['full_name'].'</p>';
	echo '<p>'.$row['email'].'</p>';
	echo '</div>';

	$prev_topic = $row['topic'];
}


unset($_SESSION['error'], $_SESSION['message']);
?>
