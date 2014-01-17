a = {:first_name => "Michael", :last_name => "Choi"}
b = {:first_name => "John", :last_name => "Supsupin"}
c = {:first_name => "KB", :last_name => "Tonel"}
d = {:first_name => "Mikee", :last_name => "Buyco"}
e = {:first_name => "Diana", :last_name => "Manlulu"}

names = [a, b, c, d, e]

puts %{you have #{names.length} in the 'names' array}
names.each do |name|
	puts "the name is #{name[:first_name]} #{name[:last_name]}"
end
# >> you have 5 in the 'names' array
# >> you have 5 in the 'names' array
# >> the name is Michael Choi
# >> the name is John Supsupin
# >> the name is KB Tonel
# >> the name is Mikee Buyco
# >> the name is Diana Manlulu