# \\Xlient\\Doc\\Php\\PhpTraitDoc::getPropertyData

Gets the markdown encoded name, type, description, url, and marks of the specified property.

```php
protected function getPropertyData(\ReflectionProperty $property): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $property | ReflectionProperty | A property reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of property data. |