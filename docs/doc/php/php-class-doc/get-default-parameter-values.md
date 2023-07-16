# \\Xlient\\Doc\\Php\\PhpClassDoc::getDefaultParameterValues

Gets an array of default function or method parameter values.

```php
protected function getDefaultParameterValues(
    \ReflectionFunction|\ReflectionMethod $function,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A function reflector to get default parameter values from. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<string, \(string \| null\)\> | An array of default parameter values. |