# \\Xlient\\Doc\\Php\\InheritDoc::getClassConstantDocComment

Gets a class constant PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getClassConstantDocComment(
    \ReflectionClassConstant $reflector,
    string $docComment,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClassConstant | A class constant reflector. |
| $docComment | string | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |