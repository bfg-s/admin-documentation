# Application files

The admin panel's project structure is thoughtfully organized within the default working folder, located at `app/Admin` in your Laravel application. This structure is designed to facilitate easy navigation and management of the admin panel's components, enhancing the overall development experience.

### Project File Structure

Below is an overview of the admin panel's project file system structure:

```
app/Admin/
	Controllers/
	Config.php
	Navigator.php
app/Providers/
	AdminServiceProvider.php
database/migrations/
	2020_01_01_000000_create_table_admin_users.php
	2020_01_01_000001_create_table_admin_roles.php
	2020_01_01_000002_create_table_admin_role_user.php
	2020_01_01_000005_create_table_admin_file_storage.php
	2020_01_01_000006_create_table_admin_permission.php
	2021_12_10_165136_create_table_admin_log.php
	2022_03_25_205530_create_table_admin_menu.php
	2022_04_10_193630_create_table_admin_settings.php
public/
	admin/
	admin-asset/
lang/
	en/admin.php
	ru/admin.php
	uk/admin.php
bootstrap/
	admin_extensions.php
```

- `app/Admin/`: The core directory housing the admin panel's project files.
- `Controllers/`: Contains custom controller files for managing application logic.
- `Config.php`: The main configuration file for the admin panel settings.
- `Navigator.php`: Manages navigation within the admin panel.
- `app/Providers/AdminServiceProvider.php`: The service provider for the admin panel, responsible for its registration and bootstrapping.
- `database/migrations/`: Contains migration files for setting up the admin panel's database schema.
- `public/admin/`: Contains static assets for the admin panel.
- `public/admin-asset/`: Additional assets for the admin interface.
- `lang/`: Localization files for supporting multiple languages in the admin panel.
- `bootstrap/admin_extensions.php`: A bootstrap file for loading admin panel extensions.


This structured approach to organizing the admin panel's files ensures that developers can efficiently manage and extend the functionality of the admin panel. By familiarizing yourself with this structure, you can effectively navigate the admin panel's components and customize them to fit the needs of your application.
