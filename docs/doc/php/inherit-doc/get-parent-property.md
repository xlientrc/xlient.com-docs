# \\Xlient\\Doc\\Php\\InheritDoc::getParentProperty

Gets the parent property reflector of the specified property reflector.

```php
protected function getParentProperty(
    \ReflectionProperty $reflector,
): ?\ReflectionProperty
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionProperty | A property reflector. |

## Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionProperty \| null\) | A property reflector or null if no parents. |