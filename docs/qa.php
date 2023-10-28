<?php

use PhacMan\Dotenv\Dotenv;
require dirname(__DIR__, 1).'/vendor/autoload.php';
$start = $_ENV;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env', __DIR__.'/.env.test');

print_r([
    '$start' => $start,
    '$_ENV' => $_ENV,
]);

/*
Array
(
    [$start] => Array
        (
        )

    [$_ENV] => Array
        (
            [PHACMAN] => Compact Version
            [APP_ENV] => dev
            [APP_SECRET] => $ecretf0rt3st
            [DATABASE_URL] => sqlite:///%kernel.project_dir%/sym.db
            [MESSENGER_TRANSPORT_DSN] => doctrine://default?auto_setup=0
            [ALL_DOTENV_VARS] => PHACMAN,APP_ENV,APP_SECRET,DATABASE_URL,MESSENGER_TRANSPORT_DSN,KERNEL_CLASS,SYMFONY_DEPRECATIONS_HELPER,PANTHER_APP_ENV,PANTHER_ERROR_SCREENSHOT_DIR
            [KERNEL_CLASS] => App\Kernel
            [SYMFONY_DEPRECATIONS_HELPER] => 999999
            [PANTHER_APP_ENV] => panther
            [PANTHER_ERROR_SCREENSHOT_DIR] => ./var/error-screenshots
        )

)
*/
