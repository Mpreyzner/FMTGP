<?php

/*
 * Algorithms from
 * From Mathematics to Generic Programming
 * by 	Alexander A. Stepanov, Daniel E. Rose
 * written by me as an exercise
 */

/**
 * egyptian multiplication by addition algorithm
 * variables names suck but i dont intent do reuse it so
 * @param type $a
 * @param type $n
 * @return type int
 */
function egyptianMultiplication($a, $n) {
	//we could use bits here
	//ONE DAY :P
	$startValue = $a;
	if ($n == 1) {
		return $a;
	}

	$odd = $n % 2;

	if ($odd) {
		$n = $n - 1;
	}
	// $log2 = floor(log($n, 2));

	// for ($i = 0; $i < $log2; $i++) {
	// 	$n = $n / 2;
	// 	$a += $a;
	// }
	$i = 0;
	while ($n != 1) {
		$n = $n / 2;
		$a += $a;
		$i++;
	}

	if ($odd) {
		$a += $startValue;
	}
	return $a;
}