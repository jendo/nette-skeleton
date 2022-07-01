#!/usr/bin/env php
<?php declare(strict_types = 1);

use Contributte\Console\Application;

$container = require __DIR__ . '/../app/bootstrap.php';

/** @var Application $consoleApplication */
$consoleApplication = $container->getByType(Contributte\Console\Application::class);

exit($consoleApplication->run());
