# filename

Gets a filename from the specified file.

Both the directory and extension will be removed.

```php
function filename(string $file): ?string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | A file. |

## Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A filename or null if none present. |