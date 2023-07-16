# \\Xlient\\Doc\\Php\\PhpEnumDoc::makeCaseDetailsPartial

Generates markdown for more detailed information about the specified cases.

```php
protected function makeCaseDetailsPartial(
    array $cases,
    int $headingDepth,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $cases | array\<ReflectionEnumUnitCase\> | An array of case reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |