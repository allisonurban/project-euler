<?php

/**
 * 	2520 is the smallest number that can be divided by each of the 
 *	numbers from 1 to 10 without any remainder.
 *
 *	What is the smallest positive number that is evenly divisible 
 *	by all of the numbers from 1 to 20?
 */

$multiples = range(1,20);
$prime_factors = array();

foreach($multiples as $m) {
	if (isPrime($m)) {
		$prime_factors[$m] += 1;
	} else {
		factor($m);
	}
}

print findAnswer();


function isPrime($x) {
	for($i=2; $i<=sqrt($x); $i++) {
		if ($x % $i === 0) return false;
	}
	return true;
}

function isDivisible($x, $y) {
	return ($x % $y === 0);
}

function factor($x) {
	global $prime_factors;
	foreach($prime_factors as $prime => $count) {
		if ($prime === 1) continue;

		if (isDivisible($x, $prime)) {
			$tmp_count = 0;
			while(isDivisible($x, $prime)) {
				$x /= $prime;
				$tmp_count++;
			}
			if ($tmp_count > $prime_factors[$prime]) $prime_factors[$prime] = $tmp_count;
		} 
	}
}

function findAnswer() {
	global $prime_factors;
	$total = 1;
	foreach($prime_factors as $prime => $count) {
		$total *= pow($prime, $count);
	}
	return $total;
}



?>