Hi Guys, This is a quick review on what we have done and learn so far.

1. we created user.php and MyModel.php to demonstarate how to create a model and assign fillable and hidden attributes (Dummy).
2. We created 2 Model
	> Maker -> set attributes i.e fillable, hidden as before > defined hasMany Relation
	> Vehicle -.set attributes i.e fillable, hidden as before > defined belongsTo Relation
3. We Modified The Route
	> Maker -> except [create, edit]
	> Vehicle -> only [index]
	> Maker.Vehicle -> except [Create, edit]

4. We created controller for our model
	> MakerController -> Fetching data from db (output in json) -> show, index, update and delete
	> VehicleController -> Fetching data from db (output in json) -> show, index, update and delete
	> MakerVehicleController -> Fetching data from db (output in json) -> show, index, update and delete

5. We Created Request
	> Maker - Create, Validation (as Required)
	> Vehicle - Create, Validation (as Required)
6. We Created Database
	> Makers_tble.php -> added attributes
	> Vehicles_tbl.php -> added attributes
	> Migrate (First Maker and Vehicles)
7. we create seed for fake data
	> do not forget to used truncate to avoid overloading data
	> Maker (seeder for maker)
	> Vehicle (seeder for vehicle)