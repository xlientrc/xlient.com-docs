# \\Xlient\\Doc\\Php\\PhpFileParser::getPhpConstantsDoc

Gets a PhpConstantsDoc for the specified namespace.

This acts as a collection of defines/constants to output to a single documentation file.

```php
private function getPhpConstantsDoc(
    string $namespace,
): \Xlient\Doc\Php\PhpConstantsDoc
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $namespace | string | The namespace of this PhpConstantsDoc. |

## Returns

| Type | Description |
| :--- | :--- |
| PhpConstantsDoc | A class representing defines/constants contained in this namespace. |