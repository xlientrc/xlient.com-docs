# \\Xlient\\Doc\\Php\\AbstractPhpDoc::getClassReflectionProperties

Gets an array of property reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionProperties(
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
| array\<ReflectionProperty\> | An array of property reflectors. |