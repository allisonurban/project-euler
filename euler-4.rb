# A palindromic number reads the same both ways. The largest palindrome made from 
# the product of two 2-digit numbers is 9009 = 91 * 99. Find the largest palindrome
# made from the product of two 3-digit numbers.

highest_palindrome = 0

for i in 100..999
  for a in i..999
    
    product = i*a
    
    if product.to_s == product.to_s.reverse
      if product > highest_palindrome
        highest_palindrome = product
      end
    end
  
  end
end

puts "The highest palindrome is: #{highest_palindrome}"