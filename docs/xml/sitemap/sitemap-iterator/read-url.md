# \\Xlient\\Xml\\Sitemap\\SitemapIterator::readUrl

Reads a url element and sets the current key value pair to its loc and and array of child values.

```php
private function readUrl(\XmlReader $xml): bool
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $xml | XmlReader | The XmlReader to read the url element from. |

## Returns

| Type | Description |
| :--- | :--- |
| bool | True if the key value pair is updated, otherwise false. |