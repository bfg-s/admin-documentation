# Implementations

To create the `Admin` model using artisan and inherit from the `AdminUser` model, you can run the following command:
```bash
php artisan make:model Admin
```
After creating the `Admin` model, you can extend it from the `AdminUser` model as shown in the provided code snippet:
```php
<?php

namespace App\Models;

use Admin\Models\AdminUser;

class Admin extends AdminUser
{
    // Add your customizations or additional logic here
}
```

## Seeds
To avoid running internal installation every time after refreshing the database or moving to a server, you can add the standard data seeding to your seeding file `DatabaseSeeder.php`. Here's an example of how you can do this:
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Admin\Models\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed default users
        \App\Models\User::factory(10)->create();

        // Seed admin data
        $this->call(AdminSeeder::class);

        // Add more seeders if needed
    }
}
```
In this code snippet:

* `\App\Models\User::factory(10)->create();` seeds some default users using Laravel's factory.
* `$this->call(AdminSeeder::class);` calls the `AdminSeeder` to seed admin-related data. Make sure the `AdminSeeder` exists and contains the necessary logic to seed admin data.
* You can add more call methods for additional seeders as needed.

Ensure that the `AdminSeeder` class is properly implemented and contains the necessary logic to seed admin-related data.
