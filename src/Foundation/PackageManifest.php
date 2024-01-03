<?php namespace TrueMe\Foundation;

class PackageManifest
{
    public $basePath;
    public $vendorPath;
    public $manifest;
    public $packageName = 'trueme/composer-alias';

    public function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->vendorPath = $basePath.'/vendor';
    }

    public function aliases()
    {
        return $this->manifest[$this->foundKey()]['extra']['trueme']['aliases'];
    }

    protected function foundKey()
    {
        return array_search($this->packageName, array_column($this->getManifest(), 'name'));
    }

    protected function getManifest()
    {
        if (! is_null($this->manifest)) return $this->manifest;

        $this->build();

        return $this->manifest;
    }

    public function build()
    {
        $path = $this->vendorPath.'/composer/installed.json';

        return $this->manifest = json_decode(file_get_contents($path), true);
    }
}