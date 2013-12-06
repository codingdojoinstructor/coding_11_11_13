<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		td{
			width: 25px;
			height: 25px;
		}
		.black{
			background: black;
		}
		.red{
			background: red;
		}
		table{
			border:50px solid;
		}
	</style>
</head>
<body>
<?php

function build_checkerboard($width, $height, $color)
{
	echo '<table style="border-collapse:collapse;">';
	for($i = 1; $i < $height; $i++)
	{
		echo '<tr>';
		for($j = 1; $j < $width; $j++)
		{
			if(($i+$j)%2 == 0)
			{
				$c = $color['offset'];
			}
			else
			{
				$c = $color['set'];
			}
				
			
			echo '<td style="background-color:'.$c.'"></td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}



build_checkerboard(10, 10, array('offset' => 'purple', 'set' => 'green'));

?>
</body>
</html>