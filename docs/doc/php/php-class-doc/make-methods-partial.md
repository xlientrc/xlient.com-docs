# \\Xlient\\Doc\\Php\\PhpClassDoc::makeMethodsPartial

Generates markdown for the array of specified methods.

```php
protected function makeMethodsPartial(array $methods, int $headingDepth): array
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