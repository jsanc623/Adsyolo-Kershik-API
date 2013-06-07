<?php

echo "<center>";
pascalTriangle(1, 128);
echo "</center>";

function pascalTriangle($currentNumber = 1, $goalNumber = 10){
	if($currentNumber <= $goalNumber){
		if($currentNumber <= 1){
			echo $currentNumber . "<br>";
			pascalTriangle($currentNumber * 2, $goalNumber);
		} else {
			$middle = $currentNumber % 2 == 0 ? $currentNumber : pascalTriangle($currentNumber - 1, $goalNumber);
			$sides = str_repeat((string)1, $middle / 2);
			echo $sides . $middle . $sides . "<br>";
			pascalTriangle($middle * 2, $goalNumber);
		}
	}
}
