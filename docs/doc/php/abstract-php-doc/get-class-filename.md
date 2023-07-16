# \\Xlient\\Doc\\Php\\AbstractPhpDoc::getClassFilename

_Internal_

Gets a filename from the specified fully qualified name, prefix and suffix.

```php
protected function getClassFilename(
    string $name,
    string $prefix = '',
    string $suffix = '',
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name. |
| $prefix | string | A value to prepend before the name. |
| $suffix | string | A value to append after the name. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A filename. |