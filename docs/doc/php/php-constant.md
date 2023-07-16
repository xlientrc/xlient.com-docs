# Class \Xlient\Doc\Php\PhpConstant

A basic representation of a PHP constant and its corresponding PHPDoc comment.

## Constructor

```php
public function __construct(string $name)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name of a constant. |

## Class Synopsis
```php
class PhpConstant
{
    /* Properties */
    protected bool $defined = false;
    protected ?string $definedName = NULL;
    protected ?string $docComment = NULL;
    protected string $name
    protected string $value = 'null';

    /* Methods */
    public function getDefined(): bool
    public function getDefinedName(): ?string
    public function getDocComment(): ?string
    public function getName(): string
    public function getShortName(): string
    public function getValue(): string
    public function setDefined(bool $value): static
    public function setDefinedName(?string $value): static
    public function setDocComment(?string $value): static
    public function setValue(string $value): static
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$defined](#defined) | bool |  |
| [$definedName](#defined\-name) | ?string |  |
| [$docComment](#doc\-comment) | ?string |  |
| [$name](#name) | string |  |
| [$value](#value) | string |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDefined()](/docs/doc/php/php\-constant/get\-defined.md) | Gets whether or not this constant was defined. |
| [getDefinedName()](/docs/doc/php/php\-constant/get\-defined\-name.md) | Gets the defined name value of a defined constant. |
| [getDocComment()](/docs/doc/php/php\-constant/get\-doc\-comment.md) | Gets the PHPDoc comment of this constant. |
| [getName()](/docs/doc/php/php\-constant/get\-name.md) | Gets the fully qualified name of this constant. |
| [getShortName()](/docs/doc/php/php\-constant/get\-short\-name.md) | Gets the short name of this constant. |
| [getValue()](/docs/doc/php/php\-constant/get\-value.md) | Gets the value of this constant. |
| [setDefined()](/docs/doc/php/php\-constant/set\-defined.md) | Sets whether or not this constant was defined. |
| [setDefinedName()](/docs/doc/php/php\-constant/set\-defined\-name.md) | Sets the defined name value of a defiend constant. |
| [setDocComment()](/docs/doc/php/php\-constant/set\-doc\-comment.md) | Sets the PHPDoc comment of this constant. |
| [setValue()](/docs/doc/php/php\-constant/set\-value.md) | Sets the value of this constant. |

## Property Details

### Protected

<a id="defined"></a>

#### $defined

```php
protected bool $defined = false;
```

<a id="defined\-name"></a>

#### $definedName

```php
protected ?string $definedName = NULL;
```

<a id="doc\-comment"></a>

#### $docComment

```php
protected ?string $docComment = NULL;
```

<a id="name"></a>

#### $name

```php
protected string $name
```

<a id="value"></a>

#### $value

```php
protected string $value = 'null';
```

## Method Details

### Public

<a id="get\-defined"></a>

#### getDefined

Gets whether or not this constant was defined.

```php
public function getDefined(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True of this constant was defined, false otherwise. |

<a id="get\-defined\-name"></a>

#### getDefinedName

Gets the defined name value of a defined constant.

```php
public function getDefinedName(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | An originally defined name or null if not a defined constant. |

<a id="get\-doc\-comment"></a>

#### getDocComment

Gets the PHPDoc comment of this constant.

```php
public function getDocComment(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get\-name"></a>

#### getName

Gets the fully qualified name of this constant.

```php
public function getName(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | The fully qualified name of this constant. |

<a id="get\-short\-name"></a>

#### getShortName

Gets the short name of this constant.

```php
public function getShortName(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | The short name of this constant. |

<a id="get\-value"></a>

#### getValue

Gets the value of this constant.

```php
public function getValue(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | The value of this constant. |

<a id="set\-defined"></a>

#### setDefined

Sets whether or not this constant was defined.

```php
public function setDefined(bool $value): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | bool | A value indicating whether or not this constant was defined. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

<a id="set\-defined\-name"></a>

#### setDefinedName

Sets the defined name value of a defiend constant.

```php
public function setDefinedName(?string $value): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | \(string \| null\) | The defined name value. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

<a id="set\-doc\-comment"></a>

#### setDocComment

Sets the PHPDoc comment of this constant.

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

<a id="set\-value"></a>

#### setValue

Sets the value of this constant.

```php
public function setValue(string $value): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | string | A value. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |