# \\Xlient\\Doc\\Php\\PhpConstantsDoc::getFunctionReturnData

Gets the markdown encoded type, and description of the specified function return.

```php
protected function getFunctionReturnData(
    \ReflectionFunction|\ReflectionMethod $function,
    ?\PHPStan\PhpDocParser\Ast\PhpDoc\ReturnTagValueNode $tag,
): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A function reflector. |
| $tag | \(ReturnTagValueNode \| null\) | An \@return tag value. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{type: \(string \| null\), description: \(string \| null\)\} | An object of function return data. |