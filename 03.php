<?php

	//A Single Dimensional Array Of Key Value Pairs

	/*
		$arr = array('four', 'five', 'six');
				
				is equievalent to
		
		$arr array(
					0 => 'four',
					1 => 'five',
					2 => 'six'		Remember There is no comma at last element
				   );

				   By Default
		
		If you do not specify the keys it automatically assumes above said
		because the array index starts from 0.
	*/

	$arr = array(
					'four',
					'five',
					'six'
				);
	
	print_r($arr);

	echo "<br>Printing Keys:<br>";

	//Below Both fetches The Values
	foreach($arr AS $key)
	{
		echo "<br>Am Key ".$key;
	}

	echo "<br>";

	foreach($arr AS $key => $val)
	{
		echo "<br>Am Val ".$val;
	}

	echo "<br>";

	foreach($arr AS $key => $val)
	{
		echo "<br>Am Key Number ".$key." with value ".$val;
	}
?>
