<?php
	dehine('DUBUG', TRUE);
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


	// デバッグ用関数の定義
	function org_echo($val) {
		if (DEBUG) {
			echo $val;
			echo '<br>';
		}
	}

	function org_var_dump($val) {
		if (DEBUG) {
			echo '<pre>';
			var_dump($val);
			echo '<pre>';
		}
	}

?>