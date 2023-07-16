# Class \Xlient\Xml\Sitemap\InvalidSitemapException

An error thrown when reading an xml sitemap produces an error.

| Name | Value |
| :--- | :--- |
| Extends | [\RuntimeException](https://www.php.net/manual/en/class.runtimeexception.php) » [\Exception](https://www.php.net/manual/en/class.exception.php) |
| Implements | [\Stringable](https://www.php.net/manual/en/class.stringable.php), [\Throwable](https://www.php.net/manual/en/class.throwable.php) |

## Constructor

```php
public function __construct(
    string $message = '',
    int $code = 0,
    ?\Throwable $previous = NULL,
)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $message | string |  |
| $code | int |  |
| $previous | ?\\Throwable |  |

## Class Synopsis
```php
class InvalidSitemapException extends \RuntimeException implements 
    \\Stringable,
    \\Throwable
{
    /* Properties */
    protected $code = 0;
    protected string $file = '';
    protected int $line = 0;
    protected $message = '';

    /* Methods */
    public function __toString(): string
    public function __wakeup()
    final public function getCode()
    final public function getFile(): string
    final public function getLine(): int
    final public function getMessage(): string
    public function getName(): string
    final public function getPrevious(): ?\Throwable
    final public function getTrace(): array
    final public function getTraceAsString(): string
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$code](#code) |  |  |
| [$file](#file) | string |  |
| [$line](#line) | int |  |
| [$message](#message) |  |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [\_\_toString()](/docs/xml/sitemap/invalid\-sitemap\-exception/to\-string.md) |  |
| [\_\_wakeup()](/docs/xml/sitemap/invalid\-sitemap\-exception/wakeup.md) |  |
| [getCode()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-code.md) |  |
| [getFile()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-file.md) |  |
| [getLine()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-line.md) |  |
| [getMessage()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-message.md) |  |
| [getName()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-name.md) |  |
| [getPrevious()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-previous.md) |  |
| [getTrace()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-trace.md) |  |
| [getTraceAsString()](/docs/xml/sitemap/invalid\-sitemap\-exception/get\-trace\-as\-string.md) |  |

## Property Details

### Protected

<a id="code"></a>

#### $code

```php
protected $code = 0;
```

<a id="file"></a>

#### $file

```php
protected string $file = '';
```

<a id="line"></a>

#### $line

```php
protected int $line = 0;
```

<a id="message"></a>

#### $message

```php
protected $message = '';
```

## Method Details

### Public

<a id="to\-string"></a>

#### \_\_toString

```php
public function __toString(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string |  |

<a id="wakeup"></a>

#### \_\_wakeup

```php
public function __wakeup()
```

<a id="get\-code"></a>

#### getCode

```php
final public function getCode()
```

<a id="get\-file"></a>

#### getFile

```php
final public function getFile(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string |  |

<a id="get\-line"></a>

#### getLine

```php
final public function getLine(): int
```

##### Returns

| Type | Description |
| :--- | :--- |
| int |  |

<a id="get\-message"></a>

#### getMessage

```php
final public function getMessage(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string |  |

<a id="get\-name"></a>

#### getName

```php
public function getName(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A user-friendly name of this exception. |

<a id="get\-previous"></a>

#### getPrevious

```php
final public function getPrevious(): ?\Throwable
```

##### Returns

| Type | Description |
| :--- | :--- |
| ?\\Throwable |  |

<a id="get\-trace"></a>

#### getTrace

```php
final public function getTrace(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array |  |

<a id="get\-trace\-as\-string"></a>

#### getTraceAsString

```php
final public function getTraceAsString(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string |  |