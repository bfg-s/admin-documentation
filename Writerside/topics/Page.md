# Page

The mentioned special class pertains to a distinct segment of the admin panel, functioning as the foundation where all subsequent components, as outlined below, are systematically arranged and accessible. This structure ensures an organized and cohesive interface for the admin panel's operational framework.

By convention, a page object should be accepted as an input within the controller and subsequently passed on from the controller, but only after it has been fully populated with the necessary data. This process ensures that the controller effectively manages and transfers a complete and ready-to-use page object to its intended destination within the application.

```php
use Admin\Page;
...
public function index(
	Page $page,
): Page {
	return $page;
}
```

The page object is equipped with a variety of specialized methods designed to enhance its functionality and ease of use within the application:

### Breadcrumbs
This method is specifically engineered to allow for the configuration of custom breadcrumbs, providing a streamlined approach to tailor navigation trails according to the specific needs and structure of your application.
```php
$page->breadcrumb(['Home', 'Profile']);
```
### Title
This method is specifically crafted for establishing the title of a page, enabling the precise specification of page headers that enhance navigational clarity and user orientation within the application.
```php
$page->title('Profile');
```
### Icon
This method is meticulously designed for specifying the icon of a page, allowing for the customization of visual identifiers that are distinct from those used within the menu, thereby enriching the page's visual context and user interface experience.
```php
$page->icon('fas fa-user');
```
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
