nums = [3,5,1,2,7,9,8,13,25,32]
nums.inject{ |sum, val| sum += val } # => 105
nums.reject{|val| val < 10} # => [13, 25, 32]

names = ["John", "KB", "Oliver", "Cory", "Matthew", "Christopher"]
names.shuffle # => ["John", "KB", "Matthew", "Christopher", "Cory", "Oliver"]
puts names.shuffle # => nil
names.select{ |name| name.length > 5 } # => ["Oliver", "Matthew", "Christopher"]

alphabet = ('a'..'z').map{|letter| letter } # => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]
alphabet.shuffle! # => ["u", "n", "a", "z", "h", "l", "s", "j", "k", "c", "p", "g", "r", "t", "v", "b", "x", "d", "e", "i", "o", "y", "q", "m", "f", "w"]
# alphabet # => ["o", "i", "r", "t", "s", "c", "u", "e", "b", "l", "v", "z", "h", "f", "q", "j", "x", "d", "g", "p", "y", "n", "w", "m", "a", "k"]
alphabet.last # => "w"
vowels = ['a', 'e', 'i', 'o', 'u']
# vowels.find # => Enumerator

vowel = vowels.find{|i| alphabet.first == i} # => "u"

# vowels.find do |i|
# 	alphabet.first == i
# end

vowel # => "u"

# puts %Q{I'm a vowel and my value is #{alphabet.first}} if !vowel.nil?

rand_nums = 10.times.map{ rand(55..100) } # => [95, 70, 60, 68, 57, 67, 87, 79, 67, 60]
rand_nums.sort # => [57, 60, 60, 67, 67, 68, 70, 79, 87, 95]
rand_nums.first # => 74
rand_nums.last # => 67



5.times.map{(65+rand(26)).chr} # => ["E", "T", "Q", "W", "A"]

10.times.map{5.times.map{(65+rand(26)).chr}.join} # => ["QXTBB", "CWDFD", "UYWOE", "WZKOY", "KCRJC", "LGOQN", "YIUBN", "DEQXM", "FETEO", "OBDAB"]

# # # # # # # # >> KB
# >> Oliver
# >> Matthew
# >> KB
# >> Christopher
# >> Cory
# >> John