# php\_filenames

Gets an array of PHP files in the specified directory.

```php
function php_filenames(string $dir): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of PHP files. |

## Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |