class MathDojo
	attr_accessor :sum
	
	def initialize
		@sum = 0
	end
	def add *val
		val.each do |v|
			if v.class == Array
				v.each{|a| @sum += a}
			else
				@sum += v
			end
		end
		self # => #<MathDojo:0x007feada844118 @sum=87>
	end
	def subtract *val
		val.each do |v|
			if v.class == Array
				v.each{|a| @sum -= a}
			else
				@sum -= v
			end
		end 
		self
	end
end

math = MathDojo.new # => #<MathDojo:0x007feada844118 @sum=0>
math.add(3, 5, 2, [44, 33]).subtract([4, 3], 6).sum # => 74
# math.add 3,4,5
# math.subtract 4, 4, 5
# math.add(3,4,5).subtract(3,7)
# ~> -:30:in `<main>': undefined method `result' for #<MathDojo:0x007fb23303ff10 @sum=74> (NoMethodError)