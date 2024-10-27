<?php

require __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__ . DIRECTORY_SEPARATOR . 'app',
    __DIR__ . DIRECTORY_SEPARATOR . 'database',
    __DIR__ . DIRECTORY_SEPARATOR . 'routes',
    __DIR__ . DIRECTORY_SEPARATOR . 'tests',
]);

return PHLAK\CodingStandards\ConfigFactory::make($finder);
