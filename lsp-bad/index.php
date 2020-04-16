<?php
spl_autoload_register();

$birds = [];
$birds[] = new Bird();
$birds[] = new Sparrow();
$birds[] = new Kiwi();

foreach ($birds as $bird) {
    $bird->fly();
    print(PHP_EOL);
}