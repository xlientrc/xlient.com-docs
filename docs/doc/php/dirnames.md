# dirnames

Gets an array of directory names contained within the specified directory.

```php
function dirnames(string $dir): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of directories. |

## Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |