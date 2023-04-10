<?php

namespace {
    define('PSM_INSTALL', true);

    require __DIR__ . '/src/bootstrap.php';

    $router->run('install');
}
