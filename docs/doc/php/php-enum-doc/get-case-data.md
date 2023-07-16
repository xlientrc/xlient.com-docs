# \\Xlient\\Doc\\Php\\PhpEnumDoc::getCaseData

Gets the markdown encoded name, backingValue, description, url, and marks of the specified constant.

```php
protected function getCaseData(\ReflectionEnumUnitCase $case): object
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $case | ReflectionEnumUnitCase | A enum case reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, backingValue: \(string \| int \| null\), description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of class constant data. |