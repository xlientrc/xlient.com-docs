# \\Xlient\\Doc\\Php\\PhpFileParser::parseNamespace

Parses out tokens relating to the current namespace.

```php
private function parseNamespace(array $tokens): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |