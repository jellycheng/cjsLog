<?php

$vendorFile = dirname(__DIR__)  .  '/vendor/autoload.php';
if(file_exists($vendorFile)) {
    require $vendorFile;
} else {
    spl_autoload_register(function ($class) {
        $ns = 'CjsLog';
        $base_dir = dirname(__DIR__) . '/src';
        $prefix_len = strlen($ns);
        if (substr($class, 0, $prefix_len) !== $ns) {
            return;
        }
        $class = substr($class, $prefix_len);
        $file = $base_dir .str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if (is_readable($file)) {
            require $file;
        }

    });
}

if(!function_exists('isWin')) {
    function isWin() {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return true;
        } else {
            return false;
        }
    }
}



