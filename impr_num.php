<?php

/**
A program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".

# Requirements
* 1 if
* You can't use `else`, `else if` or ternary
*/

function impr_num($i=1){
	switch ($i) {
		case ($i%3==0) && ($i%5==0):
			echo "Linianos"; 
			break;
		case ($i%5==0):
			echo "IT"; 
			break;
		case ($i%3==0):
			echo "Linio"; 
			break;
		default:
			echo $i;
	}
	if($i==100) exit();
	echo " ";
	impr_num($i+1);
	 
}
impr_num();

?>