# Class \Xlient\Doc\Php\PhpFunction

A basic representation of a PHP function and its corresponding PHPDoc comment.

## Constructor

```php
public function __construct(string $name)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name of a function. |

## Class Synopsis
```php
class PhpFunction
{
    /* Properties */
    private ?string $docComment = NULL;
    private string $name
    private \ReflectionFunction $reflector

    /* Methods */
    public function getDocComment(): ?string
    public function getName(): string
    public function getReflection(): \ReflectionFunction
    public function setDocComment(?string $value): static
}
```

## Properties

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$docComment](#doc\-comment) | ?string |  |
| [$name](#name) | string |  |
| [$reflector](#reflector) | \\ReflectionFunction |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDocComment()](/docs/doc/php/php\-function/get\-doc\-comment.md) | Gets the PHPDoc comment of this function. |
| [getName()](/docs/doc/php/php\-function/get\-name.md) | Gets the fully qualified name of this function. |
| [getReflection()](/docs/doc/php/php\-function/get\-reflection.md) | Gets a reflector instance of this function. |
| [setDocComment()](/docs/doc/php/php\-function/set\-doc\-comment.md) | Sets the PHPDoc comment of this function. |

## Property Details

### Private

<a id="doc\-comment"></a>

#### $docComment

```php
private ?string $docComment = NULL;
```

<a id="name"></a>

#### $name

```php
private string $name
```

<a id="reflector"></a>

#### $reflector

```php
private \ReflectionFunction $reflector
```

## Method Details

### Public

<a id="get\-doc\-comment"></a>

#### getDocComment

Gets the PHPDoc comment of this function.

```php
public function getDocComment(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get\-name"></a>

#### getName

Gets the fully qualified name of this function.

```php
public function getName(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | The fully qualified name of this function. |

<a id="get\-reflection"></a>

#### getReflection

Gets a reflector instance of this function.

```php
public function getReflection(): \ReflectionFunction
```

##### Returns

| Type | Description |
| :--- | :--- |
| ReflectionFunction | A reflector instance of this function. |

<a id="set\-doc\-comment"></a>

#### setDocComment

Sets the PHPDoc comment of this function.

```php
public function setDocComment(?string $value): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | ?string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |