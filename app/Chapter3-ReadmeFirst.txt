Crating a database structure using Laravel (php artisan)
- First go to localhost/phpmyadmin. Note: make sure mysql is running in xampp control panel
- create new database and give a name

- Modify .env file and configure the database details. eg. username, passowrd and database name
- open cmd at your main project directory
 - type php artisan make:migration makers_table --create=makers
 - type php artisan make:migration vehicles_table --create-vehicles

 Note: Migrate makers_table first then only vehicles_table as relation as relation has been defined. Makers hasMany Vehicles.

 Now if you go to folder datase/migration, you will see the migrated files. please delete the default available file which is user_tbl and & reset_password.

 You now have 2 migrated files inside this folder. 
  - open makers_tables and make the changes and add attributes . please check the migrated file
  - open vehicles_tables and make the changes and add attributes . please check the migrated file

  now run php artisan migrate

  you will see that database created in localhost/phpmyadmin with the name makers and vehicles.