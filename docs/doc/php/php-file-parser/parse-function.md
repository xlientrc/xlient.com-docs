# \\Xlient\\Doc\\Php\\PhpFileParser::parseFunction

Parses out tokens relating to the current function.

```php
private function parseFunction(array $tokens): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |