# \\Xlient\\Doc\\Php\\InheritDoc::getParentMethod

Gets the parent method reflector of the specified method reflector.

```php
protected function getParentMethod(
    \ReflectionMethod $reflector,
): ?\ReflectionMethod
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionMethod | A method reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionMethod \| null\) | A method reflector or null if no parents. |