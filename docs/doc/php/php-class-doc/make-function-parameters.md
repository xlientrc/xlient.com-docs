# \\Xlient\\Doc\\Php\\PhpClassDoc::makeFunctionParameters

Generates markdown for any \@param statements found in the specified PHPDoc comment.

```php
protected function makeFunctionParameters(
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