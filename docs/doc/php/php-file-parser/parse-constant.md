# \\Xlient\\Doc\\Php\\PhpFileParser::parseConstant

Parses out tokens relating to constants.

This doesn't apply to constants in classes.

```php
private function parseConstant(array $tokens): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |