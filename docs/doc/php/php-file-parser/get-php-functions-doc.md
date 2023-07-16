# \\Xlient\\Doc\\Php\\PhpFileParser::getPhpFunctionsDoc

Gets a PhpFunctionsDoc for the specified namespace.

This acts as a collection of functions to output to a single documentation file.

```php
private function getPhpFunctionsDoc(
    string $namespace,
): \Xlient\Doc\Php\PhpFunctionsDoc
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $namespace | string | The namespace of this PhpFunctionsDoc. |

## Returns

| Type | Description |
| :--- | :--- |
| PhpFunctionsDoc | A class representing functions contained in this namespace. |