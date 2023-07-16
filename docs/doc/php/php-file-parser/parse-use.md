# \\Xlient\\Doc\\Php\\PhpFileParser::parseUse

Parses out tokens relating to class, function, and constant use statements.

These use statements are added to the meta class to reconstitute fully qualified names.

```php
private function parseUse(array $tokens): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |