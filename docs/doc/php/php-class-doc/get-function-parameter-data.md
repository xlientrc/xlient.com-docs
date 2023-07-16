# \\Xlient\\Doc\\Php\\PhpClassDoc::getFunctionParameterData

Gets the markdown encoded name, type, and description of the specified function parameter.

```php
protected function getFunctionParameterData(
    \ReflectionParameter $parameter,
    array $tags,
): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $parameter | ReflectionParameter | A parameter reflector. |
| $tags | array\<ParamTagValueNode\> | An array of \@param tag values. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\)\} | An object of function parameter data. |