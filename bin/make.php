#!/usr/bin/env php
<?php
use Xlient\Doc\Php\Configuration;
use Xlient\Doc\Php\PhpDocumentor;

use const DIRECTORY_SEPARATOR as DS;

chdir(dirname(__DIR__));

date_default_timezone_set('UTC');

$composerAutoloader = getcwd() . DS . 'vendor' . DS . 'autoload.php';
if (file_exists($composerAutoloader)) {
    require_once $composerAutoloader;
}
$composerAutoloader = null;

$config = new Configuration(
    baseNamespaces: ['\\Xlient'],
    baseUrls: ['\\Xlient' => '/docs'],
    override: true,
);

$documentor = new PhpDocumentor(
    srcDirs: [
        getcwd() . '/vendor/xlient/doc-php/src',
        getcwd() . '/vendor/xlient/xml-sitemap/src',
    ],
    destDir: getcwd() . DS . 'docs',
    config: $config,
);

$documentor->make();
