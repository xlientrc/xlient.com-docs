# \\Xlient\\Doc\\Php\\InheritDoc::getMethodDocComment

Gets a method PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getMethodDocComment(
    \ReflectionMethod $reflector,
    string $docComment,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionMethod | A method reflector. |
| $docComment | string | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |