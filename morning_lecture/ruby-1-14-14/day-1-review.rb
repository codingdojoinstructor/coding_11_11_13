#  Ruby Review   
#    
#
#
### Strings ###

"I belong to the string class".class # => String
"I can run the capitalize function".upcase # => "I CAN RUN THE CAPITALIZE FUNCTION"
"I can also be put into an array of words".split # => ["I", "can", "also", "be", "put", "into", "an", "array", "of", "words"]

### Numbers ###

4.class # => Fixnum
4.5.class # => Float

4.even? # => true
4.odd? # => false
4.6.to_i.odd?.class # => FalseClass

### Logical ###
prod = 0
x = 5
y = 5
prod = x*y  # => 25

if x == y
	puts "its magic"
elsif y > x
	puts "I don't get executed :("
end

# one liners
puts "horay we can do it all in one line!" if x == y
puts "I should always execute" unless y > x

result = if true
  "yep, it's true"
else 
  "nope, it's not true"
end

result # => "yep, it's true"

### Arrays ###

ary = [1,2,3]
ary.class # => Array

ary << 4
ary # => [1, 2, 3, 4]
ary.push 5 
ary # => [1, 2, 3, 4, 5]
ary.pop # => 5
ary # => [1, 2, 3, 4]
ary.first # => 1
ary.last # => 4
ary[4] = 8 
ary # => [1, 2, 3, 4, 8]
ary[4f] # => 8

# other useful functions
ary.insert 4, 7 # => [1, 2, 3, 4, 7, 8]
ary.index 8  # => 5
ary.shuffle! # => [1, 7, 3, 8, 2, 4]
ary # => [1, 7, 3, 8, 2, 4]
ary.sort # => [1, 2, 3, 4, 7, 8]
# >> I should always execute
# >> its magic
# >> horay we can do it all in one line!
# >> I should always execute