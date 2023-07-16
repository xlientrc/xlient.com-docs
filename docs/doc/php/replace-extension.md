# replace\_extension

Replaces the specified files extension with another one.

If no extension is provided, the extension will be removed.

```php
function replace_extension(string $file, ?string $extension = null): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | A file. |
| $extension | \(string \| null\) | A file extension. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A file with the specified new extension. |