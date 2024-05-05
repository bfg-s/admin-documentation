# Nested and sortable

The "Drag and Drop Table" component is designed to facilitate the sorting of sequences or the organization of nested models through an intuitive drag-and-drop interface. This feature is a standalone component within the delegator class `\App\Admin\Delegates\Nested`, offering a seamless and user-friendly method for managing data hierarchies and orderings directly from the UI.
```php
use App\Admin\Delegates\Nested;

return $page->card(
	$card->nested(
		...
	)
)
```

### maxDepth
This method is particularly useful for controlling the complexity of nested arrays or objects, ensuring that they do not exceed a specified depth. By setting a maximum depth, developers can prevent excessive resource consumption and potential performance issues associated with deeply nested structures.
```php
$nested->maxDepth(2)
```
> Important! For this to work, the `parent_id` field must be present.

### parentField
By invoking this method, developers can explicitly define which field within the dataset acts as the reference point for establishing parent-child relationships. This capability is essential in scenarios where the structure of the data does not automatically imply the parent-child linkage, or when custom relationships need to be established that deviate from the default settings.
```php
$nested->parentField("field_id")
```

### disableControls
The method for disabling or controlling the disabling of control buttons provides a mechanism to dynamically manage the state of user interface control elements, such as buttons. This functionality is crucial for enhancing user experience and ensuring the application behaves in a predictable manner under various conditions.
```php
$nested->disableControls(true)
// Or
$nested->disableInfo(true)
$nested->disableEdit(true)
$nested->disableDelete(true)
```
