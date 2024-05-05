# Navigation

To effectively organize the navigation menu of the extension and gain control over the current routes, it is necessary to define them according to your preferences for the navigation layout. This can be accomplished by specifying your desired navigation structure within the `app/Admin/Navigator.php` file, as illustrated below:

```php
<?php
namespace App\Admin;

use LteAdmin\Core\NavigatorExtensionProvider;
use LteAdmin\Interfaces\ActionWorkExtensionInterface;

class Navigator extends NavigatorExtensionProvider implements ActionWorkExtensionInterface
{
	/**
	 * @return void
	 */
	public function handle() : void
	{
		$this->item('Users')
			->resource('users', UserController::class)
			->icon_users();
			
		$this->makeDefaults();
		
		$this->makeExtensions();
	}
}
```
Upon execution, this operation will seamlessly introduce a new menu item to your application's interface and automatically generate all the essential routes required for its functionality. With this process completed, you are now fully equipped to proceed to your controller with confidence, ready to further develop or customize your application's capabilities.

Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).

## Action

To incorporate a controller that does not adhere to the conventional resource structure within Laravel, you have the flexibility to establish a connection for such non-resource controllers. This allows for a more customized approach to handling specific actions or routes outside the typical CRUD operations:
```php
public function handle(): void
{
	$this->item('Categories', 'categories', 'CategoriesController@index')
		->icon_folder_open();
}
```

## Resource

A resource in this context represents an enhanced variation of the standard Laravel resource, designed to extend its functionality. It can be seamlessly integrated into your application by utilizing the `resource` method.
```php
$group->item('Users')
	->resource('users', UserController::class)
	->icon_user();
```

## Custom link

You have the capability to attach a custom link to any item in your menu, enriching it with additional functionality and enhancing user convenience.
```php
$this->item('Google')
		->link('https://google.com')
		->targetBlank()
		->icon_500px();
```

## Groups

Frequently, there's a need to categorize various menu items together for better organization and accessibility. This requirement can be effortlessly fulfilled by employing the structure shown below, allowing for an intuitive grouping of menu items within your application's navigation:

```php
$this->group('User group', 'group_of_users', function (NavGroup $group) {
	$group->item('Users')
		->resource('users', UserController::class)
		->icon_user();
})->icon_users();
```

## Menu title

The option to utilize a title is restricted exclusively to the initial level of the menu hierarchy. Consequently, it is not permissible to employ titles within nested groups or sublevels of the menu structure. This ensures clarity and consistency in the presentation of the main navigation elements.
```php
$this->menu_header('My menu title');
```
> Cannot be used in groups.
{style="warning"}

## Navigation templates

To incorporate custom templates into the navigation bar, you have the flexibility to create and utilize your own template files. Begin by crafting a unique template within the resources directory. Once established, you can seamlessly integrate this custom template into the navigation setup using the method described below:
```php
$this->nav_bar_view('admin.nav_bar_items', array $params = [], bool $prepend = false)
```
Or
```php
$this->left_nav_bar_view('admin.nav_bar_items', array $params = [])
```
Or with vue
```php
$this->nav_bar_vue(TestVue::class, array $params = [], bool $prepend = false)
```

## Make defaults

The `makeDefaults` method is designed to streamline the process of setting up essential administrative structures within your application. By invoking this method, it automatically generates a predefined group that includes key components such as `Administrators`, `Roles`, and `Accesses`, thereby enhancing the system's extensibility and organizational framework.

## Make extensions

The `makeExtensions` method is designed specifically to facilitate the creation of menu items for installed extensions. This functionality is integral for integrating and managing extensions within the application's menu system, providing a streamlined process for adding and organizing these components effectively.
