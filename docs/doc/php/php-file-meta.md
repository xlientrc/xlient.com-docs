# Class \Xlient\Doc\Php\PhpFileMeta

Stores meta information about a PHP file.

## Constructor

```php
public function __construct(\Xlient\Doc\Php\Configuration $config)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $config | Configuration | The configuration to use to generate the documentation. |

## Class Synopsis
```php
class PhpFileMeta
{
    /* Properties */
    protected array $classUses = [];
    protected \Xlient\Doc\Php\Configuration $config
    protected array $constantUses = [];
    protected array $functionUses = [];
    protected array $names = [];

    /* Methods */
    public function addClassUse(string $name, ?string $as = null): static
    public function addConstantUse(string $name, ?string $as = null): static
    public function addFunctionUse(string $name, ?string $as = null): static
    public function addName(string $name): string
    public function replaceNames(string $value): string
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$classUses](#class\-uses) | array<string, string> | An array of class use statements. |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$constantUses](#constant\-uses) | array<string, string> | An array of constant use statements. |
| [$functionUses](#function\-uses) | array<string, string> | An array of function use statements. |
| [$names](#names) | array<string, string> | A key value pair of hashes and names. |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [addClassUse()](/docs/doc/php/php\-file\-meta/add\-class\-use.md) | Adds a class use statement. |
| [addConstantUse()](/docs/doc/php/php\-file\-meta/add\-constant\-use.md) | Adds a constant use statement. |
| [addFunctionUse()](/docs/doc/php/php\-file\-meta/add\-function\-use.md) | Adds a function use statement. |
| [addName()](/docs/doc/php/php\-file\-meta/add\-name.md) | Adds a name used int he PHP file. |
| [replaceNames()](/docs/doc/php/php\-file\-meta/replace\-names.md) | Replaces hashed names with their corresponding fully qualified name or it's original value if not found found. |

## Property Details

### Protected

<a id="class-uses"></a>

#### $classUses

```php
protected array $classUses = [];
```

<a id="config"></a>

#### $config

```php
protected \Xlient\Doc\Php\Configuration $config
```

<a id="constant-uses"></a>

#### $constantUses

```php
protected array $constantUses = [];
```

<a id="function-uses"></a>

#### $functionUses

```php
protected array $functionUses = [];
```

<a id="names"></a>

#### $names

```php
protected array $names = [];
```

## Method Details

### Public

<a id="add-class-use"></a>

#### addClassUse

Adds a class use statement.

```php
public function addClassUse(string $name, ?string $as = null): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A name. |
| $as | \(string \| null\) | An alias for the name. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

<a id="add-constant-use"></a>

#### addConstantUse

Adds a constant use statement.

```php
public function addConstantUse(string $name, ?string $as = null): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A name. |
| $as | \(string \| null\) | An alias for the name. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

<a id="add-function-use"></a>

#### addFunctionUse

Adds a function use statement.

```php
public function addFunctionUse(string $name, ?string $as = null): static
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A name. |
| $as | \(string \| null\) | An alias for the name. |

##### Returns

| Type | Description |
| :--- | :--- |
| static |  |

<a id="add-name"></a>

#### addName

Adds a name used int he PHP file.

```php
public function addName(string $name): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $name | string | A name. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | A hash of the name. |

<a id="replace-names"></a>

#### replaceNames

Replaces hashed names with their corresponding fully qualified name or it's original value if not found found.

```php
public function replaceNames(string $value): string
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | string | The value to replace. |

##### Returns

| Type | Description |
| :--- | :--- |
| string | The value with all hashed names replaced. |