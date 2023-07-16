# \\Xlient\\Doc\\Php\\PhpConstantsDoc::getClassReflectionMethods

Gets an array of method reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionMethods(
    \ReflectionClass $class,
    int $filter = 0,
): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |
| $filter | int | An optional filter for filtering based on access modifiers. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<ReflectionMethod\> | An array of method reflectors. |