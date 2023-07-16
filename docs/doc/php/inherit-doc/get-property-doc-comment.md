# \\Xlient\\Doc\\Php\\InheritDoc::getPropertyDocComment

Gets a property PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getPropertyDocComment(
    \ReflectionProperty $reflector,
    string $docComment,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionProperty | A property reflector. |
| $docComment | string | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |