# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::makePropertyDetailsPartial

Generates markdown for more detailed information about the specified properties.

```php
protected function makePropertyDetailsPartial(
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