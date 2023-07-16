# delete\_contents

Deletes the contents of the specified directory.

```php
function delete_contents(string $dir): void
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

## Returns

| Type | Description |
| :--- | :--- |
| void |  |

## Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |