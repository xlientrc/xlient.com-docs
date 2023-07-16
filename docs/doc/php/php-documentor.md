# Class \Xlient\Doc\Php\PhpDocumentor

Generates markdown documentation files for PHP files.

## Constructor

```php
public function __construct(
    string|array $srcDirs,
    string $destDir,
    \Xlient\Doc\Php\Configuration $config,
)
```

### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $srcDirs | \(string \| array\<string\>\) | One or more source directories to scan. |
| $destDir | string | A destination directory. |
| $config | Configuration | The configuration to use to generate the documentation. |

## Class Synopsis
```php
class PhpDocumentor
{
    /* Properties */
    protected \Xlient\Doc\Php\Configuration $config
    protected string $destDir
    protected array $srcDirs

    /* Methods */
    public function make(): array
    protected function makeDir(string $srcDir, string $destDir): array
    protected function makeFile(string $srcFile, string $destDir): array
}
```

## Properties

### Protected

| Name | Type |Description |
| :--- | :--- | :--- |
| [$config](#config) | \\Xlient\\Doc\\Php\\Configuration |  |
| [$destDir](#dest\-dir) | string |  |
| [$srcDirs](#src\-dirs) | array<string> | An array of source directories. |

## Methods

### Public

| Name | Description |
| :--- | :--- |
| [make()](/docs/doc/php/php\-documentor/make.md) | Generates the documentation files. |

### Protected

| Name | Description |
| :--- | :--- |
| [makeDir()](/docs/doc/php/php\-documentor/make\-dir.md) | Generates documentaton files for a specific source directory. |
| [makeFile()](/docs/doc/php/php\-documentor/make\-file.md) | Generates documentation for a specific PHP file. |

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

<a id="src-dirs"></a>

#### $srcDirs

```php
protected array $srcDirs
```

## Method Details

### Public

<a id="make"></a>

#### make

Generates the documentation files.

```php
public function make(): array
```

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |

### Protected

<a id="make-dir"></a>

#### makeDir

Generates documentaton files for a specific source directory.

```php
protected function makeDir(string $srcDir, string $destDir): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $srcDir | string | A source directory. |
| $destDir | string | A destination directory. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |

<a id="make-file"></a>

#### makeFile

Generates documentation for a specific PHP file.

```php
protected function makeFile(string $srcFile, string $destDir): array
```

##### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $srcFile | string | A source file. |
| $destDir | string | A destination directory. |

##### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of files. |