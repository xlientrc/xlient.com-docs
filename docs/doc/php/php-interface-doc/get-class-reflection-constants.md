# \\Xlient\\Doc\\Php\\PhpInterfaceDoc::getClassReflectionConstants

Gets an array of class constant reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionConstants(
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
| array\<ReflectionClassConstant\> | An array of class constant reflectors. |