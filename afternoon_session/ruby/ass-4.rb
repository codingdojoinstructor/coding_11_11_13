monster1 = {:health => 500}
monster2 = {:health => 500}
attackers = [monster1, monster2] # !> assigned but unused variable - attackers
for i in (1..5)
		monster2[:health] -= rand(101)
		monster1[:health] -= rand(101)
		puts "ROUND #{i}:", "monster1 attacks monster2 with #{m1_damage} damage", "monster2's new health is now #{monster2[:health]}/500", "monster2 attacks monster1 with #{m2_damage} damage", "monster1's new health is now #{monster1[:health]}/500"
end
# >> ROUND 1:
# >> monster1 attacks monster2 with 25 damage
# >> monster2's new health is now 475/500
# >> monster2 attacks monster1 with 4 damage
# >> monster1's new health is now 496/500
# >> ROUND 2:
# >> monster1 attacks monster2 with 43 damage
# >> monster2's new health is now 432/500
# >> monster2 attacks monster1 with 38 damage
# >> monster1's new health is now 458/500
# >> ROUND 3:
# >> monster1 attacks monster2 with 18 damage
# >> monster2's new health is now 414/500
# >> monster2 attacks monster1 with 8 damage
# >> monster1's new health is now 450/500
# >> ROUND 4:
# >> monster1 attacks monster2 with 32 damage
# >> monster2's new health is now 382/500
# >> monster2 attacks monster1 with 97 damage
# >> monster1's new health is now 353/500
# >> ROUND 5:
# >> monster1 attacks monster2 with 41 damage
# >> monster2's new health is now 341/500
# >> monster2 attacks monster1 with 39 damage
# >> monster1's new health is now 314/500