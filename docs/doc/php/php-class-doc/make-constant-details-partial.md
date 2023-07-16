# \\Xlient\\Doc\\Php\\PhpClassDoc::makeConstantDetailsPartial

Generates markdown for more detailed information about the specified constants.

```php
protected function makeConstantDetailsPartial(
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