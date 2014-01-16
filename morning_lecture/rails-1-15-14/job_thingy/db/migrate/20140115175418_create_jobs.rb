class CreateJobs < ActiveRecord::Migration
  def change
    create_table :jobs do |t|
      t.string :company
      t.integer :salary
      t.string :location
      t.text :environment
      t.references :user, index: true

      t.timestamps
    end
  end
end
