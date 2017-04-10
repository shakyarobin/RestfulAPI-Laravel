Inserting Data using Seeder And Faker

- open cmd terminal at the project directory
- type composer search faker
- type composer require fzaninotto/faker --dev
 - the the process will begin

- Create 2 files inside Seeds
 - MakerSeed
 - VehiclesSeed

# Modify DatasebaseSeeder.php
  - see the DatasebaseSeeder.php for detail modification

# Modify MakerSeed.php
 - see the MakerSeed.php for detail modification

# Modify VehiclesSeed.php
 - see the VehiclesSeed.php for detail modification

# go to cmd
 - type php artisan db:seed to seed the data into database
 - if anyerror occured eg. fator error or ____ do not exist try running composer dumpautoload and it should fix the errors.