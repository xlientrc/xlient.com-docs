# Class \Xlient\Doc\Php\Configuration

Stores configuration for the documentor.

## Constructor

```php
public function __construct(
    array $baseNamespaces = [],
    array $basePaths = [],
    array $baseUrls = [],
    array $pathFixes = [],
    array $namespaceUrls = [],
    ?\Closure $urlCallback = null,
    ?\Closure $methodUrlCallback = null,
    bool $classMethodFiles = true,
    bool $classPublic = true,
    bool $classProtected = true,
    bool $classPrivate = true,
    string $classSeparator = ' » ',
    bool $functionFiles = true,
    string $classFilenamePrefix = '',
    string $classFilenameSuffix = '',
    string $enumFilenamePrefix = '',
    string $enumFilenameSuffix = '',
    string $interfaceFilenamePrefix = '',
    string $interfaceFilenameSuffix = '',
    string $traitFilenamePrefix = '',
    string $traitFilenameSuffix = '',
    string $constantsFilename = 'constants',
    string $functionsFilename = 'functions',
    array $labels = [],
    bool $makeClassDescription = true,
    bool $makeClassExtends = true,
    bool $makeClassImplements = true,
    bool $makeClassUses = true,
    bool $makeClassConstructor = true,
    bool $makeClassSynopsis = true,
    bool $makeClassCases = true,
    bool $makeClassCaseDetails = true,
    bool $makeClassConstants = true,
    bool $makeClassConstantDetails = true,
    bool $makeClassProperties = true,
    bool $makeClassPropertyDetails = true,
    bool $makeClassMethods = true,
    bool $makeClassMethodDetails = true,
    bool $makeConstants = true,
    bool $makeConstantsDescription = true,
    bool $makeConstantSynopsis = true,
    bool $makeConstantDetails = true,
    bool $makeDefines = true,
    bool $makeFunctions = true,
    bool $makeFunctionsDescription = true,
    bool $makeFunctionSynopsis = true,
    bool $makeFunctionDetails = true,
    bool $makeSynopsisMeta = true,
    bool $showDeprecated = true,
    bool $showDeprecatedLabel = true,
    bool $showInternal = true,
    bool $showInternalLabel = true,
    bool $showGenerated = true,
    bool $showGeneratedLabel = true,
    array $accessModifierOrder = [
        PhpAccessModifier::PUBLIC,
        PhpAccessModifier::PROTECTED,
        PhpAccessModifier::PRIVATE,
    ],
    array $typeOrder = [
        PhpType::NULL,
        PhpType::BOOL,
        PhpType::TRUE,
        PhpType::FALSE,
        PhpType::INT,
        PhpType::FLOAT,
        PhpType::STRING,
        PhpType::ARRAY,
        PhpType::ITERABLE,
        PhpType::CALLABLE,
        PhpType::OBJECT,
        PhpType::CLASS_NAME,
        PhpType::VOID,
        PhpType::SELF,
        PhpType::STATIC,
        PhpType::NEVER,
    ],
    bool $sortByName = true,
    bool $sortByAccessModifier = true,
    bool $groupByAccessModifier = true,
    bool $sortByType = true,
    bool $inheritDocComments = true,
    bool $prioritizeDocComments = true,
    bool $escapeDocComments = false,
    bool $useNullableSyntax = true,
    bool $enableTables = true,
    int $indentLength = 4,
    int $lineLength = 80,
    bool $override = false,
)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $baseNamespaces | array\<string\> | Only files within this namespace will be documented. |
| $basePaths | array\<string, string\> | This path will be prepended to the start of any resulting relative documentation file path. |
| $baseUrls | array\<string, string\> | This url will be prepended to any urls generated for items that match the base namespace. |
| $pathFixes | array\<string, string\> | An array of key value pairs to override the default path name generation. |
| $namespaceUrls | array\<string, string\> | An array of urls to use for linking to items outside the base namespace. |
| $urlCallback | \(Closure \| null\) | A more precise method of providing external urls. |
| $methodUrlCallback | \(Closure \| null\) | A more precise method of providing external urls for class methods. |
| $classMethodFiles | bool | When true, separate files will be generated for each class method. |
| $classPublic | bool | When true, public class items will be included. |
| $classProtected | bool | When true protected class items will be included. |
| $classPrivate | bool | When true, private class items will be included. |
| $classSeparator | string | A string value to use to separate class names in the inheritance list. |
| $functionFiles | bool | When true, separate files will be generated for each function. |
| $classFilenamePrefix | string | A value to prepend to a class documentation filename. |
| $classFilenameSuffix | string | A value to append to a class documentation filename. |
| $enumFilenamePrefix | string | A value to prepend to an enum documentation filename. |
| $enumFilenameSuffix | string | A value to append to an enum documentation filename. |
| $interfaceFilenamePrefix | string | A value to prepend to an interface documentation filename. |
| $interfaceFilenameSuffix | string | A value to append to an interface documentation filename. |
| $traitFilenamePrefix | string | A value to prepend to a trait documentation filename. |
| $traitFilenameSuffix | string | A value to append to a trait documentation filename. |
| $constantsFilename | string | The filename to use for a constants documentation file. |
| $functionsFilename | string | The filename to use for a functions documentation file. |
| $labels | array\<string, string\> | An array of key value pairs to use for documentation labels. |
| $makeClassDescription | bool | When true, the class documentation will include a description of the class. |
| $makeClassExtends | bool | When true, the class documentation will include a list of parent classes. |
| $makeClassImplements | bool | When true, the class documentation will include a list of implemented interfaces. |
| $makeClassUses | bool | When true, the class documentation will include a list of traits used by the class. |
| $makeClassConstructor | bool | When true, the class constructor will have its own section in the documentation file. |
| $makeClassSynopsis | bool | When true, a php.net style class index will be generated. |
| $makeClassCases | bool | When true, any case statements in an enum will be documented. |
| $makeClassCaseDetails | bool | When true, a more detailed overview of each case in an enum will be documented. |
| $makeClassConstants | bool | When true, any constants in a class will be documented. |
| $makeClassConstantDetails | bool | When true, a more detailed overview of each constant in a class will be documented. |
| $makeClassProperties | bool | When true, any properties in a class will be documented. |
| $makeClassPropertyDetails | bool | When true, a more detailed overview of each property in a class will be documented. |
| $makeClassMethods | bool | When true, any methods in a class will be documented. |
| $makeClassMethodDetails | bool | When true, a more detailed overview of each method in a class will be documented. |
| $makeConstants | bool | When true, any constants that are direct children of a namespace will be documented. |
| $makeConstantsDescription | bool | When true, the constant documentation will include a description of each constant. |
| $makeConstantSynopsis | bool | When true, a PHP code synopsis of the constants will be generated. |
| $makeConstantDetails | bool | When true, a more detailed overview of each constant will be documented. |
| $makeDefines | bool | When true, constants defined with the define function will be included in the constant documentation. |
| $makeFunctions | bool | When true, any functions that are direct children of a namespace will be documented. |
| $makeFunctionsDescription | bool | When true, the function documentation will include a description for each function. |
| $makeFunctionSynopsis | bool | When true, a PHP code synopsis of the functions will be generated. |
| $makeFunctionDetails | bool | When true, a more detailed overview of each function will be documented. |
| $makeSynopsisMeta | bool | When true, a JSON meta file will be generated with snyopsis URL metadata to allow for injecting links after code highlighting. |
| $showDeprecated | bool | When true, deprecated items will be included in the documentation. |
| $showDeprecatedLabel | bool | When true, a deprecated label will appear under deprecated items in the documentation. |
| $showInternal | bool | When true, internal items will be included in the documentation. |
| $showInternalLabel | bool | When true, an internal label will appear under internal items in the documentation. |
| $showGenerated | bool | When true, generated items will be included in the documentation. |
| $showGeneratedLabel | bool | When true, a generated label will appear under generated items in the documentation. |
| $accessModifierOrder | array\<PhpAccessModifier\> | An array of PHP access modifiers in the order in which they are to appear in. |
| $typeOrder | array\<PhpType\> | An array of PHP types in the order in which they are to appear in. |
| $sortByName | bool | When true, items will be sorted by name. |
| $sortByAccessModifier | bool | When true, items will be sorted by the specified accessModifierOrder order. |
| $groupByAccessModifier | bool | When true, items will be grouped by access modifiers. |
| $sortByType | bool | When true, types will be sorted by the specified typeOrder order. |
| $inheritDocComments | bool | When true, items with \@inheritDoc tags will inherit documentation from its parent. |
| $prioritizeDocComments | bool | When true, the information contained in the PHPDoc comment will take precedence over the information gotten from reflection. |
| $escapeDocComments | bool | When true, PHPDoc comment text will be escaped to not interfere with markdown. |
| $useNullableSyntax | bool | When true, ? will be used instead of null where appropriate. |
| $enableTables | bool | When true, certain information will be placed in tables instead of a more mobile friendly headings and paragraphs. |
| $indentLength | int | The length in spaces to indent code by. |
| $lineLength | int | The maximum length in characters a code line should be. |
| $override | bool | When true, any existing generated docs will be removed before remaking. |

## Class Synopsis
```php
class Configuration
{
    /* Properties */
    public array $accessModifierOrder
    public array $baseNamespaces
    public array $basePaths
    public array $baseUrls
    public string $classFilenamePrefix
    public string $classFilenameSuffix
    public bool $classMethodFiles
    public bool $classPrivate
    public bool $classProtected
    public bool $classPublic
    public string $classSeparator
    public string $constantsFilename
    public bool $enableTables
    public string $enumFilenamePrefix
    public string $enumFilenameSuffix
    public bool $escapeDocComments
    public bool $functionFiles
    public string $functionsFilename
    public bool $groupByAccessModifier
    public int $indentLength
    public bool $inheritDocComments
    public string $interfaceFilenamePrefix
    public string $interfaceFilenameSuffix
    public array $labels
    public int $lineLength
    public bool $makeClassCaseDetails
    public bool $makeClassCases
    public bool $makeClassConstantDetails
    public bool $makeClassConstants
    public bool $makeClassConstructor
    public bool $makeClassDescription
    public bool $makeClassExtends
    public bool $makeClassImplements
    public bool $makeClassMethodDetails
    public bool $makeClassMethods
    public bool $makeClassProperties
    public bool $makeClassPropertyDetails
    public bool $makeClassSynopsis
    public bool $makeClassUses
    public bool $makeConstantDetails
    public bool $makeConstantSynopsis
    public bool $makeConstants
    public bool $makeConstantsDescription
    public bool $makeDefines
    public bool $makeFunctionDetails
    public bool $makeFunctionSynopsis
    public bool $makeFunctions
    public bool $makeFunctionsDescription
    public bool $makeSynopsisMeta
    public ?\Closure $methodUrlCallback
    public array $namespaceUrls
    public bool $override
    public array $pathFixes
    public bool $prioritizeDocComments
    public bool $showDeprecated
    public bool $showDeprecatedLabel
    public bool $showGenerated
    public bool $showGeneratedLabel
    public bool $showInternal
    public bool $showInternalLabel
    public bool $sortByAccessModifier
    public bool $sortByName
    public bool $sortByType
    public string $traitFilenamePrefix
    public string $traitFilenameSuffix
    public array $typeOrder
    public ?\Closure $urlCallback
    public bool $useNullableSyntax
}
```

## Properties

### Public

| Name | Type |Description |
| :--- | :--- | :--- |
| [$accessModifierOrder](#access\-modifier\-order) | array |  |
| [$baseNamespaces](#base\-namespaces) | array |  |
| [$basePaths](#base\-paths) | array |  |
| [$baseUrls](#base\-urls) | array |  |
| [$classFilenamePrefix](#class\-filename\-prefix) | string |  |
| [$classFilenameSuffix](#class\-filename\-suffix) | string |  |
| [$classMethodFiles](#class\-method\-files) | bool |  |
| [$classPrivate](#class\-private) | bool |  |
| [$classProtected](#class\-protected) | bool |  |
| [$classPublic](#class\-public) | bool |  |
| [$classSeparator](#class\-separator) | string |  |
| [$constantsFilename](#constants\-filename) | string |  |
| [$enableTables](#enable\-tables) | bool |  |
| [$enumFilenamePrefix](#enum\-filename\-prefix) | string |  |
| [$enumFilenameSuffix](#enum\-filename\-suffix) | string |  |
| [$escapeDocComments](#escape\-doc\-comments) | bool |  |
| [$functionFiles](#function\-files) | bool |  |
| [$functionsFilename](#functions\-filename) | string |  |
| [$groupByAccessModifier](#group\-by\-access\-modifier) | bool |  |
| [$indentLength](#indent\-length) | int |  |
| [$inheritDocComments](#inherit\-doc\-comments) | bool |  |
| [$interfaceFilenamePrefix](#interface\-filename\-prefix) | string |  |
| [$interfaceFilenameSuffix](#interface\-filename\-suffix) | string |  |
| [$labels](#labels) | array |  |
| [$lineLength](#line\-length) | int |  |
| [$makeClassCaseDetails](#make\-class\-case\-details) | bool |  |
| [$makeClassCases](#make\-class\-cases) | bool |  |
| [$makeClassConstantDetails](#make\-class\-constant\-details) | bool |  |
| [$makeClassConstants](#make\-class\-constants) | bool |  |
| [$makeClassConstructor](#make\-class\-constructor) | bool |  |
| [$makeClassDescription](#make\-class\-description) | bool |  |
| [$makeClassExtends](#make\-class\-extends) | bool |  |
| [$makeClassImplements](#make\-class\-implements) | bool |  |
| [$makeClassMethodDetails](#make\-class\-method\-details) | bool |  |
| [$makeClassMethods](#make\-class\-methods) | bool |  |
| [$makeClassProperties](#make\-class\-properties) | bool |  |
| [$makeClassPropertyDetails](#make\-class\-property\-details) | bool |  |
| [$makeClassSynopsis](#make\-class\-synopsis) | bool |  |
| [$makeClassUses](#make\-class\-uses) | bool |  |
| [$makeConstantDetails](#make\-constant\-details) | bool |  |
| [$makeConstantSynopsis](#make\-constant\-synopsis) | bool |  |
| [$makeConstants](#make\-constants) | bool |  |
| [$makeConstantsDescription](#make\-constants\-description) | bool |  |
| [$makeDefines](#make\-defines) | bool |  |
| [$makeFunctionDetails](#make\-function\-details) | bool |  |
| [$makeFunctionSynopsis](#make\-function\-synopsis) | bool |  |
| [$makeFunctions](#make\-functions) | bool |  |
| [$makeFunctionsDescription](#make\-functions\-description) | bool |  |
| [$makeSynopsisMeta](#make\-synopsis\-meta) | bool |  |
| [$methodUrlCallback](#method\-url\-callback) | ?\\Closure |  |
| [$namespaceUrls](#namespace\-urls) | array |  |
| [$override](#override) | bool |  |
| [$pathFixes](#path\-fixes) | array |  |
| [$prioritizeDocComments](#prioritize\-doc\-comments) | bool |  |
| [$showDeprecated](#show\-deprecated) | bool |  |
| [$showDeprecatedLabel](#show\-deprecated\-label) | bool |  |
| [$showGenerated](#show\-generated) | bool |  |
| [$showGeneratedLabel](#show\-generated\-label) | bool |  |
| [$showInternal](#show\-internal) | bool |  |
| [$showInternalLabel](#show\-internal\-label) | bool |  |
| [$sortByAccessModifier](#sort\-by\-access\-modifier) | bool |  |
| [$sortByName](#sort\-by\-name) | bool |  |
| [$sortByType](#sort\-by\-type) | bool |  |
| [$traitFilenamePrefix](#trait\-filename\-prefix) | string |  |
| [$traitFilenameSuffix](#trait\-filename\-suffix) | string |  |
| [$typeOrder](#type\-order) | array |  |
| [$urlCallback](#url\-callback) | ?\\Closure |  |
| [$useNullableSyntax](#use\-nullable\-syntax) | bool |  |

## Property Details

### Public

<a id="access-modifier-order"></a>

#### $accessModifierOrder

```php
public array $accessModifierOrder
```

<a id="base-namespaces"></a>

#### $baseNamespaces

```php
public array $baseNamespaces
```

<a id="base-paths"></a>

#### $basePaths

```php
public array $basePaths
```

<a id="base-urls"></a>

#### $baseUrls

```php
public array $baseUrls
```

<a id="class-filename-prefix"></a>

#### $classFilenamePrefix

```php
public string $classFilenamePrefix
```

<a id="class-filename-suffix"></a>

#### $classFilenameSuffix

```php
public string $classFilenameSuffix
```

<a id="class-method-files"></a>

#### $classMethodFiles

```php
public bool $classMethodFiles
```

<a id="class-private"></a>

#### $classPrivate

```php
public bool $classPrivate
```

<a id="class-protected"></a>

#### $classProtected

```php
public bool $classProtected
```

<a id="class-public"></a>

#### $classPublic

```php
public bool $classPublic
```

<a id="class-separator"></a>

#### $classSeparator

```php
public string $classSeparator
```

<a id="constants-filename"></a>

#### $constantsFilename

```php
public string $constantsFilename
```

<a id="enable-tables"></a>

#### $enableTables

```php
public bool $enableTables
```

<a id="enum-filename-prefix"></a>

#### $enumFilenamePrefix

```php
public string $enumFilenamePrefix
```

<a id="enum-filename-suffix"></a>

#### $enumFilenameSuffix

```php
public string $enumFilenameSuffix
```

<a id="escape-doc-comments"></a>

#### $escapeDocComments

```php
public bool $escapeDocComments
```

<a id="function-files"></a>

#### $functionFiles

```php
public bool $functionFiles
```

<a id="functions-filename"></a>

#### $functionsFilename

```php
public string $functionsFilename
```

<a id="group-by-access-modifier"></a>

#### $groupByAccessModifier

```php
public bool $groupByAccessModifier
```

<a id="indent-length"></a>

#### $indentLength

```php
public int $indentLength
```

<a id="inherit-doc-comments"></a>

#### $inheritDocComments

```php
public bool $inheritDocComments
```

<a id="interface-filename-prefix"></a>

#### $interfaceFilenamePrefix

```php
public string $interfaceFilenamePrefix
```

<a id="interface-filename-suffix"></a>

#### $interfaceFilenameSuffix

```php
public string $interfaceFilenameSuffix
```

<a id="labels"></a>

#### $labels

```php
public array $labels
```

<a id="line-length"></a>

#### $lineLength

```php
public int $lineLength
```

<a id="make-class-case-details"></a>

#### $makeClassCaseDetails

```php
public bool $makeClassCaseDetails
```

<a id="make-class-cases"></a>

#### $makeClassCases

```php
public bool $makeClassCases
```

<a id="make-class-constant-details"></a>

#### $makeClassConstantDetails

```php
public bool $makeClassConstantDetails
```

<a id="make-class-constants"></a>

#### $makeClassConstants

```php
public bool $makeClassConstants
```

<a id="make-class-constructor"></a>

#### $makeClassConstructor

```php
public bool $makeClassConstructor
```

<a id="make-class-description"></a>

#### $makeClassDescription

```php
public bool $makeClassDescription
```

<a id="make-class-extends"></a>

#### $makeClassExtends

```php
public bool $makeClassExtends
```

<a id="make-class-implements"></a>

#### $makeClassImplements

```php
public bool $makeClassImplements
```

<a id="make-class-method-details"></a>

#### $makeClassMethodDetails

```php
public bool $makeClassMethodDetails
```

<a id="make-class-methods"></a>

#### $makeClassMethods

```php
public bool $makeClassMethods
```

<a id="make-class-properties"></a>

#### $makeClassProperties

```php
public bool $makeClassProperties
```

<a id="make-class-property-details"></a>

#### $makeClassPropertyDetails

```php
public bool $makeClassPropertyDetails
```

<a id="make-class-synopsis"></a>

#### $makeClassSynopsis

```php
public bool $makeClassSynopsis
```

<a id="make-class-uses"></a>

#### $makeClassUses

```php
public bool $makeClassUses
```

<a id="make-constant-details"></a>

#### $makeConstantDetails

```php
public bool $makeConstantDetails
```

<a id="make-constant-synopsis"></a>

#### $makeConstantSynopsis

```php
public bool $makeConstantSynopsis
```

<a id="make-constants"></a>

#### $makeConstants

```php
public bool $makeConstants
```

<a id="make-constants-description"></a>

#### $makeConstantsDescription

```php
public bool $makeConstantsDescription
```

<a id="make-defines"></a>

#### $makeDefines

```php
public bool $makeDefines
```

<a id="make-function-details"></a>

#### $makeFunctionDetails

```php
public bool $makeFunctionDetails
```

<a id="make-function-synopsis"></a>

#### $makeFunctionSynopsis

```php
public bool $makeFunctionSynopsis
```

<a id="make-functions"></a>

#### $makeFunctions

```php
public bool $makeFunctions
```

<a id="make-functions-description"></a>

#### $makeFunctionsDescription

```php
public bool $makeFunctionsDescription
```

<a id="make-synopsis-meta"></a>

#### $makeSynopsisMeta

```php
public bool $makeSynopsisMeta
```

<a id="method-url-callback"></a>

#### $methodUrlCallback

```php
public ?\Closure $methodUrlCallback
```

<a id="namespace-urls"></a>

#### $namespaceUrls

```php
public array $namespaceUrls
```

<a id="override"></a>

#### $override

```php
public bool $override
```

<a id="path-fixes"></a>

#### $pathFixes

```php
public array $pathFixes
```

<a id="prioritize-doc-comments"></a>

#### $prioritizeDocComments

```php
public bool $prioritizeDocComments
```

<a id="show-deprecated"></a>

#### $showDeprecated

```php
public bool $showDeprecated
```

<a id="show-deprecated-label"></a>

#### $showDeprecatedLabel

```php
public bool $showDeprecatedLabel
```

<a id="show-generated"></a>

#### $showGenerated

```php
public bool $showGenerated
```

<a id="show-generated-label"></a>

#### $showGeneratedLabel

```php
public bool $showGeneratedLabel
```

<a id="show-internal"></a>

#### $showInternal

```php
public bool $showInternal
```

<a id="show-internal-label"></a>

#### $showInternalLabel

```php
public bool $showInternalLabel
```

<a id="sort-by-access-modifier"></a>

#### $sortByAccessModifier

```php
public bool $sortByAccessModifier
```

<a id="sort-by-name"></a>

#### $sortByName

```php
public bool $sortByName
```

<a id="sort-by-type"></a>

#### $sortByType

```php
public bool $sortByType
```

<a id="trait-filename-prefix"></a>

#### $traitFilenamePrefix

```php
public string $traitFilenamePrefix
```

<a id="trait-filename-suffix"></a>

#### $traitFilenameSuffix

```php
public string $traitFilenameSuffix
```

<a id="type-order"></a>

#### $typeOrder

```php
public array $typeOrder
```

<a id="url-callback"></a>

#### $urlCallback

```php
public ?\Closure $urlCallback
```

<a id="use-nullable-syntax"></a>

#### $useNullableSyntax

```php
public bool $useNullableSyntax
```