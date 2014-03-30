# Multiples of 3 and 5
# If we list all the natural numbers below 10 that are multiples 
# of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
# Find the sum of all the multiples of 3 or 5 below 1000.
#
# real	0m0.044s
# user	0m0.032s
# sys		0m0.010s

sum = 0

for i in 1..999
  if i % 3 == 0 || i % 5 == 0
    sum += i
  end
end

puts "Answer: #{sum}"