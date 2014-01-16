### Methods ###

def write_str str
  str
end

def write_two_strs str1, str2
  return str1, str2
end

def write_a_lot *str
  str.class # => Array
end

write_str "I love ruby" # => "I love ruby"
write_str "Ruby is the greatest" # => "Ruby is the greatest"
write_two_strs "I really ", "LOVE ruby" # => ["I really ", "LOVE ruby"]
write_a_lot "I can put ", "as many ", "parameters as I want ", "with this method." # => Array

### Classes ###

# class Car

#   # we call methods like this a "setter"
#   def set_miles(miles)
#     # variables with an @ symbol are instance variables
#     @miles = miles
#   end

#   # we call methods like this a "getter"
#   def get_miles
#     @miles
#   end

# end

# car = Car.new
# car.miles # => 
# car.set_miles 3000
# car.get_miles # => 

# car1 = Car.new
# car1.get_miles # => 1000

# class Car
#   def miles=(miles)
#     @miles = miles
#   end

#   def miles
#     @miles
#   end

#   def product
#     @miles*100
#   end
# end

# car = Car.new
# car.miles = 1000  # Ruby knows this is the miles= method
# car.miles         # => 1000

class Car
  @miles
  attr_accessor :miles

  def self.milage
    @miles # !> instance variable @miles not initialized
  end
end

car = Car.new
car.miles = 5000
car.miles += 1000
Car.milage # => nil
car.miles # => 6000