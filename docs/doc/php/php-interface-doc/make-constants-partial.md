# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::makeConstantsPartial

Generates markdown for the array of specified constants.

```php
protected function makeConstantsPartial(
    array $constants,
    int $headingDepth,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constants | array\<ReflectionClassConstant\> | An array of constant reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |