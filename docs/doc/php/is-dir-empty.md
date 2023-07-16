# is\_dir\_empty

Gets whether or not the specified directory is empty.

```php
function is_dir_empty(string $dir): bool
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

## Returns

| Type | Description |
| :--- | :--- |
| bool | True if the specified directory is empther, false otherwise. |

## Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |