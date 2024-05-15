<?php
$header = <<<EOF
@author Mygento Team
@copyright 2017-2024 Mygento (https://www.mygento.com)
@package Mygento_Configsync
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in('.')
    ->exclude('Test/tmp')
    ->name('*.phtml')
    ->ignoreVCSIgnored(true);
$config = new \Mygento\CS\Config\Module($header);
$config->setFinder($finder);
return $config;
