# \\Xlient\\Doc\\Php\\PhpConstantsDoc::getConstantData

Gets the markdown encoded name, description, url, and marks of the specified function.

```php
protected function getConstantData(
    \Xlient\Doc\Php\PhpConstant $constant,
): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | PhpConstant | A Xlient php constant object. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of constant data. |