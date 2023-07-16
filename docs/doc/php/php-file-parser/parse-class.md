# \\Xlient\\Doc\\Php\\PhpFileParser::parseClass

Parses out tokens relating to the current class, interface, trait, or enum.

```php
private function parseClass(array $tokens, int $type): array
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |
| $type | int |  |

## Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |