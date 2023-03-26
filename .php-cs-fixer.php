<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('bootstrap')
    ->exclude('storage');

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'declare_strict_types' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
