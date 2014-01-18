class CreatePictures < ActiveRecord::Migration
  def change
    create_table :pictures do |t|
      t.string :title
      t.string :url
      t.references :imageable, polymorphic: true

      t.timestamps
    end
  end
end
