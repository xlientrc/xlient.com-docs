# \\Xlient\\Doc\\Php\\PhpEnumDoc::makeCasesPartialTable

Generates markdown for a list of the specified cases in a table format.

```php
protected function makeCasesPartialTable(array $cases, int $headingDepth): array
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