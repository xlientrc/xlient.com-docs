# \\Xlient\\Doc\\Php\\InheritDoc::mergeDocComments

Merges two PHPDoc comments together.

Any information in the parent comment not overriden in the child will be inherited.

```php
private function mergeDocComments(
    string $parentDocComment,
    string $docComment,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $parentDocComment | string | A PHPDoc comment of the parent. |
| $docComment | string | A PHPDoc comment of the child. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A merged PHPDoc comment. |