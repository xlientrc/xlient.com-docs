# make\_dir

Creates a new directory in the specified directory.

```php
function make_dir(string $dir, int $mode = 0755): void
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |
| $mode | int | The directories permissions. |

## Returns

| Type | Description |
| :--- | :--- |
| void |  |

## Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the specified directory is invalid. |
| RuntimeException | When the directory could not be made. |