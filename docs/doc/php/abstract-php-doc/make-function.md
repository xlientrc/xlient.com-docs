# \\Xlient\\Doc\\Php\\AbstractPhpDoc::makeFunction

Generates markdown for a function or class method definition.

```php
protected function makeFunction(
    \ReflectionFunction|\ReflectionMethod $function,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $name | \(string \| null\) | An optional name override if not using the short name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |