# \\Xlient\\Doc\\Php\\InheritDoc::isInheritOnly

Gets whether or not the specified PHPDoc comment is made up of a single \@inheritDoc tag.

```php
protected function isInheritOnly(string $docComment): bool
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $docComment | string | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| bool | True if the PHPDoc comment is made up of a single \@inheritDoc tag, false otherwise. |