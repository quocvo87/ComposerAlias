| 1. Introduction
----------------
When you write a package and you want to use it by composer in another project.
Usually, you need to use TrueMe\Hello\Word; class to use it, therefore you can 
use it directly via alias Word;


| 2. Directory Struct
-----------------------

    ComposerAlias
    |
    |__Foundation
    |       |__AliasLoader.php
    |       |__PackageManifest.php
    |
    |__Hello
    |       |__Word.php
    |
    |__bootstrap.php
    |
    |__composer.json
-----------------------


| 3. Step by step do it
-----------------------
    https://github.com/quocvo87/test-composer-alias
-----------------------


