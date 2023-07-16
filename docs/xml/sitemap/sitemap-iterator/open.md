# \\Xlient\\Xml\\Sitemap\\SitemapIterator::open

Opens the specified url for iteration.

The $options array can contain the following keys:

- `modified_date_time`   - Skip over urls that have not been modified since this date. - `minimum_priority`     - Skip over urls that have a priority lower than this value. - `encoding`             - Specify the encoding of the sitemap

```php
public function open(string $uri, array $options = []): bool
```

## Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $uri | string | A uri pointing to a sitemap. |
| $options | array\{modified\_date\_time?: \(null \| string \| DateTimeInterface\), minimum\_priority?: \(null \| float\), encoding?: \(null \| string\)\} | An array of options. |

## Returns

| Type | Description |
| :--- | :--- |
| bool | True on success or false on failure. |