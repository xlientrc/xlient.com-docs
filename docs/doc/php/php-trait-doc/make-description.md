# \\Xlient\\Doc\\Php\\PhpTraitDoc::makeDescription

Generates markdown for a PHPDoc comment's summary and description.

```php
protected function makeDescription(
    ?string $summary,
    ?string $description,
): ?string
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $summary | \(string \| null\) | The PHPDoc comment summary. |
| $description | \(string \| null\) | The PHPDoc comment description. |

## Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A markdown string. |