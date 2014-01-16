# rails new <app name>
# rails console (c)
# rails server (s)
# rails generate (g)

# Creating a new project
$> rails new appname

# What are gems
# mini programs that your app uses to make the life of building an app 
# easier

# What is bundle 
# looks for all the dependencies (required gems / programs) and installs 
# all the gems for you

# Project Folder Layout

# Important Files

# gemfile
# config/routes.rb
# config/database.yml

# Rails Motto
# minimize configuration by following convention

# Concept of ORM

# translates to SQL queries
# pros and cons
# Models

#  rails generate model Post name:string content:text
# (no need to create id, created_at, updated_at)
# take a look at what it has created

# rails generate model Comment commenter:string body:text post:references
# Running DB migrations - the overall concepts

# rake db:migrate
# rake db:create (for MySQL)
# explain up, down rollback.

# rake and rails commands to be run from command prompt not the rails console!
# make sure that you don't see something like this "irb(main)" before running a rake or rails command

# Adding Validations
  :length 
  :numerically
  :presence

  # email_regex = /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]+)\z/i
  validates :name, :email, :presence => true
  validates :name, :length  => { :maximum => 50 }
  validates :email, :format=> { :with => email_regex }

# Running database queries

 Post.new()
 valid?
 Post.save
 Post.create()
 errors.full_messages
 Post.first()
 Post.last()
 Post.all
 Post.find(1)
 Post.update(1, :field => "value")
 Post.where
 Post.order
 Post.select
 Post.destroy_all()
 Post.find(1).destroy


