<?php

/**
 *	Sum square difference
 *	The sum of the squares of the first ten natural numbers is,
 *	1^2 + 2^2 + ... + 10^2 = 385
 *	The square of the sum of the first ten natural numbers is,
 *	(1 + 2 + ... + 10)^2 = 55^2 = 3025
 *	Hence the difference between the sum of the squares of the first ten 
 *	natural numbers and the square of the sum is 3025 − 385 = 2640.
 *	Find the difference between the sum of the squares of the first one 
 *	hundred natural numbers and the square of the sum.
 *
 *	real	0m0.076s
 *	user	0m0.049s
 *	sys	0m0.017s
 */

$numbers = range(1,100);

function sumOfSquares($numbers) {
	$sum = 0;
	foreach ($numbers as $n) $sum += pow($n,2);
	return $sum;
}

function squareOfSums($numbers) {
	$sum = 0;
	foreach ($numbers as $n) $sum += $n;
	return pow($sum,2);
}

print "Answer: " . (squareOfSums($numbers) - sumOfSquares($numbers)) . "\n";

?>