# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::makeMethodDetailsPartial

Generates markdown for more detailed information about the specified methods.

```php
protected function makeMethodDetailsPartial(
    array $methods,
    int $headingDepth,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $methods | array\<ReflectionMethod\> | An array of method reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |