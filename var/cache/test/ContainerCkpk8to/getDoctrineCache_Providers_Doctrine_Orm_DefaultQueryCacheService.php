<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php';

$this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_c1af63766eb8f278cd4dcd26405cf95464814a6cbc0da5076dfa8ae1ef40c45c');

return $instance;
