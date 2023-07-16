# Class \Xlient\Doc\Php\AbstractPhpDoc

A partial documentation file implementation that all others inherit from.

## Constructor

```php
public function __construct(
    string $name,
    string $destDir,
    \Xlient\Doc\Php\Configuration $config,
    \Xlient\Doc\Php\PhpFileMeta $meta,
)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name. |
| $destDir | string | The destination directory to save documentation files. |
| $config | Configuration | The configuration to use to generate the documentation. |
| $meta | PhpFileMeta | A meta class for storing additional information about a PHP file. |

## Class Synopsis
```php
abstract class AbstractPhpDoc
{
    /* Properties */
    protected \Xlient\Doc\Php\Configuration $config
    protected string $destDir
    protected \Xlient\Doc\Php\PhpFileMeta $meta
    private ?string $docComment = NULL;
    private string $name

    /* Methods */
    public function getDocComment(): ?string
    public function getName(): string
    abstract public function make(): array
    public function setDocComment(?string $value): static
    protected function getAnchor(string $name): string
    protected function getClassCaseDefinition(\ReflectionEnumUnitCase $case): string
    protected function getClassConstantDefinition(
        \ReflectionClassConstant $constant,
    ): string
    protected function getClassDefinition(\ReflectionClass $class): string
    protected function getClassFilename(
        string $name,
        string $prefix = '',
        string $suffix = '',
    ): string
    protected function getClassInterfaces(\ReflectionClass $class): array
    protected function getClassReflectionConstants(
        \ReflectionClass $class,
        int $filter = 0,
    ): array
    protected function getClassReflectionMethods(
        \ReflectionClass $class,
        int $filter = 0,
    ): array
    protected function getClassReflectionProperties(
        \ReflectionClass $class,
        int $filter = 0,
    ): array
    protected function getDefaultParameterValues(
        \ReflectionFunction|\ReflectionMethod $function,
    ): array
    protected function getDirPath(?string $name = null): string
    protected function getExternalUrl(string $name): ?string
    protected function getFile(?string $name = null): string
    protected function getFilename(?string $name = null): string
    protected function getFunctionDefinition(
        \ReflectionFunction|\ReflectionMethod $function,
    ): string
    protected function getFunctionParameterData(
        \ReflectionParameter $parameter,
        array $tags,
    ): object
    protected function getFunctionReturnData(
        \ReflectionFunction|\ReflectionMethod $function,
        ?\PHPStan\PhpDocParser\Ast\PhpDoc\ReturnTagValueNode $tag,
    ): object
    protected function getPropertyDefinition(\ReflectionProperty $property): string
    protected function getTypeDefinition(\ReflectionType $type): string
    protected function getTypeDefinitionFromValue(mixed $value): string
    protected function getUrl(?string $name = null): ?string
    protected function getUrlPath(?string $name): string
    protected function inheritDocComment(
        \Reflector $reflector,
        ?string $docComment = null,
    ): string
    protected function makeCase(
        \ReflectionEnumUnitCase $case,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makeConstant(
        \ReflectionClassConstant $constant,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makeDescription(
        ?string $summary,
        ?string $description,
    ): ?string
    protected function makeFunction(
        \ReflectionFunction|\ReflectionMethod $function,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makeFunctionParameters(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeFunctionParametersTable(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeFunctionReturn(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeFunctionReturnTable(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeFunctionThrows(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeFunctionThrowsTable(
        \ReflectionFunction|\ReflectionMethod $function,
        \Xlient\Doc\Php\DocComment $docComment,
        int $headingDepth,
    ): array
    protected function makeMarkLabels(
        \Xlient\Doc\Php\DocComment $docComment,
    ): ?string
    protected function makeProperty(
        \ReflectionProperty $property,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function removeIgnoreableReflectors(array $reflectors): array
    private function getNameFromType(\ReflectionNamedType $type): string
    private function sortTypes(array $types): array
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$destDir](#dest\-dir) | string |  |
| [$meta](#meta) | \\Xlient\\Doc\\Php\\PhpFileMeta |  |

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$docComment](#doc\-comment) | ?string |  |
| [$name](#name) | string |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDocComment()](/docs/doc/php/abstract\-php\-doc/get\-doc\-comment.md) | Gets the PHPDoc comment associated with this documentation item. |
| [getName()](/docs/doc/php/abstract\-php\-doc/get\-name.md) | Gets the fully qualified name of this documentation item. |
| [make()](/docs/doc/php/abstract\-php\-doc/make.md) | Generates all documentation files for this documentation item. |
| [setDocComment()](/docs/doc/php/abstract\-php\-doc/set\-doc\-comment.md) | Sets the PHPDoc comment associated with this documentation item. |

### Protected

| Name | Description |
| :--- | :--- |
| [getAnchor()](/docs/doc/php/abstract\-php\-doc/get\-anchor.md) | Gets an anchor from a fully qualified name. |
| [getClassCaseDefinition()](/docs/doc/php/abstract\-php\-doc/get\-class\-case\-definition.md) | Gets a PHP code definition for the specified enumeration case reflector. |
| [getClassConstantDefinition()](/docs/doc/php/abstract\-php\-doc/get\-class\-constant\-definition.md) | Gets a PHP code definition for the specified class constnat reflector. |
| [getClassDefinition()](/docs/doc/php/abstract\-php\-doc/get\-class\-definition.md) | Gets a PHP code definition for the specified class reflector. |
| [getClassFilename()](/docs/doc/php/abstract\-php\-doc/get\-class\-filename.md)<br>_Internal_ | Gets a filename from the specified fully qualified name, prefix and suffix. |
| [getClassInterfaces()](/docs/doc/php/abstract\-php\-doc/get\-class\-interfaces.md) | Gets an array of fully qualified interface names implemented by the class of the class reflector. |
| [getClassReflectionConstants()](/docs/doc/php/abstract\-php\-doc/get\-class\-reflection\-constants.md) | Gets an array of class constant reflectors that exist in the specified class reflector. |
| [getClassReflectionMethods()](/docs/doc/php/abstract\-php\-doc/get\-class\-reflection\-methods.md) | Gets an array of method reflectors that exist in the specified class reflector. |
| [getClassReflectionProperties()](/docs/doc/php/abstract\-php\-doc/get\-class\-reflection\-properties.md) | Gets an array of property reflectors that exist in the specified class reflector. |
| [getDefaultParameterValues()](/docs/doc/php/abstract\-php\-doc/get\-default\-parameter\-values.md) | Gets an array of default function or method parameter values. |
| [getDirPath()](/docs/doc/php/abstract\-php\-doc/get\-dir\-path.md) | Gets a directory path for the specified fully qualified name. |
| [getExternalUrl()](/docs/doc/php/abstract\-php\-doc/get\-external\-url.md) | Gets an external URL for the specified fully qualified name if one can be determined. |
| [getFile()](/docs/doc/php/abstract\-php\-doc/get\-file.md) | Gets a file for the specified fully qualified name. |
| [getFilename()](/docs/doc/php/abstract\-php\-doc/get\-filename.md) | Gets a filename from the specified fully qualified name. |
| [getFunctionDefinition()](/docs/doc/php/abstract\-php\-doc/get\-function\-definition.md) | Gets a PHP code definition for the specified function or method reflector. |
| [getFunctionParameterData()](/docs/doc/php/abstract\-php\-doc/get\-function\-parameter\-data.md) | Gets the markdown encoded name, type, and description of the specified function parameter. |
| [getFunctionReturnData()](/docs/doc/php/abstract\-php\-doc/get\-function\-return\-data.md) | Gets the markdown encoded type, and description of the specified function return. |
| [getPropertyDefinition()](/docs/doc/php/abstract\-php\-doc/get\-property\-definition.md) | Gets a PHP code definition for the specified property reflector. |
| [getTypeDefinition()](/docs/doc/php/abstract\-php\-doc/get\-type\-definition.md) | Gets a PHP code definition for the specified type. |
| [getTypeDefinitionFromValue()](/docs/doc/php/abstract\-php\-doc/get\-type\-definition\-from\-value.md) | Gets a type definition of the specified value. |
| [getUrl()](/docs/doc/php/abstract\-php\-doc/get\-url.md) | Gets a URL for the specified fully qualified name. |
| [getUrlPath()](/docs/doc/php/abstract\-php\-doc/get\-url\-path.md) | Gets a URL path from the specified fully qualified name. |
| [inheritDocComment()](/docs/doc/php/abstract\-php\-doc/inherit\-doc\-comment.md) | Handles inheriting PHPDoc comments when @inheritDoc is present. |
| [makeCase()](/docs/doc/php/abstract\-php\-doc/make\-case.md) | Generates markdown for an enum case definition. |
| [makeConstant()](/docs/doc/php/abstract\-php\-doc/make\-constant.md) | Generates markdown for a constant definition. |
| [makeDescription()](/docs/doc/php/abstract\-php\-doc/make\-description.md) | Generates markdown for a PHPDoc comment's summary and description. |
| [makeFunction()](/docs/doc/php/abstract\-php\-doc/make\-function.md) | Generates markdown for a function or class method definition. |
| [makeFunctionParameters()](/docs/doc/php/abstract\-php\-doc/make\-function\-parameters.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment. |
| [makeFunctionParametersTable()](/docs/doc/php/abstract\-php\-doc/make\-function\-parameters\-table.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment in a table format. |
| [makeFunctionReturn()](/docs/doc/php/abstract\-php\-doc/make\-function\-return.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment. |
| [makeFunctionReturnTable()](/docs/doc/php/abstract\-php\-doc/make\-function\-return\-table.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment in a table format. |
| [makeFunctionThrows()](/docs/doc/php/abstract\-php\-doc/make\-function\-throws.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment. |
| [makeFunctionThrowsTable()](/docs/doc/php/abstract\-php\-doc/make\-function\-throws\-table.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment in a table format. |
| [makeMarkLabels()](/docs/doc/php/abstract\-php\-doc/make\-mark\-labels.md) | Generates markdown for labels when certain PHPDoc tags are present in a PHPDoc comment. |
| [makeProperty()](/docs/doc/php/abstract\-php\-doc/make\-property.md) | Generates markdown for a property definition. |
| [removeIgnoreableReflectors()](/docs/doc/php/abstract\-php\-doc/remove\-ignoreable\-reflectors.md) | Removes any reflectors from the specified array that the current configuration indicates should be removed. |

### Private

| Name | Description |
| :--- | :--- |
| [getNameFromType()](/docs/doc/php/abstract\-php\-doc/get\-name\-from\-type.md) | Gets a name from the specified named type. |
| [sortTypes()](/docs/doc/php/abstract\-php\-doc/sort\-types.md) | Sorts types by the configuration's type order. |

## Property Details

### Protected

<a id="config"></a>

#### $config

```php
protected \Xlient\Doc\Php\Configuration $config
```

<a id="dest\-dir"></a>

#### $destDir

```php
protected string $destDir
```

<a id="meta"></a>

#### $meta

```php
protected \Xlient\Doc\Php\PhpFileMeta $meta
```

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

## Method Details

### Public

<a id="get\-doc\-comment"></a>

#### getDocComment

Gets the PHPDoc comment associated with this documentation item.

```php
public function getDocComment(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A PHPDoc comment. |

<a id="get\-name"></a>

#### getName

Gets the fully qualified name of this documentation item.

```php
public function getName(): string
```

##### Returns

| Type | Description |
| :--- | :--- |
| string | A fully qualified name. |

<a id="make"></a>

#### make

Generates all documentation files for this documentation item.

```php
abstract public function make(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |

<a id="set\-doc\-comment"></a>

#### setDocComment

Sets the PHPDoc comment associated with this documentation item.

```php
public function setDocComment(?string $value): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | \(string \| null\) | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

### Protected

<a id="get\-anchor"></a>

#### getAnchor

Gets an anchor from a fully qualified name.

```php
protected function getAnchor(string $name): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | An anchor. |

<a id="get\-class\-case\-definition"></a>

#### getClassCaseDefinition

Gets a PHP code definition for the specified enumeration case reflector.

```php
protected function getClassCaseDefinition(\ReflectionEnumUnitCase $case): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $case | ReflectionEnumUnitCase | An enumeration case reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-class\-constant\-definition"></a>

#### getClassConstantDefinition

Gets a PHP code definition for the specified class constnat reflector.

```php
protected function getClassConstantDefinition(
    \ReflectionClassConstant $constant,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | ReflectionClassConstant | A enum case reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-class\-definition"></a>

#### getClassDefinition

Gets a PHP code definition for the specified class reflector.

```php
protected function getClassDefinition(\ReflectionClass $class): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-class\-filename"></a>

#### getClassFilename

_Internal_

Gets a filename from the specified fully qualified name, prefix and suffix.

```php
protected function getClassFilename(
    string $name,
    string $prefix = '',
    string $suffix = '',
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name. |
| $prefix | string | A value to prepend before the name. |
| $suffix | string | A value to append after the name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A filename. |

<a id="get\-class\-interfaces"></a>

#### getClassInterfaces

Gets an array of fully qualified interface names implemented by the class of the class reflector.

```php
protected function getClassInterfaces(\ReflectionClass $class): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of fully qualified interface names. |

<a id="get\-class\-reflection\-constants"></a>

#### getClassReflectionConstants

Gets an array of class constant reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionConstants(
    \ReflectionClass $class,
    int $filter = 0,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |
| $filter | int | An optional filter for filtering based on access modifiers. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ReflectionClassConstant\> | An array of class constant reflectors. |

<a id="get\-class\-reflection\-methods"></a>

#### getClassReflectionMethods

Gets an array of method reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionMethods(
    \ReflectionClass $class,
    int $filter = 0,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |
| $filter | int | An optional filter for filtering based on access modifiers. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ReflectionMethod\> | An array of method reflectors. |

<a id="get\-class\-reflection\-properties"></a>

#### getClassReflectionProperties

Gets an array of property reflectors that exist in the specified class reflector.

```php
protected function getClassReflectionProperties(
    \ReflectionClass $class,
    int $filter = 0,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | ReflectionClass | A class reflector. |
| $filter | int | An optional filter for filtering based on access modifiers. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<ReflectionProperty\> | An array of property reflectors. |

<a id="get\-default\-parameter\-values"></a>

#### getDefaultParameterValues

Gets an array of default function or method parameter values.

```php
protected function getDefaultParameterValues(
    \ReflectionFunction|\ReflectionMethod $function,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A function reflector to get default parameter values from. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string, \(string \| null\)\> | An array of default parameter values. |

<a id="get\-dir\-path"></a>

#### getDirPath

Gets a directory path for the specified fully qualified name.

If a name is not specified, the documentation file's name will be used.

```php
protected function getDirPath(?string $name = null): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | \(string \| null\) | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A directory path. |

<a id="get\-external\-url"></a>

#### getExternalUrl

Gets an external URL for the specified fully qualified name if one can be determined.

```php
protected function getExternalUrl(string $name): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | An external URL. |

<a id="get\-file"></a>

#### getFile

Gets a file for the specified fully qualified name.

If a name is not speciifed, the documentation file's name will be used.

```php
protected function getFile(?string $name = null): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | \(string \| null\) | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A file. |

<a id="get\-filename"></a>

#### getFilename

Gets a filename from the specified fully qualified name.

If a name is not specified, the documentation file's name will be used.

```php
protected function getFilename(?string $name = null): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | \(string \| null\) | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A filename. |

<a id="get\-function\-definition"></a>

#### getFunctionDefinition

Gets a PHP code definition for the specified function or method reflector.

```php
protected function getFunctionDefinition(
    \ReflectionFunction|\ReflectionMethod $function,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A function or method reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-function\-parameter\-data"></a>

#### getFunctionParameterData

Gets the markdown encoded name, type, and description of the specified function parameter.

```php
protected function getFunctionParameterData(
    \ReflectionParameter $parameter,
    array $tags,
): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $parameter | ReflectionParameter | A parameter reflector. |
| $tags | array\<ParamTagValueNode\> | An array of \@param tag values. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\)\} | An object of function parameter data. |

<a id="get\-function\-return\-data"></a>

#### getFunctionReturnData

Gets the markdown encoded type, and description of the specified function return.

```php
protected function getFunctionReturnData(
    \ReflectionFunction|\ReflectionMethod $function,
    ?\PHPStan\PhpDocParser\Ast\PhpDoc\ReturnTagValueNode $tag,
): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A function reflector. |
| $tag | \(ReturnTagValueNode \| null\) | An \@return tag value. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{type: \(string \| null\), description: \(string \| null\)\} | An object of function return data. |

<a id="get\-property\-definition"></a>

#### getPropertyDefinition

Gets a PHP code definition for the specified property reflector.

```php
protected function getPropertyDefinition(\ReflectionProperty $property): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $property | ReflectionProperty | A property reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-type\-definition"></a>

#### getTypeDefinition

Gets a PHP code definition for the specified type.

```php
protected function getTypeDefinition(\ReflectionType $type): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $type | ReflectionType | A type. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

<a id="get\-type\-definition\-from\-value"></a>

#### getTypeDefinitionFromValue

Gets a type definition of the specified value.

```php
protected function getTypeDefinitionFromValue(mixed $value): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | mixed | The value to get a type from. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A type definition. |

<a id="get\-url"></a>

#### getUrl

Gets a URL for the specified fully qualified name.

If a name is not specified, the documentation file's name will be used.

```php
protected function getUrl(?string $name = null): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | \(string \| null\) | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A URL. |

<a id="get\-url\-path"></a>

#### getUrlPath

Gets a URL path from the specified fully qualified name.

If a name is not specified, the documentation file's name will be used.

```php
protected function getUrlPath(?string $name): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | \(string \| null\) | A fully qualified name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A URL path. |

<a id="inherit\-doc\-comment"></a>

#### inheritDocComment

Handles inheriting PHPDoc comments when @inheritDoc is present.

```php
protected function inheritDocComment(
    \Reflector $reflector,
    ?string $docComment = null,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflector | Reflector | The PHPDoc comment's owner. |
| $docComment | \(string \| null\) | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHPDoc comment. |

<a id="make\-case"></a>

#### makeCase

Generates markdown for an enum case definition.

```php
protected function makeCase(
    \ReflectionEnumUnitCase $case,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $case | ReflectionEnumUnitCase | A reflector for an enum case. |
| $name | \(string \| null\) | An optional name override if not using the name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-constant"></a>

#### makeConstant

Generates markdown for a constant definition.

```php
protected function makeConstant(
    \ReflectionClassConstant $constant,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | ReflectionClassConstant | A reflector for a constant. |
| $name | \(string \| null\) | An optional name override if not using the name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-description"></a>

#### makeDescription

Generates markdown for a PHPDoc comment's summary and description.

```php
protected function makeDescription(
    ?string $summary,
    ?string $description,
): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $summary | \(string \| null\) | The PHPDoc comment summary. |
| $description | \(string \| null\) | The PHPDoc comment description. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A markdown string. |

<a id="make\-function"></a>

#### makeFunction

Generates markdown for a function or class method definition.

```php
protected function makeFunction(
    \ReflectionFunction|\ReflectionMethod $function,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $name | \(string \| null\) | An optional name override if not using the short name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-parameters"></a>

#### makeFunctionParameters

Generates markdown for any \@param statements found in the specified PHPDoc comment.

```php
protected function makeFunctionParameters(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-parameters\-table"></a>

#### makeFunctionParametersTable

Generates markdown for any \@param statements found in the specified PHPDoc comment in a table format.

```php
protected function makeFunctionParametersTable(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-return"></a>

#### makeFunctionReturn

Generates markdown for a \@return statement if found in the specified PHPDoc comment.

```php
protected function makeFunctionReturn(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-return\-table"></a>

#### makeFunctionReturnTable

Generates markdown for a \@return statement if found in the specified PHPDoc comment in a table format.

```php
protected function makeFunctionReturnTable(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-throws"></a>

#### makeFunctionThrows

Generates markdown for any \@throw statements found in the specified PHPDoc comment.

```php
protected function makeFunctionThrows(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-function\-throws\-table"></a>

#### makeFunctionThrowsTable

Generates markdown for any \@throw statements found in the specified PHPDoc comment in a table format.

```php
protected function makeFunctionThrowsTable(
    \ReflectionFunction|\ReflectionMethod $function,
    \Xlient\Doc\Php\DocComment $docComment,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $function | \(ReflectionFunction \| ReflectionMethod\) | A reflector for a function or class method. |
| $docComment | DocComment | A PHPDoc comment. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-mark\-labels"></a>

#### makeMarkLabels

Generates markdown for labels when certain PHPDoc tags are present in a PHPDoc comment.

```php
protected function makeMarkLabels(
    \Xlient\Doc\Php\DocComment $docComment,
): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $docComment | DocComment | A PHPDoc comment. |

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A markdown string or null if no mark tags present. |

<a id="make\-property"></a>

#### makeProperty

Generates markdown for a property definition.

```php
protected function makeProperty(
    \ReflectionProperty $property,
    ?string $name = null,
    int $headingDepth = 0,
    ?string $anchor = null,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $property | ReflectionProperty | A reflector for a property. |
| $name | \(string \| null\) | An optional name override if not using the name provided by the reflector. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |
| $anchor | \(string \| null\) | An anchor to use to link to this function or class method. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="remove\-ignoreable\-reflectors"></a>

#### removeIgnoreableReflectors

Removes any reflectors from the specified array that the current configuration indicates should be removed.

```php
protected function removeIgnoreableReflectors(array $reflectors): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $reflectors | array\<T\> | An array of reflectors. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<T\> | An array of reflectors. |

### Private

<a id="get\-name\-from\-type"></a>

#### getNameFromType

Gets a name from the specified named type.

```php
private function getNameFromType(\ReflectionNamedType $type): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $type | ReflectionNamedType | A named type. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A name. |

<a id="sort\-types"></a>

#### sortTypes

Sorts types by the configuration's type order.

```php
private function sortTypes(array $types): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $types | array\<string\> | An array of types. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | A sorted array of types. |