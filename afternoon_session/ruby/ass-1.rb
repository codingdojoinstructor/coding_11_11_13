puts "Enter the first number"
first_number = gets.chomp.to_i # => 72 # !> assigned but unused variable - first_number
# puts first_number
puts "Enter the second number"
second_number = gets.chomp.to_i # => 32 # !> assigned but unused variable - second_number
# puts second_number
operations = ['Multiplication', 'Division', 'Subtraction', 'Addition']
operation = rand(0..3)
# puts operation
case operations[operation]
	when 'Multiplication'
		answer = first_number * second_number
	when 'Division'
		answer = first_number / second_number
	when 'Subtraction'
		answer = first_number - second_number
	when 'Addition'
		answer = first_number + second_number
end

puts "the answer is #{answer}"
puts "the operation is #{operations[operation]}"