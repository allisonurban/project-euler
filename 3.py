#	Largest prime factor
#	The prime factors of 13195 are 5, 7, 13 and 29.
#	What is the largest prime factor of the number 600851475143 ?

import math

n = 600851475143
factors = []

def get_factors(n):
	global factors
	for i in range(2, int(math.ceil(math.sqrt(n)))):
		if n % i == 0:
			factors.append(i)
	return factors

def find_largest_prime():
	global factors
	for f in factors:
		x = factors.pop()
		if is_prime(x):
			return x

def is_prime(x):
	for f in factors:
		if x % f == 0:
			return False
	return True

factors = get_factors(n)
largest = find_largest_prime()
print "Anser: %s" % largest