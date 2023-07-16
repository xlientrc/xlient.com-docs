# \\Xlient\\Doc\\Php\\PhpFunctionsDoc::getFunctionData

Gets the markdown encoded name, description, url, and marks of the specified function.

```php
protected function getFunctionData(
    \Xlient\Doc\Php\PhpFunction $function,
): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | PhpFunction | A Xlient php function object. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of function data. |