# \\Xlient\\Doc\\Php\\PhpFunctionsDoc::makeFunctionThrowsTable

Generates markdown for any \@throw statements found in the specified PHPDoc comment in a table format.

```php
protected function makeFunctionThrowsTable(
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