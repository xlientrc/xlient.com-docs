# \\Xlient\\Doc\\Php\\PhpFileParser::parseDefine

Parses out tokens relating to defined constants.

This doesn't apply to defines defined in functions or methods.

```php
private function parseDefine(array $tokens): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |