## Ruby Lecture

#  1. variables
# a) setting variables
# b) using puts
# c) putting variables inside string
# - double vs single quotes
x = 5
# puts x

y = 6
# puts y

# puts x, y

string = "my string getting output"
# puts string

string_with_var = 'my string getting output and adding var #{y}'
# puts string_with_var

#  2. operations
# a) adding, mult, etc.

# z = x * y
# puts z
# puts x - y
# puts x + y
# puts x / y

#  3. if elsif
# a) standard if
# b) if at the end of line
# c) unless?

# if x == y
# 	puts "#{x} is equal to #{y}"
# elsif string != string_with_var
# 	puts "something else here"
# else
# 	puts "#{x} is NOT equal to #{y}"
# end

# puts "#{x} is equal to #{y}" unless x != y

#  4. iterators
# a) for
# b) each/

# for i in (0..25)
# 	puts i
# end

# (0..25).each{|i| puts i }

# (0..25).each do |i|
# 	puts i
# 	i = i +2
# 	puts i
# end

#  5 Everything in Ruby is an Object
# a) String
# b) Number
# c) introduce docs ruby-doc.org
# - method example
# - upcase, downcase, length etc.

puts 5.class

puts "string".class

# puts "lets uppercase this string".upcase
# puts "lets uppercase THIS string".downcase
# puts "lets uppercase this string".length

#  6 Arrays
# a) creating an array
# b) array methods
# - length, at, shuffle, next, to_s

my_array = [3, 5, 6, 7, 8]

# puts my_array.reverse!
# puts 'break'
# puts my_array

# puts my_array.shuffle
# puts my_array.next

puts my_array.to_s

# puts my_array

# my_array.each{|i| puts i+5 }













