<?php

/**
 * 	Largest prime factor
 * 	The prime factors of 13195 are 5, 7, 13 and 29.
 *	What is the largest prime factor of the number 600851475143 ?
 *
 *	real	0m0.501s
 *	user	0m0.479s
 *	sys		0m0.016s
 */

$n = 600851475143;

function getFactors() {
	global $n;
	for ($i=2; $i<=ceil(sqrt($n)); $i++) {
		if ($n % $i === 0) $factors[] = $i;
	}
	return $factors;
}

function findLargestPrime() {
	global $factors;
	foreach ($factors as $f) {
		$x = array_pop($factors);
		if (isPrime($x)) return $x;
	}
}

function isPrime($x) {
	global $factors;
	foreach ($factors as $f) {
		if ($x % $f === 0) return false;
	}
	return true;
}

$factors = getFactors();
$largest = findLargestPrime();
print "Answer: $largest"; 
	
?>