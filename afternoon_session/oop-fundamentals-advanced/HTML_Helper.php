<?php

class HTML_Helper
{
	
	public function print_table($rows)
	{
		echo '<table><thead><tr>';
		foreach($rows[0] as $field => $value)
		{
			$new_header = str_replace('_', ' ', $field);
			$new_header = ucwords($new_header);
			echo '<th>'.$new_header.'</th>';
		}
		echo '</tr></thead><tbody>';
		foreach($rows as $row)
		{
			echo '<tr>';
			foreach($row as $value)
			{
				
				echo '<td>'.$value.'</td>';
			}
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}

	public function print_select($options, $name)
	{
		echo '<select name="'.$name.'">';
		foreach($options as $opiton)
		{
			echo '<option value="'.$opiton.'">'.$opiton.'</option>';
		}
		echo '</select>';
	}
}

?>