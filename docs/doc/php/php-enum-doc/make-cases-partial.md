# \\Xlient\\Doc\\Php\\PhpEnumDoc::makeCasesPartial

Generates markdown for a list of the specified cases.

```php
protected function makeCasesPartial(array $cases, int $headingDepth): array
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