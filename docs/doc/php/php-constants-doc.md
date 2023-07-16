# Class \Xlient\Doc\Php\PhpConstantsDoc

Generates documentation for PHP constants.

| Name | Value |
| :--- | :--- |
| Extends | [\Xlient\Doc\Php\AbstractPhpDoc](/docs/doc/php/abstract\-php\-doc.md) |

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
class PhpConstantsDoc extends \Xlient\Doc\Php\AbstractPhpDoc
{
    /* Properties */
    protected \Xlient\Doc\Php\Configuration $config
    protected array $constants = [];
    protected string $destDir
    protected \Xlient\Doc\Php\PhpFileMeta $meta

    /* Methods */
    public function add(\Xlient\Doc\Php\PhpConstant $constant): static
    public function getDocComment(): ?string
    public function getName(): string
    public function make(): array
    public function makeConstantDetails(): array
    public function makeConstants(): array
    public function makeConstantsTable(): array
    public function makeSynopsis(): array
    public function makeSynopsisMeta(): array
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
    protected function getConstantData(
        \Xlient\Doc\Php\PhpConstant $constant,
    ): object
    protected function getConstantDefinition(
        \Xlient\Doc\Php\PhpConstant $constant,
    ): string
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
    protected function makeConstantsDescription(): array
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
    protected function makeName(): array
    protected function makeProperty(
        \ReflectionProperty $property,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function removeIgnoreableReflectors(array $reflectors): array
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$constants](#constants) | array |  |
| [$destDir](#dest\-dir) | string |  |
| [$meta](#meta) | \\Xlient\\Doc\\Php\\PhpFileMeta |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [add()](/docs/doc/php/php\-constants\-doc/add.md) | Adds a constant to this documentation file. |
| [getDocComment()](/docs/doc/php/php\-constants\-doc/get\-doc\-comment.md) | Gets the PHPDoc comment associated with this documentation item. |
| [getName()](/docs/doc/php/php\-constants\-doc/get\-name.md) | Gets the fully qualified name of this documentation item. |
| [make()](/docs/doc/php/php\-constants\-doc/make.md) | Generates all documentation files for this documentation item. |
| [makeConstantDetails()](/docs/doc/php/php\-constants\-doc/make\-constant\-details.md) | Generates markdown for more detailed information about the constants in this documentation file. |
| [makeConstants()](/docs/doc/php/php\-constants\-doc/make\-constants.md) | Generates markdown for a list of constants contained in this documentation file. |
| [makeConstantsTable()](/docs/doc/php/php\-constants\-doc/make\-constants\-table.md) | Generates markdown for a list of constants contained in this documentation file in a table format. |
| [makeSynopsis()](/docs/doc/php/php\-constants\-doc/make\-synopsis.md) | Generates markdown for a code snyopsis of this documentation file. |
| [makeSynopsisMeta()](/docs/doc/php/php\-constants\-doc/make\-synopsis\-meta.md) | Generates meta JSON files to allow for linking in code sysnopsis after syntax highlighting. |
| [setDocComment()](/docs/doc/php/php\-constants\-doc/set\-doc\-comment.md) | Sets the PHPDoc comment associated with this documentation item. |

### Protected

| Name | Description |
| :--- | :--- |
| [getAnchor()](/docs/doc/php/php\-constants\-doc/get\-anchor.md) | Gets an anchor from a fully qualified name. |
| [getClassCaseDefinition()](/docs/doc/php/php\-constants\-doc/get\-class\-case\-definition.md) | Gets a PHP code definition for the specified enumeration case reflector. |
| [getClassConstantDefinition()](/docs/doc/php/php\-constants\-doc/get\-class\-constant\-definition.md) | Gets a PHP code definition for the specified class constnat reflector. |
| [getClassDefinition()](/docs/doc/php/php\-constants\-doc/get\-class\-definition.md) | Gets a PHP code definition for the specified class reflector. |
| [getClassFilename()](/docs/doc/php/php\-constants\-doc/get\-class\-filename.md)<br>_Internal_ | Gets a filename from the specified fully qualified name, prefix and suffix. |
| [getClassInterfaces()](/docs/doc/php/php\-constants\-doc/get\-class\-interfaces.md) | Gets an array of fully qualified interface names implemented by the class of the class reflector. |
| [getClassReflectionConstants()](/docs/doc/php/php\-constants\-doc/get\-class\-reflection\-constants.md) | Gets an array of class constant reflectors that exist in the specified class reflector. |
| [getClassReflectionMethods()](/docs/doc/php/php\-constants\-doc/get\-class\-reflection\-methods.md) | Gets an array of method reflectors that exist in the specified class reflector. |
| [getClassReflectionProperties()](/docs/doc/php/php\-constants\-doc/get\-class\-reflection\-properties.md) | Gets an array of property reflectors that exist in the specified class reflector. |
| [getConstantData()](/docs/doc/php/php\-constants\-doc/get\-constant\-data.md) | Gets the markdown encoded name, description, url, and marks of the specified function. |
| [getConstantDefinition()](/docs/doc/php/php\-constants\-doc/get\-constant\-definition.md) | Gets a PHP code definition of the specified constant. |
| [getDefaultParameterValues()](/docs/doc/php/php\-constants\-doc/get\-default\-parameter\-values.md) | Gets an array of default function or method parameter values. |
| [getDirPath()](/docs/doc/php/php\-constants\-doc/get\-dir\-path.md) | Gets a directory path for the specified fully qualified name. |
| [getExternalUrl()](/docs/doc/php/php\-constants\-doc/get\-external\-url.md) | Gets an external URL for the specified fully qualified name if one can be determined. |
| [getFile()](/docs/doc/php/php\-constants\-doc/get\-file.md) | Gets a file for the specified fully qualified name. |
| [getFilename()](/docs/doc/php/php\-constants\-doc/get\-filename.md) | Gets a filename from the specified fully qualified name. |
| [getFunctionDefinition()](/docs/doc/php/php\-constants\-doc/get\-function\-definition.md) | Gets a PHP code definition for the specified function or method reflector. |
| [getFunctionParameterData()](/docs/doc/php/php\-constants\-doc/get\-function\-parameter\-data.md) | Gets the markdown encoded name, type, and description of the specified function parameter. |
| [getFunctionReturnData()](/docs/doc/php/php\-constants\-doc/get\-function\-return\-data.md) | Gets the markdown encoded type, and description of the specified function return. |
| [getPropertyDefinition()](/docs/doc/php/php\-constants\-doc/get\-property\-definition.md) | Gets a PHP code definition for the specified property reflector. |
| [getTypeDefinition()](/docs/doc/php/php\-constants\-doc/get\-type\-definition.md) | Gets a PHP code definition for the specified type. |
| [getTypeDefinitionFromValue()](/docs/doc/php/php\-constants\-doc/get\-type\-definition\-from\-value.md) | Gets a type definition of the specified value. |
| [getUrl()](/docs/doc/php/php\-constants\-doc/get\-url.md) | Gets a URL for the specified fully qualified name. |
| [getUrlPath()](/docs/doc/php/php\-constants\-doc/get\-url\-path.md) | Gets a URL path from the specified fully qualified name. |
| [inheritDocComment()](/docs/doc/php/php\-constants\-doc/inherit\-doc\-comment.md) | Handles inheriting PHPDoc comments when @inheritDoc is present. |
| [makeCase()](/docs/doc/php/php\-constants\-doc/make\-case.md) | Generates markdown for an enum case definition. |
| [makeConstant()](/docs/doc/php/php\-constants\-doc/make\-constant.md) | Generates markdown for a constant definition. |
| [makeConstantsDescription()](/docs/doc/php/php\-constants\-doc/make\-constants\-description.md) | Generates markdown for the description of this documentation file. |
| [makeDescription()](/docs/doc/php/php\-constants\-doc/make\-description.md) | Generates markdown for a PHPDoc comment's summary and description. |
| [makeFunction()](/docs/doc/php/php\-constants\-doc/make\-function.md) | Generates markdown for a function or class method definition. |
| [makeFunctionParameters()](/docs/doc/php/php\-constants\-doc/make\-function\-parameters.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment. |
| [makeFunctionParametersTable()](/docs/doc/php/php\-constants\-doc/make\-function\-parameters\-table.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment in a table format. |
| [makeFunctionReturn()](/docs/doc/php/php\-constants\-doc/make\-function\-return.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment. |
| [makeFunctionReturnTable()](/docs/doc/php/php\-constants\-doc/make\-function\-return\-table.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment in a table format. |
| [makeFunctionThrows()](/docs/doc/php/php\-constants\-doc/make\-function\-throws.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment. |
| [makeFunctionThrowsTable()](/docs/doc/php/php\-constants\-doc/make\-function\-throws\-table.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment in a table format. |
| [makeMarkLabels()](/docs/doc/php/php\-constants\-doc/make\-mark\-labels.md) | Generates markdown for labels when certain PHPDoc tags are present in a PHPDoc comment. |
| [makeName()](/docs/doc/php/php\-constants\-doc/make\-name.md) | Generates markdown for the name of this document. |
| [makeProperty()](/docs/doc/php/php\-constants\-doc/make\-property.md) | Generates markdown for a property definition. |
| [removeIgnoreableReflectors()](/docs/doc/php/php\-constants\-doc/remove\-ignoreable\-reflectors.md) | Removes any reflectors from the specified array that the current configuration indicates should be removed. |

## Property Details

### Protected

<a id="config"></a>

#### $config

```php
protected \Xlient\Doc\Php\Configuration $config
```

<a id="constants"></a>

#### $constants

```php
protected array $constants = [];
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

## Method Details

### Public

<a id="add"></a>

#### add

Adds a constant to this documentation file.

```php
public function add(\Xlient\Doc\Php\PhpConstant $constant): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | PhpConstant | A constant to add. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

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
public function make(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |

<a id="make\-constant\-details"></a>

#### makeConstantDetails

Generates markdown for more detailed information about the constants in this documentation file.

```php
public function makeConstantDetails(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-constants"></a>

#### makeConstants

Generates markdown for a list of constants contained in this documentation file.

```php
public function makeConstants(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-constants\-table"></a>

#### makeConstantsTable

Generates markdown for a list of constants contained in this documentation file in a table format.

```php
public function makeConstantsTable(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-synopsis"></a>

#### makeSynopsis

Generates markdown for a code snyopsis of this documentation file.

```php
public function makeSynopsis(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make\-synopsis\-meta"></a>

#### makeSynopsisMeta

Generates meta JSON files to allow for linking in code sysnopsis after syntax highlighting.

```php
public function makeSynopsisMeta(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of meta JSON files. |

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

<a id="get\-constant\-data"></a>

#### getConstantData

Gets the markdown encoded name, description, url, and marks of the specified function.

```php
protected function getConstantData(
    \Xlient\Doc\Php\PhpConstant $constant,
): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | PhpConstant | A Xlient php constant object. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of constant data. |

<a id="get\-constant\-definition"></a>

#### getConstantDefinition

Gets a PHP code definition of the specified constant.

```php
protected function getConstantDefinition(
    \Xlient\Doc\Php\PhpConstant $constant,
): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | PhpConstant | A constant. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A PHP code definition. |

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

<a id="make\-constants\-description"></a>

#### makeConstantsDescription

Generates markdown for the description of this documentation file.

```php
protected function makeConstantsDescription(): array
```

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

<a id="make\-name"></a>

#### makeName

Generates markdown for the name of this document.

```php
protected function makeName(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

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