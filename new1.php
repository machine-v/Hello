<?php

	$width = 10;
	$heigh = 5;
	$arr = [];
	
	for ($i = 0; $i < $heigh; $i++)
	{
	$line = [];
		for ($j = 0; $width; $j++)
		{
		$line[] = rand(0,100);
		}
	$arr[] = $line;
	}
	
	echo $arr;
	
	?>