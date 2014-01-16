### Hashes ###
# generally access and assign like ths

hash = Hash.new
hash.class # => Hash

hash["my key"] = "my value"
hash                          # => {"my key"=>"my value"}
hash["my key"]                		  # => "my value"
hash.has_key? "my key"				  # => true

hsh = { "key1" => "value1", "key2" => "value2" }

# hsh.each{ |index, value| puts index, value }

hsh.each do |index, value|
	index # => "key1", "key2"
	value # => "value1", "value2"
end

hsh # => {"key1"=>"value1", "key2"=>"value2"}
hsh["key1"] # => "value1"

### Symbols ###

:this_is_a_symbol.class # => Symbol
"this is a string".class # => String

:this_is_a_symbol.object_id # => 396488
:this_is_a_symbol.object_id # => 396488

"this is a string".object_id # => 70355679099060
"this is a string".object_id # => 70355679097260
# >> value2