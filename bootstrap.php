<?php
use TrueMe\Foundation\PackageManifest;
use TrueMe\Foundation\AliasLoader;

$baseDir = dirname(dirname(dirname(dirname(__FILE__))));

$packageManifest = new PackageManifest($baseDir);

$alias = new AliasLoader;
$alias->setAliases($packageManifest->aliases())->prependToLoaderStack();