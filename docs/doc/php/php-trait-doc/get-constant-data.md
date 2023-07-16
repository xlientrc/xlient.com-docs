# \\Xlient\\Doc\\Php\\PhpTraitDoc::getConstantData

Gets the markdown encoded name, type, description, url, and marks of the specified constant.

```php
protected function getConstantData(\ReflectionClassConstant $constant): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | ReflectionClassConstant | A class constant reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of class constant data. |