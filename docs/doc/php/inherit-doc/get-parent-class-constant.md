# \\Xlient\\Doc\\Php\\InheritDoc::getParentClassConstant

Gets the parent class constant reflector of the specified class constant reflector.

```php
protected function getParentClassConstant(
    \ReflectionClassConstant $reflector,
): ?\ReflectionClassConstant
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClassConstant | A class constant reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionClassConstant \| null\) | A class constant reflector or null if no parents. |