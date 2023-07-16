# Class \Xlient\Doc\Php\InheritDoc

Handles \@inheritDoc in PHPDoc comments.

## Constructor

```php
public function __construct(\Reflector $reflector, ?string $docComment)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | Reflector | A reflector. |
| $docComment | \(string \| null\) | A PHPDoc comment. |

## Class Synopsis
```php
class InheritDoc
{
    /* Properties */
    private ?string $docComment
    private \Reflector $reflector

    /* Methods */
    public function getDocComment(): string
    protected function getClassConstantDocComment(
        \ReflectionClassConstant $reflector,
        string $docComment,
    ): string
    protected function getClassDocComment(
        \ReflectionClass $reflector,
        string $docComment,
    ): string
    protected function getMethodDocComment(
        \ReflectionMethod $reflector,
        string $docComment,
    ): string
    protected function getParentClass(
        \ReflectionClass $reflector,
    ): ?\ReflectionClass
    protected function getParentClassConstant(
        \ReflectionClassConstant $reflector,
    ): ?\ReflectionClassConstant
    protected function getParentMethod(
        \ReflectionMethod $reflector,
    ): ?\ReflectionMethod
    protected function getParentProperty(
        \ReflectionProperty $reflector,
    ): ?\ReflectionProperty
    protected function getPropertyDocComment(
        \ReflectionProperty $reflector,
        string $docComment,
    ): string
    protected function isInheritOnly(string $docComment): bool
    private function mergeDocComments(
        string $parentDocComment,
        string $docComment,
    ): string
}
```

## Properties

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$docComment](#doc\-comment) | ?string |  |
| [$reflector](#reflector) | \\Reflector |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDocComment()](/docs/doc/php/inherit\-doc/get\-doc\-comment.md) | Gets a PHPDoc comment with \@inheritDoc replaced accordingly. |

### Protected

| Name | Description |
| :--- | :--- |
| [getClassConstantDocComment()](/docs/doc/php/inherit\-doc/get\-class\-constant\-doc\-comment.md) | Gets a class constant PHPDoc comment with \@inheritDoc replaced accordingly. |
| [getClassDocComment()](/docs/doc/php/inherit\-doc/get\-class\-doc\-comment.md) | Gets a class PHPDoc comment with \@inheritDoc replaced accordingly. |
| [getMethodDocComment()](/docs/doc/php/inherit\-doc/get\-method\-doc\-comment.md) | Gets a method PHPDoc comment with \@inheritDoc replaced accordingly. |
| [getParentClass()](/docs/doc/php/inherit\-doc/get\-parent\-class.md) | Gets the parent class reflector of the specified class reflector. |
| [getParentClassConstant()](/docs/doc/php/inherit\-doc/get\-parent\-class\-constant.md) | Gets the parent class constant reflector of the specified class constant reflector. |
| [getParentMethod()](/docs/doc/php/inherit\-doc/get\-parent\-method.md) | Gets the parent method reflector of the specified method reflector. |
| [getParentProperty()](/docs/doc/php/inherit\-doc/get\-parent\-property.md) | Gets the parent property reflector of the specified property reflector. |
| [getPropertyDocComment()](/docs/doc/php/inherit\-doc/get\-property\-doc\-comment.md) | Gets a property PHPDoc comment with \@inheritDoc replaced accordingly. |
| [isInheritOnly()](/docs/doc/php/inherit\-doc/is\-inherit\-only.md) | Gets whether or not the specified PHPDoc comment is made up of a single \@inheritDoc tag. |

### Private

| Name | Description |
| :--- | :--- |
| [mergeDocComments()](/docs/doc/php/inherit\-doc/merge\-doc\-comments.md) | Merges two PHPDoc comments together. |

## Property Details

### Private

<a id="doc-comment"></a>

#### $docComment

```php
private ?string $docComment
```

<a id="reflector"></a>

#### $reflector

```php
private \Reflector $reflector
```

## Method Details

### Public

<a id="get-doc-comment"></a>

#### getDocComment

Gets a PHPDoc comment with \@inheritDoc replaced accordingly.

```php
public function getDocComment(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

### Protected

<a id="get-class-constant-doc-comment"></a>

#### getClassConstantDocComment

Gets a class constant PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getClassConstantDocComment(
    \ReflectionClassConstant $reflector,
    string $docComment,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClassConstant | A class constant reflector. |
| $docComment | string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get-class-doc-comment"></a>

#### getClassDocComment

Gets a class PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getClassDocComment(
    \ReflectionClass $reflector,
    string $docComment,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClass | A class reflector. |
| $docComment | string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get-method-doc-comment"></a>

#### getMethodDocComment

Gets a method PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getMethodDocComment(
    \ReflectionMethod $reflector,
    string $docComment,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionMethod | A method reflector. |
| $docComment | string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="get-parent-class"></a>

#### getParentClass

Gets the parent class reflector of the specified class reflector.

```php
protected function getParentClass(
    \ReflectionClass $reflector,
): ?\ReflectionClass
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClass | A class reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionClass \| null\) | A class reflector or null if no parents. |

<a id="get-parent-class-constant"></a>

#### getParentClassConstant

Gets the parent class constant reflector of the specified class constant reflector.

```php
protected function getParentClassConstant(
    \ReflectionClassConstant $reflector,
): ?\ReflectionClassConstant
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionClassConstant | A class constant reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionClassConstant \| null\) | A class constant reflector or null if no parents. |

<a id="get-parent-method"></a>

#### getParentMethod

Gets the parent method reflector of the specified method reflector.

```php
protected function getParentMethod(
    \ReflectionMethod $reflector,
): ?\ReflectionMethod
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionMethod | A method reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionMethod \| null\) | A method reflector or null if no parents. |

<a id="get-parent-property"></a>

#### getParentProperty

Gets the parent property reflector of the specified property reflector.

```php
protected function getParentProperty(
    \ReflectionProperty $reflector,
): ?\ReflectionProperty
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionProperty | A property reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(ReflectionProperty \| null\) | A property reflector or null if no parents. |

<a id="get-property-doc-comment"></a>

#### getPropertyDocComment

Gets a property PHPDoc comment with \@inheritDoc replaced accordingly.

```php
protected function getPropertyDocComment(
    \ReflectionProperty $reflector,
    string $docComment,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | ReflectionProperty | A property reflector. |
| $docComment | string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="is-inherit-only"></a>

#### isInheritOnly

Gets whether or not the specified PHPDoc comment is made up of a single \@inheritDoc tag.

```php
protected function isInheritOnly(string $docComment): bool
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $docComment | string | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| bool | True if the PHPDoc comment is made up of a single \@inheritDoc tag, false otherwise. |

### Private

<a id="merge-doc-comments"></a>

#### mergeDocComments

Merges two PHPDoc comments together.

Any information in the parent comment not overriden in the child will be inherited.

```php
private function mergeDocComments(
    string $parentDocComment,
    string $docComment,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $parentDocComment | string | A PHPDoc comment of the parent. |
| $docComment | string | A PHPDoc comment of the child. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A merged PHPDoc comment. |