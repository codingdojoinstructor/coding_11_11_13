<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Demo</title>
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script>
		$(function(){
			$('#message').submit(function(){
				$.post($(this).attr('action'),
					   $(this).serialize(),
					   function(data){
					   		if(typeof data.error !== 'undefined')
					   		{
					   			console.log(data.error.message);
					   		}
					   		else
					   		{
					   			$('#message').after('<p>'+data.message+'</p>');
					   			// console.log(data)
					   			// window.location.assign('success.php');
					   		}
					   }, "json");
				return false;
			});
			$('#message').submit();
		})
	</script>
</head>
<body>
	<form id="message" action="process.php" method="post">
		<input type="hidden" name="action" value="get_message">
		<input type="text" name="message">
		<input type="submit" value="Get Message!">
	</form>
</body>
</html>