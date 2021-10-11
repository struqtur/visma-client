<?php

include_once __DIR__.'/../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Struqtur\\VismaEAccounting\\Api\\", __DIR__, true);
$classLoader->addPsr4("Struqtur\\VismaEAccounting\\Model\\", __DIR__, true);
$classLoader->register();
