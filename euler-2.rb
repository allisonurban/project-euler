# Each new term in the Fibonacci sequence is generated by adding
# the previous two terms. By starting with 1 and 2, the first 10
# terms will be:
#
# 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
#
# By considering the terms in the Fibonacci sequence whose values
# do not exceed four million, find the sum of the even-valued terms.

sum = 0
fib_1 = 0
fib_2 = 1

for i in 1..4000000
  
  # Each new term in the Fibonacci sequence is generated by adding 
  # the previous two terms. 
  if fib_1 + fib_2 == i
    
    # If term is even, add it to the running sum
    if i % 2 == 0
      sum += i
    end
    
    # Assign new values to fib vars.
    fib_1 = fib_2
    fib_2 = i
  end
end

puts "The sum is: #{sum}"
