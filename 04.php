<?php

	//A Single Dimensional Array Of Key Value Pairs

	/*	
		By Default:

		$arr array(
					0 => 'four',
					1 => 'five',
					2 => 'six'		Remember There is no comma at last element
				   );
		
		If you specify the keys yourself the index starts from your described first key.

		$arr = array(
					4 => 'four',
					5 => 'five',
					6 => 'six'
				);
	*/

	$arr = array(
					4 => 'four',
					5 => 'five',
					6 => 'six'
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
