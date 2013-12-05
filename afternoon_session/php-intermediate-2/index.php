<?php

$header = '<table border="1"><thead>';
$body = '';
for($i = 1; $i < 10; $i++)
{
	if($i == 1)
	{
		$header .= '<tr><th></th>';
	}
	
	if($i % 2 != 0)
	{
		$body .= '<tr style="background:#eeeeee">';
	}
	else
	{
		$body .= '<tr>';	
	}

	for($j = 1; $j < 10; $j++)
	{
		if($i == 1)
		{
			$header .= '<th>'.$j.'</th>';
		}

		if($j == 1)
		{
			$body .= '<td style="font-weight:bold">'.$j*$i.'</td>';
		}
		
		$body .= '<td>'.$j*$i.'</td>';
	}

	$body .= '</tr>';

	if($i == 1)
	{
		$header .= '</tr></thead>';
	}
}

$body .= '<tbody></table>';
$table = $header.$body;
echo $table;

?>