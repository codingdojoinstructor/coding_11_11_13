class Student
	attr_accessor :name, :dojo_location, :belt_level

	def initialize name, dojo_location, belt_level
		@name = name
		@dojo_location = dojo_location
		@belt_level = belt_level		
	end
end

student1 = Student.new 'Jerry Rice', 'San Francisco', 'Gold and Red' # => #<Student:0x007fc964845528 @name="Jerry Rice", @dojo_location="San Francisco", @belt_level="Gold and Red">
student1.name # => "Jerry Rice"
student1.name = "Me"
student1.name # => "Me"