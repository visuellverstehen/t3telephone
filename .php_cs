<?php
declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in('.')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'concat_space' => [
            'spacing' => 'one'
        ],
        'blank_line_after_namespace' => true,
        'ordered_imports' => true,
    ])
    ->setFinder($finder);
