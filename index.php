<?php

	echo 'Hello world';

	function add($num1, $num2) {
		$result = $num1 + $num2;
		return $result;
	}

	$result = add(1,1);
	echo $result;

	function minus($num1, $num2) {
		$result = $num1 - $num2;
		return $result;
	}

	$result = minus(10,4);
	echo $result;

?>