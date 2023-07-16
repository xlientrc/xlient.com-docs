# \\Xlient\\Doc\\Php\\PhpTraitDoc::makeMarkLabels

Generates markdown for labels when certain PHPDoc tags are present in a PHPDoc comment.

```php
protected function makeMarkLabels(
    \Xlient\Doc\Php\DocComment $docComment,
): ?string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $docComment | DocComment | A PHPDoc comment. |

## Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A markdown string or null if no mark tags present. |