## Model Associations

#  ->belongs_to
# gets created automatically by model:references
# when model is generated

#  ->has_many
# must be specified in the model

#  ->has_many through:op
# Many to Many Relationship
# where connecting table has additional
# columns of it own. example of many to many relationship of patients to physicians through appointments;

# from the command line:
$>rails g model Patient name:string
$>rails g model Physician name:string
$>rails g model Appointment patient:references physician:references
$>rails db:migrate

# in the models
class Patient < ActiveRecord::Base
	has_many :appointments
	has_many :physicians, through: :appointments
end

class Appointment < ActiveRecord::Base
	belongs_to :patient
	belongs_to :physician
end

class Physician < ActiveRecord::Base
	has_many :appointments
	has_many :patients, through: :appointments
end

# in the console
# setting first patient to the first physician
# new patient
irb> p = Patient.new(name: "Randall")

irb>p = Patient.find(1)A
irb>p.physicians << Physician.find(1)

irb>p.save

#  ->polymorphic
# belongs to multiple tables.
# example: Pictures, Comments

# from the command line:
$>rails g model Picture name:string url:string imageable:references

# before migrating be sure to change migration file and add polymorphic
t.references :imageable, polymorphic: true

$>rake db:migrate

# in the models
class Picture < ActiveRecord::Base
  belongs_to :imageable, polymorphic: true
end

# modify patients and physicians to add picture relationship
class Physician < ActiveRecord::Base
	has_many :pictures, as: :imageable
	has_many :appointments
	has_many :patients, through: :appointments
end

class Patient < ActiveRecord::Base
	has_many :pictures, as: :imageable
	has_many :appointments
	has_many :physicians, through: :appointments
end

# in the console
# you would add pictures to patients and physicians just like any other has_many relationship

# adding a patient photo
irb>i = Patient.find(1).new(name: "Profile Pic", url: "files/pics/profile.png")
irb>i.save

# see all the photos for patient 1
irb>Patient.find(1).pictures.all

