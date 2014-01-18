class CreateAppointments < ActiveRecord::Migration
  def change
    create_table :appointments do |t|
      t.datetime :date
      t.references :patient, index: true
      t.references :physician, index: true

      t.timestamps
    end
  end
end
