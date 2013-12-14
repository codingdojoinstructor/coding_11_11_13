<?php
// var_dump($_POST);
// $animal = array('name' => 'Jason', 'hobbie' => 'getting wasted');
$data = array();
if(isset($_POST['action']) && $_POST['action'] == 'get_message')
{
	if(empty($_POST['message']))
	{
		$data['error']['message'] = 'Message cannot be blank';
	}
	else
	{
		$data['message'] = $_POST['message'];
	}
}
echo json_encode($data);

?>