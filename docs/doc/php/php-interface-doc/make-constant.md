# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::makeConstant

Generates markdown for a constant definition.

```php
protected function makeConstant(
    \ReflectionClassConstant $constant,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | ReflectionClassConstant | A reflector for a constant. |
| $name | \(string \| null\) | An optional name override if not using the name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |