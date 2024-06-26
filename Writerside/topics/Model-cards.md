# Model cards

This is a paginated table displayed in the form of cards. Each card features an image at the top, followed by a title, additional text lines, and action buttons at the bottom. The layout is designed to provide a clear and concise overview of the content, ensuring that important information is easily accessible and actionable.

```php
public function index(
    Page $page,
    Card $card,
    SearchForm $searchForm,
    ModelCards $modelCards
): Page {
    return $page->card(
        $card->title('admin.admin_list'),
        $card->search_form(
            ...
        ),
        $card->model_cards(
            $modelCards->avatarField('avatar'),
            $modelCards->titleField('name'),
            $modelCards->subtitleField('email'),
            $modelCards->id(),
            $modelCards->row('admin.role', [$this, 'show_role'])
                ->icon_users(),
            $modelCards->row('admin.login_name', 'login')
                ->sort()
                ->icon_user(),
            $modelCards->at(),
            $modelCards->controlDelete(static function (AdminUser $user) {
                return $user->id !== 1 && admin()->id !== $user->id;
            }),
        )
    );
}
```

Used same modifiers as in [Model table](Model-table.md#column-modifiers).


### avatarField
This method is used to add an avatar to the card component.
```php
$modelCards->avatarField(string $field): static
```

### titleField
This method is used to add a title to the card component.
```php
$modelCards->titleField(string $field): static
```

### subtitleField
This method is used to add a subtitle to the card component.
```php
$modelCards->subtitleField(string $field): static
```

### row
The method utilized for constructing a table row is designed with flexibility in mind, accommodating both modifiers and columns within a "Sortable table".
```php
$modelCards->row(string $label, string|Closure|array $field): static
```

