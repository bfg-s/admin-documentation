# Controller

By default, the full CRUD (Create, Read, Update, Delete) of a model is described by a Laravel resource controller. To get started, after installing it locally, run the command to generate a new controller:

```bash
php artisan admin:controller UserController --model=User
```

## Controller Generation
This command will create a new controller in the `app/Admin/Controllers` directory named `UserController.php`. Consider a standard, generated resource:

```php
<?php

namespace App\Admin\Controllers;

use App\Admin\Delegates\Card;
use App\Admin\Delegates\Form;
use App\Admin\Delegates\ModelInfoTable;
use App\Admin\Delegates\ModelTable;
use App\Admin\Delegates\SearchForm;
use App\Models\User;
use Admin\Page;

/**
 * UserController Class
 * @package App\Admin\Controllers
 */
class UserController extends Controller
{
    static $model = User::class;

    public function index(
        Page $page, 
        Card $card, 
        SearchForm $searchForm, 
        ModelTable $modelTable
    ): Page {
        // ...
    }

    public function matrix(
        Page $page, 
        Card $card, 
        Form $form
    ): Page {
        // ...
    }

    public function show(
        Page $page, 
        Card $card, 
        ModelInfoTable $modelInfoTable
    ): Page {
        // ...
    }
}
```
The controller will belong to the model specified in the `$model` property. Or return the model from the getModel method. By default, you need to describe the logic for displaying 3 endpoints, they are described by the following methods: `index`, `matrix`, and `show`. The remaining endpoints are served by the extension automatically.


You can generate a simple controller that does not belong to the model and describe absolutely custom logic in it.

## Default tools
The parent controller has an `explanation` method for declaring global declarations, by default declarations are declared for the first card that will be included on the page, the `defaultTools` setting is enabled for it. If the controller has a `defaultTools` method, it will be used to check if the tools are displayed. For example, you can disable deletion for a model with `id` = 1 in the cards:
```php
public function defaultTools($type)
{
    return !($type === 'delete' && $this->model()->id == 1);
}
```
