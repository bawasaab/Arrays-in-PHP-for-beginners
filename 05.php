<?php
	
	//Multidimentional Array

	/*
		The keys should be unique otherwise they would be overwrite
		
		consider following example:
		$arr = array(
					'male' => array(
										'husband' => 'ram',
										'husband' => 'shiv',
										'husband' => 'vishnu'
							  		),
					'female' => array(
										'wife' => 'sita',
										'wife' => 'parvati',
										'wife' => 'laxmi'
								    ),
				);

		output:
		Array ( 
				[male] => Array (
								 	[husband] => vishnu 
								) 
				[female] => Array (
									[wife] => laxmi 
								  ) 
			  ) 

		you see the ram, shiv, sita, parvati are overwrite with vishnu and laxmi
	*/

	$arr = array(
					'male' => array(
										'husband1' => 'ram',
										'husband2' => 'shiv',
										'husband3' => 'vishnu'
							  		),
					'female' => array(
										'wife1' => 'sita',
										'wife2' => 'parvati',
										'wife3' => 'laxmi'
								    ),
				);

	print_r($arr);

	/*
		Notice: Array to string conversion in C:\xampp\htdocs\arr\05.php on line 61
		because according to above array 
			the key is male
				and
			the value is array
	
	//Loop Through
	foreach($arr AS $key => $val)
	{
		echo "<br>Key is ".$key;
		echo "<br>Val is ".$val;
	}

		So to overcome it we have to lopp through the array using nested foreach
	*/

	foreach($arr AS $key => $val)
	{
		foreach($val AS $k => $v)
		{
			echo "<br>The Key is ".$k;
			echo "<br>The value is ".$v;
			echo "<br>";
		}
	}

	/*
		In following array
		1. The $arr and $val are array
		2. The $key is male or female
		3. The $k is husband1, husband2, husband3, or wife1, wife2, wife3
		4. The $v is ram, shiv, vishnu, sita, parvati, laxmi
	*/

		$husband = '';
		$wife = '';
		$j = 0;
			foreach($arr AS $key => $val)
			{
				foreach($val AS $k => $v)
				{
					if($key == 'male')
					{
						$husband[] = $v;
						$j += 1;
					}
					else
					{
						$wife[] = $v;
					}
				}
			}

			//print_r($h);
			//print_r($w);
			
			for($i = 0; $i < $j; $i++)
			{
				echo "<br>".$husband[$i]." is husband of ".$wife[$i];
			}
?>
