# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::makePropertiesPartialTable

Generates markdown for the array of specified properties in a table format.

```php
protected function makePropertiesPartialTable(
    array $properties,
    int $headingDepth,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $properties | array\<ReflectionProperty\> | An array of property reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |