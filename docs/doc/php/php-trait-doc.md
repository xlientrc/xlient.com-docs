# Class \Xlient\Doc\Php\PhpTraitDoc

Generates documentation for PHP traits.

| Name | Value |
| :--- | :--- |
| Extends | [\Xlient\Doc\Php\PhpClassDoc](/docs/doc/php/php\-class\-doc.md) » [\Xlient\Doc\Php\AbstractPhpDoc](/docs/doc/php/abstract\-php\-doc.md) |

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
class PhpTraitDoc extends \Xlient\Doc\Php\PhpClassDoc
{
    /* Properties */
    protected \Xlient\Doc\Php\Configuration $config
    protected string $destDir
    protected \Xlient\Doc\Php\PhpFileMeta $meta
    protected \ReflectionClass $reflector

    /* Methods */
    public function getDocComment(): ?string
    public function getName(): string
    public function make(): array
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
    protected function getConstantData(\ReflectionClassConstant $constant): object
    protected function getDefaultParameterValues(
        \ReflectionFunction|\ReflectionMethod $function,
    ): array
    protected function getDirPath(?string $name = null): string
    protected function getExternalMethodUrl(string $class, string $method): ?string
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
    protected function getMethodData(\ReflectionMethod $method): object
    protected function getMethodFile(string $class, string $method): string
    protected function getMethodUrl(string $class, string $method): ?string
    protected function getParentClasses(): array
    protected function getPropertyData(\ReflectionProperty $property): object
    protected function getPropertyDefinition(\ReflectionProperty $property): string
    protected function getTraits(): array
    protected function getTypeDefinition(\ReflectionType $type): string
    protected function getTypeDefinitionFromValue(mixed $value): string
    protected function getUrl(?string $name = null): ?string
    protected function getUrlPath(?string $name): string
    protected function inheritDocComment(
        \Reflector $reflector,
        ?string $docComment = null,
    ): string
    protected function initializeReflector(): void
    protected function makeCase(
        \ReflectionEnumUnitCase $case,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makeClass(): array
    protected function makeClassDescription(): array
    protected function makeConstant(
        \ReflectionClassConstant $constant,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makeConstantDetails(): array
    protected function makeConstantDetailsPartial(
        array $constants,
        int $headingDepth,
    ): array
    protected function makeConstantSynopsis(): array
    protected function makeConstantSynopsisMeta(): array
    protected function makeConstants(): array
    protected function makeConstantsPartial(
        array $constants,
        int $headingDepth,
    ): array
    protected function makeConstantsPartialTable(
        array $constants,
        int $headingDepth,
    ): array
    protected function makeConstructor(): array
    protected function makeDescription(
        ?string $summary,
        ?string $description,
    ): ?string
    protected function makeExtends(): array
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
    protected function makeImplements(): array
    protected function makeMarkLabels(
        \Xlient\Doc\Php\DocComment $docComment,
    ): ?string
    protected function makeMethodDetails(): array
    protected function makeMethodDetailsPartial(
        array $methods,
        int $headingDepth,
    ): array
    protected function makeMethodFiles(): array
    protected function makeMethodSynopsis(): array
    protected function makeMethodSynopsisMeta(): array
    protected function makeMethods(): array
    protected function makeMethodsPartial(array $methods, int $headingDepth): array
    protected function makeMethodsPartialTable(
        array $methods,
        int $headingDepth,
    ): array
    protected function makeName(): array
    protected function makeProperties(): array
    protected function makePropertiesPartial(
        array $properties,
        int $headingDepth,
    ): array
    protected function makePropertiesPartialTable(
        array $properties,
        int $headingDepth,
    ): array
    protected function makeProperty(
        \ReflectionProperty $property,
        ?string $name = null,
        int $headingDepth = 0,
        ?string $anchor = null,
    ): array
    protected function makePropertyDetails(): array
    protected function makePropertyDetailsPartial(
        array $properties,
        int $headingDepth,
    ): array
    protected function makePropertySynopsis(): array
    protected function makePropertySynopsisMeta(): array
    protected function makeSynopsis(): array
    protected function makeUses(): array
    protected function removeIgnoreableReflectors(array $reflectors): array
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$destDir](#dest\-dir) | string |  |
| [$meta](#meta) | \\Xlient\\Doc\\Php\\PhpFileMeta |  |
| [$reflector](#reflector) | ReflectionClass | A class reflector. |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getDocComment()](/docs/doc/php/php\-trait\-doc/get\-doc\-comment.md) | Gets the PHPDoc comment associated with this documentation item. |
| [getName()](/docs/doc/php/php\-trait\-doc/get\-name.md) | Gets the fully qualified name of this documentation item. |
| [make()](/docs/doc/php/php\-trait\-doc/make.md) | Generates all documentation files for this documentation item. |
| [makeSynopsisMeta()](/docs/doc/php/php\-trait\-doc/make\-synopsis\-meta.md) | Generates meta JSON files to allow for linking in code sysnopsis after syntax highlighting. |
| [setDocComment()](/docs/doc/php/php\-trait\-doc/set\-doc\-comment.md) | Sets the PHPDoc comment associated with this documentation item. |

### Protected

| Name | Description |
| :--- | :--- |
| [getAnchor()](/docs/doc/php/php\-trait\-doc/get\-anchor.md) | Gets an anchor from a fully qualified name. |
| [getClassCaseDefinition()](/docs/doc/php/php\-trait\-doc/get\-class\-case\-definition.md) | Gets a PHP code definition for the specified enumeration case reflector. |
| [getClassConstantDefinition()](/docs/doc/php/php\-trait\-doc/get\-class\-constant\-definition.md) | Gets a PHP code definition for the specified class constnat reflector. |
| [getClassDefinition()](/docs/doc/php/php\-trait\-doc/get\-class\-definition.md) | Gets a PHP code definition for the specified class reflector. |
| [getClassFilename()](/docs/doc/php/php\-trait\-doc/get\-class\-filename.md)<br>_Internal_ | Gets a filename from the specified fully qualified name, prefix and suffix. |
| [getClassInterfaces()](/docs/doc/php/php\-trait\-doc/get\-class\-interfaces.md) | Gets an array of fully qualified interface names implemented by the class of the class reflector. |
| [getClassReflectionConstants()](/docs/doc/php/php\-trait\-doc/get\-class\-reflection\-constants.md) | Gets an array of class constant reflectors that exist in the specified class reflector. |
| [getClassReflectionMethods()](/docs/doc/php/php\-trait\-doc/get\-class\-reflection\-methods.md) | Gets an array of method reflectors that exist in the specified class reflector. |
| [getClassReflectionProperties()](/docs/doc/php/php\-trait\-doc/get\-class\-reflection\-properties.md) | Gets an array of property reflectors that exist in the specified class reflector. |
| [getConstantData()](/docs/doc/php/php\-trait\-doc/get\-constant\-data.md) | Gets the markdown encoded name, type, description, url, and marks of the specified constant. |
| [getDefaultParameterValues()](/docs/doc/php/php\-trait\-doc/get\-default\-parameter\-values.md) | Gets an array of default function or method parameter values. |
| [getDirPath()](/docs/doc/php/php\-trait\-doc/get\-dir\-path.md) | Gets a directory path for the specified fully qualified name. |
| [getExternalMethodUrl()](/docs/doc/php/php\-trait\-doc/get\-external\-method\-url.md) | Gets an external URL for the specified class and method name if one can be determined. |
| [getExternalUrl()](/docs/doc/php/php\-trait\-doc/get\-external\-url.md) | Gets an external URL for the specified fully qualified name if one can be determined. |
| [getFile()](/docs/doc/php/php\-trait\-doc/get\-file.md) | Gets a file for the specified fully qualified name. |
| [getFilename()](/docs/doc/php/php\-trait\-doc/get\-filename.md) | Gets a filename from the specified fully qualified name. |
| [getFunctionDefinition()](/docs/doc/php/php\-trait\-doc/get\-function\-definition.md) | Gets a PHP code definition for the specified function or method reflector. |
| [getFunctionParameterData()](/docs/doc/php/php\-trait\-doc/get\-function\-parameter\-data.md) | Gets the markdown encoded name, type, and description of the specified function parameter. |
| [getFunctionReturnData()](/docs/doc/php/php\-trait\-doc/get\-function\-return\-data.md) | Gets the markdown encoded type, and description of the specified function return. |
| [getMethodData()](/docs/doc/php/php\-trait\-doc/get\-method\-data.md) | Gets the markdown encoded name, description, url, and marks of the specified method. |
| [getMethodFile()](/docs/doc/php/php\-trait\-doc/get\-method\-file.md) | Gets a file for the specified class and method name. |
| [getMethodUrl()](/docs/doc/php/php\-trait\-doc/get\-method\-url.md) | Gets a URL for the specified class and method name. |
| [getParentClasses()](/docs/doc/php/php\-trait\-doc/get\-parent\-classes.md) | Gets an array of all parent class names. |
| [getPropertyData()](/docs/doc/php/php\-trait\-doc/get\-property\-data.md) | Gets the markdown encoded name, type, description, url, and marks of the specified property. |
| [getPropertyDefinition()](/docs/doc/php/php\-trait\-doc/get\-property\-definition.md) | Gets a PHP code definition for the specified property reflector. |
| [getTraits()](/docs/doc/php/php\-trait\-doc/get\-traits.md) | Gets an array of all traits used by this class. |
| [getTypeDefinition()](/docs/doc/php/php\-trait\-doc/get\-type\-definition.md) | Gets a PHP code definition for the specified type. |
| [getTypeDefinitionFromValue()](/docs/doc/php/php\-trait\-doc/get\-type\-definition\-from\-value.md) | Gets a type definition of the specified value. |
| [getUrl()](/docs/doc/php/php\-trait\-doc/get\-url.md) | Gets a URL for the specified fully qualified name. |
| [getUrlPath()](/docs/doc/php/php\-trait\-doc/get\-url\-path.md) | Gets a URL path from the specified fully qualified name. |
| [inheritDocComment()](/docs/doc/php/php\-trait\-doc/inherit\-doc\-comment.md) | Handles inheriting PHPDoc comments when @inheritDoc is present. |
| [initializeReflector()](/docs/doc/php/php\-trait\-doc/initialize\-reflector.md) | Initializes a class reflector for the class being documented. |
| [makeCase()](/docs/doc/php/php\-trait\-doc/make\-case.md) | Generates markdown for an enum case definition. |
| [makeClass()](/docs/doc/php/php\-trait\-doc/make\-class.md) | Generates markdown for general information relating to the class being documented. |
| [makeClassDescription()](/docs/doc/php/php\-trait\-doc/make\-class\-description.md) | Generates markdown for the main description of this class documentation file. |
| [makeConstant()](/docs/doc/php/php\-trait\-doc/make\-constant.md) | Generates markdown for a constant definition. |
| [makeConstantDetails()](/docs/doc/php/php\-trait\-doc/make\-constant\-details.md) | Generates markdown for more detailed information about the constants in this class documentation file. |
| [makeConstantDetailsPartial()](/docs/doc/php/php\-trait\-doc/make\-constant\-details\-partial.md) | Generates markdown for more detailed information about the specified constants. |
| [makeConstantSynopsis()](/docs/doc/php/php\-trait\-doc/make\-constant\-synopsis.md) | Generates markdown for a code synopsis of all class constants for this documentation file. |
| [makeConstantSynopsisMeta()](/docs/doc/php/php\-trait\-doc/make\-constant\-synopsis\-meta.md) | Generates meta data relating to class constants to allow for linking in code sysnopsis after syntax highlighting. |
| [makeConstants()](/docs/doc/php/php\-trait\-doc/make\-constants.md) | Generates markdown for a list of constants contained in this class documentation file. |
| [makeConstantsPartial()](/docs/doc/php/php\-trait\-doc/make\-constants\-partial.md) | Generates markdown for the array of specified constants. |
| [makeConstantsPartialTable()](/docs/doc/php/php\-trait\-doc/make\-constants\-partial\-table.md) | Generates markdown for the array of specified constants in a table format. |
| [makeConstructor()](/docs/doc/php/php\-trait\-doc/make\-constructor.md) | Generates markdown for information about the constructor of this class. |
| [makeDescription()](/docs/doc/php/php\-trait\-doc/make\-description.md) | Generates markdown for a PHPDoc comment's summary and description. |
| [makeExtends()](/docs/doc/php/php\-trait\-doc/make\-extends.md) | Generates markdown for what parent classes this class extends. |
| [makeFunction()](/docs/doc/php/php\-trait\-doc/make\-function.md) | Generates markdown for a function or class method definition. |
| [makeFunctionParameters()](/docs/doc/php/php\-trait\-doc/make\-function\-parameters.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment. |
| [makeFunctionParametersTable()](/docs/doc/php/php\-trait\-doc/make\-function\-parameters\-table.md) | Generates markdown for any \@param statements found in the specified PHPDoc comment in a table format. |
| [makeFunctionReturn()](/docs/doc/php/php\-trait\-doc/make\-function\-return.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment. |
| [makeFunctionReturnTable()](/docs/doc/php/php\-trait\-doc/make\-function\-return\-table.md) | Generates markdown for a \@return statement if found in the specified PHPDoc comment in a table format. |
| [makeFunctionThrows()](/docs/doc/php/php\-trait\-doc/make\-function\-throws.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment. |
| [makeFunctionThrowsTable()](/docs/doc/php/php\-trait\-doc/make\-function\-throws\-table.md) | Generates markdown for any \@throw statements found in the specified PHPDoc comment in a table format. |
| [makeImplements()](/docs/doc/php/php\-trait\-doc/make\-implements.md) | Generates markdown for what interfaces this class implements. |
| [makeMarkLabels()](/docs/doc/php/php\-trait\-doc/make\-mark\-labels.md) | Generates markdown for labels when certain PHPDoc tags are present in a PHPDoc comment. |
| [makeMethodDetails()](/docs/doc/php/php\-trait\-doc/make\-method\-details.md) | Generates markdown for more detailed information about the methods in this class documentation file. |
| [makeMethodDetailsPartial()](/docs/doc/php/php\-trait\-doc/make\-method\-details\-partial.md) | Generates markdown for more detailed information about the specified methods. |
| [makeMethodFiles()](/docs/doc/php/php\-trait\-doc/make\-method\-files.md) | Generates documentation files for each method in this class. |
| [makeMethodSynopsis()](/docs/doc/php/php\-trait\-doc/make\-method\-synopsis.md) | Generates markdown for a code synopsis of all methods for this documentation file. |
| [makeMethodSynopsisMeta()](/docs/doc/php/php\-trait\-doc/make\-method\-synopsis\-meta.md) | Generates meta data relating to methods to allow for linking in code sysnopsis after syntax highlighting. |
| [makeMethods()](/docs/doc/php/php\-trait\-doc/make\-methods.md) | Generates markdown for a list of methods contained in this class documentation file. |
| [makeMethodsPartial()](/docs/doc/php/php\-trait\-doc/make\-methods\-partial.md) | Generates markdown for the array of specified methods. |
| [makeMethodsPartialTable()](/docs/doc/php/php\-trait\-doc/make\-methods\-partial\-table.md) | Generates markdown for the array of specified methods in a table format. |
| [makeName()](/docs/doc/php/php\-trait\-doc/make\-name.md) | Generates markdown for the name of this document. |
| [makeProperties()](/docs/doc/php/php\-trait\-doc/make\-properties.md) | Generates markdown for a list of properties contained in this class documentation file. |
| [makePropertiesPartial()](/docs/doc/php/php\-trait\-doc/make\-properties\-partial.md) | Generates markdown for the array of specified properties. |
| [makePropertiesPartialTable()](/docs/doc/php/php\-trait\-doc/make\-properties\-partial\-table.md) | Generates markdown for the array of specified properties in a table format. |
| [makeProperty()](/docs/doc/php/php\-trait\-doc/make\-property.md) | Generates markdown for a property definition. |
| [makePropertyDetails()](/docs/doc/php/php\-trait\-doc/make\-property\-details.md) | Generates markdown for more detailed information about the properties in this class documentation file. |
| [makePropertyDetailsPartial()](/docs/doc/php/php\-trait\-doc/make\-property\-details\-partial.md) | Generates markdown for more detailed information about the specified properties. |
| [makePropertySynopsis()](/docs/doc/php/php\-trait\-doc/make\-property\-synopsis.md) | Generates markdown for a code synopsis of all properties for this documentation file. |
| [makePropertySynopsisMeta()](/docs/doc/php/php\-trait\-doc/make\-property\-synopsis\-meta.md) | Generates meta data relating to properties to allow for linking in code sysnopsis after syntax highlighting. |
| [makeSynopsis()](/docs/doc/php/php\-trait\-doc/make\-synopsis.md) | Generates markdown for a code snyopsis of this documentation file. |
| [makeUses()](/docs/doc/php/php\-trait\-doc/make\-uses.md) | Generates markdown for what traits this class uses. |
| [removeIgnoreableReflectors()](/docs/doc/php/php\-trait\-doc/remove\-ignoreable\-reflectors.md) | Removes any reflectors from the specified array that the current configuration indicates should be removed. |

## Property Details

### Protected

<a id="config"></a>

#### $config

```php
protected \Xlient\Doc\Php\Configuration $config
```

<a id="dest-dir"></a>

#### $destDir

```php
protected string $destDir
```

<a id="meta"></a>

#### $meta

```php
protected \Xlient\Doc\Php\PhpFileMeta $meta
```

<a id="reflector"></a>

#### $reflector

```php
protected \ReflectionClass $reflector
```

## Method Details

### Public

<a id="get-doc-comment"></a>

#### getDocComment

Gets the PHPDoc comment associated with this documentation item.

```php
public function getDocComment(): ?string
```

##### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A PHPDoc comment. |

<a id="get-name"></a>

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

<a id="make-synopsis-meta"></a>

#### makeSynopsisMeta

Generates meta JSON files to allow for linking in code sysnopsis after syntax highlighting.

```php
public function makeSynopsisMeta(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of meta JSON files. |

<a id="set-doc-comment"></a>

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

<a id="get-anchor"></a>

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

<a id="get-class-case-definition"></a>

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

<a id="get-class-constant-definition"></a>

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

<a id="get-class-definition"></a>

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

<a id="get-class-filename"></a>

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

<a id="get-class-interfaces"></a>

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

<a id="get-class-reflection-constants"></a>

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

<a id="get-class-reflection-methods"></a>

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

<a id="get-class-reflection-properties"></a>

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

<a id="get-constant-data"></a>

#### getConstantData

Gets the markdown encoded name, type, description, url, and marks of the specified constant.

```php
protected function getConstantData(\ReflectionClassConstant $constant): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constant | ReflectionClassConstant | A class constant reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of class constant data. |

<a id="get-default-parameter-values"></a>

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

<a id="get-dir-path"></a>

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

<a id="get-external-method-url"></a>

#### getExternalMethodUrl

Gets an external URL for the specified class and method name if one can be determined.

```php
protected function getExternalMethodUrl(string $class, string $method): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | string | A fully qualified class name. |
| $method | string | A method name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A URL. |

<a id="get-external-url"></a>

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

<a id="get-file"></a>

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

<a id="get-filename"></a>

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

<a id="get-function-definition"></a>

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

<a id="get-function-parameter-data"></a>

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

<a id="get-function-return-data"></a>

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

<a id="get-method-data"></a>

#### getMethodData

Gets the markdown encoded name, description, url, and marks of the specified method.

```php
protected function getMethodData(\ReflectionMethod $method): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $method | ReflectionMethod | A method reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of method data. |

<a id="get-method-file"></a>

#### getMethodFile

Gets a file for the specified class and method name.

```php
protected function getMethodFile(string $class, string $method): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | string | A fully qualified class name. |
| $method | string | A method name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A file. |

<a id="get-method-url"></a>

#### getMethodUrl

Gets a URL for the specified class and method name.

```php
protected function getMethodUrl(string $class, string $method): ?string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $class | string | A fully qualified class name. |
| $method | string | A method name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A URL. |

<a id="get-parent-classes"></a>

#### getParentClasses

Gets an array of all parent class names.

```php
protected function getParentClasses(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of fully qualified class names. |

<a id="get-property-data"></a>

#### getPropertyData

Gets the markdown encoded name, type, description, url, and marks of the specified property.

```php
protected function getPropertyData(\ReflectionProperty $property): object
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $property | ReflectionProperty | A property reflector. |

##### Returns

| Type | Description |
| :--- | :--- |
| object\{name: string, type: \(string \| null\), description: \(string \| null\), url: \(string \| null\), marks: \(string \| null\)\} | An object of property data. |

<a id="get-property-definition"></a>

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

<a id="get-traits"></a>

#### getTraits

Gets an array of all traits used by this class.

```php
protected function getTraits(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of fully qualified class names. |

<a id="get-type-definition"></a>

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

<a id="get-type-definition-from-value"></a>

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

<a id="get-url"></a>

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

<a id="get-url-path"></a>

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

<a id="inherit-doc-comment"></a>

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

<a id="initialize-reflector"></a>

#### initializeReflector

Initializes a class reflector for the class being documented.

```php
protected function initializeReflector(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

<a id="make-case"></a>

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

<a id="make-class"></a>

#### makeClass

Generates markdown for general information relating to the class being documented.

```php
protected function makeClass(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-class-description"></a>

#### makeClassDescription

Generates markdown for the main description of this class documentation file.

```php
protected function makeClassDescription(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constant"></a>

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

<a id="make-constant-details"></a>

#### makeConstantDetails

Generates markdown for more detailed information about the constants in this class documentation file.

```php
protected function makeConstantDetails(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constant-details-partial"></a>

#### makeConstantDetailsPartial

Generates markdown for more detailed information about the specified constants.

```php
protected function makeConstantDetailsPartial(
    array $constants,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constants | array\<ReflectionClassConstant\> | An array of constant reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constant-synopsis"></a>

#### makeConstantSynopsis

Generates markdown for a code synopsis of all class constants for this documentation file.

```php
protected function makeConstantSynopsis(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constant-synopsis-meta"></a>

#### makeConstantSynopsisMeta

Generates meta data relating to class constants to allow for linking in code sysnopsis after syntax highlighting.

```php
protected function makeConstantSynopsisMeta(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of class constant meta data. |

<a id="make-constants"></a>

#### makeConstants

Generates markdown for a list of constants contained in this class documentation file.

```php
protected function makeConstants(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constants-partial"></a>

#### makeConstantsPartial

Generates markdown for the array of specified constants.

```php
protected function makeConstantsPartial(
    array $constants,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constants | array\<ReflectionClassConstant\> | An array of constant reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constants-partial-table"></a>

#### makeConstantsPartialTable

Generates markdown for the array of specified constants in a table format.

```php
protected function makeConstantsPartialTable(
    array $constants,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $constants | array\<ReflectionClassConstant\> | An array of constant reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-constructor"></a>

#### makeConstructor

Generates markdown for information about the constructor of this class.

```php
protected function makeConstructor(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-description"></a>

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

<a id="make-extends"></a>

#### makeExtends

Generates markdown for what parent classes this class extends.

```php
protected function makeExtends(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-function"></a>

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

<a id="make-function-parameters"></a>

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

<a id="make-function-parameters-table"></a>

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

<a id="make-function-return"></a>

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

<a id="make-function-return-table"></a>

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

<a id="make-function-throws"></a>

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

<a id="make-function-throws-table"></a>

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

<a id="make-implements"></a>

#### makeImplements

Generates markdown for what interfaces this class implements.

```php
protected function makeImplements(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-mark-labels"></a>

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

<a id="make-method-details"></a>

#### makeMethodDetails

Generates markdown for more detailed information about the methods in this class documentation file.

```php
protected function makeMethodDetails(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-method-details-partial"></a>

#### makeMethodDetailsPartial

Generates markdown for more detailed information about the specified methods.

```php
protected function makeMethodDetailsPartial(
    array $methods,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $methods | array\<ReflectionMethod\> | An array of method reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-method-files"></a>

#### makeMethodFiles

Generates documentation files for each method in this class.

```php
protected function makeMethodFiles(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |

<a id="make-method-synopsis"></a>

#### makeMethodSynopsis

Generates markdown for a code synopsis of all methods for this documentation file.

```php
protected function makeMethodSynopsis(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-method-synopsis-meta"></a>

#### makeMethodSynopsisMeta

Generates meta data relating to methods to allow for linking in code sysnopsis after syntax highlighting.

```php
protected function makeMethodSynopsisMeta(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of method meta data. |

<a id="make-methods"></a>

#### makeMethods

Generates markdown for a list of methods contained in this class documentation file.

```php
protected function makeMethods(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-methods-partial"></a>

#### makeMethodsPartial

Generates markdown for the array of specified methods.

```php
protected function makeMethodsPartial(array $methods, int $headingDepth): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $methods | array\<ReflectionMethod\> | An array of method reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-methods-partial-table"></a>

#### makeMethodsPartialTable

Generates markdown for the array of specified methods in a table format.

```php
protected function makeMethodsPartialTable(
    array $methods,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $methods | array\<ReflectionMethod\> | An array of method reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-name"></a>

#### makeName

Generates markdown for the name of this document.

```php
protected function makeName(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-properties"></a>

#### makeProperties

Generates markdown for a list of properties contained in this class documentation file.

```php
protected function makeProperties(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-properties-partial"></a>

#### makePropertiesPartial

Generates markdown for the array of specified properties.

```php
protected function makePropertiesPartial(
    array $properties,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $properties | array\<ReflectionProperty\> | An array of property reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-properties-partial-table"></a>

#### makePropertiesPartialTable

Generates markdown for the array of specified properties in a table format.

```php
protected function makePropertiesPartialTable(
    array $properties,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $properties | array\<ReflectionProperty\> | An array of property reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-property"></a>

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

<a id="make-property-details"></a>

#### makePropertyDetails

Generates markdown for more detailed information about the properties in this class documentation file.

```php
protected function makePropertyDetails(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-property-details-partial"></a>

#### makePropertyDetailsPartial

Generates markdown for more detailed information about the specified properties.

```php
protected function makePropertyDetailsPartial(
    array $properties,
    int $headingDepth,
): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $properties | array\<ReflectionProperty\> | An array of property reflectors. |
| $headingDepth | int | The number of headings deep this markdown code will be contained in. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-property-synopsis"></a>

#### makePropertySynopsis

Generates markdown for a code synopsis of all properties for this documentation file.

```php
protected function makePropertySynopsis(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-property-synopsis-meta"></a>

#### makePropertySynopsisMeta

Generates meta data relating to properties to allow for linking in code sysnopsis after syntax highlighting.

```php
protected function makePropertySynopsisMeta(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of property meta data. |

<a id="make-synopsis"></a>

#### makeSynopsis

Generates markdown for a code snyopsis of this documentation file.

```php
protected function makeSynopsis(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="make-uses"></a>

#### makeUses

Generates markdown for what traits this class uses.

```php
protected function makeUses(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of markdown lines. |

<a id="remove-ignoreable-reflectors"></a>

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