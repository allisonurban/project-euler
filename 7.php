<?php

/**
 *	10001st prime
 *	By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, 
 *	we can see that the 6th prime is 13.
 *	What is the 10001st prime number?
 *
 *	real	0m5.252s
 *	user	0m5.091s
 *	sys		0m0.030s
 */

$max = 10001;
$primes = array(2);

function isPrime($x) {
	global $primes;
	foreach($primes as $p) {
		if ($x % $p === 0) return false;
	}
	return true;
}

$i=3;
while (count($primes) < $max) {
	if(isPrime($i)) $primes[] = $i;
	$i++;
}

print end($primes);

?>


