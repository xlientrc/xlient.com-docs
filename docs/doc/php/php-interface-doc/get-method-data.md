# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::getMethodData

Gets the markdown encoded name, description, url, and marks of the specified method.

```php
protected function getMethodData(\ReflectionMethod $method): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $method | ReflectionMethod | A method reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of method data. |