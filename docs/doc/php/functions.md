# Functions \\Xlient\\Doc\\Php\\

## Function Synopsis
```php
function clean_dir(string $dir): string
function clean_path(string $path): string
function clean_var_export(string $value): string
function delete(string $file): void
function delete_contents(string $dir): void
function dirnames(string $dir): array
function filename(string $file): ?string
function indent(string $string, int $indentCount, int $indentLength): string
function is_dir_empty(string $dir): bool
function make_dir(string $dir, int $mode = 0755): void
function markdown_escape(string $string): string
function php_filenames(string $dir): array
function replace_extension(string $file, ?string $extension = null): string
function split_case(string $string): array
function to_kebab_case(string $string): string
```

## Functions

| Name | Description |
| :--- | :--- |
| [clean\_dir()](/docs/doc/php//clean\-dir.md) | Cleans and normalizes a directory string. |
| [clean\_path()](/docs/doc/php//clean\-path.md) | Cleans and normalizes a directory path string. |
| [clean\_var\_export()](/docs/doc/php//clean\-var\-export.md)<br>_Internal_ | Cleans and normalizes a value returned from var_export. |
| [delete()](/docs/doc/php//delete.md) | Deletes the specified file or directory. |
| [delete\_contents()](/docs/doc/php//delete\-contents.md) | Deletes the contents of the specified directory. |
| [dirnames()](/docs/doc/php//dirnames.md) | Gets an array of directory names contained within the specified directory. |
| [filename()](/docs/doc/php//filename.md) | Gets a filename from the specified file. |
| [indent()](/docs/doc/php//indent.md) | Indents the specified value the specified number of times at the specified length. |
| [is\_dir\_empty()](/docs/doc/php//is\-dir\-empty.md) | Gets whether or not the specified directory is empty. |
| [make\_dir()](/docs/doc/php//make\-dir.md) | Creates a new directory in the specified directory. |
| [markdown\_escape()](/docs/doc/php//markdown\-escape.md) | Esacpes the specified string so that it won't interfere with markdown syntax. |
| [php\_filenames()](/docs/doc/php//php\-filenames.md) | Gets an array of PHP files in the specified directory. |
| [replace\_extension()](/docs/doc/php//replace\-extension.md) | Replaces the specified files extension with another one. |
| [split\_case()](/docs/doc/php//split\-case.md) | Splits a string a camel, pascal, snake, or kebab case string into separate values. |
| [to\_kebab\_case()](/docs/doc/php//to\-kebab\-case.md) | Converts the specifed string to kebab case. |

## Function Details

<a id="clean-dir"></a>

### clean\_dir

Cleans and normalizes a directory string.

```php
function clean_dir(string $dir): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | A cleaned directory. |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |

<a id="clean-path"></a>

### clean\_path

Cleans and normalizes a directory path string.

```php
function clean_path(string $path): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $path | string | A directory path. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | A cleaned directory path. |

<a id="clean-var-export"></a>

### clean\_var\_export

_Internal_

Cleans and normalizes a value returned from var_export.

```php
function clean_var_export(string $value): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $value | string | A var_export value. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | A cleaned var_export value. |

<a id="delete"></a>

### delete

Deletes the specified file or directory.

```php
function delete(string $file): void
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | A file or directory to delete. |

#### Returns

| Type | Description |
| :--- | :--- |
| void |  |

#### Throws

| Type | Description |
| :--- | :--- |
| RuntimeException | When the file or directory can't be deleted. |

<a id="delete-contents"></a>

### delete\_contents

Deletes the contents of the specified directory.

```php
function delete_contents(string $dir): void
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

#### Returns

| Type | Description |
| :--- | :--- |
| void |  |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |

<a id="dirnames"></a>

### dirnames

Gets an array of directory names contained within the specified directory.

```php
function dirnames(string $dir): array
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

#### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of directories. |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |

<a id="filename"></a>

### filename

Gets a filename from the specified file.

Both the directory and extension will be removed.

```php
function filename(string $file): ?string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | A file. |

#### Returns

| Type | Description |
| :--- | :--- |
| \(string \| null\) | A filename or null if none present. |

<a id="indent"></a>

### indent

Indents the specified value the specified number of times at the specified length.

```php
function indent(string $string, int $indentCount, int $indentLength): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $string | string | A string to be indented. |
| $indentCount | int | The number of times the string should be indented. |
| $indentLength | int | The length in spaces of each indent. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | An indented string. |

<a id="is-dir-empty"></a>

### is\_dir\_empty

Gets whether or not the specified directory is empty.

```php
function is_dir_empty(string $dir): bool
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

#### Returns

| Type | Description |
| :--- | :--- |
| bool | True if the specified directory is empther, false otherwise. |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |

<a id="make-dir"></a>

### make\_dir

Creates a new directory in the specified directory.

```php
function make_dir(string $dir, int $mode = 0755): void
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |
| $mode | int | The directories permissions. |

#### Returns

| Type | Description |
| :--- | :--- |
| void |  |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the specified directory is invalid. |
| RuntimeException | When the directory could not be made. |

<a id="markdown-escape"></a>

### markdown\_escape

Esacpes the specified string so that it won't interfere with markdown syntax.

```php
function markdown_escape(string $string): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $string | string | A string to escape. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | An escaped string. |

<a id="php-filenames"></a>

### php\_filenames

Gets an array of PHP files in the specified directory.

```php
function php_filenames(string $dir): array
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $dir | string | A directory. |

#### Returns

| Type | Description |
| :--- | :--- |
| array\<string\> | An array of PHP files. |

#### Throws

| Type | Description |
| :--- | :--- |
| InvalidArgumentException | When the directory is invalid. |
| RuntimeException | When the directory could not be read. |

<a id="replace-extension"></a>

### replace\_extension

Replaces the specified files extension with another one.

If no extension is provided, the extension will be removed.

```php
function replace_extension(string $file, ?string $extension = null): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $file | string | A file. |
| $extension | \(string \| null\) | A file extension. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | A file with the specified new extension. |

<a id="split-case"></a>

### split\_case

Splits a string a camel, pascal, snake, or kebab case string into separate values.

```php
function split_case(string $string): array
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $string | string | A string to split. |

#### Returns

| Type | Description |
| :--- | :--- |
| array\<int, string\> | An array of split values. |

<a id="to-kebab-case"></a>

### to\_kebab\_case

Converts the specifed string to kebab case.

```php
function to_kebab_case(string $string): string
```

#### Parameters

| Name | Type | Description |
| :--- | :--- | :--- |
| $string | string | A string. |

#### Returns

| Type | Description |
| :--- | :--- |
| string | A string in kebab case. |