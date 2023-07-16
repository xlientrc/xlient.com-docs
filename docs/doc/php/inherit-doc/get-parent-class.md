# \\Xlient\\Doc\\Php\\InheritDoc::getParentClass

Gets the parent class reflector of the specified class reflector.

```php
protected function getParentClass(
    \ReflectionClass $reflector,
): ?\ReflectionClass
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClass | A class reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionClass \| null\) | A class reflector or null if no parents. |