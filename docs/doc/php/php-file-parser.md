# Class \Xlient\Doc\Php\PhpFileParser

Parses a PHP file into individual documentation classes.

## Constructor

```php
public function __construct(
    string $file,
    string $destDir,
    \Xlient\Doc\Php\Configuration $config,
)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | The PHP file to parse. |
| $destDir | string | The destination directory to save documentation files. |
| $config | Configuration | The configuration to use to generate the documentation. |

## Class Synopsis
```php
final class PhpFileParser
{
    /* Properties */
    protected \Xlient\Doc\Php\Configuration $config
    protected string $destDir
    protected string $file
    private array $classes = [];
    private array $constants = [];
    private int $depth = 0;
    private ?string $docComment = NULL;
    private array $enums = [];
    private array $functions = [];
    private array $interfaces = [];
    private \Xlient\Doc\Php\PhpFileMeta $meta
    private string $namespace = '';
    private int $namespaceDepth = 0;
    private array $traits = [];

    /* Methods */
    public function getClasses(): array
    public function getConstants(): array
    public function getEnums(): array
    public function getFunctions(): array
    public function getInterfaces(): array
    public function getTraits(): array
    public function parse(): void
    private function getPhpConstantsDoc(
        string $namespace,
    ): \Xlient\Doc\Php\PhpConstantsDoc
    private function getPhpFunctionsDoc(
        string $namespace,
    ): \Xlient\Doc\Php\PhpFunctionsDoc
    private function parseClass(array $tokens, int $type): array
    private function parseConstant(array $tokens): array
    private function parseDefine(array $tokens): array
    private function parseFunction(array $tokens): array
    private function parseNamespace(array $tokens): array
    private function parseUse(array $tokens): array
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$destDir](#dest\-dir) | string |  |
| [$file](#file) | string |  |

### Private

| Name | Type |Description |
| :--- | :--- | :--- |
| [$classes](#classes) | array |  |
| [$constants](#constants) | array |  |
| [$depth](#depth) | int |  |
| [$docComment](#doc\-comment) | ?string |  |
| [$enums](#enums) | array |  |
| [$functions](#functions) | array |  |
| [$interfaces](#interfaces) | array |  |
| [$meta](#meta) | \\Xlient\\Doc\\Php\\PhpFileMeta |  |
| [$namespace](#namespace) | string |  |
| [$namespaceDepth](#namespace\-depth) | int |  |
| [$traits](#traits) | array |  |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [getClasses()](/docs/doc/php/php\-file\-parser/get\-classes.md) | Gets an array of PHPClassDoc instances of all classes in this file. |
| [getConstants()](/docs/doc/php/php\-file\-parser/get\-constants.md) | Gets an array of PhpConstantsDoc instances of all classes in this file. |
| [getEnums()](/docs/doc/php/php\-file\-parser/get\-enums.md) | Gets an array of PhpEnumDoc instances of all classes in this file. |
| [getFunctions()](/docs/doc/php/php\-file\-parser/get\-functions.md) | Gets an array of PhpFunctionsDoc instances of all classes in this file. |
| [getInterfaces()](/docs/doc/php/php\-file\-parser/get\-interfaces.md) | Gets an array of PhpInterfaceDoc instances of all classes in this file. |
| [getTraits()](/docs/doc/php/php\-file\-parser/get\-traits.md) | Gets an array of PhpTraitDoc instances of all classes in this file. |
| [parse()](/docs/doc/php/php\-file\-parser/parse.md) | Parses the PHP file into individual documentation classes. |

### Private

| Name | Description |
| :--- | :--- |
| [getPhpConstantsDoc()](/docs/doc/php/php\-file\-parser/get\-php\-constants\-doc.md) | Gets a PhpConstantsDoc for the specified namespace. |
| [getPhpFunctionsDoc()](/docs/doc/php/php\-file\-parser/get\-php\-functions\-doc.md) | Gets a PhpFunctionsDoc for the specified namespace. |
| [parseClass()](/docs/doc/php/php\-file\-parser/parse\-class.md) | Parses out tokens relating to the current class, interface, trait, or enum. |
| [parseConstant()](/docs/doc/php/php\-file\-parser/parse\-constant.md) | Parses out tokens relating to constants. |
| [parseDefine()](/docs/doc/php/php\-file\-parser/parse\-define.md) | Parses out tokens relating to defined constants. |
| [parseFunction()](/docs/doc/php/php\-file\-parser/parse\-function.md) | Parses out tokens relating to the current function. |
| [parseNamespace()](/docs/doc/php/php\-file\-parser/parse\-namespace.md) | Parses out tokens relating to the current namespace. |
| [parseUse()](/docs/doc/php/php\-file\-parser/parse\-use.md) | Parses out tokens relating to class, function, and constant use statements. |

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

<a id="file"></a>

#### $file

```php
protected string $file
```

### Private

<a id="classes"></a>

#### $classes

```php
private array $classes = [];
```

<a id="constants"></a>

#### $constants

```php
private array $constants = [];
```

<a id="depth"></a>

#### $depth

```php
private int $depth = 0;
```

<a id="doc\-comment"></a>

#### $docComment

```php
private ?string $docComment = NULL;
```

<a id="enums"></a>

#### $enums

```php
private array $enums = [];
```

<a id="functions"></a>

#### $functions

```php
private array $functions = [];
```

<a id="interfaces"></a>

#### $interfaces

```php
private array $interfaces = [];
```

<a id="meta"></a>

#### $meta

```php
private \Xlient\Doc\Php\PhpFileMeta $meta
```

<a id="namespace"></a>

#### $namespace

```php
private string $namespace = '';
```

<a id="namespace\-depth"></a>

#### $namespaceDepth

```php
private int $namespaceDepth = 0;
```

<a id="traits"></a>

#### $traits

```php
private array $traits = [];
```

## Method Details

### Public

<a id="get\-classes"></a>

#### getClasses

Gets an array of PHPClassDoc instances of all classes in this file.

```php
public function getClasses(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpClassDoc\> | An array of PHPClassDoc instances. |

<a id="get\-constants"></a>

#### getConstants

Gets an array of PhpConstantsDoc instances of all classes in this file.

```php
public function getConstants(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpConstantsDoc\> | An array of PhpConstantsDoc instances. |

<a id="get\-enums"></a>

#### getEnums

Gets an array of PhpEnumDoc instances of all classes in this file.

```php
public function getEnums(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpEnumDoc\> | An array of PhpEnumDoc instances. |

<a id="get\-functions"></a>

#### getFunctions

Gets an array of PhpFunctionsDoc instances of all classes in this file.

```php
public function getFunctions(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpFunctionsDoc\> | An array of PhpFunctionsDoc instances. |

<a id="get\-interfaces"></a>

#### getInterfaces

Gets an array of PhpInterfaceDoc instances of all classes in this file.

```php
public function getInterfaces(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpInterfaceDoc\> | An array of PhpInterfaceDoc instances. |

<a id="get\-traits"></a>

#### getTraits

Gets an array of PhpTraitDoc instances of all classes in this file.

```php
public function getTraits(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<PhpTraitDoc\> | An array of PhpTraitDoc instances. |

<a id="parse"></a>

#### parse

Parses the PHP file into individual documentation classes.

```php
public function parse(): void
```

##### Returns

| Type | Description |
| :--- | :--- |
| void |  |

### Private

<a id="get\-php\-constants\-doc"></a>

#### getPhpConstantsDoc

Gets a PhpConstantsDoc for the specified namespace.

This acts as a collection of defines/constants to output to a single documentation file.

```php
private function getPhpConstantsDoc(
    string $namespace,
): \Xlient\Doc\Php\PhpConstantsDoc
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $namespace | string | The namespace of this PhpConstantsDoc. |

##### Returns

| Type | Description |
| :--- | :--- |
| PhpConstantsDoc | A class representing defines/constants contained in this namespace. |

<a id="get\-php\-functions\-doc"></a>

#### getPhpFunctionsDoc

Gets a PhpFunctionsDoc for the specified namespace.

This acts as a collection of functions to output to a single documentation file.

```php
private function getPhpFunctionsDoc(
    string $namespace,
): \Xlient\Doc\Php\PhpFunctionsDoc
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $namespace | string | The namespace of this PhpFunctionsDoc. |

##### Returns

| Type | Description |
| :--- | :--- |
| PhpFunctionsDoc | A class representing functions contained in this namespace. |

<a id="parse\-class"></a>

#### parseClass

Parses out tokens relating to the current class, interface, trait, or enum.

```php
private function parseClass(array $tokens, int $type): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |
| $type | int |  |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |

<a id="parse\-constant"></a>

#### parseConstant

Parses out tokens relating to constants.

This doesn't apply to constants in classes.

```php
private function parseConstant(array $tokens): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |

<a id="parse\-define"></a>

#### parseDefine

Parses out tokens relating to defined constants.

This doesn't apply to defines defined in functions or methods.

```php
private function parseDefine(array $tokens): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |

<a id="parse\-function"></a>

#### parseFunction

Parses out tokens relating to the current function.

```php
private function parseFunction(array $tokens): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |

<a id="parse\-namespace"></a>

#### parseNamespace

Parses out tokens relating to the current namespace.

```php
private function parseNamespace(array $tokens): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |

<a id="parse\-use"></a>

#### parseUse

Parses out tokens relating to class, function, and constant use statements.

These use statements are added to the meta class to reconstitute fully qualified names.

```php
private function parseUse(array $tokens): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $tokens | array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | An array of tokens. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<int, \(string \| array\{0: int, 1: string, 2: int\}\)\> | The remaining tokens. |