# \\Xlient\\Doc\\Php\\InheritDoc::getClassDocComment

Gets a class PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getClassDocComment(
    \ReflectionClass $reflector,
    string $docComment,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClass | A class reflector. |
| $docComment | string | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |