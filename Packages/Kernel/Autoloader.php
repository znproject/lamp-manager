<?php

namespace Packages\Kernel;

use ZnCore\Base\Helpers\ComposerHelper;

class Autoloader
{

    private $rootDir;
    private $vendorDir;
    private $autoloadFromPhar = false;

    public function __construct(string $rootDir)
    {
        $this->rootDir = realpath($rootDir);
        $this->vendorDir = $this->rootDir . '/vendor';
    }

    public function autoloadFromPhar(bool $enable = true)
    {
        $this->autoloadFromPhar = $enable;
    }

    public function bootstrapApplication()
    {
        $pharFileName = 'phar://' . $this->rootDir . '/src/app.phar';
        if (file_exists($pharFileName)) {
            ComposerHelper::register('App', $pharFileName);
        } else {
            ComposerHelper::register('App', $this->rootDir . '/src');
        }
    }

    public function bootstrapVendor()
    {
        $isIncluded = $this->includeVendorAutoload();
        /*if ( ! $isIncluded) {
            $isDownloaded = $this->downloadVendor($this->vendorDir);
            if ($isDownloaded) {
                $this->includeVendorAutoload($this->vendorDir);
            } else {
                exit('Vendor not loaded!');
            }
        }*/
    }

    /*private static function downloadVendor(string $this->vendorDir): bool
    {
        require_once __DIR__ . '/../Bootstrap/VendorDownloader.php';
        $isDownloaded = VendorDownloader::downloadPhar($this->vendorDir);
        return $isDownloaded;
    }*/

    private function includeVendorAutoload(): bool
    {
        if ($this->autoloadFromPhar) {
            return $this->loadFromPhar();
        }
        if ($this->loadFromPhp()) {
            return true;
        }
        return $this->loadFromPhar();
    }

    private function loadFromPhp(): bool
    {
        return $this->load($this->vendorDir . '/autoload.php');
    }

    private function loadFromPhar(): bool
    {
        $pharPath = 'phar://' . $this->vendorDir;
        if ($this->load($pharPath . '/vendor.phar/autoload.php')) {
            return true;
        }
        if ($this->load($pharPath . '/vendor.phar.gz/autoload.php')) {
            return true;
        }
        return false;
    }

    private function load($fileName): bool
    {
        if (file_exists($fileName)) {
            include_once($fileName);
            return true;
        }
        return class_exists('Composer\Autoload\ClassLoader');
    }
}
