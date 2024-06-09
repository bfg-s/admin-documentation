<?php

$autoloadFile = __DIR__ . '/vendor/composer/autoload_psr4.php';

if (file_exists($autoloadFile)) {
    $autoload = include $autoloadFile;
    $autoload['Admin\\Tests\\'] = [__DIR__ . '/vendor/bfg/admin/tests'];

    file_put_contents($autoloadFile, '<?php return ' . var_export($autoload, true) . ';');
    echo "Autoload updated successfully.\n";
} else {
    echo "Autoload file not found.\n";
}
