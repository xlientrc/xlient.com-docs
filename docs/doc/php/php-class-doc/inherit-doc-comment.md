# \\Xlient\\Doc\\Php\\PhpClassDoc::inheritDocComment

Handles inheriting PHPDoc comments when @inheritDoc is present.

```php
protected function inheritDocComment(
    \Reflector $reflector,
    ?string $docComment = null,
): string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | Reflector | The PHPDoc comment's owner. |
| $docComment | \(string \| null\) | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |