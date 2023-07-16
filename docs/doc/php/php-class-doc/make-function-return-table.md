# \\Xlient\\Doc\\Php\\PhpClassDoc::makeFunctionReturnTable

Generates markdown for a \@return statement if found in the specified PHPDoc comment in a table format.

```php
protected function makeFunctionReturnTable(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |