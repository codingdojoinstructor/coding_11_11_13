class User < ActiveRecord::Base
	has_many :jobs
	validates :first_name, :last_name, :email, :description, :presence => true
end
