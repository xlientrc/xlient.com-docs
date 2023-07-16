# Class \Xlient\Xml\Sitemap\SitemapIterator

SitemapIterator provides a way to traverse over an xml sitemap's urls in a foreach loop.

| Name | Value |
| :--- | :--- |
| Implements | [\Iterator](https://www.php.net/manual/en/class.iterator.php), [\Traversable](https://www.php.net/manual/en/class.traversable.php) |

## Class Synopsis
```php
class SitemapIterator implements 
    \\Iterator,
    \\Traversable
{
    /* Properties */
    private ?array $currentData = NULL;
    private ?string $currentUrl = NULL;
    private ?int $index = NULL;
    private array $options
    private bool $rewind = false;
    private string $uri
    private bool $valid = false;
    private array $xml

    /* Methods */
    public function close(): bool
    public function current(): mixed
    public function key(): mixed
    public function next(): void
    public function open(string $uri, array $options = []): bool
    public function rewind(): void
    public function valid(): bool
    private function assertIsValid(): void
    private function closeXmlReader(): bool
    private function openXmlReader(string $uri): bool
    private function readElementValue(\XmlReader $xml): null|string|array
    private function readNext(): void
    private function readSitemap(\XmlReader $xml): void
    private function readUrl(\XmlReader $xml): bool
    private function skipLastmod(?string $lastmod): bool
    private function skipPriority(?float $priority): bool
}
```

## Properties

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$currentData](#current\-data) | (array<string, mixed> | null) | The current sitemap url data. |
| [$currentUrl](#current\-url) | (string | null) | The current sitemap url. |
| [$index](#index) | (int | null) | The index of the active XmlReader. |
| [$options](#options) | array{modified_date_time: (null | string | DateTimeInterface), minimum_priority: (null | float), encoding: (null | string)} |  |
| [$rewind](#rewind) | bool | Is a full rewind required. |
| [$uri](#uri) | string | A uri pointing to a sitemap. |
| [$valid](#valid) | bool | Is the current iterator item valid. |
| [$xml](#xml) | XmlReader[] | An array of XmlReaders. |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [close()](/docs/xml/sitemap/sitemap\-iterator/close.md) | Closes all opened XmlReaders on the stack. |
| [current()](/docs/xml/sitemap/sitemap\-iterator/current.md) |  |
| [key()](/docs/xml/sitemap/sitemap\-iterator/key.md) |  |
| [next()](/docs/xml/sitemap/sitemap\-iterator/next.md) |  |
| [open()](/docs/xml/sitemap/sitemap\-iterator/open.md) | Opens the specified url for iteration. |
| [rewind()](/docs/xml/sitemap/sitemap\-iterator/rewind.md) |  |
| [valid()](/docs/xml/sitemap/sitemap\-iterator/valid.md) |  |

### Private

| Name | Description |
| :--- | :--- |
| [assertIsValid()](/docs/xml/sitemap/sitemap\-iterator/assert\-is\-valid.md) | Asserts that the last read of the XmlReader has not produced an error. |
| [closeXmlReader()](/docs/xml/sitemap/sitemap\-iterator/close\-xml\-reader.md) | Closes the last opened XmlReader and pops it off the stack. |
| [openXmlReader()](/docs/xml/sitemap/sitemap\-iterator/open\-xml\-reader.md) | Opens the specified uri in an XmlReader and pushes to the stack. |
| [readElementValue()](/docs/xml/sitemap/sitemap\-iterator/read\-element\-value.md) | Read an element and its subtrees into an value. |
| [readNext()](/docs/xml/sitemap/sitemap\-iterator/read\-next.md) | Reads the xml sitemap until the next url is found or the end of the sitemap is reached. |
| [readSitemap()](/docs/xml/sitemap/sitemap\-iterator/read\-sitemap.md) | Reads a sitemap element and opens the loc in a new XmlReader. |
| [readUrl()](/docs/xml/sitemap/sitemap\-iterator/read\-url.md) | Reads a url element and sets the current key value pair to its loc and and array of child values. |
| [skipLastmod()](/docs/xml/sitemap/sitemap\-iterator/skip\-lastmod.md) | Determines if the element with the specified lastmod should be skipped. |
| [skipPriority()](/docs/xml/sitemap/sitemap\-iterator/skip\-priority.md) | Determine whether or not the url with the specified priority should be skipped. |

## Property Details

### Private

<a id="current-data"></a>

#### $currentData

```php
private ?array $currentData = NULL;
```

<a id="current-url"></a>

#### $currentUrl

```php
private ?string $currentUrl = NULL;
```

<a id="index"></a>

#### $index

```php
private ?int $index = NULL;
```

<a id="options"></a>

#### $options

An array of options.

```php
private array $options
```

<a id="rewind"></a>

#### $rewind

```php
private bool $rewind = false;
```

<a id="uri"></a>

#### $uri

```php
private string $uri
```

<a id="valid"></a>

#### $valid

```php
private bool $valid = false;
```

<a id="xml"></a>

#### $xml

```php
private array $xml
```

## Method Details

### Public

<a id="close"></a>

#### close

Closes all opened XmlReaders on the stack.

```php
public function close(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool |  |

<a id="current"></a>

#### current

```php
public function current(): mixed
```

##### Returns

| Type | Description |
| :--- | :--- |
| mixed |  |

<a id="key"></a>

#### key

```php
public function key(): mixed
```

##### Returns

| Type | Description |
| :--- | :--- |
| mixed |  |

<a id="next"></a>

#### next

```php
public function next(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="open"></a>

#### open

Opens the specified url for iteration.

The $options array can contain the following keys:

- `modified_date_time`   - Skip over urls that have not been modified since this date. - `minimum_priority`     - Skip over urls that have a priority lower than this value. - `encoding`             - Specify the encoding of the sitemap

```php
public function open(string $uri, array $options = []): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $uri | string | A uri pointing to a sitemap. |
| $options | array\{modified\_date\_time?: \(null \| string \| DateTimeInterface\), minimum\_priority?: \(null \| float\), encoding?: \(null \| string\)\} | An array of options. |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True on success or false on failure. |

<a id="rewind"></a>

#### rewind

```php
public function rewind(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="valid"></a>

#### valid

```php
public function valid(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool |  |

### Private

<a id="assert-is-valid"></a>

#### assertIsValid

Asserts that the last read of the XmlReader has not produced an error.

```php
private function assertIsValid(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="close-xml-reader"></a>

#### closeXmlReader

Closes the last opened XmlReader and pops it off the stack.

```php
private function closeXmlReader(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True on success or false on failure. |

<a id="open-xml-reader"></a>

#### openXmlReader

Opens the specified uri in an XmlReader and pushes to the stack.

```php
private function openXmlReader(string $uri): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $uri | string | The uri of the sitemap to open. |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True on success or false on failure. |

<a id="read-element-value"></a>

#### readElementValue

Read an element and its subtrees into an value.

```php
private function readElementValue(\XmlReader $xml): null|string|array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $xml | XmlReader | The XmlReader to read the value from. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| array\<string, mixed\> \| null\) | The resulting read value. |

<a id="read-next"></a>

#### readNext

Reads the xml sitemap until the next url is found or the end of the sitemap is reached.

```php
private function readNext(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="read-sitemap"></a>

#### readSitemap

Reads a sitemap element and opens the loc in a new XmlReader.

```php
private function readSitemap(\XmlReader $xml): void
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $xml | XmlReader | The XmlReader to read the sitemap element from. |

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="read-url"></a>

#### readUrl

Reads a url element and sets the current key value pair to its loc and and array of child values.

```php
private function readUrl(\XmlReader $xml): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $xml | XmlReader | The XmlReader to read the url element from. |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if the key value pair is updated, otherwise false. |

<a id="skip-lastmod"></a>

#### skipLastmod

Determines if the element with the specified lastmod should be skipped.

```php
private function skipLastmod(?string $lastmod): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $lastmod | ?string |  |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if the element should be skipped, otherwise false. |

<a id="skip-priority"></a>

#### skipPriority

Determine whether or not the url with the specified priority should be skipped.

```php
private function skipPriority(?float $priority): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $priority | ?float |  |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if the url should be skipped, otherwise false. |