# Class \Xlient\Doc\Php\DocComment

Handles parsing a PHPDoc comment.

## Constructor

```php
public function __construct(string $docComment)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $docComment | string | A PHPDoc comment. |

## Class Synopsis
```php
class DocComment
{
    /* Properties */
    private string $docComment
    private \PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocNode $node

    /* Methods */
    public function getDescription(): ?string
    public function getDocComment(): string
    public function getParamTagValues(): array
    public function getReturnTagValues(): array
    public function getSummary(): ?string
    public function getThrowsTagValues(): array
    public function getVarTagValues(): array
    public function isDeprecated(): bool
    public function isGenerated(): bool
    public function isInternal(): bool
    private function getText(): array
}
```

## Properties

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$docComment](#doc\-comment) | string |  |
| [$node](#node) | \\PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDescription()](/docs/doc/php/doc\-comment/get\-description.md) | Gets the description text of the PHPDoc comment. |
| [getDocComment()](/docs/doc/php/doc\-comment/get\-doc\-comment.md) | Gets the original PHPDoc comment string. |
| [getParamTagValues()](/docs/doc/php/doc\-comment/get\-param\-tag\-values.md) | Gets all \@param tag values from the PHPDoc comment. |
| [getReturnTagValues()](/docs/doc/php/doc\-comment/get\-return\-tag\-values.md) | Gets all \@return tag values from the PHPDoc comment. |
| [getSummary()](/docs/doc/php/doc\-comment/get\-summary.md) | Gets the summary text of the PHPDoc comment. |
| [getThrowsTagValues()](/docs/doc/php/doc\-comment/get\-throws\-tag\-values.md) | Gets all \@throws tag values from the PHPDoc comment. |
| [getVarTagValues()](/docs/doc/php/doc\-comment/get\-var\-tag\-values.md) | Gets all \@var tag values from the PHPDoc comment. |
| [isDeprecated()](/docs/doc/php/doc\-comment/is\-deprecated.md) | Gets whether or not an \@deprecated tag value is present in the PHPDoc comment. |
| [isGenerated()](/docs/doc/php/doc\-comment/is\-generated.md) | Gets whether or not an \@generated tag value is present in the PHPDoc comment. |
| [isInternal()](/docs/doc/php/doc\-comment/is\-internal.md) | Gets whether or not an \@internal tag value is present in the PHPDoc comment. |

### Private

| Name | Description |
| :--- | :--- |
| [getText()](/docs/doc/php/doc\-comment/get\-text.md) | Gets all text non tagged text from the PHPDoc comment. |

## Property Details

### Private

<a id="doc-comment"></a>

#### $docComment

```php
private string $docComment
```

<a id="node"></a>

#### $node

A PHPStan PHPDoc node.

```php
private \PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocNode $node
```

## Method Details

### Public

<a id="get-description"></a>

#### getDescription

Gets the description text of the PHPDoc comment.

```php
public function getDescription(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | The description text or null if not present. |

<a id="get-doc-comment"></a>

#### getDocComment

Gets the original PHPDoc comment string.

```php
public function getDocComment(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get-param-tag-values"></a>

#### getParamTagValues

Gets all \@param tag values from the PHPDoc comment.

```php
public function getParamTagValues(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ParamTagValueNode\> | An array of \@param tag values. |

<a id="get-return-tag-values"></a>

#### getReturnTagValues

Gets all \@return tag values from the PHPDoc comment.

```php
public function getReturnTagValues(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ReturnTagValueNode\> | An array of \@return tag values. |

<a id="get-summary"></a>

#### getSummary

Gets the summary text of the PHPDoc comment.

```php
public function getSummary(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | The summary text or null if not present. |

<a id="get-throws-tag-values"></a>

#### getThrowsTagValues

Gets all \@throws tag values from the PHPDoc comment.

```php
public function getThrowsTagValues(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ThrowsTagValueNode\> | An array of \@throws tag values. |

<a id="get-var-tag-values"></a>

#### getVarTagValues

Gets all \@var tag values from the PHPDoc comment.

```php
public function getVarTagValues(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<VarTagValueNode\> | An array of \@var tag values. |

<a id="is-deprecated"></a>

#### isDeprecated

Gets whether or not an \@deprecated tag value is present in the PHPDoc comment.

```php
public function isDeprecated(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if present, false otherwise. |

<a id="is-generated"></a>

#### isGenerated

Gets whether or not an \@generated tag value is present in the PHPDoc comment.

```php
public function isGenerated(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if present, false otherwise. |

<a id="is-internal"></a>

#### isInternal

Gets whether or not an \@internal tag value is present in the PHPDoc comment.

```php
public function isInternal(): bool
```

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if present, false otherwise. |

### Private

<a id="get-text"></a>

#### getText

Gets all text non tagged text from the PHPDoc comment.

```php
private function getText(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpDocTextNode\> | An array of text from the PHPDoc comment. |